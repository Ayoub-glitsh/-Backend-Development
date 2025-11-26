<?php

use Illuminate\Support\Facades\Route;

// 1) Route /bonjour
Route::get('/bonjour', function () {
    return 'Bonjour Laravel';
});

// 2) Route /user/{nom}
Route::get('/user/{nom}', function ($nom) {
    return "Bienvenue, $nom";
});

// 3) Route /produit/{id} avec contrainte numérique
Route::get('/produit/{id}', function ($id) {
    return "Produit ID: $id";
})->where('id', '[0-9]+');

// 4) Route /article/{id?} avec paramètre optionnel
Route::get('/article/{id?}', function ($id = null) {
    if ($id) {
        return "Article ID: $id";
    }
    return "Liste des articles";
});

// 5) Route /contact avec vue Blade
Route::get('/contact', function () {
    return view('contact');
});

// 6) Route /home avec redirection
Route::get('/home', function () {
    return redirect('/dashboard');
});

// 7) Route /info avec Route::view()
Route::view('/info', 'info');

// 8) Route /admin/dashboard
Route::get('/admin/dashboard', function () {
    return 'Espace administrateur';
});

// 9) Groupe de routes avec préfixe admin
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'Liste des utilisateurs';
    });
    
    Route::get('/settings', function () {
        return 'Paramètres de l\'administrateur';
    });
});

// 10) Route fallback pour les pages non trouvées
Route::fallback(function () {
    return 'Erreur 404 - Page non trouvée';
});
