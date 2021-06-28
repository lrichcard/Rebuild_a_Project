
@extends('layouts.main')


@section('content')


<form action="/prof" method="POST">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-2">
        <div class="col">
        </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="nom" placeholder="Nom"/>
         <br>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="prenom" placeholder="Prenom"/>
         <br>
        </div>
      </div>
   
  
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="ddn" placeholder="Date de naissance"/>
         <br>
        </div>
      </div>
    <!-- Text input -->
    <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="sexe" placeholder="Sexe"/>
         <br>
        </div>
      </div>
  
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="adresse" placeholder="Adresse"/>
         <br>
        </div>
      </div>
  
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="telephone1" placeholder="Telephone1"/>
         <br>
        </div>
      </div>
  
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="telephone2" placeholder="Telephone2"/>
         <br>
        </div>
        <div class="col">
        </div>
      </div>
  
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">OKAY</button>
  </form>

@endsection