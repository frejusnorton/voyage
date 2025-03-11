<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        
        $user = Auth::user();
        $trajets = Trajet::where('user_id', $user->id)->paginate(5);

        return view('user.index', [
            'user' => $user,
            'trajets' => $trajets,
        ]);
    }
}
