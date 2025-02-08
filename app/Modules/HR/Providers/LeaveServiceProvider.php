<?php

namespace App\Modules\HR\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class LeaveServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');


        // Load leaves views
        $this->loadViewsFrom(__DIR__ . '/../views/leaves', 'leaves');

    }

    public function register()
    {
        // Register services here
    }
}
