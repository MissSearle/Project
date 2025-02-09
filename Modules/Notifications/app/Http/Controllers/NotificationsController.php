<?php

namespace Modules\Notifications\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserNotifications;
use App\Models\User;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function userNotifications()
    {
        $user = auth()->user();

        // Get notifications (ordered by newest first)
        $notifications = $user->notifications()->latest()->paginate(20);

        return view('notifications::user', compact('notifications'));
    }

    public function adminNotifications()
    {
        $users = User::select('id', 'name')->orderBy('name')->get(); // Get users
        $roles = User::select('role')->distinct()->orderBy('role')->get(); // Get distinct roles

        return view('notifications::admin', compact('users', 'roles'));
    }

    /**
     * Store a newly created notification in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'user_ids' => 'nullable|array',
            'user_ids.*' => 'exists:users,id',
            'send_to' => 'nullable|string|in:all',
            'role' => 'nullable|string|exists:users,role',
        ]);

        $message = $request->input('message');
        $successMessage = 'Notification sent successfully.';
        $type = 'success';

        if ($request->has('user_ids')) {
            $users = User::whereIn('id', $request->input('user_ids'))->get();
            Notification::send($users, new UserNotifications($message));
            $successMessage = 'Notification sent to specific users successfully.';
        } elseif ($request->input('send_to') === 'all') {
            $users = User::all();
            Notification::send($users, new UserNotifications($message));
            $successMessage = 'Notification sent to all users successfully.';
        } elseif ($request->has('role')) {
            $users = User::where('role', $request->input('role'))->get();
            Notification::send($users, new UserNotifications($message));
            $successMessage = 'Notification sent to users with the role ' . $request->input('role') . ' successfully.';
        }

        return redirect()->route('notifications.admin')->with(['message' => $successMessage, 'type' => $type]);
    }

    public function deleteNotification($id)
    {
        $notification = auth()->user()->notifications()->where('id', $id)->first();

        if ($notification) {
            $notification->delete();
            return redirect()->back()->with(['message' => 'Notification deleted.', 'type' => 'success']);
        }

        return redirect()->back()->with(['message' => 'Notification not found.', 'type' => 'error']);
    }

    public function markAsRead($id)
    {
        $notification = auth()->user()->notifications()->where('id', $id)->first();

        if ($notification) {
            $notification->markAsRead();
            return redirect()->back()->with(['message' => 'Notification marked as read.', 'type' => 'success']);
        }

        return redirect()->back()->with(['message' => 'Notification not found.', 'type' => 'error']);
    }

    public function markAllAsRead()
    {
        $user = auth()->user();
        $user->unreadNotifications->markAsRead();

        return redirect()->back()->with(['message' => 'All notifications marked as read.', 'type' => 'success']);
    }
}
