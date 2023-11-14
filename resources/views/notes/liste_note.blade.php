@include('/notes/header')

<body>
    <div class="container text-center">
        <div class="row">


    <a href="/ajouter_note" class="btn btn-primary">Ajouter une note</a >
        <hr>  
<<<<<<< HEAD
           {{-- @if (session('status')) --}}
        <div class="alert alert-succes">
          {{-- {{session('status')}} --}}
=======
           {{-- @if (session('status'))
        <div class="alert alert-succes">
          {{session('status')}} --}}
>>>>>>> feature/bouh
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
               
<<<<<<< HEAD
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
=======
                <tr>
                    <td>1</td>
                    <td>maths</td>
                    <td>5</td>
                    <td>
                     <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
               
>>>>>>> feature/bouh
         </table>
    </div>
    </div>
    </div>