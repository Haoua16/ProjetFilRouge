<?php

namespace App\Http\Controllers;

use App\Models\Comptable;
use App\Models\User;
use Illuminate\Http\Request;

class ComptableController extends Controller
{
    //
    public function viewForm()
    {
        return view ('comptables.comptableRegister');
    }


    public function registerCompt(Request $request)
    {
        //ici nous allons définir les normes que doivent respecter nos différents champs

       $verification = $request->validate(
           [
                'nom' => ['required', 'string', 'max:100'],
                'prenom' => ['required', 'string', 'max:150'],
                'telephone' => ['required', 'string', 'max:25'],
                'adresse' => ['required', 'string', 'max:100'],
                'email' => ['required', 'string', 'max:100'],
                'password' => ['required', 'string', 'min:8', 'max:50', 'confirmed'],
                
           ]
           );

           //ici nous allons définir les actions à faire si la vérification est bonne
           if($verification)
           {
               //nous allons créer un utilisateur avec les données saisis par l'utilisateur
               $user = User::create(
                [
                    'name' => $request['nom'],
                    'prenom' => $request['prenom'],
                    'telephone' => $request['telephone'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                    'statut' => 'comptable',
                ]

               );

               if($user)
               {
                $comptable = Comptable::create(
                    [
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'telephone' => $request['telephone'],
                        'adresse' => $request['adresse'],
                        'email' => $request['email'],
                        'password' => bcrypt($request['password']),
                        'userId' => $user->id,
                    ]
                );

                return redirect('/compt-register');
                 

               }
           }
    }
}


