<?php

use Illuminate\Support\Facades\Route;
use Modules\Messaging\Http\Controllers\MessagingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User route
Route::middleware('auth')->group(function () {
    Route::get('/inbox', [MessagingController::class, 'userView'])->name('messenger.user.index');
    Route::get('/outbox', [MessagingController::class, 'userOutbox'])->name('messenger.user.outbox');
    Route::get('/saved', [MessagingController::class, 'userSaved'])->name('messenger.user.saved');
    Route::get('/create', [MessagingController::class, 'create'])->name('messenger.user.create');
    Route::get('/message/{id}', [MessagingController::class, 'viewMessage'])->name('messenger.user.message');
    Route::post('/message/{id}/reply', [MessagingController::class, 'replyMessage'])->name('messenger.user.reply');
    Route::delete('/message/{id}', [MessagingController::class, 'deleteMessage'])->name('messenger.user.delete');
    Route::post('/message/{id}/save', [MessagingController::class, 'saveMessage'])->name('messenger.user.save');
    Route::post('/message/{id}/unsave', [MessagingController::class, 'unsaveMessage'])->name('messenger.user.unsave');
    Route::post('/message/{id}/mark-as-read', [MessagingController::class, 'markAsRead'])->name('messenger.user.markAsRead');
    Route::post('/message/store', [MessagingController::class, 'store'])->name('messenger.user.store');
    Route::post('/messenger/user/bulk-action', [MessagingController::class, 'bulkAction'])->name('messenger.user.bulkAction');
});

// Admin route
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/messenger', [MessagingController::class, 'adminView'])->name('messenger.admin.index');

});
