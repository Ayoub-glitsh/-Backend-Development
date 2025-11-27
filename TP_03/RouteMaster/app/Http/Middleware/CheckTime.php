<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $heureFermeture = 18): Response
{
    $heureActuelle = now()->hour;
    $heureOuverture = 9;

    // Vérifier si l'heure actuelle est entre 9h et l'heure de fermeture (paramètre)
    if ($heureActuelle < $heureOuverture || $heureActuelle >= $heureFermeture) {
        return response("Accès autorisé seulement entre 9h et $heureFermeture h.", 403);
    }

    return $next($request);
}
}
