
@extends('layouts.main')


@section('content')

<a href="horaire/create"> Add a new horaire</a>


@foreach ($horaires as $horaire)

   <h3>{{ $horaire->heure }}</h3> 
   <h3>{{ $horaire->heureDebut }}</h3>

      <h3>{{ $horaire->heureFin }}</h3>
     
      <a href="horaire/{{ $horaire->id }}/edit"> Edit</a>
      <form action="/horaire/{{ $horaire->id }}"method="POST">
        @csrf
        @method('delete')
        <button type = "submit" >Delete</button>
      <h4>/////////////////////////</h4>
      <br>
    
 

@endforeach


@endsection