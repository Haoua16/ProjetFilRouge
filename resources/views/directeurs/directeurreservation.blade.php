<!-- index.blade.php -->

@extends('directeurdash.dashboard')

@section('Tenin')

<link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{ asset ('css/offcanvas.css')}}" rel="stylesheet">

  <!-- original table -->
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-bordered table-responsive" id="scrollb">
  <div class="titre"  style="margin-top: -7px; font-size: 150%;">Liste des Réservations</div></br>

  <thead>
  <tr>
      <!-- <td>ID</td> -->
      <!-- <td>Date de réservation</td> -->
      <th scope="col">Nb_Ticket</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Destination</th>
      <th scope="col">N°_bus</th>
      <th scope="col">Place_bus</th>
      <th scope="col">Nom_Chauffeur</th>
      <th scope="col">Prenom_Chauffeur</th>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
      <th scope="col">RDV</th>
      <th scope="col">Statut</th>
      <!-- <th scope="col" colspan="2">Action</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($reservations as $reservations)
    <tr>
       <!-- <td>{{$reservations->id}}</td> -->
       <!-- <td>{{$reservations->date}}</td> -->
        <th scope="row">{{$reservations->nombreplace}}</th> 
        <td >{{$reservations->User->name}}</td>
        <td >{{$reservations->User->prenom}}</td>
        <td >{{$reservations->User->telephone}}</td>
        <td >{{$reservations->voyages->villearrive}}</td>
        <td >{{$reservations->voyages->bus->numero}}</td>
        <td >{{$reservations->voyages->bus->nombreplace}}</td>
        <td >{{$reservations->voyages->chauffeurs->nom}}</td>
        <td >{{$reservations->voyages->chauffeurs->prenom}}</td>
        <td >{{$reservations->voyages->datedepart}}</td>
        <td >{{$reservations->voyages->heuredepart}}</td>
        <td >{{$reservations->voyages->rendezvous}}</td>
        <td >{{$reservations->statut}}</td>
        <!-- <td>
        <td>
            <a href="{{ route('reservation.edit', $reservations->id)}}" class="btn btn-success btn-sm">Modifier</a>
        </td>
        <td>
            <form action="{{ route('reservation.destroy', $reservations->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
            </form>
        </td>
        <td>
            <a href="{{ route('reservation.show', $reservations->id)}}" class="btn btn-primary">Détails</a>
        </td> -->
    </tr>
        @endforeach
  </tbody>
</table>
</div>

  <!-- End original table -->

  
<script>
  $(document).ready(function () {
    $('#scrollb').DataTable({
        scrollX: true,
    });
});
</script>

@endsection  
