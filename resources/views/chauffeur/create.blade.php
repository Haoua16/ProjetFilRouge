<!-- create.blade.php -->
@extends('directeurdash.dashboard')

@section('Tenin')

<style>
    .uper 
  {
    background-color: #F2F4F4;
  }

  input
  {
    border: 2px;
    border-color: black;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h2>Enregistrer un chauffeur</h2>
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

      <form method="post" action="{{ route('chauffeur.store') }}">
         @csrf
         <div class="container">
            <h3>Renseignements</h3></br>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" class="new form-control" name="nom"/>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <input type="text" class="new form-control" name="prenom"/>
                      </div>
                  </div> 
               </div>

               <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                          <label for="ville">Ville:</label>
                          <select name="ville" class="form-control">
                            <option value="Bamako">Bamako</option>
                            <option value="Segou">Segou</option>
                            <option value="Sikasso">Sikasso</option>
                            <option value="Sevare">Sevare</option>
                            <option value="Gao">Gao</option>
                          </select> 
                        </div>
                    </div> 

                    <div class="col-md-6">
                      <div class="form-group">
                      <button type="submit" class="btn btn-primary form-control" style="margin-bottom: -15%;">Ajouter</button>
                      </div>
                  </div> 
               </div>
         </div>         
      </form>
  </div>
</div>

@endsection
