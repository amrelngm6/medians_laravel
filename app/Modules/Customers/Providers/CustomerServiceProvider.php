<?php

namespace App\Modules\Customers\Providers;

use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'clients');
        $this->loadViewsFrom(__DIR__ . '/../views', 'staff');
    }

    public function register()
    {
        // Register services here
    }
}
