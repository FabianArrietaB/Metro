<?php require_once('../resources/views/header.php') ?>

<section class="box">

<!-- start login -->
<div class="container login">
    <div class="row">
      <!-- start carousel -->
      <div class="col-md-7 carousel-box">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="../img/home/somos.png" class="w-100 img-fluid" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <h5></h5>
                          <p></p>
                          <p><a href="" title="read more">Saber mas...</a></p>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img src="../img/home/Mision.png" class="w-100 img-fluid" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                      <h5></h5>
                          <p></p>
                          <p><a href="" title="read more">Saber mas...</a></p>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img src="https://blog.artegrafico.net/lab/js/login-carousel/assets/img/photo-1517430816045-df4b7de11d1d.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>Nostrud eiusmod dolor irure ad voluptate.</h5>
                          <p>Nisi proident id ad deserunt esse aliquip officia consectetur duis deserunt.</p>
                          <p><a href="" title="read more">Read more ...</a></p>
                      </div>
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </div>
      </div><!-- end carousel -->
      <div class="col-md-5 login-box">

            <!-- start tabs -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">Ingresar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-register-tab" data-bs-toggle="pill" data-bs-target="#pills-register" type="button" role="tab" aria-controls="pills-register" aria-selected="false">Registrar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" type="button" role="tab" aria-controls="pills-password" aria-selected="false">Recuperar Contraseña?</button>
                </li>
            </ul><!-- end tabs -->

            <!-- tabs -->
            <div class="tab-content" id="pills-tabContent">

                <!-- tab access -->
                <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">

                    <h2 class="text-left">Ingresar</h2>
                    <form class="login-form">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                            </div>
                            <input type="email" id="email" name="email" value="" class="form-control input_user" value="" placeholder="Usuario o Email" autocomplete />
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key" style="margin:5px 0"></i></span>
                            </div>
                            <input type="password" id="password" name="password" value="" autocomplete class="form-control input_pass" placeholder="Contraseña">
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Recuerdame</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary btn-block" id="access" name="access" style="background-color: #285D9C;">Acceder</button>
                            </div>
                        </div>

                    </form>
                </div><!-- end tab access -->

                <!-- tab register -->
                <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                    <h2 class="text-left">Registrarse</h2>
                    <form class="login-form">
                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                            </div>
                            <input type="email" id="email" name="email" value="" class="form-control input_user" value="" placeholder="Ingrese su Correo" autocomplete />
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key" style="margin:5px 0"></i></span>
                            </div>
                            <input type="password" id="password" name="password" value="" autocomplete class="form-control input_pass" placeholder="Cree su Contraseña">
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary btn-block" id="access" name="access" style="background-color: #285D9C" >Registrar</button></div>
                        </div>
                    </form>
                    <p class="agree"><small>Al registrarte, aceptas nuestros Términos. </small></p>
                </div>

                <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
                    <h2 class="text-left">Olvide Contraseña?</h2>
                    <p>¿Problemas para iniciar sesión? Ingrese su correo electrónico y le enviaremos un enlace para volver a su cuenta.</p>

                    <form class="login-form">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="far fa-user" style="margin:5px 0"></i></div>
                            </div>
                            <input type="email" id="email" name="email" value="" class="form-control input_user" value="" placeholder="Correo" autocomplete />
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary btn-block" id="access" name="access">Recuperar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div><!-- end login -->
</section>