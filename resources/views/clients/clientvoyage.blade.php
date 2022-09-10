<!-- index.blade.php -->

@extends('clientdash.dashboard')

@section('Haby')


<link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{ asset ('css/offcanvas.css')}}" rel="stylesheet">

  <!-- original table -->
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-bordered table-responsive" id="scrollb">
  <div class="titre"  style="margin-top: -7px; font-size: 150%;">Liste des Voyages</div></br>

  <thead>
    <tr>
      <th scope="col">Ville_Départ</th>
      <th scope="col">Ville_D'arrivé</th>
      <th scope="col">Nom_Chauffeur</th>
      <th scope="col">Prenom_Chauffeur</th>
      <th scope="col">N°_bus</th>
      <th scope="col">Place_bus</th>
      <th scope="col">Date</th>
      <th scope="col">Horaire</th>
      <th scope="col">RDV</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($voyages as $voyages)
    <tr>
      <th scope="row">{{$voyages->villedepart}}</th>
      <td>{{$voyages->villearrive}}</td>
      <td>{{$voyages->chauffeurs->nom}}</td>
      <td>{{$voyages->chauffeurs->prenom}}</</td>
      <td>{{$voyages->bus->numero}}</td>
      <td>{{$voyages->bus->nombreplace}}</</td>
      <td>{{$voyages->datedepart}}</td>
      <td>{{$voyages->heuredepart}}</td>
      <td>{{$voyages->rendezvous}}</td>
      <!-- <td>
      <a href="{{ route('voyage.edit', $voyages->id)}}" class="btn btn-success btn-sm">Modifier</a>
      </td>
      <td>
                <form action="{{ route('voyage.destroy', $voyages->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
                </form>             
            </td>
     <td>
            <a href="{{ route('voyage.show', $voyages->id)}}" class="btn btn-primary">Détails</a>
            
            </td> -->
           
            
            <td>
            <a href="{{ route('create.voyage', $voyages->id)}}" class="btn btn-primary btn-sm">Réserver</a>
           
            </td>
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
