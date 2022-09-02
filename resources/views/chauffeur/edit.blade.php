
@extends('directeurdash.dashboard')

@section('Tenin')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier le chauffeur</h3>
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
      <form method="post" action="{{ route('chauffeur.update', $chauffeurs->id) }}" >
      @csrf
              @method('PATCH')
          <div class="form-group">
              <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <label for="nom">Nom:</label>
              <input type="text" class="new" name="nom" value="{{ $chauffeurs->nom }}"/>
              <label for="prenom">Prénom:</label>
              <input type="text" class="new" name="prenom" value="{{ $chauffeurs->prenom }}"/>
              <label for="ville">Ville:</label>
              <select name="ville" id="Class-select">
              <option value="Bamako">Bamako</option>
              <option value="Segou">Segou</option>
              <option value="Sikasso">Sikasso</option>
              <option value="Sevare">Sevare</option>
              <option value="Gao">Gao</option>
              </select>
          </div></br>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>

@endsection
