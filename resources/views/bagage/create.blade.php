<!-- create.blade.php -->
@extends('gescourrierdash.dashboard')

@section('Mimi')

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
    <h2>Enregister un bagage</h2>
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

      <form method="post" action="{{ route('bagage.store') }}">
         @csrf
         <div class="container">
            <h3>Renseignements</h3></br>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                      <label for="nature">Nature du bagage:</label>
                      <input type="text" class="new form-control" name="nature"/>
                      </div>
                  </div>             
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="nombrebagage">Nombre du bagage:</label>
                        <input type="number" class="new form-control" name="nombrebagage"/> 
                      </div>
                  </div>              
                </div>

                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="montantpaye">Montant payé:</label>
                        <input type="text" class="new form-control" name="montantpaye"/> 
                      </div>
                  </div>              
                
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="buses_id">Numéro du bus</label>
                              <select style="color:#41A7A5" aria-label="Default select example" name="buses_id" class="form-control">
                              @foreach($bus as $bus)
                                 <option value="{{$bus->id}}">{{$bus->numero}}</option>
                                 @endforeach
                              </select>
                            </div>
                          </div>                         
                </div>

                <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="passagers_id">Nom du passager</label>
                              <select style="color:#41A7A5" aria-label="Default select example" name="passagers_id" class="form-control">
                              @foreach($passagers as $passagers)
                                <option value="{{$passagers->id}}">{{$passagers->nom}} {{$passagers->prenom}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>      
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary  form-control" style="margin-bottom: -15%;">Ajouter</button>
                            </div>
                          </div>      
                </div>                          
          </div>        
      </form>
  </div>
</div>

@endsection
