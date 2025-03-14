<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        if(  $user ){
            $notifications = auth()->user()->notifications()->latest()->get();
        }else {
            $notifications = []; 
        }

        return view('home.index', [
            'notifications' => $notifications
        ]);
    }
    

    public function contact() {}


}
