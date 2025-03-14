<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->notifications()->latest()->get();

        
        return view('home.index', [
            'notifications' => $notifications
        ]);
    }
    

    public function contact() {}


}
