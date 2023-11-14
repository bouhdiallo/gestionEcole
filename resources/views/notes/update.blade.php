@extends('master')

@section('title', 'List of eleves')

@section('H1')
    Mettre à jour une note
@stop

@section('content')

        <div class="row">
   <h1>Modifier la note</h1>
   @if(session('status'))
   <div class="alert alert-succes">
    {{session('status')}}
   </div>
   @endif
       
    <form action="{{route('update.note',$note->id)}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleSelect1" class="form-label mt-4">Example select</label>
        <select class="form-select" id="exampleSelect1" name="eleveId">
          @foreach ($eleves as $eleve)
          <option value="{{$eleve->id }}" {{$eleve->id == $note->eleve_id ? 'selected' : ''}} >{{$eleve->nom}} {{$eleve->prenom}}</option>
          @endforeach
        </select>
      </div>

    <div class="form-group">
      <label for="text" class="form-label mt-4">matiere</label>
      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$note->matiere}}" name="matiere">
    </div>

    <div class="form-group">
      <label for="number" class="form-label mt-4">note</label>
      <input type="number" class="form-control" id="exampleInputEmail1"  value="{{$note->note}}" name="note">
    </div>  <br><br>
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
   <button class="btn btn-primary"> modifier une note</button>



   @stop