<!-- index.blade.php -->
@extends('gescourrierdash.dashboard')

@section('Mimi')

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
  <h3 class="text-center">Liste des Courriers</h3></br>

    <thead>
        <tr>
          <!-- <td>ID</td> -->
          <td class="h5">Nom_Destinateur</td>
          <td class="h5">Prénom_Destinateur</td>
          <td class="h5">N°_Destinateur</td>
          <td class="h5">Nom_Destinataire</td>
          <td class="h5">Prénom_Destinataire</td>
          <td class="h5">N°_Destinataire</td>
          <td class="h5">Nature</td>
          <td class="h5">Valeur</td>
          <td class="h5">Montant</td>
          <td class="h5">N°_Bus</td>
          <!-- <td class="h5">Nb_Ticket</td> -->
          <!-- <td colspan="2">Action</td> -->
        </tr>
    </thead>

    <tbody>
        @foreach($courriers as $courriers)
        <tr>
            <!-- <td>{{$courriers->id}}</td> -->
            <td class="text-center h5">{{$courriers->nomdestinateur}}</td>
            <td class="text-center h5">{{$courriers->prenomdestinateur}}</td>
            <td class="text-center h5">{{$courriers->numerodestinateur}}</td>
            <td class="text-center h5">{{$courriers->nomdestinataire}}</td>
            <td class="text-center h5">{{$courriers->prenomdestinataire}}</td>
            <td class="text-center h5">{{$courriers->numerodestinataire}}</td>
            <td class="text-center h5">{{$courriers->nature}}</td>
            <td class="text-center h5">{{$courriers->valeur}}</td>
            <td class="text-center h5">{{$courriers->montantpaye}}</td>
            <td class="text-center h5">{{$courriers->bus->numero}}</td>
            @if(Auth::check() && Auth::user()->statut=="gescourrier")
            <td><a href="{{ route('courrier.edit', $courriers->id)}}" class="btn btn-success btn-sm">Modifier</a>
            @endif
          </td>
            @if(Auth::check() && Auth::user()->statut=="gescourrier")
            <td>
                <form action="{{ route('courrier.destroy', $courriers->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
                </form>
            @endif
            </td>
            @if(Auth::check() && Auth::user()->statut=="gescourrier")
            <!-- <td>
            <a href="{{ route('courrier.show', $courriers->id)}}" class="btn btn-primary">Détails</a>
            @endif
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection

