<?php

use Illuminate\Support\Facades\Route;
use Modules\Notifications\Http\Controllers\NotificationsController;
use App\Models\User;
use Illuminate\Http\Request;

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

// User Notifications
Route::middleware('auth')->group(function () {
    Route::get('/notifications', [NotificationsController::class, 'userNotifications'])->name('notifications.user');
    Route::delete('/notifications/{id}', [NotificationsController::class, 'deleteNotification'])->name('notifications.delete');
    Route::patch('/notifications/{id}/read', [NotificationsController::class, 'markAsRead'])->name('notifications.markAsRead');
    Route::post('/notifications/read-all', [NotificationsController::class, 'markAllAsRead'])->name('notifications.markAllAsRead');
});

// Admin route
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/notifications', [NotificationsController::class, 'adminNotifications'])->name('notifications.admin');
    Route::post('/notifications', [NotificationsController::class, 'store'])->name('notifications.store');
});

Route::get('/api/users', function (Request $request) {
    $query = $request->query('q');

    $users = User::where('name', 'LIKE', "%{$query}%")
        ->select('id', 'name')
        ->orderBy('name')
        ->limit(10)
        ->get();

    return response()->json($users);
})->name('users.search');