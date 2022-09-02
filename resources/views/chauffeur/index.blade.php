@extends('directeurdash.dashboard')

@section('Tenin')

<style>
  .uper {
    margin-top: 40px;
  }

  thead {
    font-weight: bold;
    text-align: center;
    background-color: white;
    cursor: pointer;
  }

  /* button{
    margin-left: 30%;
  } */

  /* .thead:hover {
    color:white;
  } */

  h3{
    text-align: center;
    margin-top: -60px;
    text-transform: uppercase;
  }
  .uper{
    background-color: white;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  

  <table class="table-striped table-hover table-bordered justify-content-center h-100" style="margin-top: 30px; width: 900px; margin:auto; color:black">
  <h3 class="text-center">Liste des Chauffeurs</h3></br>

    <thead>
        <tr>
          <!-- <td>ID</td> -->
          <td class="h5">Nom</td>
          <td class="h5">Prenom</td>
          <td class="h5">Ville</td>
          <td colspan="">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($chauffeurs as $chauffeurs)
        <tr>
            <!-- <td>{{$chauffeurs->id}}</td> -->
            <td class="text-center h5">{{$chauffeurs->nom}}</td>
            <td class="text-center h5">{{$chauffeurs->prenom}}</td>
            <td class="text-center h5">{{$chauffeurs->ville}}</td>
            @if(Auth::check() && Auth::user()->statut=="directeur")
            <td><a href="{{ route('chauffeur.edit', $chauffeurs->id)}}" class="btn btn-success btn-sm">Modifier</a>
            @endif
            </td>
            @if(Auth::check() && Auth::user()->statut=="directeur")
            <td>
                <form action="{{ route('chauffeur.destroy', $chauffeurs->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
                </form>
            @endif
            </td>
            <!-- @if(Auth::check() && Auth::user()->statut=="directeur")
            <td>
            <a href="{{ route('chauffeur.show', $chauffeurs->id)}}" class="btn btn-primary">Détails</a>
            @endif
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection

