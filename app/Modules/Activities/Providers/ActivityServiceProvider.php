<?php

namespace App\Modules\Activities\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class ActivityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadViewsFrom(__DIR__ . '/../views' ,'activities');    

    }

    public function register()
    {
        // Register services here
    }
}
