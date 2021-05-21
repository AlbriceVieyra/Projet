<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}" type="text/css" />
    <!--link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">Debug moi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.index') }}">Questions</a>
      </li>
      
      @auth     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mon Compte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}">Déconnexion</a>
        </div>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Connexion</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Inscription</a>
      </li>
      @endauth
      <li class="nav-item">
        <a class="nav-link" href="#">Utilisateurs</a>
    </li>
    </ul>
    @auth
        <span class="navbar-text">
            {{ auth()->user()->username }}
        </span>
    @else
        <span class="navbar-text">
            Vous n'êtes pas encore connecté
        </span>
    @endauth
  </div>
</nav>
</header>
    <main class="container my-4">
        @yield('content')
    </main>
</body>
</html>