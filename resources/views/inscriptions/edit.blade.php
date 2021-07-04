
@extends('layouts.main')


@section('content')

<h1>Inscrire un(e) Etudiant(e):</h1>

<form action="/inscriptions/{{ $inscription->id }}" method="POST">
  @csrf
  @method('PUT')

  <div class="container">
    <div class="row">
          <div class="col-xs-6 form-group">
            <label>Prenom : </label>
            <input class="form-control" name="prenom" type="text" value="{{ $inscription->prenom }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Nom : </label>
            <input class="form-control" type="text" name="nom" value="{{ $inscription->nom }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Phone 1 : </label>
            <input class="form-control" type="text" name="phone1" value="{{ $inscription->phone1 }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Phone 2 : </label>
            <input class="form-control" type="text" name="phone2" value="{{ $inscription->phone2 }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Sexe : </label>
            <input class="form-control" type="text" name="sexe" value="{{ $inscription->sexe }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Date De Naissance : </label>
            <input class="form-control" type="text" name="ddn" value="{{ $inscription->ddn }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Adresse(Rue) : </label>
            <input class="form-control" type="text" name="adresseRue" value="{{ $inscription->adresseRue }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Adresse(Ville) : </label>
            <input class="form-control" type="text" name="adresseVille" value="{{ $inscription->adresseVille }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Pays : </label>
            <input class="form-control" type="text" name="pays" value="{{ $inscription->pays }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Extra Adresse : </label>
            <input class="form-control" type="text" name="extraAdresse" value="{{ $inscription->extraAdresse }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Horaire : </label>
              <select class="form-control" id="selectUser" name="horaire_id" required focus>
              <option value="" disabled selected>Selectionner l'horaire qui convient</option>        
              @foreach ($horaires as $horaire)
              <option value="{{ $horaire->cour->id }}">{{ $horaire->cour->nom }} || {{ $horaire->jour->nom }} || {{ $horaire->heure->nom }} || {{ $horaire->salle->nom }}</option>

              @endforeach
              </select>
           </div>
         
          <div class="col-xs-6 form-group">
            <label>Status : </label>
            <input class="form-control" type="text" name="statut" value="{{ $inscription->statut }}"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Remarque : </label>
            <textarea class="form-control" name="remarque" rows="5" value="{{ $inscription->remarque }}" id="remarque"></textarea>
          </div>
          <div class="col-xs-4 form-group"></div>

          <div class="col-xs-4 form-group">

            <button type="submit" class="btn btn-primary">Inscrire/ Ajouter Dans classe</button>

          </div>
          
          <div class="col-xs-4 form-group"></div>
      
          </div>
        </form>
        @endsection