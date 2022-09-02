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
    <h2>Faire une reservation</h2>
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

      <form method="post" action="{{ route('reserv.voyage') }}">
         @csrf
         <div class="container">
            <h3>Renseignements</h3></br>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="nombreplace">Nombre de place:</label>
                        <input type="number" class="new form-control" name="nombreplace"/>
                      </div>
                  </div>             
                </div>

                <!-- <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="date">Date de réservation:</label>
                        <input type="date" class="new form-control" name="date"/>
                      </div>
                  </div>              
                </div> -->


   
                    

                <div class="row" hidden>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="voyages_id">Voyages</label>
                          <input type="number" class="new form-control" name="voyages_id" value="{{$voyages->id}}"/>
                        </div>
                    </div>              
                </div>
                              

         </div>
        </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>

@endsection

