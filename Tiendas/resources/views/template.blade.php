<!doctype html>
<html lang="en">
    <head>
        <title>TIENDAS ASM</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>
    <body>
    <!--HERO-->
        <img src="{{ asset('img/BANNER.webp') }}" class="img-fluid" alt="BANNER" width="100%" style="height: 400px;"/>
    <!--FIN HERO-->

    <!--NAV MENU-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Catalogo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('juegos')}}">Lista de Juegos</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                REGISTROS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{url('estados')}}">Estados de venta</a></li>
                                <li><a class="dropdown-item" href="{{url('generos')}}">Géneros</a></li>
                                <li><a class="dropdown-item" href="{{url('metodos')}}">Métodos de pago</a></li>
                                <li><a class="dropdown-item" href="{{url('plataformas')}}">Plataformas</a></li>
                                <li><a class="dropdown-item" href="{{url('roles')}}">Roles</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{url('users')}}">Lista de usuarios</a></li>
                                <li><a class="dropdown-item" href="{{url('tiendas')}}">Lista de tiendas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Carrito</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    
                        @auth
                            <button type="button" class="btn btn-outline-success">
                            <a href="{{route('dashboard')}}">Dashboard</a>
                            </button>
                        @else 
                            <button type="button" class="btn btn-outline-success">
                                <a href="{{route('login')}}">Iniciar Sesión</a>
                            </button>
                            <button type="button" class="btn btn-outline-success">
                                <a href="{{route('register')}}">Registrarse</a>
                            </button>
                        @endauth
                </div>
            </div>
        </nav>
    <!--FIN MENU DE NAVEGACION-->

    <!--Main-->
        <div class="container-fluid">
            @yield('content')
        </div>
    <!--Fin main -->

    <!--JS BOOTSTRAP-->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    <!--FIN JS BOOTSTRAP-->
    </body>
</html>
