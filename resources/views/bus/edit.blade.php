@extends('directeurdash.dashboard')

@section('Tenin')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier le bus</h3>
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
      <form action="{{ route('bus.update', $bus->id) }}" method="post">
      @csrf
      @method('PATCH')
          <div class="form-group">
          <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <label for="numero">Numéro de bus:</label>
              <input type="number" class="new" name="numero" value="{{ $bus->numero }}"/>
              <label for="nombreplace">Nombre de place:</label>
              <input type="number" class="new" name="nombreplace" value="{{ $bus->nombreplace }}"/>
          </div></br>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>

@endsection
