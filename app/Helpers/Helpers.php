<?php

use App\Helpers\Settings;

if (! function_exists('global_setting')) {
    /**
     * Get a global setting by key.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function global_setting($key, $default = null)
    {
        // Internally call your existing Settings::get() method
        return Settings::get($key, $default);
    }
}
