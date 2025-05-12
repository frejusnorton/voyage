<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
      
        if (auth()->check() && auth()->user()->is_admin) {
         
            return $next($request);
        }
        abort(403, 'Accès refusé');
    }
}
