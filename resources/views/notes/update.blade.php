
<!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Classe</title>
      </head>
      <body>




<body>
    <div class="container text-center">
        <div class="row">
   <h1>Ajouter une note</h1>
   @if(session('status'))
   <div class="alert alert-succes">
    {{session('status')}}
   </div>
   @endif
       
    <form action="{{route('update.note',$note->id)}}" method="POST">
      @csrf


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



    </div>
    </div>
    </div>