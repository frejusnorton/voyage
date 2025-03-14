<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trajet;
use App\Models\Reservation;
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
            ->paginate(10); {
            
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
}
