<?php

namespace App\Modules\Projects\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class ProjectServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views    
        $this->loadViewsFrom(__DIR__ . '/../views', 'projects');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

    }

    public function register()
    {
        // Register services here
    }
}
