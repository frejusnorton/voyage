<?php

namespace App\Http\Controllers\Api;

use App\Models\Trajet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrajetController extends Controller
{
    public function index()
    {
        $trajets = Trajet::with(['user','villeDepart',"villeArrive"])->get();

        $trajetFormated = $trajets->map(function ($trajet) {
            return [
                'id' => $trajet->id,
                'conducteur' => $trajet->user ? $trajet->user->nom . ' ' . $trajet->user->prenom : null,
                'ville_depart'=> $trajet->villeDepart ? $trajet->villeDepart->nom  : null,
                'ville_arrive'=> $trajet->villeArrive ? $trajet->villeArrive->nom  : null,
                'date_depart'=> $trajet->date_depart ? $trajet->date_depart->format('d-m-Y')   : null,
                'description' => $trajet->description,
            ];
        });
        return response()->json($trajetFormated, 200);
    }
}
