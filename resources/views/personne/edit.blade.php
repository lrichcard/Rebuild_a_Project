
@extends('layouts.main')


@section('content')


<form action="/personne/{{ $personne->id }}" method="POST">
    @csrf
    @method('PUT')
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-2">
        <div class="col">
        </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="nom" value="{{ $personne->nom }}"/>
         <br>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="prenom" value="{{ $personne->prenom }}"/>
         <br>
        </div>
      </div>
   
  
      <div class="col">
        <div class="form-outline">
            <input type="text" class="form-control" name="ddn" value="{{ $personne->ddn }}"/>
         <br>
        </div>
      </div>
    <!-- Text input -->
    <div class="col">
        <div class="form-outline">
            <input type="text" class="form-control" name="sexe" value="{{ $personne->sexe }}"/>
         <br>
        </div>
      </div>
  
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="adresse" value="{{ $personne->adresse }}"/>
         <br>
        </div>
      </div>
  
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="telephone1" value="{{ $personne->telephone1 }}"/>
         <br>
        </div>
      </div>
  
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="telephone2" value="{{ $personne->telephone2 }}"/>
         <br>
        </div>
        <div class="col">
        </div>
      </div>
  
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">OKAY</button>
  </form>

@endsection