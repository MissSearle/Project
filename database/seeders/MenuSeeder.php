<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // Admin Menu
        Menu::create(['text' => 'Dashboard', 'url' => '/admin/dashboard', 'icon' => 'settings', 'type' => 'admin', 'order' => 1]);
        Menu::create(['text' => 'Users', 'url' => '/admin/users', 'icon' => 'users', 'type' => 'admin', 'order' => 2]);
        Menu::create(['text' => 'Settings', 'url' => '/admin/settings', 'icon' => 'gear', 'type' => 'admin', 'order' => 3]);

        // User Menu
        Menu::create(['text' => 'Dashboard', 'url' => '/dashboard', 'icon' => 'home', 'type' => 'user', 'order' => 1]);
        Menu::create(['text' => 'Profile', 'url' => '/profile', 'icon' => 'user', 'type' => 'user', 'order' => 2]);
    }
}

