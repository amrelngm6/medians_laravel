<?php

namespace App\Modules\Deals\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;
use App\Observers\ActivityObserver;
use App\Modules\Deals\Models\Deal;

class DealServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'deal');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        Deal::observe(ActivityObserver::class);

    }

    public function register()
    {
        // Register services here
        $this->app->register(EventServiceProvider::class);

    }
}
