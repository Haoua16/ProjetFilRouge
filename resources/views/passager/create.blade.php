<!-- create.blade.php -->
@extends('dashboard.dashboard')

@section('Haoua')

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

<div class="card-uper">
  <div class="card-header">
    <h2>Enregistrer un passager</h2>
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

      <form method="post" action="{{ route('passager.store') }}">
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
                        <label for="numerotelephone">Numéro de téléphone:</label>
                        <input type="text" class="new form-control" name="numerotelephone"/>
                      </div>
                  </div>  
                  
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="nombreplace">Nombre de ticket:</label>
                        <input type="number" class="new form-control" name="nombreplace"/>
                      </div>
                  </div> 
                </div>

                <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label" for="voyages_id">Voyage</label>
                            <select style="color:#41A7A5" aria-label="Default select example" name="voyages_id" class="form-control">
                            @foreach($voyages as $voyages)
                              <option value="{{$voyages->id}}">{{$voyages->villedepart}} {{$voyages->villearrive}} {{$voyages->datedepart}} {{$voyages->heuredepart}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                          <button type="submit" class="btn btn-primary mt-3 form-control" style="margin-bottom: -12%;">Ajouter</button>
                          </div>
                        </div>
                    </div>
                             
          </div>
  </div>              
</div>
 
      </form>
  </div>
</div>

@endsection
