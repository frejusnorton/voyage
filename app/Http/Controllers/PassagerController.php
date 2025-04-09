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
        $trajets = Trajet::where('user_id', $user->id)->paginate(5);

        return view('passager.index', [
            'user' => $user,
            'trajets' => $trajets,
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
            
            // Gestion de l'image de profil
            if ($request->hasFile('profil_img')) {
                // Suppression de l'ancienne image si elle existe
                if ($user->profil_img && Storage::disk('public')->exists(str_replace('/storage/', '', $user->profil_img))) {
                    Storage::disk('public')->delete(str_replace('/storage/', '', $user->profil_img));
                }
                
                $profilPath = $request->file('profil_img')->store('profil', 'public');
                $validatedData['profil_img'] = Storage::url($profilPath);
            }

            // Mise à jour de l'utilisateur via fill + save au lieu d'assignations individuelles
            $user->fill([
                'profil_img' => $validatedData['profil_img'] ?? $user->profil_img,
                'nom' => $validatedData['nom'] ?? $user->nom,
                'prenom' => $validatedData['prenom'] ?? $user->prenom,
                'email' => $validatedData['email'] ?? $user->email,
                'sexe' => $validatedData['sexe'] ?? $user->sexe,
                'adresse' => $validatedData['adresse'] ?? $user->adresse,
                'telephone' => $validatedData['telephone'] ?? $user->telephone,
                'naissance' => $validatedData['naissance'] ?? $user->naissance,
            ])->save();

            return response()->json([
                'success' => true,
                'message' => 'Informations mises à jour avec succès.',
                'redirect' => route('passager.index'),
            ], 200);
        } catch (\Exception $e) {
            // Log l'erreur pour les administrateurs
            logger()->error('Erreur de mise à jour du profil passager: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de la mise à jour du profil.',
                'error' => config('app.debug') ? $e->getMessage() : null,
            ], 500);
        }
    }
}
