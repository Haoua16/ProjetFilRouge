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

  <table class="table table-bordered table-responsive" id="scrollb" style="margin-left: 11%;">
  <div class="titre"  style="margin-top: -7px; font-size: 150%;">Liste des Bus</div></br>

  <thead>
        <tr>
          <!-- <td>ID</td> -->
          <th scope="col">Numéro</th>
          <th scope="col">Nombre de place</th>
          <th scope="col">Nom_chauffeur</th>
          <th scope="col">Prenom_chauffeur</th>
          <th scope="col" colspan="2">Action</th>
    </thead>
            
        <tbody>
        @foreach($bus as $bus)
        <tr>
            <!-- <td>{{$bus->id}}</td> -->
            <th scope="row">{{$bus->numero}}</th>
            <td>{{$bus->nombreplace}}</td>
            <td>{{$bus->chauffeurs->nom}}</td>
            <td>{{$bus->chauffeurs->prenom}}</td>
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




