
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9b6e30f6af.js" crossorigin="anonymous"></script>

</head>

<body style="background-color:  #A6D0D2;">
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
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Patente</th>
                            <th>Tipo de Vehiculo</th>
                            <th>Precio Arriendo</th>
                            <th>Fecha Término</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ford</td>
                            <td>F-150</td>
                            <td>2020</td>
                            <td>ABCD54</td>
                            <td>SUV</td>
                            <td>100000</td>
                            <td>789121</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jeep</td>
                            <td>Renegade</td>
                            <td>2018</td>
                            <td>ABCD54</td>
                            <td>jeep</td>
                            <td>150000</td>
                            <td>789121</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Audi</td>
                            <td>A4</td>
                            <td>2021</td>
                            <td>ABCD54</td> 
                            <td>hatchback</td>
                            <td>750000</td>
                            <td>789121</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Ford</td>
                            <td>Fiesta</td>
                            <td>2020-1</td>
                            <td>ABCD54</td>
                            <td>coupe</td>
                            <td>2000000</td>
                            <td>789121</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="row">
                        <!-- <div class="container d-flex justify-content-center align-items-center col-md-4">
                            <img src="./image/computer-science-1331579_640.png" class="img-fluid rounded-start" alt="...">
                        </div> -->
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Nuevo Arriendo</h5>
                                <hr>
                                <p class="card-text">¿Desea agregar un nuevo arriendo? Presione el botón para dirigirse al formulario y agregar el nuevo arriendo.</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-success" href="">Agregar</button>
                                </div>
                                <!-- <button type="button" class="btn btn-primary end">Agregar</button> -->
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