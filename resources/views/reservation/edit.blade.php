@extends('clientdash.dashboard')

@section('Haby')


<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier la reservation</h3>
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
      <form action="{{ route('reservation.update', $reservations->id) }}" method="POST">
      @csrf
      @method('PATCH')
          <div class="form-group">
              <label for="nombreplace">Statut:</label>
              <select name="statut" id="">
                <option value="">Changer le Statut</option>
                <option value="Annulé">Annulé</option>
              </select>
          </div></br>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>

@endsection

