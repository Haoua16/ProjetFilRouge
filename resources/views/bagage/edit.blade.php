@extends('gescourrierdash.dashboard')

@section('Mimi')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier le bagage</h3>
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('bagage.update', $bagages->id) }}" >
      @csrf
              @method('PATCH')
              <div class="form-group">
              <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <label for="nature">Nature du bagage:</label>
              <input type="text" class="new" name="nature" value="{{ $bagages->nature }}"/>
              <label for="nombrebagage">Nombre du bagage:</label>
              <input type="text" class="new" name="nombrebagage" value="{{ $bagages->nombrebagage }}"/>
              <label for="montantpaye">Montant payé:</label>
              <input type="text" class="new" name="montantpaye" value="{{ $bagages->montantpaye }}"/>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection
