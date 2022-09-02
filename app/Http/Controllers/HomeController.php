<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\Client;
use App\Models\Comptable;
use App\Models\Directeur;
use App\Models\GesCourrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        
        if($user->statut == 'administrateur')
        {
            $admin = Administrateur::where ('userId', $user->id)->first();
            return view ('dashboard.dashboard',compact('admin'));
        }

        elseif($user->statut == 'gescourrier')
        {
            $ges = GesCourrier::where ('userId', $user->id)->first();

            return view ('gescourrierdash.dashboard',compact('ges'));

        }

        elseif($user->statut == 'comptable')
        {
            $compt = Comptable::where ('userId', $user->id)->first();

            return view ('comptabledash.dashboard',compact('compt'));

        }

        elseif($user->statut == 'client')
        {
            $client = Client::where ('userId', $user->id)->first();

            return view ('clientdash.dashboard',compact('client'));

        }

        elseif($user->statut == 'directeur')
        {
            $direct = Directeur::where ('userId', $user->id)->first();

            return view ('directeurdash.dashboard',compact('direct'));

        }

        else
        {
          return view('home');  
        }
        
    
    }

   
}
