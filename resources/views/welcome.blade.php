<?php require_once('../resources/views/header.php') ?>

<nav class="navbar navbar-expand-sm navbar-primary bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../img/logo2.png" alt="Logo" style="width:50px;" class="rounded-pill">
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
              <button type="button" class="btn btn-primary" href="#"><i class="fas fa-search"></i></button>
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
                <i class="fas fa-home fa-1x"> HOME</i>
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-th-large fa-1x"> CATALAGO</i>
                <span data-feather="shopping-cart"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-clipboard-list fa-1x"> REPORTES</i>
                <span data-feather="bar-chart-2"></span>
                </a>
              </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Guardar reportes</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Reporte Semanal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Reporte Quincenal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Reporte Mensual
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Reporte Anual
                </a>
              </li>
            </ul>
          </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">PRINCIPAL</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-arrow-alt-circle-up"></i> Subir Archivo</button>
            <button type="button" class="btn btn-sm btn-outline-primary">Exportar <i class="fas fa-arrow-alt-circle-down"></i></button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle">
            <span data-feather="calendar"></span>
            Esta Semana
          </button>
        </div>



    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
