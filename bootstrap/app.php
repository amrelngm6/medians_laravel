<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            'webhooks/*',
            'webhooks/medians_wp',
            'https://crm.mediansai.com/webhooks/medians_wp'
        ]);
        \Log::info('CSRF Middleware Loaded: Excluded Routes', ['excluded' => ['webhooks/*', 'webhooks/medians_wp']]);
        // Set Language based on URL
        $middleware->web(append: \App\Http\Middleware\AuthMiddleware::class);
        $middleware->web(append: \App\Http\Middleware\SetLocale::class);
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
