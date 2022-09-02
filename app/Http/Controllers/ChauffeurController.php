<?php

namespace App\Http\Controllers;

use App\Models\chauffeur;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $chauffeurs = chauffeur::all();

    return view('chauffeur.index', compact('chauffeurs'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // CarController.php


public function create()
{
    return view('chauffeur.create');
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
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'ville' => 'required',
        ]);
    
        $chauffeurs = chauffeur::create($validatedData);
    
        return redirect('/chauffeur')->with('success', 'Chauffeur ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chauffeurs = chauffeur::findOrFail($id);
        return view('chauffeur.show', compact('chauffeurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $chauffeurs = chauffeur::findOrFail($id);

    return view('chauffeur.edit', compact('chauffeurs'));
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
        'nom' => 'required|max:255',
        'prenom' => 'required|max:255',
        'ville' => 'required',
    ]);

    $chauffeurs = chauffeur::whereId($id)->update($validatedData);

    return redirect('/chauffeur')->with('Success', 'Chauffeur mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $chauffeurs = chauffeur::findOrFail($id);
    $chauffeurs->delete();

    return redirect('/chauffeur')->with('success', 'Chauffeur supprimé avec succèss');
}

}
