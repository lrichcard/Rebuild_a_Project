
@extends('layouts.main')


@section('content')

<h1>Inscrire un(e) Etudiant(e):</h1>

<form action="/inscriptions" method="POST">
    @csrf

<div class="container">
    <div class="row">
          <div class="col-xs-6 form-group">
            <label>Prenom : </label>
            <input class="form-control" name="prenom" type="text" placeholder="Prenom"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Nom : </label>
            <input class="form-control" type="text" name="nom" placeholder="Nom"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Phone 1 : </label>
            <input class="form-control" type="text" name="phone1" placeholder="Phone 1"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Phone 2 : </label>
            <input class="form-control" type="text" name="phone2" placeholder="Phone 2"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Sexe : </label>
            <input class="form-control" type="text" name="sexe" placeholder="Sexe"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Date De Naissance : </label>
            <input class="form-control" type="text" name="ddn" placeholder="Date De Naissance"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Adresse(Rue) : </label>
            <input class="form-control" type="text" name="adresseRue" placeholder="Adresse(Rue)"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Adresse(Ville) : </label>
            <input class="form-control" type="text" name="adresseVille" placeholder="Adresse(Ville)"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Pays : </label>
            <input class="form-control" type="text" name="pays" placeholder="Pays"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Extra Adresse : </label>
            <input class="form-control" type="text" name="extraAdresse" placeholder="Extra Adresse"/>
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
            <label>Statut : </label>
            <input class="form-control" type="text" name="statut" placeholder="Statut"/>
          </div>

          <div class="col-xs-6 form-group">
            <label>Remarque : </label>
            <textarea class="form-control" name="remarque" rows="5" id="remarque"></textarea>
          </div>
          <div class="col-xs-4 form-group"></div>

          <div class="col-xs-4 form-group">
            <button type="submit" class="btn btn-primary">Inscrire/ Ajouter Dans classe</button>
            {{-- <button type="submit" class="btn btn-primary btn-block mb-4">OKAY</button> --}}
          </div>
          
          <div class="col-xs-4 form-group"></div>
      
     
          </div>
        </form>
        @endsection