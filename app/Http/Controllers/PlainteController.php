<?php

namespace App\Http\Controllers;
use App\Models\plainte;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlainteController extends Controller
{
       //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $plaintes = plainte::all();

    return view('plainte.index', compact('plaintes'));
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
    return view('plainte.create', compact('users'));
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
            'users_id' => 'required',
        ]);
    
    if ($validatedData){
        
        $users=Auth::user()->id;
        $plaintes = plainte::create([
            'message'=>$request['message'],
            'users_id'=>$users,   
        ]);
    
        return redirect('/plainte')->with('success', 'bus ajouté avec succèss');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plaintes = plainte::findOrFail($id);
        return view('plainte.show', compact('plaintes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

{
    $plaintes = plainte::findOrFail($id);

    return view('plainte.edit', compact('plaintes'));
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
        'users_id' => 'max:255',
    ]);

    $plaintes = plainte::whereId($id)->update($validatedData);

    return redirect('/plainte')->with('Success', 'bus mise à jour avec succèss');
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $plaintes = plainte::findOrFail($id);
    $plaintes->delete();

    return redirect('/plainte')->with('success', 'bus supprimé avec succèss');
}
}

