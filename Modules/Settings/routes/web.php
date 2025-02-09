<?php

use Illuminate\Support\Facades\Route;
use Modules\Settings\Http\Controllers\SettingsController;

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

// Admin route
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.admin.index');
    Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings.admin.update');
    Route::get('/settings/menu', [SettingsController::class, 'editMenu'])->name('settings.admin.editMenu');

    Route::post('/settings/menu/update', [SettingsController::class, 'updateMenu'])->name('settings.admin.updateMenu');
    Route::post('/settings/menu/create', [SettingsController::class, 'createMenu'])->name('settings.admin.createMenu');
    Route::delete('/settings/menu/delete', [SettingsController::class, 'deleteMenu'])->name('settings.admin.deleteMenu');
    
});