<?php

namespace App\Modules\Notes\Providers;

use Illuminate\Support\ServiceProvider;

class NoteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');
        
        // Load views    
        $this->loadViewsFrom(__DIR__ . '/../views', 'notes');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
    }
}
