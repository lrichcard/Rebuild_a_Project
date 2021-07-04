
@extends('layouts.main')


@section('content')


<form action="/horaires" method="POST">
    @csrf
   
       <div class="form-group row">    
        <div class="col-sm-8">
        <select class="form-control" id="selectUser" name="jour_id" required focus>
     <option value="" disabled selected>Selectionner un jour</option>        
     @foreach ($jours as $jour)
     <option value="{{ $jour->id }}">{{ $jour->nom }}</option>
     
     @endforeach
   </select>
   </div>

       <div class="form-group row">    
        <div class="col-sm-8">
        <select class="form-control" id="selectUser" name="cour_id" required focus>
     <option value="" disabled selected>Selectionner un cours</option>        
     @foreach ($cours as $cour)
     <option value="{{ $cour->id }}">{{ $cour->nom }}</option>
     
     @endforeach
   </select>
   </div>


      <div class="form-group row">    
        <div class="col-sm-8">
        <select class="form-control" id="selectUser" name="salle_id" required focus>
     <option value="" disabled selected>Selectionner une salle de classe</option>        
     @foreach ($salles as $salle)
     <option value="{{ $salle->id }}">{{ $salle->nom }}</option>
     
     @endforeach
   </select>
   </div>
   

      <div class="form-group row">    
        <div class="col-sm-8">
        <select class="form-control" id="selectUser" name="heure_id" required focus>
     <option value="" disabled selected>Selectionner l'heure qui convient</option>        
     @foreach ($heures as $heure)
     <option value="{{ $heure->id }}">{{ $heure->nom }}</option>
     
     @endforeach
   </select>
   </div>

   
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">OKAY</button>
  </form>

@endsection