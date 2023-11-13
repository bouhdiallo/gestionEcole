@include('../header')

<div class="card-body" style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">
    <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">LISTE DES CLASSES</div>
    <table class="table table-bordered" id="list">
        <tr>
            <th>NOM</th>
            <th>ACTIONS</th>
        </tr>
        @foreach($classes as $classe)
            <tr>
                <td>{{ $classe->nom }}</td>
                <td><a href="{{route('classe.show', $classe->id)}}" class="btn btn-warning">✍🏽</a>
                <a href="" class="btn btn-danger">🗑</a></td>
            </tr>
        @endforeach
    </table> 
</div>