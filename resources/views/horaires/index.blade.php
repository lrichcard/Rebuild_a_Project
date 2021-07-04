
@extends('layouts.main')


@section('content')

<a href="/horaires/create"> Add a new horaire</a>

<div class="container">
  <h3>Horaires</h3>  
 
    <tbody>
@foreach ($horaires as $horaire)
{{-- 
   <h3>{{ $horaire->id }}</h3> 
   <h3>{{ $horaire->cour->nom }}</h3>  --}}

   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Cours</th>
        <th>Jours</th>
        <th>Salles</th>
        <th>Heures</th>
        <th>Delete/Edit</th>
      </tr>
    </thead>
     
      <form action="/horaires/{{ $horaire->id }}"method="POST">
        @csrf
    
            <tr>
              <td> <h3>{{ $horaire->cour->nom }}</h3> </td>
              <td> <h3>{{ $horaire->jour->nom }}</h3> </td>
              <td> <h3>{{ $horaire->salle->nom }}</h3> </td>
              <td> <h3>{{ $horaire->heure->nom }}</h3> </td>
              <td> <h3>  @method('delete')
                <button type = "submit" >Delete</button>
                <a href="/horaires/{{ $horaire->id }}/edit"> Edit</a>
              </div></h3> </td>
            
            </tr>
         
           
          </tbody>
        </table>
     
      

@endforeach





@endsection

