<?php

namespace App\Http\Controllers;

use App\Models\ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
         //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $villes = ville::all();

    return view('ville.index', compact('villes'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // CarController.php


public function create()
{
    return view('ville.create');
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
        ]);
    
        $villes = ville::create($validatedData);
    
        return redirect('/ville')->with('success', 'ville ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $villes = ville::findOrFail($id);
        return view('ville.show', compact('villes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $villes = ville::findOrFail($id);

    return view('ville.edit', compact('villes'));
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
    ]);

    $villes = ville::whereId($id)->update($validatedData);

    return redirect('/ville')->with('Success', 'ville mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $villes = ville::findOrFail($id);
    $villes->delete();

    return redirect('/ville')->with('success', 'ville supprimé avec succèss');
}
}
