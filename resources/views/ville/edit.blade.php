@extends('dashboard.dashboard')

@section('Haoua')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier la ville</h3>
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
      <form method="post" action="{{ route('ville.update', $villes->id) }}">
      @csrf
      @method('PATCH')
          <div class="form-group">
          <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <label for="villedepart">Ville de départ:</label>
              <input type="text" class="new" name="villedepart" value="{{ $villes->villedepart }}"/>
              <label for="villearrive">Ville d'arrivé:</label>
              <input type="text" class="new" name="villearrive" value="{{ $villes->villearrive }}"/>
          </div></br>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>

@endsection
