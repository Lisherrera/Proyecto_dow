
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9b6e30f6af.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: #9adcfb;">
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
                            
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Rut</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td>Liss</td>
                            <td>Herrera</td>
                            <td>98765432-1</td>
                            <td>Liss@email.com</td>
                            <td>San pedro</td>
                            <td>123456</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            
                            <td>Benjamin</td>
                            <td>Ortega</td>
                            <td>12345678-9</td>
                            <td>Benjamin@email.com</td>
                            <td>San pedro</td>
                            <td>123456</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            
                            <td>Topher</td>
                            <td>Pereira</td>
                            <td>13579246-8</td>
                            <td>Topher@email.com</td>
                            <td>Las lomas</td>
                            <td>123456</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            
                            <td>vicente</td>
                            <td>Lorca</td>
                            <td>13579246-8</td>
                            <td>vicho@email.com</td>
                            <td>viña</td>
                            <td>123456</td>
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
                                <h5 class="card-title">Nuevo Cliente</h5>
                                <hr>
                                <p class="card-text">¿Desea agregar un nuevo cliente? Presione el botón para dirigirse al formulario y agregar el nuevo cliente.</p>
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