<?php
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
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SupprimerCompteController;


Route::middleware(['auth', 'isadmin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminPanelController::class, 'index'])->name('admin.dashboard');
    Route::delete('/trajet/{trajet}', [AdminPanelController::class, 'deleteTrajet'])->name('admin.deleteTrajet');
    Route::delete('/user/{user}', [AdminPanelController::class, 'deleteUser'])->name('admin.deleteUser');
});

// ACCUEIL & CONDITIONS
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('conditions', [ConditionsController::class, 'conditions'])->name('conditions');
Route::get('politiques', [ConditionsController::class, 'politiques'])->name('politique');
Route::get('cookie', [ConditionsController::class, 'cookie'])->name('cookies');

//AUTHENTIFICATION PAR GOOGLE 
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

// AUTHENTIFICATION (Accessible aux non-connectés)
Route::middleware('guest')->group(function () {
    Route::get('connexion', [LoginController::class, 'showLoginForm'])->name('loginShow');
    Route::post('connexion', [LoginController::class, 'login'])->name('login');

    Route::get('inscription', [RegisterController::class, 'showRegistrationForm'])->name('registerShow');
    Route::post('inscription', [RegisterController::class, 'register'])->name('register');
});

// ROUTES PROTÉGÉES (Accessible uniquement aux utilisateurs connectés)
Route::middleware('auth')->group(function () {
    // CONTACTER UN CONDUCTREUR
    Route::get('contact/{user}', [ConducteurController::class, 'contact'])->name('conducteur.contact');
    // MODIFICATION DES INFORMATIONS DU PASSAGER
    Route::get('compte/{user}', [PassagerController::class, 'index'])->name('passager.index');
    Route::match(['get', 'post'], 'modifier/{user}', [PassagerController::class, 'edit'])->name('passager.edit');
    Route::get('solde/{user}', [PassagerController::class, 'solde'])->name('passager.solde');
    // TRAJETS
    Route::match(['get', 'post'], 'create/trajet', [TrajetController::class, 'create'])->name('trajet.create');

    // RÉSERVATION
    Route::match(['get', 'post'], '/resavation', [ReservationController::class, 'index'])->name('reservation');
    Route::post('annuler/{reservation}', [ReservationController::class, 'annulerReservation'])->name('reservation.annuler');
    Route::get('/reservations/recherche', [ReservationController::class, 'recherche'])->name('reservation.recherche');

    //CONDUCTEUR
    Route::get('conducteur', [ConducteurController::class, 'index'])->name('trajet.conducteur');
    Route::get('conducteur/reservation', [ConducteurController::class, 'reservation'])->name('conducteur.reservation');
    Route::get('conducteur/espace', [ConducteurController::class, 'espace'])->name('conducteur.espace');
    Route::get('conducteur/statistiques/{user}', [ConducteurController::class, 'statistiques'])->name('conducteur.statistiques');
    Route::post('trajet/update', [TrajetController::class, 'update'])->name('trajet.update');
    Route::get('/check-if-conducteur', [TrajetController::class, 'checkIfConducteur'])->name('checkIfConducteur');

    //PAIEMENT
    Route::get('/payment/{reservation}', [PaiementController::class, 'index'])->name('payment.index');
    Route::get('/paiement/callback/{reservation}', [PaiementController::class, 'callback'])->name('paiement.callback');

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
