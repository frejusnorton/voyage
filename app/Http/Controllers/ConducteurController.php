<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Trajet;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ConducteurController extends Controller
{
    public function index(User $user, Request $request)
    {
        $user = auth()->user();
        if (!$user) {
            abort(403, 'Utilisateur non authentifié.');
        }
        $trajets = $user->trajets()->paginate(9);
        $nbresTrajet = count($trajets);


        return view("conducteur.publication", [
            "trajets" => $trajets,
            'user' => $user,
            'nbresTrajet' => $nbresTrajet
        ]);
    }

    public function espace(User $user)
    {
        $user = auth()->user();
        $trajets = $user->trajets()->paginate(9);
        $nbresTrajet = count($trajets);

        return  view('conducteur.espace', [
            'user' => $user,
            'nbresTrajet' => $nbresTrajet
        ]);
    }

    public function reservation(User $user)
    {

        $trajets = $user->trajets()->paginate(9);
        $nbresTrajet = count($trajets);

        $userId = Auth::id();
        $user = auth()->user();
        $reservations = Reservation::where('status', 'confirmer')
            ->whereHas('trajet', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->with(['trajet'])
            ->paginate(10);


        return view('conducteur.passagerReservation', [
            "trajets" => $trajets,
            "reservations" => $reservations,
            'user' => $user,
            'nbresTrajet' => $nbresTrajet
        ]);
    }
}
