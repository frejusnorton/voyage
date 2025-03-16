<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.register.index');
    }

    public function register(RegisterRequest $request)
    {
        if ($request->ajax()) {
            try {
                // dd($request-> all());
                DB::beginTransaction();
                $user = User::create([
                    'id' => Str::uuid(), 
                    'nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'email' => $request->email,
                    'adresse' => $request->adresse ?? null,
                    'type' => $request->type,
                    'telephone' => $request->telephone,
                    'naissance' => $request->naissance ?? null,
                    'sexe' => $request->sexe,
                    'password' => Hash::make($request->password),
                ]);
        
                if ($request->has('type')) {
                    if ($request->type === 'passager') {
                        DB::table('passagers')->insert([
                            'id' => Str::uuid(),
                            'user_id' => $user->id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    } elseif ($request->type === 'conducteur') {
                        DB::table('conducteurs')->insert([
                            'id' => Str::uuid(),
                            'user_id' => $user->id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
                DB::commit();
        
                return response()->json([
                    'success' => true,
                    'message' => 'Inscription réussie ! Redirection en cours...',
                    'redirect' => route('login')
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error('Erreur lors de l\'inscription : ' . $e->getMessage(), [
                    'stack' => $e->getTraceAsString()
                ]);
                return response()->json([
                    'success' => false,
                    'message' => 'Une erreur est survenue, veuillez réessayer plus tard.'
                ], 500);
            }
        }
        

        return redirect()->route('login')->with('success', 'Inscription réussie ! Connectez-vous.');
    }
}
