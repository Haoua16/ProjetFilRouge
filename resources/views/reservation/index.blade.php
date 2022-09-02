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
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table-striped table-bordered table-hover justify-content-center h-100" style="margin-top: 30px; width: 600px; margin:auto; color:black; background-color:#003366">
  <!-- <table class="table-striped table-hover justify-content-center h-100" style="margin-top: 30px; width: 1200px; margin:auto; color:black"> -->
  <h3 class="text-center">Liste des Réservations</h3></br>
    <thead>
        <tr>
          <!-- <td>ID</td> -->
          <!-- <td>Date de réservation</td> -->
          <td class="h5">Nb_Ticket</td>
          <td class="h5">Nom</td>
          <td class="h5">Prenom</td>
          <td class="h5">Téléphone</td>
          <td class="h5">Destination</td>
          <td class="h5">N°_bus</td>
          <td class="h5">Place_bus</td>
          <td class="h5">Nom_Chauffeur</td>
          <td class="h5">Prenom_Chauffeur</td>
          <td class="h5">Date</td>
          <td class="h5">Heure</td>
          <td class="h5">RDV</td>
          <td colspan="2" class="h5">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($reservations as $reservations)
        <tr>
            <!-- <td>{{$reservations->id}}</td> -->
            <!-- <td>{{$reservations->date}}</td> -->
            <td class="text-center h5">{{$reservations->nombreplace}}</td>
            <td class="text-center h5">{{$reservations->User->name}}</td>
            <td class="text-center h5">{{$reservations->User->prenom}}</td>
            <td class="text-center h5">{{$reservations->User->telephone}}</td>
            <td class="text-center h5">{{$reservations->voyages->villearrive}}</td>
            <td class="text-center h5">{{$reservations->voyages->bus->numero}}</td>
            <td class="text-center h5">{{$reservations->voyages->bus->nombreplace}}</td>
            <td class="text-center h5">{{$reservations->voyages->chauffeurs->nom}}</td>
            <td class="text-center h5">{{$reservations->voyages->chauffeurs->prenom}}</td>
            <td class="text-center h5">{{$reservations->voyages->datedepart}}</td>
            <td class="text-center h5">{{$reservations->voyages->heuredepart}}</td>
            <td class="text-center h5">{{$reservations->voyages->rendezvous}}</td>
            <td><a href="{{ route('reservation.edit', $reservations->id)}}" class="btn btn-success btn-sm">Modifier</a></td>
            <td>
                <form action="{{ route('reservation.destroy', $reservations->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
                </form>
            </td>
            <!-- <td>
            <a href="{{ route('reservation.show', $reservations->id)}}" class="btn btn-primary">Détails</a>
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection

