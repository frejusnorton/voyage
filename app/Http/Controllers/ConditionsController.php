<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionsController extends Controller
{
    public function conditions() {
        return view('conditions.index');
    }public function politiques() {
        return view('politiques.index');
    }public function cookie() {
        return view('cookie.index');
    }
}
