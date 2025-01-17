<?php

namespace App\Modules\Items\Providers;

use Illuminate\Support\ServiceProvider;

class ItemServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadViewsFrom(__DIR__ . '/../views', 'items');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
    }
}
