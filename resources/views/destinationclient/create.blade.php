<!-- create.blade.php -->
@extends('dashboard.dashboard')

@section('Haoua')

<style>
  .uper {
    
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h2>Programmer un voyage</h2>
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

      <form method="post" action="{{ route('destinationclient.index') }}">
         @csrf
          <div class="container">
              <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nombreplace">Nombre de place:</label>
                      <input type="time" class="new form-control" name="nombreplace"/>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="voyages_id">Voyages</label>
                      <select style="color:#41A7A5" aria-label="Default select example" name="voyages_id" id="Class-select form-control">
                    </div>
                  </div>
              </div>

                            @foreach($voyages as $voyages)
                            <option value="{{$voyages->id}}">{{$voyages->villedepart}} {{$voyages->villearrive}}</option>
                            @endforeach
                       </select>
        </div>
          <button type="submit" class="btn btn-primary form-control">Ajouter</button>
      </form>
  </div>
</div>

@endsection
