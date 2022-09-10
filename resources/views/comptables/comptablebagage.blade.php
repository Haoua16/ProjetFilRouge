<!-- index.blade.php -->
@extends('comptabledash.dashboard')

@section('Solo')

<link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{ asset ('css/offcanvas.css')}}" rel="stylesheet">

  <!-- original table -->
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-bordered table-responsive" id="scrollb">
  <div class="titre"  style="margin-top: -7px; font-size: 150%;">Liste des Bagages</div></br>

  <thead>
        <tr>
          <!-- <td class="text-center h5">ID</td> -->
          <th scope="col">Nature_Bagage</th>
          <th scope="col">Nombre_Bagage</th>
          <th scope="col">Montant_Payé</th>
          <th scope="col">N°_Bus</th>
          <th scope="col">Nombre_Place</th>
          <th scope="col">Nom_Passager</th>
          <th scope="col">Prenom_Passager</th>
          <th scope="col">Nombre_Ticket</th>
          <!-- <td colspan="2">Action</td> -->
        </tr>
    </thead>
    <tbody>
        @foreach($bagages as $bagages)
        <tr>
            <!-- <td class="text-center h5">{{$bagages->id}}</td></br>/ -->
            <th scope="row">{{$bagages->nature}}</th>
            <td>{{$bagages->nombrebagage}}</td>
            <td>{{$bagages->montantpaye}}</td>
            <td>{{$bagages->bus->numero}}</td>
            <td>{{$bagages->bus->nombreplace}}</td>
            <td>{{$bagages->passagers->nom}}</td>
            <td>{{$bagages->passagers->prenom}}</td>
            <td>{{$bagages->passagers->nombreplace}}</td>
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