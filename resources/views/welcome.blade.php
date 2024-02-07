<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yeka Coach</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Estilos personalizados -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" />

    <!-- Estilos adicionales -->
    <style>
        /* Aquí puedes agregar estilos personalizados si lo deseas */
    </style>
</head>
<body class="body-personalizado">
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-absolute fixed-top up-navbar">
            <div class="container-fluid">
                <a class="navbar-brand flex" href="#">
                    <p>Yeka Coach Academy</p>
                    <img src="{{ asset('img/logo-sinfondo.png') }}" alt="imagen" class="logoHome" width="80" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link links" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link links" href="#">Planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link links" href="#">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link links" href="#">Contacto</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}" class="nav-link links">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-link links">Iniciar Sesion</a>
                                @endauth
                            @endif
                            <!-- <a class="nav-link links" href="{{ route('login') }}">Iniciar Sesión</a> -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h1 class="main-title">Bienvenido a Yeka Coach Academy</h1>
                    <p class="lead">La mejor academia para aprender a cantar.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 offset-md-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-dark">¿Por qué elegirnos?</h5>
                            <p class="card-text text-dark">Ofrecemos clases de canto de alta calidad impartidas por profesionales con amplia experiencia en la industria musical.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Nuestros cursos</h5>
                            <p class="card-text text-dark">Tenemos una variedad de cursos diseñados para satisfacer las necesidades de todos, desde principiantes hasta avanzados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-4 mt-5 footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Yeka Coach Academy. Todos los derechos reservados.</p>
        </div>
    </footer>
    <!-- Bootstrap JS (opcional, si lo necesitas) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-YFzn/yN5BSOcmeFyplGdEOv9HTzD4CqRLNXnYGiJRt/HfL9RvV1+m5Lc2JPJ3qfW" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk+1Qr44pCW6vrbOTy4f2JfaWjyo7I5BdiD" crossorigin="anonymous"></script>
</body>
</html>
