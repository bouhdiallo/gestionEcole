
@extends('master')

@section('title', 'Ajouter un élève')


@section('H1')
Ajouter une note
@stop


@section('content')
        <div class="row">
   <h1>Ajouter une note</h1>

   {{-- Cela est souvent utilisé pour afficher des messages de réussite après une action réussie, comme la soumission réussie d'un formulaire. --}}
   @if(session('status'))
   <div class="alert alert-succes">
    {{session('status')}}
   </div>
   @endif
       
   <ul>

    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">{{$error}}</li>
  
    @endforeach
 </ul>

    <form action="/ajout/traitement" method="POST">
      @csrf
      <label for="exampleSelect1" class="form-label mt-4">Example select</label>
      <select class="form-select" id="exampleSelect1" name="eleveId">
          @foreach ($eleves as $eleve)
          <option value="{{$eleve->id}}">{{$eleve->nom}} {{$eleve->prenom}}</option>
          @endforeach
        </select>
    <div class="form-group">
      <label for="text" class="form-label mt-4">matiere</label>
      <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter matiere" name="matiere">
    </div>

    <div class="form-group">
      <label for="number" class="form-label mt-4">note</label>
      <input type="number" class="form-control"   placeholder="Enter note" name="note">
    </div>  <br><br>

   <button class="btn btn-primary"> ajouter une note</button>


   @stop