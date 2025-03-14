<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\ReservationController;

// ACCUEIL & CONDITIONS
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('conditions', [ConditionsController::class, 'index'])->name('conditions');

// AUTHENTIFICATION (Accessible aux non-connectés)
Route::middleware('guest')->group(function () {
    Route::get('connexion', [LoginController::class, 'showLoginForm'])->name('loginShow');
    Route::post('connexion', [LoginController::class, 'login'])->name('login');

    Route::get('inscription', [RegisterController::class, 'showRegistrationForm'])->name('registerShow');
    Route::post('inscription', [RegisterController::class, 'register'])->name('register');
});

// ROUTES PROTÉGÉES (Accessible uniquement aux utilisateurs connectés)
Route::middleware('auth')->group(function () {

    // PROFIL UTILISATEUR
    Route::get('contact/{user}', [ProfilController::class, 'contact'])->name('profil.contact');

    // MODIFICATION DES INFORMATIONS UTILISATEUR
    Route::get('compte', [UserController::class, 'index'])->name('user.index');
    Route::post('user/edit', [UserController::class, 'edit'])->name('user.edit');


    // TRAJETS
    Route::match(['get', 'post'], '/trajet/create', [TrajetController::class, 'create'])->name('trajet.create');

    // RÉSERVATION
    Route::match(['get', 'post'], '/reservation', [ReservationController::class, 'index'])->name('reservation');

    //CONDUCTEUR
    Route::get('conducteur', [ConducteurController::class, 'index'])->name('trajet.conducteur');

    //PAIEMENT
    Route::get('/payment/{reservation}', [PaiementController::class, 'index'])->name('payment.index');

    // DÉCONNEXION
    Route::post('deconnexion', function () {
        Auth::logout();
        return redirect()->route('home');
    })->name('logout');
});

// TRAJETS (Accessible à tous)
Route::match(['get', 'post'], '/trajet', [TrajetController::class, 'index'])->name('trajet');
Route::match(['get', 'post'], '/trajet/{trajet}', [TrajetController::class, 'details'])->name('trajet.details');


// PROFIL UTILISATEUR
Route::get('profil/{user}', [ProfilController::class, 'show'])->name('profil.show');

// NOUS CONTACTER
Route::post('/contact', [HomeController::class, 'contact'])->name('contact');
