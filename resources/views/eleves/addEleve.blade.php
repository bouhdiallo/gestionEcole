@extends('master')

@section('title', 'Ajouter un élève')


@section('H1')
Ajouter un élève
@stop


@section('content')
<form action="/eleves/store" method="post">
    @csrf
    <fieldset>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Warning!</h4>
            <p class="mb-0"> {{ $error }} </p>
        </div>
        @endforeach
        @endif

        @if (session('status'))
        <div class="alert alert-dismissible alert-primary">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="badge rounded-pill bg-success">suscces</h4>
            {{ session('status') }}
        </div>
        @endif

        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Nom</label>
            <input type="email" class="form-control" name="nom" aria-describedby="emailHelp" placeholder="Enter le nom">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Prenom</label>
            <input type="email" class="form-control" name="prenom" aria-describedby="emailHelp" placeholder="Enter Le prenom">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Date de naissance</label>
            <input type="date" class="form-control" name="dateNaissance" aria-describedby="emailHelp" placeholder="Enter Le prenom">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <fieldset class="form-group">
            <legend class="mt-4">Sexe</legend>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexe" id="optionsRadios1" value="m" checked="">
                <label class="form-check-label" for="optionsRadios1">
                    Masculin
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexe" id="optionsRadios2" value="f">
                <label class="form-check-label" for="optionsRadios2">
                    Feminin
                </label>
            </div>

        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop