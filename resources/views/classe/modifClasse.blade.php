@include('../header')

<form action="{{route('classe.update')}}" method="post">
    @csrf
    <legend>Page Modification</legend>
    <div class="form-group">
        <label for="nom" class="form-label mt-4">Nom</label>
        <input type="text" class="form-control" name="nom" value="{{$classe->nom}}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button class="btn btn-success mt-5">Enregistrer</button>
    </div>
</form>