<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class ConducteurController extends Controller
{
    public function index(User $user,Request $request)
    {
        $user = auth()->user();
        if (!$user) {
            abort(403, 'Utilisateur non authentifié.');
        }
        $trajets = $user->trajets()->paginate(5); 

       
        return view("conducteur.trajet", [
            "trajets" => $trajets
        ]);
    }
}
