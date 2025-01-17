<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;
use App\Models\Auth;

class AuthMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $user = Auth::guard('staff')->user();
        if ($user && empty($user->business) && empty($_POST) && !Route::is('Business.subscription'))
        {
            return redirect()->route('Business.subscription');
        }

        return $next($request);
    }
}
