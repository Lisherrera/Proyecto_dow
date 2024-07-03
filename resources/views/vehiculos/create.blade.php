<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
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

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="card" style="width: 100%; max-width: 500px;">
                    <div class="row">
                        <div class="col">
                            <div class="card-header text-white" style="background-color:#08628D;">
                                Nuevo Vehiculo
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="mb-3">
                                        <label for="marca" class="form-label">Marca</label>
                                        <input type="text" id="marca" name="marca" class="form-control">
                                        <div id="marcaFeedback" class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="modelo" class="form-label">Modelo</label>
                                        <input type="text" id="modelo" name="modelo" class="form-control">
                                        <div id="modeloFeedback" class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ano" class="form-label">Año</label>
                                        <input type="text" id="ano" name="ano" class="form-control">
                                        <div id="anoFeedback" class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="patente" class="form-label">Patente</label>
                                        <input type="text" id="patente" name="patente" class="form-control">
                                        <div id="patenteFeedback" class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="precio" class="form-label">Precio</label>
                                        <input type="text" id="precio" name="precio" class="form-control">
                                        <div id="precioFeedback" class="invalid-feedback">
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <label class="form-label" for="tipo">Tipo Vehiculo</label>
                                            <select id="tipo" name="tipo" class="form-control">
                                                <option value="0">Seleccione</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <label for="fechaTermino" class="form-label">Fecha Término</label>
                                            <input type="date" id="fechaTermino" name="fechaTermino" class="form-control">
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="d-flex justify-content-end align-items">
                                            <button type="button" class="btn btn-warning mx-3" href="">Cancelar</button>
                                            <button type="button" class="btn btn-success" href="">Agregar</button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>