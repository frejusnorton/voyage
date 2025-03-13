<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $reservations = Reservation::where('user_id', auth()->id())
        ->orderBy('created_at', 'desc')
        ->paginate(10);

      
        if ($request->ajax()) {
            $request->validate([
                'trajet_id' => 'required|uuid|exists:trajets,id',
                'user_id' => 'required|uuid|exists:users,id',
            ]);

            $reservation = Reservation::create([
                'user_id' => $request->user_id,
                'trajet_id' => $request->trajet_id,
                'status' => 'en attente',
            ]);

            return response()->json([
                'message' => 'Votre réservation a été bien enregistrée, veuillez payer pour confirmer.',
                'redirect' => route('payment.index', ['reservation' => $reservation->id])
            ]);
        }
        return view('reservation.index');
    }
}
