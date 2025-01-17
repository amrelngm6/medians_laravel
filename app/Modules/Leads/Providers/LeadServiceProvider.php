<?php

namespace App\Modules\Leads\Providers;

use Illuminate\Support\ServiceProvider;

class LeadServiceProvider extends ServiceProvider
{
    public function boot()
    {
                
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
    }
}
