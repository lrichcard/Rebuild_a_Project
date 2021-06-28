
@extends('layouts.main')


@section('content')

<a href="prof/create"> Add a new prof</a>


@foreach ($profs as $prof)

   <h3>{{ $prof->nom }}</h3> 
   <h3>{{ $prof->prenom }}</h3>

      <h3>{{ $prof->ddn }}</h3>
      <h3>{{ $prof->sexe }}</h3>
      <h3>{{ $prof->adresse }}</h3>
      <h3>{{ $prof->telephone1 }}</h3>
      <h3>{{ $prof->telephone2 }}</h3>
      <a href="prof/{{ $prof->id }}/edit"> Edit</a>
      <form action="/prof/{{ $prof->id }}"method="POST">
        @csrf
        @method('delete')
        <button type = "submit" >Delete</button>
      <h4>/////////////////////////</h4>
      <br>
    
 

@endforeach


@endsection