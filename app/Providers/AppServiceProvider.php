<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use App\Services\UserSearchService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(UserSearchService::class, function ($app) {
            return new UserSearchService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $activeTheme = global_setting('active_theme');
        $themePath = base_path("Themes/$activeTheme/views");
        if (is_dir($themePath)) {
            View::addNamespace('theme', $themePath);
        }
    }
}
