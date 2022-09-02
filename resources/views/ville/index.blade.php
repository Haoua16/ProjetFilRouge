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
  <h3 class="text-center">Liste des Villes</h3></br>

    <thead>
        <tr>
          <!-- <td>ID</td> -->
          <td class="h5">Ville de départ</td>
          <td class="h5">Ville d'arrivé</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($villes as $villes)
        <tr>
            <!-- <td>{{$villes->id}}</td> -->
            <td class="text-center h5">{{$villes->villedepart}}</td>
            <td class="text-center h5">{{$villes->villearrive}}</td>
            <td><a href="{{ route('ville.edit', $villes->id)}}" class="btn btn-success btn-sm">Modifier</a></td>
            <td>
                <form action="{{ route('ville.destroy', $villes->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
                </form>
            </td>
            <!-- <td>
            <a href="{{ route('ville.show', $villes->id)}}" class="btn btn-primary">Détails</a>
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection

