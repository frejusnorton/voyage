<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

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
            'nbresTrajet'=> $nbresTrajet
        ]);
    }

    public function espace(User $user)
    {
        $user = auth()->user();
        $trajets = $user->trajets()->paginate(9);
        $nbresTrajet = count($trajets);
     
        return  view('conducteur.espace', [
            'user' => $user,
            'nbresTrajet'=> $nbresTrajet
        ]);
    }
}
