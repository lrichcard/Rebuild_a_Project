
@extends('layouts.main')


@section('content')


<form action="/horaires/{{ $horaire->id }}" method="POST">
    @csrf
    @method('PUT')
    {{-- <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-2">
        <div class="col">
        </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="cour" value="{{ $horaire->cour }}"/>
         <br>
        </div>
      </div> --}}

        <div class="form-group row">  
          <div class="col-sm-8">
            <select class="form-control" id="jour_id" name="jour_id" required focus>
               <option value="" disabled selected>Selectionner un cour</option>        
                
               @foreach ($jours as $jour)
                <option value="{{ $jour->id }}" {{ ($jour->id) == $horaire->jour_id ? "selected":"" }}>{{ $jour->nom }}</option>
                
                @endforeach
        </select>
     </div>
          <div class="col-sm-8">
            <select class="form-control" id="cour_id" name="cour_id" required focus>
               <option value="" disabled selected>Selectionner un cour</option>        
                
               @foreach ($cours as $cour)
                <option value="{{ $cour->id }}" {{ ($cour->id) == $horaire->cour_id ? "selected":"" }}>{{ $cour->nom }}</option>
                
                @endforeach
        </select>
     </div>
          <div class="col-sm-8">
            <select class="form-control" id="salle_id" name="salle_id" required focus>
               <option value="" disabled selected>Selectionner une salle</option>        
                
               @foreach ($salles as $salle)
                <option value="{{ $salle->id }}" {{ ($salle->id) == $horaire->salle_id ? "selected":"" }}>{{ $salle->nom }}</option>
                
                @endforeach
        </select>
     </div>  
          <div class="col-sm-8">
          <select class="form-control" id="heure_id" name="heure_id" required focus>
             <option value="" disabled selected>Selectionner un cour</option>        
              
             @foreach ($heures as $heure)
              <option value="{{ $heure->id }}" {{ ($heure->id) == $horaire->heure_id ? "selected":"" }}>{{ $heure->nom }}</option>
              
              @endforeach
      </select>
   </div>

     
  
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">OKAY</button>
  </form>

@endsection