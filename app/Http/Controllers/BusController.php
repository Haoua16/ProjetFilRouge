<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\chauffeur;
use Illuminate\Http\Request;

class BusController extends Controller
{
       //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $bus = bus::all();

    return view('bus.index', compact('bus'));
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
    return view('bus.create', compact('chauffeurs'));
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
        'numero' => 'required|max:255',
        'nombreplace' => 'required|max:255',
        'chauffeurs_id' => 'max:255',
        ]);
    
        $bus = bus::create($validatedData);
    
        return redirect('/bus')->with('success', 'bus ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bus = bus::findOrFail($id);
        return view('bus.show', compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $bus = bus::findOrFail($id);

    return view('bus.edit', compact('bus'));
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
        'numero' => 'required|max:255',
        'nombreplace' => 'required|max:255',
        'chauffeurs_id' => 'max:255',
    ]);

    $bus = bus::whereId($id)->update($validatedData);

    return redirect('/bus')->with('Success', 'bus mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $bus = bus::findOrFail($id);
    $bus->delete();

    return redirect('/bus')->with('success', 'bus supprimé avec succèss');
}
}
