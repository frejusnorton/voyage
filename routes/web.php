<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\ReservationController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('conditions', [ConditionsController::class, 'index'])->name('conditions');

//TRAJETS
Route::match(['get', 'post'], '/trajet', [TrajetController::class, 'index'])->name('trajet');
Route::match(['get', 'post'], '/trajet/{trajet}/details', [TrajetController::class, 'details'])->name('trajet.details');

//NOUS CONTACTER
Route::post('/trajet', [HomeController::class, 'contact'])->name('contact');

  //USER PROFIL
  Route::get('/profil/{user}', [ProfilController::class, 'show'])->name('profil.show');


// ROUTES D'AUTHENTIFICATION ET ROUTES ACCESIBLE POUR L'UTILISATEUR NON CONNECTE
Route::middleware('guest')->group(function () {

    // Route pour la page de connexion
    Route::get('connexion', [LoginController::class, 'showLoginForm'])->name('loginShow');
    Route::post('connexion', [LoginController::class, 'login'])->name('login');

    // Route pour la page d'inscription
    Route::get('inscription', [RegisterController::class, 'showRegistrationForm'])->name('registerShow');
    Route::post('inscription', [RegisterController::class, 'register'])->name('register');


  
});

Route::middleware('auth')->group(function () {

    // RESERVATION
    Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');

    //MODIFICATION INFORMATIONS UTILISATEUR 
    Route::get('compte', [UserController::class, 'index'])->name('user.index');
    Route::post('user/edit', [UserController::class, 'edit'])->name('user.edit');

    //TRAJET
    Route::match(['get', 'post'], '/trajet/create', [TrajetController::class, 'create'])->name('trajet.create');


    //CONTACTER L'UTILISATEUR
    Route::get('contact/{user}', [ProfilController::class, 'contact'])->name('profil.contact');



    Route::post('deconnexion', function () {
        Auth::logout();
        return redirect()->route('home');
    })->middleware('auth')->name('logout');
});
