
@extends('layouts.main')


@section('content')

<a href="/inscriptions/create"> Add a new inscription</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
      <tr>
          <th><h3>Prenom</h3></th>
          <th><h3>Nom</h3></th>
          <th><h3>Sexe</h3></th>
          <th><h3>Edit</h3></th>

      </tr>
  </thead>
  <tbody>

@foreach ($inscriptions as $inscription)


      <tr>
          <td><h3>{{ $inscription->prenom }} </h3></td>
          <td><h3>{{ $inscription->nom }} </h3></td>
          <td><h3>{{ $inscription->sexe }} </h3></td>
      
          <td> <a href="/inscriptions/{{ $inscription->id }}/edit"> Edit</a>
            <form action="/inscriptions/{{ $inscription->id }}"method="POST">
              @csrf
              @method('delete')
              <button type = "submit" >Delete</button></td>
         
      </tr>
      @endforeach
      </tr>
  </tfoot>
</table>

    
 




@endsection