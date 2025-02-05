<?php

namespace App\Modules\Priorities\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;
use App\Modules\Priorities\Providers\EventServiceProvider;

class PriorityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'priority');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
        $this->app->register(EventServiceProvider::class);
    }
}
