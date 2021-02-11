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
        <table class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($animals as $element)    
                <tr>
                    <td><a href="/show-animal/{{$element->id}}" class="text-white">{{$element->name}}</a></td>
                    <td>{{$element->age}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>