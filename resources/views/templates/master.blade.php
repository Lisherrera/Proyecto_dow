@extends('home.index')

@section('contenido_principal')

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
                </ul>
            </div>
        </div>
    </nav>
    


    
@endsection