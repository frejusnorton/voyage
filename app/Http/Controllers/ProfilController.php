<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function show (User $user){


        $trajets = $user->trajets()->paginate(5);  
        
        $nombreTrajetsPublies = $user->trajets()->count();  

        $noteMoyenne = round($user->note, 1); 

        return view('profil.show',[
            'user' => $user,
            'trajets' => $trajets,
            'nombreTrajetsPublies' => $nombreTrajetsPublies,
            'noteMoyenne' => $noteMoyenne,
        ]);
    }

   
}
