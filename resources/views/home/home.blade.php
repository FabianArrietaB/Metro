<?php require_once('../resources/views/home/header.php') ?>

<?php require_once('../resources/views/home/menu.blade.php') ?>

<main>
  <div class="container-fluid">
    <div class="container-carrusell">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <?php
                for ($i=0; $i<27; $i++) {
                  echo '<ol data-target="#myCarousel" data-slide-to="'.$i.'" class=""></ol >';
                }
              ?>
        </ol>
        <div class="carousel-inner">
          <?php
            for ($i=0; $i<27; $i=$i+2) {
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
  </div>
  <?php require_once('../resources/views/home/footer.php') ?>
</main>