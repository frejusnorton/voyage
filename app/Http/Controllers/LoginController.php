<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login.index');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse e-mail valide.',
            'password.required' => 'Le mot de passe est obligatoie.',
        ]);

        try {
            if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']], $request->remember)) {
                return response()->json([
                    'success' => true,
                    'message' => 'Connexion réussie !',
                    'redirect' => route('home')
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => ' Email ou mot de passe incorrects. Veuillez réessayer !'
                ], 401); 
            }
        } catch (\Exception $e) {
            Log::error('Erreur lors de la tentative de connexion : ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de la connexion. Veuillez réessayer plus tard.'
            ], 500); 
        }
    }
}
