<!-- index.blade.php -->
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

  <table class="table-striped table-hover table-bordered justify-content-center h-100" style="margin-top: 30px; width: 1000px; margin:auto; color:black">
  <h3 class="text-center">Liste des Bus</h3></br>

    <thead style="width: 800px">
        <tr>
          <!-- <td>ID</td> -->
          <td class="h5">Numéro</td>
          <td class="h5">Nombre de place</td>
          <td class="h5">Nom_chauffeur</td>
          <td class="h5">Prenom_chauffeur</td>
          <td class="h5" colspan="3">Action</td>
    </thead>

    <tbody>
        @foreach($bus as $bus)
        <tr>
            <!-- <td>{{$bus->id}}</td> -->
            <td class="text-center h5">{{$bus->numero}}</td>
            <td class="text-center h5">{{$bus->nombreplace}}</td>
            <td class="text-center h5">{{$bus->chauffeurs->nom}}</td>
            <td class="text-center h5">{{$bus->chauffeurs->prenom}}</td>
            @if(Auth::check() && Auth::user()->statut=="directeur")
            <td><a href="{{ route('bus.edit', $bus->id)}}" class="btn btn-success btn-sm">Modifier</a>
            @endif
            </td>
            @if(Auth::check() && Auth::user()->statut=="directeur")
            <td>
                <form action="{{ route('bus.destroy', $bus->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
                </form>
            @endif
            </td>
            <!-- @if(Auth::check() && Auth::user()->statut=="directeur")
            <td>
            <a href="{{ route('bus.show', $bus->id)}}" class="btn btn-primary btn-sm">Détails</a>
            @endif
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection



