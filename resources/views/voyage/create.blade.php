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

      <form method="post" action="{{ route('voyage.store') }}">
         @csrf
          <div class="container">
              <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="villedepart">Ville de départ:</label>
                        <input type="text" class="new form-control" name="villedepart"/>
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="villearrive">Ville d'arrivé:</label>
                      <input type="text" class="new form-control" name="villearrive"/>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="datedepart">Date de départ:</label>
                      <input type="date" class="new form-control" name="datedepart"/>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="heuredepart">Heure du départ:</label>
                      <input type="time" class="new form-control" name="heuredepart"/>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="rendezvous">Heure du Rendez-Vous:</label>
                      <input type="time" class="new form-control" name="rendezvous"/>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="buses_id">Numéro du bus</label>
                      <select style="color:#41A7A5" aria-label="Default select example" name="buses_id" id="Class-select form-control">
                    </div>
                  </div>
              </div>

            @foreach($bus as $bus)
            <option value="{{$bus->id}}">{{$bus->numero}}</option>
          @endforeach
              </select>

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
        </div></br>
          <button type="submit" class="btn btn-primary form-control">Ajouter</button>
      </form>
  </div>
</div>

@endsection
