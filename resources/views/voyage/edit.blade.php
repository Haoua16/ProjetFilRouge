
@extends('dashboard.dashboard')

@section('Haoua')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier le courrier</h3>
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
      <form method="post" action="{{ route('voyage.update', $voyages->id) }}" >
      @csrf
              @method('PATCH')
              <div class="form-group">
              <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <label for="villedepart">Ville du départ:</label>
              <input type="text" class="new" name="villedepart" value="{{ $voyages->villedepart }}"/>

              <label for="villearrive">Ville d'arrivé:</label>
              <input type="text" class="new" name="villearrive" value="{{ $voyages->villearrive }}"/>

              <label for="datedepart">Date de départ:</label>
              <input type="date" class="new" name="datedepart" value="{{ $voyages->datedepart }}"/>

              <label for="heuredepart">Heure du départ:</label>
              <input type="time" class="new" name="heuredepart" value="{{ $voyages->heuredepart }}"/>

              <label for="rendezvous">Heure du Rendez-Vous:</label>
              <input type="time" class="new" name="rendezvous" value="{{ $voyages->rendezvous }}"/>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>

@endsection
