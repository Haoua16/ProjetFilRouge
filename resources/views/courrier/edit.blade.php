
@extends('gescourrierdash.dashboard')

@section('Mimi')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier le courrier</h3>
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
      <form method="post" action="{{ route('courrier.update', $courriers->id) }}" >
      @csrf
              @method('PATCH')
              <div class="form-group">
              <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <label for="nomdestinateur">Nom du destinateur:</label>
              <input type="text" class="new" name="nomdestinateur" value="{{ $courriers->nomdestinateur }}"/>
              <label for="prenomdestinateur">Prenom du destinateur:</label>
              <input type="text" class="new" name="prenomdestinateur" value="{{ $courriers->prenomdestinateur }}"/>
              <label for="numerodestinateur">Numero du destinateur:</label>
              <input type="text" class="new" name="numerodestinateur" value="{{ $courriers->numerodestinateur }}"/>
              <label for="nomdestinataire">Nom du destinataire:</label>
              <input type="text" class="new" name="nomdestinataire" value="{{ $courriers->nomdestinataire }}"/>
              <label for="prenomdestinataire">Prenom du destinataire:</label>
              <input type="text" class="new" name="prenomdestinataire" value="{{ $courriers->prenomdestinataire }}"/>
              <label for="numerodestinataire">Numero du destinataire:</label>
              <input type="text" class="new" name="numerodestinataire" value="{{ $courriers->numerodestinataire }}"/>
              <label for="nature">Nature:</label>
              <input type="text" class="new" name="nature" value="{{ $courriers->nature }}"/>
              <label for="valeur">Valeur:</label>
              <input type="text" class="new" name="valeur" value="{{ $courriers->valeur }}"/>
              <label for="montantpaye">Montant Payé:</label>
              <input type="text" class="new" name="montantpaye" value="{{ $courriers->montantpaye }}"/>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>

@endsection
