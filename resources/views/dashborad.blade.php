<!DOCTYPE html>
<html>
<head>

    <title>Authtenticacion Personalizada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register-user') }}">Registrate!</a>

            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('signout') }}">Salir</a>

            </li>
        @endguest

    </ul>

</div>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="...">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">Adsi-Sena</a>
        <button class="navbar-toggler" type="button" data-bs-togglet="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


    </div>

</nav>
@yield('content')

</body>
</html>
