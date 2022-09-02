<!-- index.blade.php -->
@extends('dashboard.dashboard')

@section('Haoua')

<link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{ asset ('css/offcanvas.css')}}" rel="stylesheet">

<style>
  .uper {
    margin-top: 40px;
  }

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
  <h3 class="text-center">Liste des Passagers</h3></br>

    <thead>
        <tr>
          <!-- <td>ID</td> -->
          <td class="h5">Nom</td>
          <td class="h5">Prenom</td>
          <td class="h5">Numero de téléphone</td>
          <td class="h5">Nombre de place</td>
          <td class="h5">Destination</td>
          <td class="h5">N°_bus</td>
          <td class="h5">Place_bus</td>
          <td class="h5">Nom_Chauffeur</td>
          <td class="h5">Prenom_Chauffeur</td>
          <td class="h5">Date</td>
          <td class="h5">Heure</td>
          <td class="h5">Rendez-Vous</td>
          <td colspan="2" class="h5">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($passagers as $passagers)
        <tr>
            <!-- <td>{{$passagers->id}}</td> -->
            <td class="text-center h5">{{$passagers->nom}}</td>
            <td class="text-center h5">{{$passagers->prenom}}</td>
            <td class="text-center h5">{{$passagers->numerotelephone}}</td>
            <td class="text-center h5">{{$passagers->nombreplace}}</td>
            <td class="text-center h5">{{$passagers->voyages->villedepart}}</td>
            <td class="text-center h5">{{$passagers->voyages->villearrive}}</td>
            <td class="text-center h5">{{$passagers->voyages->bus->numero}}</td>
            <td class="text-center h5">{{$passagers->voyages->bus->nombreplace}}</td>
            <td class="text-center h5">{{$passagers->voyages->chauffeurs->nom}}</td>
            <td class="text-center h5">{{$passagers->voyages->chauffeurs->prenom}}</td>
            <td class="text-center h5">{{$passagers->voyages->heuredepart}}</td>
            <td class="text-center h5">{{$passagers->voyages->rendezvous}}</td>
            @if(Auth::check() && Auth::user()->statut=="administrateur")
            <td><a href="{{ route('passager.edit', $passagers->id)}}" class="btn btn-success btn-sm">Modifier</a>
            @endif
        </td>
          @if(Auth::check() && Auth::user()->statut=="administrateur")
            <td>
                <form action="{{ route('passager.destroy', $passagers->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
                </form>
            @endif
            </td>
            <!-- @if(Auth::check() && Auth::user()->statut=="administrateur")
            <td>
            <a href="{{ route('passager.show', $passagers->id)}}" class="btn btn-primary">Détails</a>
            @endif
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection

