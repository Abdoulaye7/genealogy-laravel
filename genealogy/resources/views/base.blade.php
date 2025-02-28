<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Page d'accueil</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('people.login')}}">Genealogy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('people.index')}}">People</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('relationship.index')}}">Relationship</a>
        </li>
      </ul>
    </div>
    <div class="navbar-nav me-auto mb-2 mb-lg-0 ">
        @auth
          {{ Auth::user()->name}}
          <form class="nav-item" action="{{ route('auth.logout')}}" method="post">
           @method("delete")
            @csrf
            <button class="nav-link">Se deconnecter</button>

         </form>
        @endauth

        @guest
        <div class="nav-link">
          <a href="{{ route('auth.login')}}">Se connecter </a>
        </div>
        @endguest
      </div>
  </div>
</nav>
 <div class="container">
 @if (session('success'))
   <div class ="alert alert-success">
      {{ session('success')}}
   </div>
@endif
 @yield('content')
 </div>

</body>
</html>
