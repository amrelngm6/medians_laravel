<?php

namespace App\Modules\Countries\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class CountryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
        $Module = Module::firstOrCreate([
            'name' => 'Countries',
            'path' => dirname(__NAMESPACE__),
            'provider' => $this::class,
        ]);
        
        if (empty($Module->is_enabled)) 
            return;

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
