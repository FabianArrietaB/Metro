<?php require_once('../resources/views/home/header.php') ?>

<nav class="navbar navbar-expand-sm navbar-primary bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/Metropolisweb/public">
      <img src="../img/logo2.png" alt="Logo" style="width:60px;" class="rounded-pill">
    </a>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="navbar-brand px-1" href="#"><i class="fas fa-envelope fa-2x"></i></a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand px-1" href="#"><i class="fas fa-bell fa-2x"></i></a>
        </li>
      </ul>
      <div class="container-fluid">
        <div class="col-sm-12">
          <div class="input-group">
              <input class="form-control form-control-dark w-90" type="text" placeholder="Buscar" aria-label="Search">  
              <button type="button" class="btn btn-ligt" href="#"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
        <div class="nav-item text-nowrap">
          <ul class="dropdown navbar-nav me-auto">
            <a type="button" class="navbar-brand" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" href="#">
              <strong>Usuario </strong><i class="fas fa-user fa-2x"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Datos</a></li>
              <li><a class="dropdown-item" href="#">Permisos</a></li>
              <li><a class="dropdown-item" href="#">Salir</a></li>
            </ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="d-flex justify-content-center">
        <div class="flex-grow-1 ps-2">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <h4>HOGAR</h4>
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <h4>ELECTRICOS</h4>
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <h4>FERRETERIA</h4>
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <h4>HERRAMIENTAS</h4>
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <h4>JARDINERIA</h4>
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <h4>VARIEDADES</h4>
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <h4>PINTURA</h4>
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <h4>PLOMERIA</h4>
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <h4>TORNILLERIA</h4>
                <span data-feather="home"></span>
                </a>
              </li>
            </ul>
          </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../img/productos/promo.png" class="rounded mx-auto d-block" width="90%" height="auto" alt="...">
            </div>
            <div class="carousel-item">
            <img src="../img/productos/promo.png" class="rounded mx-auto d-block" width="90%" height="auto" alt="...">
            </div>
            <div class="carousel-item">
            <img src="../img/productos/promo.png" class="rounded mx-auto d-block" width="90%" height="auto" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class=" justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Cemento Argos 50Kg</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                <img src="../Img/productos/argos.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200"  role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
                </ul>
                <h1 class="card-title pricing-card-title">$29.000<small class="text-muted fw-light"></small></h1>
                <button type="button" class="w-100 btn btn-lg btn-primary">Detalles</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Cemento Gris Cemex 50k</h4>
              </div>
              <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <img src="../Img/productos/cemex.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200"  role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
                </ul>
                <h1 class="card-title pricing-card-title">$26.800<small class="text-muted fw-light"></small></h1>
                <button type="button" class="w-100 btn btn-lg btn-primary">Detalles</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Cemento Ultracen 50K</h4>
              </div>
              <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <img src="../Img/productos/ultracen.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200"  role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
                </ul>
                <h1 class="card-title pricing-card-title">$26.000<small class="text-muted fw-light"></small></h1>
                <button type="button" class="w-100 btn btn-lg btn-primary">Detalles</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Cemento Argos 50Kg</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                <img src="../Img/productos/argos.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200"  role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
                </ul>
                <h1 class="card-title pricing-card-title">$29.000<small class="text-muted fw-light"></small></h1>
                <button type="button" class="w-100 btn btn-lg btn-primary">Detalles</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Cemento Gris Cemex 50k</h4>
              </div>
              <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <img src="../Img/productos/cemex.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200"  role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
                </ul>
                <h1 class="card-title pricing-card-title">$26.800<small class="text-muted fw-light"></small></h1>
                <button type="button" class="w-100 btn btn-lg btn-primary">Detalles</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Cemento Ultracen 50K</h4>
              </div>
              <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <img src="../Img/productos/ultracen.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200"  role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
                </ul>
                <h1 class="card-title pricing-card-title">$26.000<small class="text-muted fw-light"></small></h1>
                <button type="button" class="w-100 btn btn-lg btn-primary">Detalles</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
