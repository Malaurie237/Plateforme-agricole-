<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Page d'accueil (Redirige vers l'inscription)
Route::get('/', function () {
    return redirect()->route('register');
});

// INSCRIPTION
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// CONNEXION
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// DÉCONNEXION
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// PAGE PROTÉGÉE (DASHBOARD)
Route::get('/dashboard', function () {
    return '<h1>Bienvenue sur votre Dashboard, ' . auth()->user()->name . ' !</h1><form method="POST" action="' . route('logout') . '"><input type="hidden" name="_token" value="' . csrf_token() . '"><button type="submit">Déconnexion</button></form>';
})->middleware('auth')->name('dashboard');