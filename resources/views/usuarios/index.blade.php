<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuevana7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class="container text-center">
      <nav class="navbar" style="background-color: #48569E;">
          <div class="container-fluid">
              <a id="titulonavbar" class="navbar-brand"><h2><strong>Cuevana7</strong></h2></a>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" onclick="window.location.href='/usuarios'" id="inicio" data-bs-toggle="tab" data-bs-target="#inicio-tab-pane" type="button" role="tab" aria-controls="inicio-tab-pane" aria-selected="true">Inicio</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" onclick="window.location.href='/usuarios/funciones'" id="funcion" data-bs-toggle="tab" data-bs-target="#funcion-tab-pane" type="button" role="tab" aria-controls="funcion-tab-pane" aria-selected="false">Funciones</button>
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
      <div class="container">
        <div class="row">
          <div class="container">
            <div id="coloriginal" class="col">
              @foreach ($peliculas as $pelicula)
              <h3 id="titulomain">{{ $pelicula->titulo }}</h3>
              <label id="labelp" class="label">Duración: {{ $pelicula->duracion_minutos }} minutos<br>Año: {{ $pelicula->año }}</label>
              <img src="{{ $pelicula->poster }}" id="img2" class="img-thumbnail" alt="...">
              @endforeach
            </div>
          </div>
        </div>
        <div class="row">
          <div id="col1" class="col">
              <h3>Columna 1</h3>
          </div>
          <div id="col2" class="col">
            <h6 id="titulo2main">Pelicula</h6>
            <label id="label2p" class="label">Aquí es donde van las sinopsis <br>
            de peliculas y se debe y se <br> 
            debe dar información clara y<br> 
            precisa del filme puede que <br>
            esto sea manual.</label>
            <img src="img/img1.png" id="img3" class="img-thumbnail" alt="...">
            <h6 id="titulo2main">Pelicula</h6>
            <label id="label2p" class="label">Aquí es donde van las sinopsis <br>
            de peliculas y se debe y se <br> 
            debe dar información clara y<br> 
            precisa del filme puede que <br>
            esto sea manual.</label>
            <img src="img/img1.png" id="img3" class="img-thumbnail" alt="...">
            <h6 id="titulo2main">Pelicula</h6>
            <label id="label2p" class="label">Aquí es donde van las sinopsis <br>
            de peliculas y se debe y se <br> 
            debe dar información clara y<br> 
            precisa del filme puede que <br>
            esto sea manual.</label>
            <img src="img/img1.png" id="img3" class="img-thumbnail" alt="...">
            <h6 id="titulo2main">Pelicula</h6>
            <label id="label2p" class="label">Aquí es donde van las sinopsis <br>
            de peliculas y se debe y se <br> 
            debe dar información clara y<br> 
            precisa del filme puede que <br>
            esto sea manual.</label>
            <img src="img/img1.png" id="img3" class="img-thumbnail" alt="...">
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>