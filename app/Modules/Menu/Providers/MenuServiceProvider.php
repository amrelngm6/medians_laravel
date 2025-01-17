<?php

namespace App\Modules\Menu\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class MenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadViewsFrom(__DIR__ . '/../views', 'menu');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
    }
}
