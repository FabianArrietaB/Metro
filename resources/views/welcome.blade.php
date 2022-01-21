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
      <div class="navbar-nav">
      	<div class="nav-item text-nowrap">
      		<ul class="dropdown navbar-nav me-auto">
        		<a type="button" class="navbar-brand" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" href="#">
          		<strong>Usuario</strong><img src="../img/logo2.png" alt="Logo" style="width:50px;" class="rounded-pill">
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
                <i class="fas fa-home"></i>
                Inicio
                <span data-feather="home"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-th-large"></i>
                Productos
                <span data-feather="shopping-cart"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-clipboard-list"></i>
                Reportes
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
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tablero</h1>
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
      </div>
      <h2>Elementos</h2>
      <div class="table-responsive" style="text-align: center">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Posicion</th>
              <th scope="col">Nombre</th>
              <th scope="col">Dimensiones</th>
              <th scope="col">Formato</th>
              <th scope="col">Estado</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>img0</td>
              <td>1920*1080</td>
              <td>png</td>
              <td><img src="../img/Dash/si.png" height="35" width="35"></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                  <button type="button" class="btn btn-success"><i class="fas fa-check-circle"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>img1</td>
              <td>1920*1080</td>
              <td>png</td>
              <td><img src="../img/Dash/no.png" height="35" width="35"></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                  <button type="button" class="btn btn-success"><i class="fas fa-check-circle"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>img2</td>
              <td>1920*1080</td>
              <td>png</td>
              <td><img src="../img/Dash/not.png" height="35" width="35"></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                  <button type="button" class="btn btn-success"><i class="fas fa-check-circle"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
