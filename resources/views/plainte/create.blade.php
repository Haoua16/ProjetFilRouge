<!-- create.blade.php -->
@extends('clientdash.dashboard')

@section('Haby')

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
    <h2>Porter plainte</h2>
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

      <form method="post" action="{{ route('plainte.store') }}" enctype="multipart/form-data">
         @csrf
         
         <div class="container">
            <h3>Renseignements</h3></br>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="new form-control" name="message" style="height: 180px;"></textarea>
                      </div>
                  </div>             
                </div>

                <div class="row" hidden>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="users_id">Client</label>
                          <input type="number" class="new form-control" name="users_id" value="{{ Auth::user()->id }}"/>
                        </div>
                    </div>              
                </div>                             
                <button type="submit" class="btn btn-primary">Envoyer</button>
         </div>
        </div>
          
      </form>
  </div>
</div>

@endsection

