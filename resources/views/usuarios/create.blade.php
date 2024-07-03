<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9b6e30f6af.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: #9adcfb;">
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #08628D;">
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
                        <a class="nav-link" href="#">Vehiculos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Arriendos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tipos de Vehiculos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav -->
    <!-- contenido form -->
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Ingresar Nuevo Usuario</h5>
                                <hr>
                                <div class="container my-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputNombre" class="form-label mx-2">Nombre</label>
                                            <input type="text" id="inputNombre" class="form-control" aria-describedby="nombreHelpInline">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputApellido" class="form-label mx-2">Apellido</label>
                                            <input type="text" id="inputApellido" class="form-control" aria-describedby="apellidoHelpInline">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputNombre" class="form-label mx-2">Rut</label>
                                            <input type="text" id="inputNombre" class="form-control" aria-describedby="nombreHelpInline">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputApellido" class="form-label mx-2">Email</label>
                                            <input type="text" id="inputApellido" class="form-control" aria-describedby="apellidoHelpInline">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputNombre" class="form-label mx-2">Fecha</label>
                                            <input type="date" id="inputNombre" class="form-control" aria-describedby="nombreHelpInline">
                                        </div>
                                    </div>
                                    
                                </div>
    <!-- contenido form -->
    <!-- botones -->            <div class="row mt-3">
                                    <div class="d-flex justify-content-end align-items">
                                        <button type="button" class="btn btn-danger mx-3" href="">Cancelar</button>
                                        <button type="button" class="btn btn-success" href="">Agregar</button>
                                    </div>
                                </div>
    <!-- botones -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
        
   
    

    
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</html>