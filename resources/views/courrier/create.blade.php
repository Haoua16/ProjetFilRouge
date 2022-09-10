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
    <h2>Enregistrer un courrier</h2>
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

      <form method="post" action="{{ route('courrier.store') }}">
         @csrf
         <div class="container">
              <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="nomdestinateur">Nom du destinateur:</label>
                        <input type="text" class="new form-control" name="nomdestinateur"/>
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="prenomdestinateur">Prenom du destinateur:</label>
                      <input type="text" class="new form-control" name="prenomdestinateur"/>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="numerodestinateur">Numero du destinateur:</label>
                      <input type="text" class="new form-control" name="numerodestinateur"/>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nomdestinataire">Nom du destinataire:</label>
                      <input type="text" class="new form-control" name="nomdestinataire"/>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="prenomdestinataire">Prenom du destinataire:</label>
                      <input type="text" class="new form-control" name="prenomdestinataire"/>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="numerodestinataire">Numero du destinataire:</label>
                      <input type="text" class="new form-control" name="numerodestinataire"/>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nature">Nature:</label>
                      <input type="text" class="new form-control" name="nature"/>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="valeur">Valeur:</label>
                      <input type="text" class="new form-control" name="valeur"/>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="montantpaye">Montant Payé:</label>
                      <input type="text" class="new form-control" name="montantpaye"/>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="buses_id">Numéro du bus</label>
                      <select style="color:#41A7A5" aria-label="Default select example" name="buses_id" class="form-control">
                      
                      @foreach($bus as $bus)
                          <option value="{{$bus->id}}">{{$bus->numero}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
              </div>
        </div>
          <button type="submit" class="btn btn-primary form-control">Ajouter</button>
      </form>
  </div>
</div>

@endsection
