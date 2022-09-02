<?php

namespace App\Http\Controllers;

use App\Models\passager;
use App\Models\voyage;
use Illuminate\Http\Request;

class PassagerController extends Controller
{
        //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $passagers = passager::all();

    return view('passager.index', compact('passagers'));
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
    return view('passager.create', compact('voyages'));
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
            'numerotelephone' => 'required',
            'nombreplace' => 'required|max:255',
        ]);
    
        $passagers = passager::create($validatedData);
    
        return redirect('/passager')->with('success', 'passager ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passagers = passager::findOrFail($id);
        return view('passager.show', compact('passagers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $passagers = passager::findOrFail($id);

    return view('passager.edit', compact('passagers'));
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
        'numerotelephone' => 'required',
        'nombreplace' => 'required|max:255',
    ]);

    $passagers = passager::whereId($id)->update($validatedData);

    return redirect('/passager')->with('Success', 'passager mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $passagers = passager::findOrFail($id);
    $passagers->delete();

    return redirect('/passager')->with('success', 'passager supprimé avec succèss');
}
}
