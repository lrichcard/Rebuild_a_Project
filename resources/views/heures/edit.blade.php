
@extends('layouts.main')


@section('content')


<form action="/heures/{{ $heure->id }}" method="POST">
    @csrf
    @method('PUT')
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-2">
        <div class="col">
        </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" class="form-control" name="nom" value="{{ $heure->nom }}"/>
         <br>
        </div>
      </div>

  
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">OKAY</button>
  </form>

@endsection