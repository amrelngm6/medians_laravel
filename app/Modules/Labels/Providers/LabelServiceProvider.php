<?php

namespace App\Modules\Labels\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class LabelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
        $Module = Module::firstOrCreate([
            'name' => 'Labels',
            'path' => dirname(__NAMESPACE__),
            'provider' => $this::class,
        ]);
        

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
