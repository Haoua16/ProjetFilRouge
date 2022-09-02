<!-- index.blade.php -->
@extends('directeurdash.dashboard')

@section('Tenin')



<link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{ asset ('css/offcanvas.css')}}" rel="stylesheet">

<style>
  /* .uper {
    margin-top: 40px;
  } */

  thead {
    font-weight: bold;
    text-align: center;
    background-color: #800000;
    cursor: pointer;
  }

  /* .thead:hover {
    color:white;
  } */

  h3{
    text-align: center;
    margin-top: -60px;
    text-transform: uppercase;
  }

  td{
    color: white;
  }

  #uper{
    background-color: white;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table-striped table-bordered table-hover justify-content-center h-100" style="margin-top: 30px; width: 1200px; margin:auto; color:black; background-color:#003366">
  <h3 class="text-center">Liste des Voyages</h3></br>

    <thead>
        <tr>
          <!-- <td>ID</td> -->
          <td class="h5">Ville de départ</td>
          <td class="h5">Ville d'arrivé</td>
          <td class="h5">Nom_Chauffeur</td>
          <td class="h5">Prenom_Chauffeur</td>
          <td class="h5">N°_bus</td>
          <td class="h5">Place du bus</td>
          <td class="h5">Date de départ</td>
          <td class="h5">Horaire</td>
          <td class="h5">Rendez-Vous</td>
          <td colspan="2" class="h5">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($voyages as $voyages)
        <tr>
            <!-- <td>{{$voyages->id}}</td> -->
            <td class="text-center h5">{{$voyages->villedepart}}</td>
            <td class="text-center h5">{{$voyages->villearrive}}</td>
            <td class="text-center h5">{{$voyages->chauffeurs->nom}}</td>
            <td class="text-center h5">{{$voyages->chauffeurs->prenom}}</</td>
            <td class="text-center h5">{{$voyages->bus->numero}}</td>
            <td class="text-center h5">{{$voyages->bus->nombreplace}}</</td>
            <td class="text-center h5">{{$voyages->datedepart}}</td>
            <td class="text-center h5">{{$voyages->heuredepart}}</td>
            <td class="text-center h5">{{$voyages->rendezvous}}</td>
<!--            
            @if(Auth::check() && Auth::user()->statut=="administrateur")
             <td><a href="{{ route('voyage.edit', $voyages->id)}}" class="btn btn-success">Modifier</a>
                @endif
            </td>
            @if(Auth::check() && Auth::user()->statut=="administrateur")
            <td>
                <form action="{{ route('voyage.destroy', $voyages->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
                @endif
            </td> -->
            <!-- @if(Auth::check() && Auth::user()->statut=="administrateur")
            <td>
            <a href="{{ route('voyage.show', $voyages->id)}}" class="btn btn-primary">Détails</a>
            @endif -->
            </td>
            <td>
            <a href="{{ route('create.voyage', $voyages->id)}}" class="btn btn-primary btn-sm" style="background-color: #800000">Réserver</a>
           
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection  

