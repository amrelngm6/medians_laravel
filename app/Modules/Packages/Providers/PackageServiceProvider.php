<?php

namespace App\Modules\Packages\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Auth;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        // Load migrations
        $this->loadViewsFrom(__DIR__ . '/../views', 'packages');
    }

    public function register()
    {
        // Register services here
    }
}
