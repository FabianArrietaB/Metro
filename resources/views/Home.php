<?php require_once('../resources/views/header.php') ?>

<?php require_once('../resources/views/menu.php') ?>

<main>
  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <?php
              for ($i=0; $i<40; $i++) {
                echo '<ol data-target="#myCarousel" data-slide-to="'.$i.'" class=""></ol >';
              }
            ?>
      </ol>
      <div class="carousel-inner">
        <?php
          for ($i=0; $i<40; $i=$i+2) {
              echo
              '<div class="carousel-item '.(($i==0) ? 'active' : '').'">
                <div class="row">
                  <div class="col">
                    <img src="../img/img/img'.$i.'.png" loading="lazy" width="100%" heigth="auto" alt="">
                  </div>
                  <div class="col">
                    <img src="../img/img/img'.($i+1).'.png" loading="lazy" width="100%" heigth="auto" alt="">
                  </div>
                </div>
              </div>';
          }
        ?>
      </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
  </div>
  <hr class="featurette-divider">
  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-3">
        <img src="../img/home/somos.png" class="bd-placeholder-img rounded-circle rounded mx-auto d-block" width="140" height="140" alt="">
        <h2 class="text-center">Quienes Somos</h2>
        <p class="text-center" ><button type="button" class="btn btn-primary">Ver</button></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img src="../img/home/sedes.jpg" class="bd-placeholder-img rounded-circle rounded mx-auto d-block" width="140" height="140" alt="">
        <h2 class="text-center">Sedes</h2>
        <p class="text-center" ><button type="button" class="btn btn-primary">Ver</button></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img src="../img/home/productos.jpg" class="bd-placeholder-img rounded-circle rounded mx-auto d-block" width="140" height="140" alt="">
        <h2 class="text-center">Productos</h2>
        <p class="text-center" ><button type="button" class="btn btn-primary">Ver</button></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img src="../img/home/prov.jpg" class="bd-placeholder-img rounded-circle rounded mx-auto d-block" width="140" height="140" alt="">
        <h2 class="text-center">Proveedores</h2>
        <p class="text-center" ><button type="button" class="btn btn-primary">Ver</button></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
      <img src="../Img/Home/Vision.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="../Img/Home/Mision.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <img src="../Img/Home/Valores.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
      </div>
    </div>
    <hr class="featurette-divider">
  </div><!-- /.container -->
</main>
  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <?php require_once('../resources/views/footer.php') ?>