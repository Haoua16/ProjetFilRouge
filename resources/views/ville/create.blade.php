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
    <h2>Enregistrer une ville</h2>
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

      <form method="post" action="{{ route('ville.store') }}">
         @csrf
         <div class="container">
            <h3>Renseignements</h3></br>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="villedepart">Ville de départ:</label>
                        <input type="text" class="new form-control" name="villedepart"/>
                      </div>
                  </div>             
                </div>
                <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="villearrive">Ville d'arrivé:</label>
                        <input type="text" class="new form-control" name="villearrive"/>
                      </div>
                  </div>              
                </div>
         </div>
          <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
      </form>
  </div>
</div>

@endsection
