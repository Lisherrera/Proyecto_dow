<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>

<body style="background-color:  #A6D0D2;">
    <!-- nav -->
    @yield('contenido_principal')
    {{-- <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #08628D;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Arriendos ku-chow!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('vehiculos.index')}}">Vehiculos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('arriendo.index')}}">Arriendos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tipos.index')}}">Tipos de Vehiculos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('usuarios.index')}}">Usuarios</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ver Perfiles</a></li>
                            <li><a class="dropdown-item" href="#">Crear Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Editar</a></li>
                            <li><a class="dropdown-item" href="#">Borrar</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
     --}}
    <!-- nav -->
     <!-- card -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 mt-3">
                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Vehiculos</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="/public/images/autos.jpg" class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                        <a href="#" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 mt-3">
                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Arriendos</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="/public/images/contrato.jpg" class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                        <a href="#" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 mt-3">
                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Clientes</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="/public/images/clientes.jpg" class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                        <a href="#" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 mt-3">
                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Tipos de Vehiculos</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="/public/images/tipo.jpg" class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                        <a href="#" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>