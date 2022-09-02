<!-- index.blade.php -->
@extends('directeurdash.dashboard')

@section('Tenin')



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

  <table class="table-striped table-bordered table-hover justify-content-center h-100" style="margin-top: 30px; width: 1250px; margin:auto; color:black; background-color:#003366">
  <!-- <table class="table-striped table-hover justify-content-center h-100" style="margin-top: 30px; width: 1150px; margin:auto; color:black"> -->
  <h3 class="text-center">Liste des Bagages</h3></br>
  <!-- <p><a href="{{ route('bagage.create')}}" class="btn btn-primary btnajout">Ajouter</a></p> -->

    <thead>
        <tr>
          <!-- <td class="text-center h5">ID</td> -->
          <td class="h5">Nature_Bagage</td>
          <td class="h5">Nombre_Bagage</td>
          <td class="h5">Montant_Payé</td>
          <td class="h5">N°_Bus</td>
          <td class="h5">Nombre_Place</td>
          <td class="h5">Nom_Passager</td>
          <td class="h5">Prenom_Passager</td>
          <td class="h5">Nombre_Ticket</td>
          <!-- <td colspan="2">Action</td> -->
        </tr>
    </thead>

    <tbody>
        @foreach($bagages as $bagages)
        <tr>
            <!-- <td class="text-center h5">{{$bagages->id}}</td></br>/ -->
            <td class="text-center h5">{{$bagages->nature}}</td>
            <td class="text-center h5">{{$bagages->nombrebagage}}</td>
            <td class="text-center h5">{{$bagages->montantpaye}}</td>
            <td class="text-center h5">{{$bagages->bus->numero}}</td>
            <td class="text-center h5">{{$bagages->bus->nombreplace}}</td>
            <td class="text-center h5">{{$bagages->passagers->nom}}</td>
            <td class="text-center h5">{{$bagages->passagers->prenom}}</td>
            <td class="text-center h5">{{$bagages->passagers->nombreplace}}</td>
            <!-- @if(Auth::check() && Auth::user()->statut=="gescourrier")
            <td class="text-center h5"><a href="{{ route('bagage.edit', $bagages->id)}}" class="btn btn-primary">Modifier</a>
            @endif
            </td>
            @if(Auth::check() && Auth::user()->statut=="gescourrier")
            <td class="text-center h5">
                <form action="{{ route('bagage.destroy', $bagages->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
                @endif
            </td>
            @if(Auth::check() && Auth::user()->statut=="gescourrier")
            <td class="text-center h5">
            <a href="{{ route('bagage.show', $bagages->id)}}" class="btn btn-primary">Détails</a>
            @endif
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
