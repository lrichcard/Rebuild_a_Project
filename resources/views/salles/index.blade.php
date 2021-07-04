
@extends('layouts.main')


@section('content')

<a href="/salles/create"> Add a new salle</a>


@foreach ($salles as $salle)

   <h3>{{ $salle->nom }}</h3> 

      <a href="/salles/{{ $salle->id }}/edit"> Edit</a>
      <form action="/salles/{{ $salle->id }}"method="POST">
        @csrf
        @method('delete')
        <button type = "submit" >Delete</button>
      <h4>/////////////////////////</h4>
      <br>
    
 

@endforeach


@endsection