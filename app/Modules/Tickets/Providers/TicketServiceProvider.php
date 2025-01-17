<?php

namespace App\Modules\Tickets\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class TicketServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views'  ,'tickets');
    }

    public function register()
    {
        // Register services here
    }
}
