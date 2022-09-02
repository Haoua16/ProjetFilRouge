@extends('dashboard.dashboard')

@section('Haoua')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier le passager</h3>
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
      <form action="{{ route('passager.update', $passager->id) }}" method="post">
      @csrf
      @method('PATCH')
          <div class="form-group">
              <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <label for="nom">Nom:</label>
              <input type="text" class="new" name="nom" value="{{ $passager->nom}}"/>
              <label for="prenom">Prénom:</label>
              <input type="text" class="new" name="prenom" value="{{ $passager->prenom}}"/>
              <label for="numerotelephone">Numéro de Téléphone:</label>
              <input type="text" class="new" name="numerotelephone" value="{{ $passager->numerotelephone}}"/>
              <label for="nombreplace">Nombre de place:</label>
              <input type="number" class="new" name="nombreplace" value="{{ $passager->nombreplace}}"/>
          </div></br>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>

@endsection
