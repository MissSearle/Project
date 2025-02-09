<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// // Guest
// Route::middleware('guest')->group(function () {
//     Route::get('/', function () {
//         return view('auth.login');
//     })->name('auth.login');
// });

Route::get(
    'theme-assets/{theme}/{path}',
    [\App\Http\Controllers\ThemeAssetController::class, 'serve']
)
->where('path', '.*')
->name('theme.assets');

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('access::login');
    });
});


Route::middleware('auth')->prefix('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard::user');
    });
});

Route::get('/ajax-user-search', [UserController::class, 'ajaxSearch'])->name('user.search.ajax');

Route::post('/messenger/user/bulk-action', [MessagingController::class, 'bulkAction'])->name('messenger.user.bulkAction');

Route::delete('/messenger/user/delete/{id}', [MessagingController::class, 'deleteMessage'])->name('messenger.user.delete');

require __DIR__.'/auth.php';
