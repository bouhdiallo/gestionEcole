
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

   {{-- Cela est souvent utilisé pour afficher des messages de réussite après une action réussie, comme la soumission réussie d'un formulaire. --}}
   @if(session('status'))
   <div class="alert alert-succes">
    {{session('status')}}
   </div>
   @endif
       
<<<<<<< HEAD
=======
   <ul>

    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">{{$error}}</li>
  
    @endforeach
 </ul>

>>>>>>> feature/bouh
    <form action="/ajout/traitement" method="POST">
      @csrf


    <div class="form-group">
      <label for="text" class="form-label mt-4">matiere</label>
      <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter matiere" name="matiere">
    </div>

    <div class="form-group">
      <label for="number" class="form-label mt-4">note</label>
<<<<<<< HEAD
      <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="Enter note" name="note">
=======
      <input type="number" class="form-control"   placeholder="Enter note" name="note">
>>>>>>> feature/bouh
    </div>  <br><br>

   <button class="btn btn-primary"> ajouter une note</button>



    </div>
    </div>
    </div>