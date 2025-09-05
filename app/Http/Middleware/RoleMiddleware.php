<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
{
    if (!$request->user()) {
        return redirect()->route('notauth');
    }

    // If required role is "user"
    if ($role === 'user') {
        if ($request->user()->role === 'user' || $request->user()->role === 'admin') {
            return $next($request); // allow user & admin
        }
    }

    // If required role is "admin"
    if ($role === 'admin') {
        if ($request->user()->role === 'admin') {
            return $next($request); // only admin
        }
    }

    return redirect()->route('notauth'); // default deny
}

    }
