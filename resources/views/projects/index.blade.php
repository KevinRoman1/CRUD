<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
              <div class="container text-center">
              <div class="row">
                <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>
                </div>
              </div>
              <div class="row">
                <div class="col">
                <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('project')}}">Gestion de Proyectos</a>
              </li>
            </ul>
                </div>
                <div class="col-8">
                <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/image1.jpg" class="d-block w-100" alt="imagen1">
                </div>
                <div class="carousel-item">
                  <img src="images/image2.jpg" class="d-block w-100" alt="imagen2">
                </div>
                <div class="carousel-item">
                  <img src="images/image2.jpg" class="d-block w-100" alt="imagen3">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
                </div>
                  <table class="table">
    <thead>
      
      <tr>
        <th scope="col">#</th>
        <th scope="col">Proyecto</th>
        <th scope="col">descripcion</th>
        <th scope="col">Fecha creacion</th>
        <th scope="col">Accion</th>

      </tr>
    </thead>
    <tbody>
      @foreach($proyectos as $proyecto)
      <tr>
        <th scope="row">{{$proyecto->id}}</th>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->descripcion}}</td>
        <td>{{$proyecto->created_at}}</td>
        <td>
          <a href="{{ route('project.edit', $proyecto->id) }}"
            class="btn btn-secondary">Editar</button></a>
            </form>
            </td>
            <td>
              

          <form action ="{{route('project.destroy', $proyecto->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <BUTTON type='submit' class="btn btn-secondary" >Delete</button>

</form>
</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="col">
      3 of 3
    </div>
  </div>
<div class="row">
    <div class="col">
      1 of 1
    </div>
  </div>
  </div>

</div>
  </body>
</html>
