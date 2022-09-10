<!-- create.blade.php -->
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
  <div class="titre"  style="margin-top: -7px; font-size: 150%;">Les plaintes</div></br>

  <thead>
  <tr>
      <!-- <td>ID</td> -->
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Message</th>
      <!-- <th scope="col" colspan="2">Action</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($plaintes as $plaintes)
    <tr>
       <!-- <td>{{$plaintes->id}}</td> -->
        <th scope="row">{{$plaintes->User->name}}</th>
        <td >{{$plaintes->User->prenom}}</td>
        <td >{{$plaintes->User->telephone}}</td>
        <td >{{$plaintes->message}}</td>
        <!-- <td>
            <a href="{{ route('plainte.edit', $plaintes->id)}}" class="btn btn-success btn-sm">Modifier</a>
        </td>
        <td>
            <form action="{{ route('plainte.destroy', $plaintes->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
            </form>
        </td> -->
  <!-- <td>
            <a href="{{ route('plainte.show', $plaintes->id)}}" class="btn btn-primary">Détails</a>
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

