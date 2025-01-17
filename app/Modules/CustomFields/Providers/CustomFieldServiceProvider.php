<?php

namespace App\Modules\CustomFields\Providers;

use Illuminate\Support\ServiceProvider;

class CustomFieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views    
        $this->loadViewsFrom(__DIR__ . '/../views', 'custom_field');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
    }
}
