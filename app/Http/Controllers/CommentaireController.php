<?php

namespace App\Http\Controllers;

use App\Models\commentaire;
use App\Models\User;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
       //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $commentaires = commentaire::all();

    return view('commentaire.index', compact('commentaires'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // CarController.php


public function create()
{
    $users = User::all();
    return view('commentaire.create', compact('users'));
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
            'message' => 'required|max:255',
            'userId' => 'max:255'
        ]);
    
        $commentaires = commentaire::create($validatedData);
    
        return redirect('/commentaire')->with('success', 'bus ajouté avec succèss');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commentaires = commentaire::findOrFail($id);
        return view('commentaire.show', compact('commentaires'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $commentaires = commentaire::findOrFail($id);

    return view('commentaire.edit', compact('commentaires'));
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
        'message' => 'required|max:255',
        'userId' => 'max:255',
    ]);

    $commentaires = commentaire::whereId($id)->update($validatedData);

    return redirect('/commentaire')->with('Success', 'bus mise à jour avec succèss');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $commentaires = commentaire::findOrFail($id);
    $commentaires->delete();

    return redirect('/commentaire')->with('success', 'bus supprimé avec succèss');
}
}

