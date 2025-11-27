<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next, $country): Response
{

    $userCountry = $request->header('Country');

    if ($userCountry !== $country) {
        return response("Accès réservé aux utilisateurs de $country.", 403);
    }

    return $next($request);
}
}
