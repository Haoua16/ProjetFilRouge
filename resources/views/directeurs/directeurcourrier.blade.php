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
  <div class="titre"  style="margin-top: -7px; font-size: 150%;">Liste des Courriers</div></br>

  <thead>
        <tr>
          <!-- <td>ID</td> -->
          <th scope="col">Nom_Destinateur</th>
          <th scope="col">Prénom_Destinateur</th>
          <th scope="col">N°_Destinateur</th>
          <th scope="col">Nom_Destinataire</th>
          <th scope="col">Prénom_Destinataire</th>
          <th scope="col">N°_Destinataire</th>
          <th scope="col">Nature</th>
          <th scope="col">Valeur</th>
          <th scope="col">Montant</th>
          <th scope="col">N°_Bus</th>
          <!-- <th scope="col">Nb_Ticket</th> -->
          <!-- <th colspan="2">Action</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach($courriers as $courriers)
        <tr>
            <!-- <td>{{$courriers->id}}</td> -->
            <th scope="row">{{$courriers->nomdestinateur}}</t>
            <td>{{$courriers->prenomdestinateur}}</td>
            <td>{{$courriers->numerodestinateur}}</td>
            <td>{{$courriers->nomdestinataire}}</td>
            <td>{{$courriers->prenomdestinataire}}</td>
            <td>{{$courriers->numerodestinataire}}</td>
            <td>{{$courriers->nature}}</td>
            <td>{{$courriers->valeur}}</td>
            <td>{{$courriers->montantpaye}}</td>
            <td>{{$courriers->bus->numero}}</td>
            <!-- <td class="text-center h5">{{$courriers->bus->nombreplace}}</</td> -->
            <!-- @if(Auth::check() && Auth::user()->statut=="gescourrier")
            <td><a href="{{ route('courrier.edit', $courriers->id)}}" class="btn btn-primary">Modifier</a>
            @endif
          </td>
            @if(Auth::check() && Auth::user()->statut=="gescourrier")
            <td>
                <form action="{{ route('courrier.destroy', $courriers->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            @endif
            </td> -->
<!--             
            <td>
            <a href="{{ route('comptable.courrier', $courriers->id)}}" class="btn btn-primary">Détails</a>
            
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

