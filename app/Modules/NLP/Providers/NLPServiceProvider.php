<?php

namespace App\Modules\NLP\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class NLPServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        $this->loadViewsFrom(__DIR__ . '/../views' ,'nlp');    

    }

    public function register()
    {
        // Register services here
    }
}
