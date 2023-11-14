@include('/notes/header')

<body>
    <div class="container text-center">
        <div class="row">


    <a href="/ajouter_note" class="btn btn-primary">Ajouter une note</a >
        <hr>  
           {{-- @if (session('status')) --}}
        <div class="alert alert-succes">
          {{-- {{session('status')}} --}}
        </div>
        {{-- @endif --}}

         <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>matiere</th>
                    <th>note</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
               
                 @foreach($notes as $note)
                <tr>
                    <td>{{$note->id}}</td>
                    <td>{{$note->matiere}}</td>
                    <td>{{$note->note}}</td>
                    <td>
                        <form action="{{ route('delete.note',$note->id)}}" method="post">
                            @csrf @method('DELETE') 
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('show.note',$note->id)}}" class="btn btn-warning">Update</a>
                    </td>
                    </tr>
                @endforeach                       
         </table>
    </div>
    </div>
    </div>