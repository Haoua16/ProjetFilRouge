<?php

namespace App\Http\Controllers;

use App\Models\destinationclient;
use App\Models\voyage;
use Illuminate\Http\Request;

class DestinationclientController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $destinationclients = destinationclient::all();

    return view('destinationclient.index', compact('destinationclients'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // CarController.php


public function create()
{
    $voyages = voyage::all();
    return view('destinationclient.create', compact('voyages'));
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
        'nombreplace' => 'required|max:255',
        'voyages_id' => 'max:255',
        ]);
    
        $destinationclients = destinationclient::create($validatedData);
    
        return redirect('/destinationclient')->with('success', 'destinationclient ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $destinationclients = destinationclient::findOrFail($id);
        return view('destinationclient.show', compact('destinationclients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $destinationclients = destinationclient::findOrFail($id);

    return view('destinationclient.edit', compact('destinationclients'));
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
        'voyages_id' => 'max:255',
    ]);

    $destinationclients = destinationclient::whereId($id)->update($validatedData);

    return redirect('/destinationclient')->with('Success', 'destinationclient mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $destinationclients = destinationclient::findOrFail($id);
    $destinationclients->delete();

    return redirect('/destinationclient')->with('success', 'destinationclient supprimé avec succèss');
}
}

