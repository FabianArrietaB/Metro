<?php require_once('../resources/views/home/header.php') ?>

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

<section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <p class="mb-5 text-center">
                <i class="text-info font-weight-bold">3</i> items in your cart</p>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:50%">Producto</th>
                        <th style="width:15%">Precio unidad</th>
                        <th style="width:15%">Cantidad</th>
                        <th style="width:10%">Valor Total</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Producto">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="https://via.placeholder.com/100x100/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>Product Name</h4>
                                    <p class="font-weight-light">Brand &amp; Name</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Precio">$49.00</td>
                        <td data-th="Cantidad">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td data-th="Precio total">$49.00</td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-success border-secondary bg-success btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button>
                                <button class="btn btn-danger border-secondary bg-danger btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td data-th="Producto">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="https://via.placeholder.com/100x100/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>Product Name</h4>
                                    <p class="font-weight-light">Brand &amp; Name</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Precio">$49.00</td>
                        <td data-th="Cantidad">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td data-th="Precio total">$49.00</td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-success border-secondary bg-success btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button>
                                <button class="btn btn-danger border-secondary bg-danger btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td data-th="Producto">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="https://via.placeholder.com/100x100/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>Product Name</h4>
                                    <p class="font-weight-light">Brand &amp; Name</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Precio">$49.00</td>
                        <td data-th="Cantidad">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td data-th="Precio total">$49.00</td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-success border-secondary bg-success btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button>
                                <button class="btn btn-danger border-secondary bg-danger btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td data-th="Producto">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="https://via.placeholder.com/100x100/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>Product Name</h4>
                                    <p class="font-weight-light">Brand &amp; Name</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Precio">$49.00</td>
                        <td data-th="Cantidad">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td data-th="Precio total">$49.00</td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-success border-secondary bg-success btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button>
                                <button class="btn btn-danger border-secondary bg-danger btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>Subtotal:</h4>
                <h1>$99.00</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Pagar</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="catalog.html">
                <i class="fas fa-arrow-left mr-2"></i> Continuar Comprando</a>
        </div>
    </div>
</div>
</section>