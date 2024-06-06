<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecurityMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Logique du middleware
        return $next($request);
    }
}
