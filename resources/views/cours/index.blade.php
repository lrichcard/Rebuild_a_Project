
@extends('layouts.main')


@section('content')

<a href="cours/create"> Add a new cour</a>


@foreach ($cours as $cour)

   <h3>{{ $cour->nom }}</h3> 

      <a href="/cours/{{ $cour->id }}/edit"> Edit</a>
      <form action="/cours/{{ $cour->id }}"method="POST">
        @csrf
        @method('delete')
        <button type = "submit" >Delete</button>
      <h4>/////////////////////////</h4>
      <br>
    
 

@endforeach


@endsection