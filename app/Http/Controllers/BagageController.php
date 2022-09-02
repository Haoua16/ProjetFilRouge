<?php

namespace App\Http\Controllers;

use App\Models\bagage;
use App\Models\bus;
use App\Models\passager;
use Illuminate\Http\Request;

class BagageController extends Controller
{
       //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $bagages = bagage::all();

    return view('bagage.index', compact('bagages'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // CarController.php


public function create()
{
    $bus = bus::all();
    $passagers = passager::all();
    return view('bagage.create', compact('bus', 'passagers'));
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
        'nature' => 'required|max:255',
        'nombrebagage' => 'required|max:255',
        'montantpaye' => 'required|max:255',
        'buses_id' => 'max:255',
        'passagers_id' => 'max:255',
        ]);
    
        $bagages = bagage::create($validatedData);
    
        return redirect('/bagage')->with('success', 'bagage ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bagages = bagage::findOrFail($id);
        return view('bagage.show', compact('bagages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $bagages = bagage::findOrFail($id);

    return view('bagage.edit', compact('bagages'));
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
        'nature' => 'required|max:255',
        'nombrebagage' => 'required|max:255',
        'montantpaye' => 'required|max:255',
        'buses_id' => 'max:255',
        'passagers_id' => 'max:255',
    ]);

    $bagages = bagage::whereId($id)->update($validatedData);

    return redirect('/bagage')->with('Success', 'bagage mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $bagages = bagage::findOrFail($id);
    $bagages->delete();

    return redirect('/bagage')->with('success', 'bagage supprimé avec succèss');
}

public function comptablebagage()
{
    $bagages = bagage::all();

    return view('comptables.comptablebagage', compact('bagages'));
}

public function directeurbagage()
{
    $bagages = bagage::all();

    return view('directeurs.directeurbagage', compact('bagages'));
}

}

