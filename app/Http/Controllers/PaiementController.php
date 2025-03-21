<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaiementController extends Controller
{
    public function index(Reservation $reservation)
    {
        $user = auth()->user();
        $phoneNumber = $user ? $user->telephone : null;
        $montant = $reservation->trajet ? $reservation->trajet->prix : null;

        return view("paiement.index", [
            "phoneNumber" => $phoneNumber,
            "montant" => $montant,
            "reservation" => $reservation,
        ]);
    }

    public function callback(Request $request, Reservation $reservation)
    {

        $transaction_id = $request->query('transaction_id');

        $response = Http::withHeaders([
            'x-api-key' => env('KKIAPAY_PUBLIC_KEY'),
            'Accept' => 'application/json'
        ])->post('https://api-sandbox.kkiapay.me/api/v1/transactions/status', [
            'transactionId' => $transaction_id
        ]);

        $data = $response->json();

        $paymentStatus = $data['status'] ?? null;
        $paymentSuccessful = $paymentStatus === 'SUCCESS';

        if ($paymentSuccessful) {
            $reservation->status = 'confirmer';
            $reservation->save();
        }
        return redirect()->route('reservation');
    }
}
