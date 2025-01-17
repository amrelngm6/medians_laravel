<?php

namespace App\Modules\Invoices\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class InvoiceServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'invoices');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

    }

    public function register()
    {
        // Register services here
    }
}
