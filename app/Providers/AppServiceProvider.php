<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\RoleLoader;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Log;




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadModuleProviders();

        $this->app->bind(MessageRepositoryInterface::class, EloquentMessageRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.debug')) {
            DB::listen(function ($query) {
                \Log::info("Query Executed: {$query->sql}, Bindings: " . json_encode($query->bindings));
            });
        }
        
        $roleLoader = app(RoleLoader::class);
        $roleLoader->loadRolesFromModules();

    }

    /**
     * Bootstrap any application services.
     */
    public function loadModuleProviders(): void
    {
        if (Schema::hasTable('modules')  )
        {
            $modules = DB::table('modules')
                ->where('is_enabled', 1)
                ->pluck('provider');
                

            foreach (array_unique($modules->toArray()) as $providerClass) {
                if (class_exists($providerClass)) {
                    Log::info('Loaded Module '. json_encode($providerClass));
                    $this->app->register($providerClass);
                } else {
                    Log::info('Module not found '. json_encode($providerClass));
                }
            }
        }
        
    }
}
