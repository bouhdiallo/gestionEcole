@extends('master')

@section('title', 'List of eleves')

@section('H1')
    Liste des élèves
@stop

@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
        <div class="alert alert-dismissible alert-primary">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="badge rounded-pill bg-success">suscces</h4>
            {{ session('status') }}
        </div>
        @endif
        @foreach ($eleves as $eleve)
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 " style="max-width:20rem; margin:auto; display:flex; text-align:center;">
                <div class="card-header" style="display:flex; flex-direction:column;">Elève Numéro  {{ $eleve->id+22004 }}  </div>
                <div class="card-body">
                    <p class="card-text"> <a href="{{ $eleve->categoryId }}" style="color:wheat; text-decoration:none;"> Nom : {{ $eleve->nom }}</a> </p>
                    <p class="card-text"> <a href="{{ $eleve->categoryId }}" style="color:wheat; text-decoration:none;"> Prenom : {{ $eleve->prenom }}</a> </p>
                </div>
                <div class=" " style="display:flex; margin:auto;">
                    <a class="nav-link" href="/eleves/edit/{{ $eleve->id}}">              
                        <button type="button" class="btn btn-dark" style="display:flex; flex-direction:column; margin-right:20px; ">Editer l'élève</button>
                    </a>

                    <form action="/eleves/delete" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="idEleve" value="{{ $eleve->id }}">
                        <input type="hidden" name="test" value="value">
                        <button type="submit" class="btn btn-danger" style="display:flex; flex-direction:column; ">Delete it</button>
                    </form>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@stop

<!-- <div class="card text-white bg-primary mb-3 " style="max-width: 20rem; margin-top: 15px;">
        <div class="card-header">eleve Name</div>
          <div class="card-body">
                <h4 class="card-title">Primary card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div> 
        </div>
    </div> -->