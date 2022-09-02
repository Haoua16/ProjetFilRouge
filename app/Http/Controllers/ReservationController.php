<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\passager;
use App\Models\reservation;
use App\Models\User;
use App\Models\voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
     //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $reservations = reservation::all();

    return view('reservation.index', compact('reservations'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // CarController.php


public function create($id)
{
    
    $voyages = voyage::findOrFail($id);

    return view('reservation.create', compact('voyages'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
        // 'date' => 'required|max:255',
        'nombreplace' => 'required|max:255',
        ]);
        if ($validatedData){
            
            $users=Auth::user()->id;
            $reservations = reservation::create([
                'nombreplace'=>$request['nombreplace'],
                'users_id'=>$users,  
                'voyages_id'=>$request['voyages_id'], 
            ]);

        }
    
        
    
        return redirect('/clientreserv1')->with('success', 'reservations ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservations = reservation::findOrFail($id);
        return view('reservation.show', compact('reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $reservations = reservation::findOrFail($id);

    return view('reservation.edit', compact('reservations'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // CarController.php

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'nombreplace' => 'required|max:255',
        'users_id' => 'max:255',
        'voyages_id' => 'max:255',
    ]);

    $reservations = reservation::whereId($id)->update($validatedData);

    return redirect('/reservation')->with('Success', 'reservations mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $reservations = reservation::findOrFail($id);
    $reservations->delete();

    return redirect('/reservation')->with('success', 'reservations supprimé avec succèss');
}


public function clientvoyage()
{
    $voyages = voyage::all();

    return view('clients.clientvoyage', compact('voyages'));
}
public function clientreserv1()
{
    $currentusers = Auth::user()->id;

    $reservations = reservation::where('users_id', $currentusers)->get();
    // dd($reservations);

    return view('clients.clientreserv1', compact('reservations'));
}


public function comptablevoyage()
{
    $voyages = voyage::all();

    return view('comptables.comptablevoyage', compact('voyages'));
}
public function comptablereserv1()
{
    $currentusers = Auth::user()->id;

    $reservations = reservation::where('users_id', $currentusers)->get();
    // dd($reservations);

    return view('comptables.comptablereserv1', compact('reservations'));
}


public function gescourriervoyage()
{
    $voyages = voyage::all();

    return view('gescourriers.gescourriervoyage', compact('voyages'));
}
public function gescourrierreserv1()
{
    $currentusers = Auth::user()->id;

    $reservations = reservation::where('users_id', $currentusers)->get();
    // dd($reservations);

    return view('gescourriers.gescourrierreserv1', compact('reservations'));
}


public function directeurvoyage()
{
    $voyages = voyage::all();

    return view('directeurs.directeurvoyage', compact('voyages'));
}
public function directeurlistevoyage()
{
    $voyages = voyage::all();

    return view('directeurs.directeurlistevoyage', compact('voyages'));
}
public function directeurreserv1()
{
    $currentusers = Auth::user()->id;

    $reservations = reservation::where('users_id', $currentusers)->post();
    // dd($reservations);

    return view('directeurs.directeurreserv1', compact('reservations'));
}


public function administrateurvoyage()
{
    $voyages = voyage::all();

    return view('administrateurs.administrateurvoyage', compact('voyages'));
}
public function administrateurreserv1()
{
    $currentusers = Auth::user()->id;

    $reservations = reservation::where('users_id', $currentusers)->get();
    // dd($reservations);

    return view('administrateurs.administrateurreserv1', compact('reservations'));
}

}
