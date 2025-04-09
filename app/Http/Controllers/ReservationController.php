<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trajet;
use App\Models\Reservation;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Notifications\ReservationNotification;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $reservations = Reservation::with('trajet')
            ->where('user_id', auth()->id())
            ->paginate(9); {

            if ($request->ajax()) {
                $request->validate([
                    'trajet_id' => 'required|uuid|exists:trajets,id',
                    'user_id' => 'required|uuid|exists:users,id',
                ]);
                DB::beginTransaction();
                try {
                    $reservation = Reservation::create([
                        'user_id' => $request->user_id,
                        'trajet_id' => $request->trajet_id,
                        'status' => 'en attente',
                    ]);
                    $trajet = Trajet::find($request->trajet_id);

                    if ($trajet) {
                        $auteurTrajet = $trajet->user;
                        $auteurTrajet->notify(new ReservationNotification($reservation));
                    }

                    DB::commit();
                    return response()->json([
                        'message' => 'Votre réservation a été bien enregistrée, veuillez payer pour confirmer.',
                        'redirect' => route('payment.index', ['reservation' => $reservation->id]),
                    ]);
                } catch (\Exception $e) {
                    DB::rollBack();

                    Log::error('Erreur lors de la création de la réservation ou de l\'envoi de la notification: ' . $e->getMessage());
                    return response()->json([
                        'message' => 'Une erreur est survenue, veuillez réessayer plus tard.',
                    ], 500);
                }
            }
        }
        return view('reservation.index', [
            'reservations' => $reservations,
        ]);
    }

    public function recherche(Request $request)
    {
        if ($request->ajax()) {
            $user_id = $request->input('user');
            $user = User::findOrFail($user_id);

            $search = $request->input('search', '');

            $query = $user->reservations();

            if ($search) {
                $query->where(function ($q) use ($search) {
                    $search = strtolower($search);
                    $q->where('status', 'like', '%' . $search . '%');
                });
            }
            $reservations = $query->paginate(9);
            return view('reservation.datapart', [
                'reservations' => $reservations
            ]);
        }
    }


    public function annulerReservation(Reservation $reservation)
    {
        $reservation->status = 'annuler';
        $reservation->save();
        return response()->json([
            'message' => 'Réservation annulée avec succès.',
        ]);
    }
}
