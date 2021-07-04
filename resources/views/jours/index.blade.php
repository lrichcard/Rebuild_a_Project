@extends('layouts.main')


@section('content')

<a href="jours/create"> Add a new jour</a>


@foreach ($jours as $jour)

   <h3>{{ $jour->nom }}</h3> 

      <a href="/jours/{{ $jour->id }}/edit"> Edit</a>
      <form action="/jours/{{ $jour->id }}"method="POST">
        @csrf
        @method('delete')
        <button type = "submit" >Delete</button>
      <h4>/////////////////////////</h4>
      <br>
    
 

@endforeach


@endsection