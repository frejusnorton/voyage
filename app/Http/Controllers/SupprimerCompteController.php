<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SupprimerCompteController extends Controller
{
    public function deleteAccount(Request $request, User $user)
    {
        $request->validate([
            'confirmation' => 'accepted'
        ], [
            'confirmation.accepted' => 'Vous devez confirmer la suppression de votre compte.'
        ]);
      
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => "Votre compte a été supprimé avec succès! Nous vous espérons d'ici peu",
            'redirect' => route('home')
        ]);
    }
}
