<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route pour CheckIpLocal
Route::get('/local-only', function () {
    return 'Vous êtes en local !';
})->middleware('check.ip.local');

// Route pour BlockEmptyRequest
Route::get('/no-empty', function () {
    return 'Requête avec paramètres !';
})->middleware('block.empty');

// Route pour CheckCountry
Route::get('/country-only', function () {
    return 'Bienvenue dans le pays autorisé !';
})->middleware('check.country:fr'); // 'fr' est le paramètre pays

// Route pour MinLength
Route::get('/min-length', function () {
    return 'Le nom est long enough !';
})->middleware('min.length:5'); // 5 est la longueur minimale

// Route pour CheckTime
Route::get('/working-hours', function () {
    return 'Bienvenue pendant les heures de travail !';
})->middleware('check.time:18'); // 18 est l'heure de fermeture



