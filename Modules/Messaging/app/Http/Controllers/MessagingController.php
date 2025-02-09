<?php

namespace Modules\Messaging\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Messaging\Models\Message;

class MessagingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function userView()
    {
        $messages = Message::where('receiver_id', Auth::id())
            ->where('is_saved', false)
            ->where('deleted_by_receiver', false)
            ->orderBy('created_at', 'desc')
            ->get();

        $inboxCount = Message::where('receiver_id', Auth::id())->where('is_saved', false)->where('deleted_by_receiver', false)->count();
        $outboxCount = Message::where('sender_id', Auth::id())->where('deleted_by_sender', false)->count();
        $savedCount = Message::where('receiver_id', Auth::id())->where('is_saved', true)->where('deleted_by_receiver', false)->count();

        return view('messaging::user.index', compact('messages', 'inboxCount', 'outboxCount', 'savedCount'));
    }

    public function userOutbox()
    {
        $messages = Message::where('sender_id', Auth::id())
            ->where('deleted_by_sender', false)
            ->orderBy('created_at', 'desc')
            ->get();

        $inboxCount = Message::where('receiver_id', Auth::id())->where('is_saved', false)->where('deleted_by_receiver', false)->count();
        $outboxCount = Message::where('sender_id', Auth::id())->where('deleted_by_sender', false)->count();
        $savedCount = Message::where('receiver_id', Auth::id())->where('is_saved', true)->where('deleted_by_receiver', false)->count();

        return view('messaging::user.outbox', compact('messages', 'inboxCount', 'outboxCount', 'savedCount'));
    }

    public function userSaved()
    {
        $messages = Message::where('receiver_id', Auth::id())
            ->where('is_saved', true)
            ->where('deleted_by_receiver', false)
            ->orderBy('created_at', 'desc')
            ->get();

        $inboxCount = Message::where('receiver_id', Auth::id())->where('is_saved', false)->where('deleted_by_receiver', false)->count();
        $outboxCount = Message::where('sender_id', Auth::id())->where('deleted_by_sender', false)->count();
        $savedCount = Message::where('receiver_id', Auth::id())->where('is_saved', true)->where('deleted_by_receiver', false)->count();

        return view('messaging::user.saved', compact('messages', 'inboxCount', 'outboxCount', 'savedCount'));
    }

    public function adminView()
    {
        return view('messaging::admin.index');
    }

    public function getConversations()
    {
        $conversations = Message::where(function ($query) {
                $query->where('sender_id', Auth::id())->where('deleted_by_sender', false)
                      ->orWhere('receiver_id', Auth::id())->where('deleted_by_receiver', false);
            })
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy(function ($message) {
                return $message->sender_id === Auth::id() ? $message->receiver_id : $message->sender_id;
            });

        return response()->json($conversations);
    }

    public function getMessages($id)
    {
        $messages = Message::where(function ($query) use ($id) {
            $query->where('sender_id', Auth::id())->where('receiver_id', $id)->where('deleted_by_sender', false);
        })
        ->orWhere(function ($query) use ($id) {
            $query->where('sender_id', $id)->where('receiver_id', Auth::id())->where('deleted_by_receiver', false);
        })
        ->orderBy('created_at', 'asc')
        ->get();

        return response()->json($messages);
    }

    public function createConversation(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
        ]);

        return response()->json($message);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $inboxCount = Message::where('receiver_id', Auth::id())->where('is_saved', false)->where('deleted_by_receiver', false)->count();
        $outboxCount = Message::where('sender_id', Auth::id())->where('deleted_by_sender', false)->count();
        $savedCount = Message::where('receiver_id', Auth::id())->where('is_saved', true)->where('deleted_by_receiver', false)->count();

        return view('messaging::user.send-message', compact('inboxCount', 'outboxCount', 'savedCount'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function show($userId)
    {
        $messages = Message::where(function ($query) use ($userId) {
            $query->where('sender_id', Auth::id())->where('receiver_id', $userId)->where('deleted_by_sender', false);
        })
            ->orWhere(function ($query) use ($userId) {
                $query->where('sender_id', $userId)->where('receiver_id', Auth::id())->where('deleted_by_receiver', false);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }

    // Send a new message
    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'subject' => 'required|string',
            'content' => 'required|string',
        ]);

        try {
            $message = Message::create([
                'sender_id' => Auth::id(),
                'receiver_id' => $request->receiver_id,
                'subject' => $request->subject,
                'content' => $request->content,
            ]);

            return redirect()->route('messenger.user.index')->with('success', 'Message sent successfully.');
        } catch (\Exception $e) {
            return redirect()->route('messenger.user.index')->with('error', 'Failed to send message: ' . $e->getMessage());
        }
    }

    public function replyMessage(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $originalMessage = Message::findOrFail($id);

        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $originalMessage->sender_id,
            'subject' => 'Re: ' . $originalMessage->subject,
            'content' => $request->content,
        ]);

        return redirect()->route('messenger.user.message', $id)->with('success', 'Reply sent successfully.');
    }

    public function viewMessage($id)
    {
        $message = Message::where(function ($query) use ($id) {
            $query->where('id', $id)
                  ->where(function ($query) {
                      $query->where('sender_id', Auth::id())->where('deleted_by_sender', false)
                            ->orWhere('receiver_id', Auth::id())->where('deleted_by_receiver', false);
                  });
        })->firstOrFail();

        if ($message->receiver_id == Auth::id() && !$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('messaging::user.message', compact('message'));
    }

    public function deleteMessage($id)
    {
        $message = Message::where('id', $id)
            ->where(function ($query) {
                $query->where('sender_id', Auth::id())
                      ->orWhere('receiver_id', Auth::id());
            })
            ->firstOrFail();

        if ($message->sender_id == Auth::id()) {
            $message->update(['deleted_by_sender' => true]);
        } elseif ($message->receiver_id == Auth::id()) {
            $message->update(['deleted_by_receiver' => true]);
        }

        return redirect()->route('messenger.user.index')->with('success', 'Message deleted successfully.');
    }

    public function saveMessage($id)
    {
        $message = Message::where('id', $id)
            ->where(function ($query) {
                $query->where('sender_id', Auth::id())
                      ->orWhere('receiver_id', Auth::id());
            })
            ->firstOrFail();

        $message->update(['is_saved' => true]);

        return redirect()->route('messenger.user.message', $id)->with('success', 'Message saved successfully.');
    }

    public function unsaveMessage($id)
    {
        $message = Message::where('id', $id)
            ->where(function ($query) {
                $query->where('sender_id', Auth::id())
                      ->orWhere('receiver_id', Auth::id());
            })
            ->firstOrFail();

        $message->update(['is_saved' => false]);

        return redirect()->route('messenger.user.message', $id)->with('success', 'Message unsaved successfully.');
    }

    public function markAsRead($id)
    {
        $message = Message::where('id', $id)
            ->where('receiver_id', Auth::id())
            ->firstOrFail();

        $message->update(['is_read' => true]);

        return redirect()->route('messenger.user.message', $id)->with('success', 'Message marked as read.');
    }

    public function bulkAction(Request $request)
    {
        $request->validate([
            'message_ids' => 'required|array',
            'message_ids.*' => 'exists:messages,id',
            'action' => 'required|string|in:markAsRead,delete,save,unsave',
        ]);

        $messages = Message::whereIn('id', $request->message_ids)
            ->where(function ($query) {
                $query->where('sender_id', Auth::id())
                      ->orWhere('receiver_id', Auth::id());
            })
            ->get();

        if ($request->action === 'markAsRead') {
            foreach ($messages as $message) {
                if ($message->receiver_id == Auth::id() && !$message->is_read) {
                    $message->update(['is_read' => true]);
                }
            }
            return redirect()->back()->with('success', 'Messages marked as read.');
        } elseif ($request->action === 'delete') {
            foreach ($messages as $message) {
                if ($message->sender_id == Auth::id()) {
                    $message->update(['deleted_by_sender' => true]);
                } elseif ($message->receiver_id == Auth::id()) {
                    $message->update(['deleted_by_receiver' => true]);
                }
            }
            return redirect()->back()->with('success', 'Messages deleted successfully.');
        } elseif ($request->action === 'save') {
            foreach ($messages as $message) {
                if ($message->receiver_id == Auth::id() && !$message->is_saved) {
                    $message->update(['is_saved' => true]);
                }
            }
            return redirect()->back()->with('success', 'Messages saved successfully.');
        } elseif ($request->action === 'unsave') {
            foreach ($messages as $message) {
                if ($message->receiver_id == Auth::id() && $message->is_saved) {
                    $message->update(['is_saved' => false]);
                }
            }
            return redirect()->back()->with('success', 'Messages unsaved successfully.');
        }

        return redirect()->back()->with('error', 'Invalid action.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('messaging::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
