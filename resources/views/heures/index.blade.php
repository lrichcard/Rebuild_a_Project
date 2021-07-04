
@extends('layouts.main')


@section('content')

<a href="heures/create"> Add a new heure</a>


@foreach ($heures as $heure)

   <h3>{{ $heure->nom }}</h3> 

      <a href="heures/{{ $heure->id }}/edit"> Edit</a>
      <form action="/heures/{{ $heure->id }}"method="POST">
        @csrf
        @method('delete')
        <button type = "submit" >Delete</button>
     
      <br>
    
 

@endforeach


@endsection