<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Polaris - @yield('title')</title>
</head>

<body>

    @section('navbar')
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Polaris Student Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gestion Notes</a>
                        <div class="dropdown-menu">
                            <!-- <a class="dropdown-item" href="#">Liste des notes </a> -->
                            <a class="dropdown-item" href="">Ajouter une note</a>
                            <a class="dropdown-item" href="#">Editer une note</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Github link</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gestion Elève</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('listEleve')}}">Liste des élèves </a>
                            <a class="dropdown-item" href="{{route('addEleve')}}">Ajouter un élève</a>
                            <a class="dropdown-item" href="{{route('editEleve')}}">Editer un élève</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Github link</a>
                        </div>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    @show

    <div class="jumbotron ">
        <h1 class="display-3 offset-4 ">
            @section('H1')
            List master
            @show
        </h1>
    </div>

    <div class="container">
        @yield('content')
    </div>


    <style>
        body {
            background-color:darkslategray;
            color:aliceblue;
        }
        h1,p,label {
            color:aliceblue;
        }
    </style>


</body>

</html>