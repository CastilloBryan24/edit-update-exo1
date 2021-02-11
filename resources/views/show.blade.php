<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" href="/">Animals</a>
                <a class="nav-link" href="/add">New Animal</a>
              </div>
            </div>
          </nav>
    </header>
    <section class="container mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$show->name}}</h5>
              <h5 class="card-title">{{$show->age}}</h5>
              <a href="/edit-animal/{{$show->id}}" class="btn btn-primary">Edit</a>
              <a href="/delete-animal/{{$show->id}}" class="btn btn-danger">Delete</a>
            </div>
          </div>
    </section>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>