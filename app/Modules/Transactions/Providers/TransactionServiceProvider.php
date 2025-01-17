<?php

namespace App\Modules\Transactions\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class TransactionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        $this->loadViewsFrom(__DIR__ . '/../views' ,'transactions');    

    }

    public function register()
    {
        // Register services here
    }
}
