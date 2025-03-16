<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Mail\Events\MessageSent;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SupprimerCompteController;

Route::post('/send-message', [MessageController::class, 'sendMessage']);
Route::get('message', [MessageController::class, 'index']);

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

    // // PROFIL UTILISATEUR
    // Route::get('contact/{user}', [ProfilController::class, 'contact'])->name('profil.contact');

    // MODIFICATION DES INFORMATIONS DU PASSAGER
    Route::get('compte/{user}', [PassagerController::class, 'index'])->name('passager.index');
    Route::match(['get', 'post'], 'modifier/{user}', [PassagerController::class, 'edit'])->name('passager.edit');


    // // MODIFICATION DES INFORMATIONS DU CONDUCTEUR
    //  Route::get('compte/{user}', [ConducteurController::class, 'index'])->name('conducteur.index');
    //  Route::post('user/edit', [ConducteurController::class, 'edit'])->name('conducteur.edit');


    // TRAJETS
    Route::match(['get', 'post'], '/trajet/create', [TrajetController::class, 'create'])->name('trajet.create');

    // RÉSERVATION
    Route::match(['get', 'post'], '/reservation', [ReservationController::class, 'index'])->name('reservation');
    Route::post('annuler/{reservation}', [ReservationController::class, 'annulerReservation'])->name('reservation.annuler');

    //CONDUCTEUR
    Route::get('conducteur', [ConducteurController::class, 'index'])->name('trajet.conducteur');
    Route::get('/check-if-conducteur', [TrajetController::class, 'checkIfConducteur'])->name('checkIfConducteur');

    //PAIEMENT
    Route::get('/payment/{reservation}', [PaiementController::class, 'index'])->name('payment.index');

    //SUPPRESSION DE COMPTE
    Route::post('supprimer/{user}', [SupprimerCompteController::class, 'deleteAccount'])->name('suppression');



    // DÉCONNEXION
    Route::match(['get', 'post'], 'deconnexion', [LoginController::class, 'logout'])->name('logout');
});

// TRAJETS (Accessible à tous)
Route::match(['get', 'post'], '/trajet', [TrajetController::class, 'index'])->name('trajet');
Route::match(['get', 'post'], '/trajet/{trajet}', [TrajetController::class, 'details'])->name('trajet.details');


// PROFIL UTILISATEUR
Route::get('profil/{user}', [ProfilController::class, 'show'])->name('profil.show');

// NOUS CONTACTER
Route::post('/contact', [HomeController::class, 'contact'])->name('contact');
