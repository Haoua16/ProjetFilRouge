<!-- index.blade.php -->
@extends('dashboard.dashboard')

@section('Haoua')

<link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{ asset ('css/offcanvas.css')}}" rel="stylesheet">

<style>
  .uper {
    margin-top: 40px;
  }

  .thead {
    font-weight: bold;
    text-align: center;
    background-color: black;
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

  <table class="table-striped table-hover justify-content-center h-100" style="margin-top: 30px; width: 1200px; margin:auto; color:black">
  <h3 class="text-center">Mes Voyages</h3></br>
    <thead>
        <tr>
          <!-- <td>ID</td> -->
          <!-- <td>Date de réservation</td> -->
          <td>Nombre de ticket</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Téléphone</td>
          <td>Destination</td>
          <td>Date</td>
          <td>Heure</td>
          <td>Rendez-Vous</td>
          <!-- <td colspan="2">Action</td> -->
        </tr>
    </thead>

    <tbody>
        @foreach($reservations as $reservations)
        <tr>
            <!-- <td>{{$reservations->id}}</td> -->
            <!-- <td>{{$reservations->date}}</td> -->
            <td>{{$reservations->nombreplace}}</td>
            <td>{{$reservations->User->name}}</td>
            <td>{{$reservations->User->prenom}}</td>
            <td>{{$reservations->User->telephone}}</td>
            <td>{{$reservations->voyages->villearrive}}</td>
            <td>{{$reservations->voyages->datedepart}}</td>
            <td>{{$reservations->voyages->heuredepart}}</td>
            <td>{{$reservations->voyages->rendezvous}}</td>
            <!-- <td><a href="{{ route('reservation.edit', $reservations->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('reservation.destroy', $reservations->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
            <td>
            <a href="{{ route('reservation.show', $reservations->id)}}" class="btn btn-primary">Détails</a>
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection

