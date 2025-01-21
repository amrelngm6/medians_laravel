<?php

namespace App\Modules\Goals\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class GoalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        $this->loadViewsFrom(__DIR__ . '/../views' ,'goals');    

    }

    public function register()
    {
        // Register services here
    }
}
