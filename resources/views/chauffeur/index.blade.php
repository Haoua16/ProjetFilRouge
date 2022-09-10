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

  <table class="table table-bordered table-responsive" id="scrollb" style="margin-left: 25%;">
  <div class="titre"  style="margin-top: -7px; font-size: 150%;">Liste des Chauffeurs</div></br>

 <thead>
        <tr>
          <!-- <td>ID</td> -->
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Ville</th>
          <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($chauffeurs as $chauffeurs)
        <tr>
            
            <th scope="row">{{$chauffeurs->nom}}</th>
            <td>{{$chauffeurs->prenom}}</td>
            <td>{{$chauffeurs->ville}}</td>
            @if(Auth::check() && Auth::user()->statut=="directeur")
            <td><a href="{{ route('chauffeur.edit', $chauffeurs->id)}}" class="btn btn-success btn-sm">Modifier</a>
            @endif
            </td>
            @if(Auth::check() && Auth::user()->statut=="directeur")
            <td>
                <form action="{{ route('chauffeur.destroy', $chauffeurs->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
                </form>
            @endif
            </td>
            <!-- @if(Auth::check() && Auth::user()->statut=="directeur")
            <td>
            <a href="{{ route('chauffeur.show', $chauffeurs->id)}}" class="btn btn-primary">Détails</a>
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



