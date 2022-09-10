<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\chauffeur;
use App\Models\reservation;
use App\Models\voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
//
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $voyages = voyage::all();
    // dd($voyages);
    

    return view('voyage.index', compact('voyages'));
}




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // CarController.php


public function create()
{
    $chauffeurs = chauffeur::all();
    $bus = bus::all();
    return view('voyage.create', compact('chauffeurs', 'bus'));
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
        'villedepart' => 'required|max:255',
        'villearrive' => 'required|max:255',
        'datedepart' => 'required|max:255',
        'heuredepart' => 'required|max:255',
        'rendezvous' => 'required|max:255',
        'chauffeurs_id' => 'max:255',
        'buses_id' => 'max:255',
        ]);
    
        $voyages = voyage::create($validatedData);
    
        return redirect('/voyage')->with('Ajout réussie');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voyages = voyage::findOrFail($id);
        return view('voyage.show', compact('voyages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $voyages = voyage::findOrFail($id);

    return view('voyage.edit', compact('voyages'));
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
        'villedepart' => 'required|max:255',
        'villearrive' => 'required|max:255',
        'datedepart' => 'required|max:255',
        'heuredepart' => 'required|max:255',
        'rendezvous' => 'required|max:255',
        'chauffeurs_id' => 'max:255',
        'buses_id' => 'max:255',
    ]);

    $voyages = voyage::whereId($id)->update($validatedData);

    return redirect('/voyage')->with('Success');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $voyages = voyage::findOrFail($id);
    $voyages->delete();

    return redirect('/voyage')->with('success', 'voyage supprimé avec succèss');
}

public function comptablereservation()
{
    $reservations = reservation::all();

    return view('comptables.comptablereservation', compact('reservations'));
}

public function directeurreservation()
{
    $reservations = reservation::all();

    return view('directeurs.directeurreservation', compact('reservations'));
}

   
}

