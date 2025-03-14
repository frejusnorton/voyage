<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $phoneNumber = $user ? $user->phone : null;
       
        return view("paiement.index",[
            "phoneNumber"=> $phoneNumber
        ]);
    }
}
