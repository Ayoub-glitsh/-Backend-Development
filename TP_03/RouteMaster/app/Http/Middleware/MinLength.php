<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MinLength
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $minLength): Response
{

    if (!$request->has('name')) {
        return response("Le champ 'name' est requis.", 400);
    }

    $name = $request->input('name');

    if (strlen($name) < (int) $minLength) {
        return response("Le champ 'name' doit avoir au moins $minLength caractères.", 400);
    }

    return $next($request);
}
}
