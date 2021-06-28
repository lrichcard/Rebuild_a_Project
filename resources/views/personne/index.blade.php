
@extends('layouts.main')


@section('content')

<a href="personne/create"> Add a new personne</a>


@foreach ($personnes as $personne)

   <h3>{{ $personne->nom }}</h3> 
   <h3>{{ $personne->prenom }}</h3>

      <h3>{{ $personne->ddn }}</h3>
      <h3>{{ $personne->sexe }}</h3>
      <h3>{{ $personne->adresse }}</h3>
      <h3>{{ $personne->telephone1 }}</h3>
      <h3>{{ $personne->telephone2 }}</h3>
      <a href="personne/{{ $personne->id }}/edit"> Edit</a>
      <form action="/personne/{{ $personne->id }}"method="POST">
        @csrf
        @method('delete')
        <button type = "submit" >Delete</button>
      <h4>/////////////////////////</h4>
      <br>
    
 

@endforeach


@endsection