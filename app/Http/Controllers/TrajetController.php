<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Models\Trajet;
use App\Models\Conducteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TrajetController extends Controller
{
    public function index(Request $request)

    {

        $villes = Ville::all();

        $query = Trajet::with(['villeDepart', 'villeArrive']);

        if ($request->filled('statut')) {
            $query->where('statut', $request->statut);
        }

        if ($request->filled('ville_depart')) {
            $query->where('ville_depart_id', $request->ville_depart);
        }

        if ($request->filled('ville_arrivee')) {
            $query->where('ville_arrive_id', $request->ville_arrivee);
        }

        if ($request->filled('datetime')) {
            $query->whereDate('date_depart', $request->datetime);
        }

        if ($request->filled('montant')) {
            $query->where('prix', '<=', $request->montant);
        }

        $page = $request->input('page', 1);
        $trajets = $query->paginate(9, ['*'], 'page', $page);

        if ($request->ajax()) {

            $search = $request->input('search', '');
            $trajets = Trajet::filter($search)->paginate(9);
            return view('trajet.datapart', [
                'trajets' => $trajets
            ]);
        }


        $isAuthenticatedAndConducteur = Auth::check() && Conducteur::where('user_id', Auth::id())->exists();

        return view('trajet.index', [
            'trajets' => $trajets,
            'villes' => $villes,
            'isAuthenticatedAndConducteur' => $isAuthenticatedAndConducteur,
        ]);
    }

    public function create(){
        
    }
}
