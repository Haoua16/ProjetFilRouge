<!-- index.blade.php -->
@extends('dashboard.dashboard')

@section('Haoua')

<link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{ asset ('css/offcanvas.css')}}" rel="stylesheet">

  <!-- original table -->
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-bordered table-responsive" id="scrollb">
  <div class="titre"  style="margin-top: -7px; font-size: 150%;">Liste des Passagers</div></br>

    <thead>
        <tr>
          <!-- <td>ID</td> -->
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Nombre_Ticket</th>
          <th scope="col">Destination</th>
          <th scope="col">N°_bus</th>
          <th scope="col">Place_bus</th>
          <th scope="col">Nom_Chauffeur</th>
          <th scope="col">Prenom_Chauffeur</th>
          <th scope="col">Date</th>
          <th scope="col">Heure</th>
          <th scope="col">Rendez-Vous</th>
          <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach($passagers as $passagers)
        <tr>
            <!-- <td>{{$passagers->id}}</td> -->
            <th scope="row">{{$passagers->nom}}</th>
            <td>{{$passagers->prenom}}</td>
            <td>{{$passagers->numerotelephone}}</td>
            <td>{{$passagers->nombreplace}}</td>
            <td>{{$passagers->voyages->villedepart}}</td>
            <td>{{$passagers->voyages->villearrive}}</td>
            <td>{{$passagers->voyages->bus->numero}}</td>
            <td>{{$passagers->voyages->bus->nombreplace}}</td>
            <td>{{$passagers->voyages->chauffeurs->nom}}</td>
            <td>{{$passagers->voyages->chauffeurs->prenom}}</td>
            <td>{{$passagers->voyages->heuredepart}}</td>
            <td>{{$passagers->voyages->rendezvous}}</td>
            @if(Auth::check() && Auth::user()->statut=="administrateur")
            <td>
                <a href="{{ route('passager.edit', $passagers->id)}}" class="btn btn-success btn-sm">Modifier</a>
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

