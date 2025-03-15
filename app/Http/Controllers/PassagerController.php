<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EditPassagerProfilRequest;

class PassagerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $estPassager = DB::table('passagers')->where('user_id', $user->id)->exists();
        $trajets = Trajet::where('user_id', $user->id)->paginate(5);

        return view('passager.index', [
            'user' => $user,
            'trajets' => $trajets,
        ]);
    }

    public function edit(EditPassagerProfilRequest $request)
    {
        $user = Auth::user();

        try {
            if ($request->isMethod('post')) {
         
                $validatedData = $request->validated();
                if ($request->hasFile('profil_img')) {
                    $profilPath = $request->file('profil_img')->store('profil', 'public');
                    $profilUrl = Storage::url($profilPath);
                    $validatedData['profil_img'] = $profilUrl;
                }

                $user->profil_img = $validatedData['profil_img'] ?? null;
                $user->nom = $validatedData['nom'] ?? $user->nom;
                $user->prenom = $validatedData['prenom'] ?? $user->prenom;
                $user->email = $validatedData['email'] ?? $user->email;
                $user->sexe = $validatedData['sexe'] ?? $user->sexe;
                $user->adresse = $validatedData['adresse'] ?? $user->adresse;
                $user->telephone = $validatedData['telephone'] ?? $user->telephone;
                $user->naissance = $validatedData['naissance'] ?? $user->naissance;
                $user->save();

                return response()->json([
                    'success' => true,
                    'message' => 'Informations mise à jour avec succès.',
                    'redirect' => route('passager.index', ['user' => $user->id]),
                ], 200);
            }
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de la mise à jour du profil.',
            ], 500);
        }
        return view('passager.edit', [
            'user' => $user,
        ]);
    }
}
