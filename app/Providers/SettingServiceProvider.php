<?php

namespace App\Providers;

use App\Models\setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $settings = setting::findOrFail(1);
        view::share('settings', $settings);
    }
}
