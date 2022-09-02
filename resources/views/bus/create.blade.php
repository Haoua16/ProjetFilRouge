<!-- create.blade.php -->
@extends('directeurdash.dashboard')

@section('Tenin')

<style>
  .uper {
    
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Enregistrer un bus</h3>
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
    <!-- <img src="{{ asset('img/bus.jpg')}}" alt="" style="margin-left: 55%; margin-top: 30%;"> -->
      <form method="post" action="{{ route('bus.store') }}">
         @csrf
         <div class="container">
         
            <h3>Renseignements</h3></br>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="numero">Numéro:</label>
                        <input type="text" class="new form-control" name="numero"/>
                      </div>
                  </div>             
                </div>
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="nombreplace">Nombre de place:</label>
                        <input type="text" class="new form-control" name="nombreplace"/> 
                      </div>
                  </div>              
                </div>

                <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                            <label for="chauffeurs_id">Chauffeur</label>
                            <select style="color:#41A7A5" aria-label="Default select example" name="chauffeurs_id" id="Class-select form-control">
                              </div>
                          </div>             
                  </div> 
                            @foreach($chauffeurs as $chauffeurs)
                               <option value="{{$chauffeurs->id}}">{{$chauffeurs->prenom}} {{$chauffeurs->nom}}</option>
                            @endforeach
                            </select>               
          </div>
              
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>

@endsection