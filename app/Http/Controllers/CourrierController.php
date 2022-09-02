<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\courrier;
use Illuminate\Http\Request;

class CourrierController extends Controller
{
       //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $courriers = courrier::all();

    return view('courrier.index', compact('courriers'));
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
    return view('courrier.create', compact('bus'));
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
        'nomdestinateur' => 'required|max:255',
        'prenomdestinateur' => 'required|max:255',
        'numerodestinateur' => 'required|max:255',
        'nomdestinataire' => 'required|max:255',
        'prenomdestinataire' => 'required|max:255',
        'numerodestinataire' => 'required|max:255',
        'nature' => 'required|max:255',
        'valeur' => 'required|max:255',
        'montantpaye' => 'required|max:255',
        'buses_id' => 'max:255',
        ]);
    
        $courriers = courrier::create($validatedData);
    
        return redirect('/courrier')->with('success', 'courrier ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courriers = courrier::findOrFail($id);
        return view('courrier.show', compact('courriers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $courriers = courrier::findOrFail($id);

    return view('courrier.edit', compact('courriers'));
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
        'nomdestinateur' => 'required|max:255',
        'prenomdestinateur' => 'required|max:255',
        'numerodestinateur' => 'required|max:255',
        'nomdestinataire' => 'required|max:255',
        'prenomdestinataire' => 'required|max:255',
        'numerodestinataire' => 'required|max:255',
        'nature' => 'required|max:255',
        'valeur' => 'required|max:255',
        'montantpaye' => 'required|max:255',
        'buses_id' => 'max:255',
    ]);

    $courriers = courrier::whereId($id)->update($validatedData);

    return redirect('/courrier')->with('Success', 'courrier mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $courriers = courrier::findOrFail($id);
    $courriers->delete();

    return redirect('/courrier')->with('success', 'courrier supprimé avec succèss');
}

public function comptablecourrier()
{
    $courriers = courrier::all();

    return view('comptables.comptablecourrier', compact('courriers'));
}

public function directeurcourrier()
{
    $courriers = courrier::all();

    return view('directeurs.directeurcourrier', compact('courriers'));
}

}

