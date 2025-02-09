<?php

namespace App\Modules\HR\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class ShiftServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');


        // Load shifts views
        $this->loadViewsFrom(__DIR__ . '/../views/shifts', 'shifts');

    }

    public function register()
    {
        // Register services here
    }
}
