<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EditPassagerProfilRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Reservation;

class PassagerController extends Controller
{
    /**
     * Affiche la page d'accueil du passager
     *
     * @return View
     */
    public function index(): View
    {
        $user = Auth::user();
        $nombreTotal = Reservation::where('user_id', $user->id)->count();
        return view('passager.index', [
            'user' => $user,
            'nombreTotal' => $nombreTotal,

        ]);
    }

    /**
     * Affiche et traite le formulaire d'édition du profil passager
     *
     * @param EditPassagerProfilRequest $request
     * @return View|JsonResponse
     */
    public function edit(EditPassagerProfilRequest $request): View|JsonResponse
    {
        $user = Auth::user();

        if (!$request->isMethod('post')) {
            return view('passager.edit', ['user' => $user]);
        }

        try {
            $validatedData = $request->validated();
            if ($request->hasFile('profil_img')) {
                if ($user->profil_img && Storage::disk('public')->exists(str_replace('/storage/', '', $user->profil_img))) {
                    Storage::disk('public')->delete(str_replace('/storage/', '', $user->profil_img));
                }

                $profilPath = $request->file('profil_img')->store('profil', 'public');
                $validatedData['profil_img'] = Storage::url($profilPath);
            }
            $user->profil_img = $validatedData['profil_img'] ?? $user->profil_img;
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
                'message' => 'Informations mises à jour avec succès.',
                'redirect' => route('passager.index', ['user' => auth()->user()->id])
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de la mise à jour du profil.',
            ], 500);
        }
    }
}
