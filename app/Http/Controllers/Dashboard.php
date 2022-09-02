<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function Dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function clientdash()
    {
        return view('clientdash.dashboard');
    }

    public function gescourrierdash()
    {
        return view('gescourrierdash.dashboard');
    }

    public function comptabledash()
    {
        return view('comptabledash.dashboard');
    }

    public function directeurdash()
    {
        return view('directeurdash.dashboard');
    }
}
