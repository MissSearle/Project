<?php

use Illuminate\Support\Facades\Route;

if (! function_exists('theme_asset')) {
    /**
     * Generate a URL for a theme asset file.
     *
     * @param  string  $path
     * @param  string  $theme
     * @return string
     */
    function theme_asset($path)
    {
        $theme = global_setting('active_theme', 'default');
        return route('theme.assets', compact('theme', 'path'));
    }

}
