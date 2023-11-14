@include('/notes/header')

<body>
    <div class="container text-center">
        <div class="row">


    <a href="/ajouter_note" class="btn btn-primary">Ajouter une note</a >
        <hr>  
           @if (session('status'))
        <div class="alert alert-succes">
          {{session('status')}}
        </div>
        @endif

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
                     <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
               @endforeach
         </table>
    </div>
    </div>
    </div>