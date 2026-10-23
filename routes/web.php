<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    return 'Bonjour MDW3 ! Voici ma première route Laravel 13.';
});

Route::get('/bonjour-court', fn () => 'Même résultat, écrit avec une fonction fléchée.');
Route::get('/bienvenue', function () {
    return view('bienvenue', [
        'etudiant' => 'Oussama Hajri',
        'groupe' => 'MDW32',
        'cours' => 'Atelier Framework Côté Serveur',
    ]);
});
Route::get('/version', function () {
    return [
        'laravel' => app()->version(),
        'php' => PHP_VERSION,
    ];
});

Route::get('/heure', function () {
    return view('heure', [
        'date' => now()->format('d/m/Y'),
        'heure' => now()->format('H:i'),
    ]);
});

Route::get('/a-propos', function () {
    return view('a-propos', [
        'auteur' => 'Oussama Hajri',
        'groupe' => 'MDW32',
    ]);
});
