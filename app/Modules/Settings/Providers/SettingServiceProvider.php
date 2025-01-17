<?php

namespace App\Modules\Settings\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Modules\Settings\Models\SystemSetting;

class SettingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load Views
        $this->loadViewsFrom(__DIR__ . '/../views', 'settings');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        // Fetch all settings
        $settings = SystemSetting::pluck('value', 'code')->toArray();

        // Share settings with all views
        View::share('settings', $settings);

        // Store settings in the config
        config(['app.settings' => $settings]);
    }

    public function register()
    {
        // Register services here
    }
}
