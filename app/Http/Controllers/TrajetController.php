<?php

namespace App\Http\Controllers;


use App\Models\Ville;
use App\Models\Trajet;
use App\Models\Conducteur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TrajetCreateRequest;


class TrajetController extends Controller
{
    public function index(Request $request)
    {

        $villes = Ville::all();
        $search = $request->input('search', '');
        $query = Trajet::filter($search)->with(['villeDepart', 'villeArrive']);

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


        if ($request->ajax()) {
            $trajets = $query->paginate(9);
            return view('trajet.datapart', [
                'trajets' => $trajets
            ]);
        }


        $page = $request->input('page', 1);
        $trajets = $query->paginate(9, ['*'], 'page', $page);

        $isAuthenticatedAndConducteur = Auth::check() && Conducteur::where('user_id', Auth::id())->exists();

        return view('trajet.index', [
            'trajets' => $trajets,
            'villes' => $villes,
            'isAuthenticatedAndConducteur' => $isAuthenticatedAndConducteur,
        ]);
    }


    public function create(Request $request)
    {

        $ville = Ville::all();

        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'ville_depart' => 'required|string|max:255',
                'ville_arrive' => 'required|string|max:255',
                'date_depart' => 'required|date|after_or_equal:today',
                'heure_depart' => 'required|date_format:H:i',
                'prix' => 'required|numeric|min:500',
                'description' => 'nullable|string|max:1000',
                'nombre_personnes' => 'nullable|integer|min:1',
            ], [
                'ville_depart.required' => 'Le lieu de départ est obligatoire.',
                'ville_depart.string' => 'Le lieu de départ doit être une chaîne de caractères.',
                'ville_depart.max' => 'Le lieu de départ ne peut pas dépasser 255 caractères.',

                'ville_arrive.required' => 'Le lieu d’arrivée est obligatoire.',
                'ville_arrive.string' => 'Le lieu  d’arrivée doit être une chaîne de caractères.',
                'ville_arrive.max' => 'Le lieu  d’arrivée ne peut pas dépasser 255 caractères.',

                'date_depart.required' => 'La date de départ est obligatoire.',
                'date_depart.date' => 'La date de départ doit être une date valide.',
                'date_depart.after_or_equal' => 'La date de départ doit être aujourd’hui ou une date future.',

                'heure_depart.required' => 'L\'heure de départ est obligatoire.',
                'heure_depart.date_format' => 'L\'heure de départ doit être au format HH:MM.',

                'nombre_personnes.required' => 'Le nombre de places disponibles est obligatoire.',
                'nombre_personnes.integer' => 'Le nombre de places disponibles doit être un nombre entier.',
                'nombre_personnes.min' => 'Il doit y avoir au moins une place disponible.',

                'prix.required' => 'Le prix est obligatoire.',
                'prix.numeric' => 'Le prix doit être un nombre.',
                'prix.min' => 'Le prix doit être au minimum 500.',

                'description.string' => 'La description doit être une chaîne de caractères.',
                'description.max' => 'La description ne peut pas dépasser 1000 caractères.',

            ]);

            $villeDepart = Ville::firstOrCreate(['nom' => $request->input('ville_depart')]);
            $villeArrive = Ville::firstOrCreate(['nom' => $request->input('ville_arrive')]);


            $trajet = new Trajet();
            $trajet->id = (string) Str::uuid();
            $trajet->description = $request->input('description');
            $trajet->user_id = auth()->id();
            $trajet->ville_depart_id = $villeDepart->id;
            $trajet->ville_arrive_id = $villeArrive->id;
            $trajet->date_depart = $request->input('date_depart');
            $trajet->heure_depart = $request->input('heure_depart');
            $trajet->prix = $request->input('prix');
            $trajet->nombre_personnes = $request->input('nombre_personnes');
            $trajet->statut = 'disponible';
            $trajet->save();
        }

        return view(
            'trajet.create',
            [
                'villes' => $ville,
            ]

        );
    }

    public function details(Trajet $trajet)
    {
        $conducteur = $trajet->user;
        $nombreTrajets = $conducteur->trajets()->count();


        return view('trajet.details', [
            'trajet' => $trajet,
            'conducteur' => $conducteur,
            'nombreTrajets' => $nombreTrajets,
        ]);
    }

    public function checkIfConducteur()
    {

        if (!Auth::check()) {
            return response()->json(['message' => 'Vous devez vous connecter'], 401);
        }
        if (Auth::check() && auth()->user()->type === 'conducteur') {
            return response()->json(['isConducteur' => true]);
        }
        return response()->json(['isConducteur' => false]);
    }
}
