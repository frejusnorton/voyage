<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminPanelController extends Controller
{
    public function index()
    { 
        try {
            // Récupération des trajets avec leurs relations et pagination
            $trajets = Trajet::with(['conducteur', 'reservations','villeDepart','villeArrive'])
                ->withCount('reservations')
                ->latest()
                ->paginate(10);

            // Récupération des utilisateurs avec leurs statistiques et pagination
            $users = User::withCount(['trajets', 'reservations'])
                ->with(['trajets' => function($query) {
                    $query->latest()->take(5);
                }])
                ->latest()
                ->paginate(10);

            $stats = [
                'total_users' => User::count(),
                'total_trajets' => Trajet::count(),
                'total_reservations' => \App\Models\Reservation::count(),
                'trajets_actifs' => Trajet::where('date_depart', '>=', now())->count(),
            ];
            return view('admin.index', compact('trajets', 'users', 'stats'));
        } catch (\Throwable $th) {
            Log::error('Erreur dans AdminPanelController: ' . $th->getMessage());
            return back()->with('error', 'Une erreur est survenue lors du chargement du tableau de bord.');
        }
    }

    public function deleteTrajet(Trajet $trajet)
    {
        try {
            $trajet->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false], 500);
        }
    }

    public function deleteUser(User $user)
    {
        try {
            $user->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false], 500);
        }
    }
}
