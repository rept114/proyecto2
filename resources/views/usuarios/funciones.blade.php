<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuevana7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container text-center">
        <nav class="navbar" style="background-color: #48569E;">
            <div class="container-fluid">
                <a id="titulonavbar" class="navbar-brand"><h2><strong>Cuevana7</strong></h2></a>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" onclick="window.location.href='/usuarios'" id="inicio" data-bs-toggle="tab" data-bs-target="#inicio-tab-pane" type="button" role="tab" aria-controls="inicio-tab-pane" aria-selected="true">Inicio</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" onclick="window.location.href='/usuarios/funciones'" id="funcion" data-bs-toggle="tab" data-bs-target="#funcion-tab-pane" type="button" role="tab" aria-controls="#funcion-tab-pane" aria-selected="false">Funciones</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" onclick="window.location.href='/usuarios/peliculas'" id="registro" data-bs-toggle="tab" data-bs-target="#registro-tab-pane" type="button" role="tab" aria-controls="registro-tab-pane" aria-selected="false">Registro</button>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                </form>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/img1.png" id="img1" class="img-thumbnail" alt="...">
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Salir</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="contenedor1" class="container">
        <div class="panel">
        <form action="{{ route('peliculas.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-7">
                    <label class="form-label" for="titulo"><strong>Fecha:</strong></label>
                    <input type="date" class="form-control" placeholder="Titanic" name="titulo" id="titulo">
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label class="form-label" for="duracion_minutos"><strong>Hora:</strong></label>
                    <input type="time" class="form-control" placeholder="155" name="duracion_minutos" id="duracion_minutos">
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label class="form-label" for="año"><strong>Año:</strong></label>
                    <select class="form-select" id="año" name="año">
                        <option value="" selected disabled>Elige el año</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                    </select>
                </div>
                <div class="row">
                <div class="col-7">
                    <label class="form-label" for="director"><strong>Pelicula:</strong></label>
                    <input type="text" class="form-control" placeholder="Steven Spilber" id="director" name="director">
                </div>
            </div>
            </div>
            <div class="row">
                <div class="botoncrear">
                    <div class="col-7 text-end">
                        <button id="botoncrear" type="submit" class="btn btn-primary mt-5">Agregar Pelicula</button>
                    </div>
                </div>
            </div>
            <div class="linea"></div>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>