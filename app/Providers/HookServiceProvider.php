<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    protected $hooks = [];

    public function register()
    {
        $this->app->singleton('hooks', function () {
            return new class {
                protected $hooks = [];

                public function addHook($hookName, $callback)
                {
                    $this->hooks[$hookName][] = $callback;
                }

                public function runHook($hookName, $params = [])
                {
                    $output = '';

                    if (isset($this->hooks[$hookName])) {
                        foreach ($this->hooks[$hookName] as $callback) {
                            $output .= call_user_func($callback, $params);
                        }
                    }

                    return $output;
                }
            };
        });
    }
}
