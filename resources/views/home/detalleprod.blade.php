<?php require_once('../resources/views/home/header.php') ?>

<?php require_once('../resources/views/home/menu.blade.php') ?>

<div class="container-login">
    <div class="container text-white">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header text-white">CEMENTO ARGOS 50Kg </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="">
                    <div class="main-product-image">
                        <img src="../img/productos/argos.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="form-horizontal" action="/cart/add/224301" method="post" enctype="multipart/form-data" name="buy">
                    <div class="form-group price_elem row">
                        <label class="col-sm-3 col-md-3 form-control-label nopaddingtop">Precio:</label>
                        <div class="col-sm-8 col-md-9">
                            <span class="product-form-price" id="product-form-price">$27.000</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Quantity" class="col-sm-3 col-md-3 form-control-label">Cantidad:</label>
                        <div class="col-sm-8 col-md-9">
                            <input type="number" class="qty form-control" id="input-qty" name="qty" maxlength="5" value="1">
                        </div>
                    </div>
                    <div class="form-group product-stock product-out-stock row hidden">
                        <label class="col-sm-3 col-md-3 form-control-label">Disponibilidad:</label>
                        <div class="col-sm-8 col-md-9">
                            <span class="product-form-price">Lo encuentras en nuestras sedes</span><br>
                            <ul>
                                <li class="list-inline-item"><i class="fas fa-check fa-2x" style="color:#148f41"></i> Santa Marta.</li>
                                <li class="list-inline-item"><i class="fas fa-times fa-2x" style="color:#f90035"></i> Cienaga.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-3 form-control-label">Descripcion:</label>
                        <div class="col-sm-8 col-md-9 description">
                            <p>¿Sabes para qué sirve el Cemento Gris de Uso General?</p>
                            <p style="text-justify"> El Cemento Gris Argos es versátil y ofrece muchas posibilidades de aplicación.
                                Es ideal para proyectos de pequeñas obras, remodelaciones y reparaciones.
                                Las presentaciones vienen en sacos de 1 kg – 5 kg – 25 kg – 50 kg.</p>

                                <a type="button" href="http://localhost/Metropolisweb/doc/CEMENTO-GRIS-USO-GENERAL-ARGOS.pdf" download="" target="_blank" class="w-30 btn btn-primary text-white">Descargar Ficha Tecnica</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-3 form-control-label">Detalles:</label>
                        <div class="col-sm-9 col-md-9">
                            <p>Marca: Argos</p>
                        </div>
                    </div>
                    <div class="form-group product-stock product-available row visible">
                        <label class="col-sm-3 col-md-3 form-control-label"></label>
                        <div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-3">
                            <a href="javascript:history.back()" class="w-30 btn btn-primary" title="Continue Shopping">← Continuar Comprando</a>    
                            <a type="button" href="http://localhost/Metropolisweb/public/cars" class="w-30 btn btn-primary text-white">Agregar a Carrito</a>
                        </div>
                    </div>
                    <input type="hidden">
                </form>
                <script>
                    $('#product-sharing a').click(function(){
                    return !window.open(this.href, 'Share', 'width=640,height=300');
                    });
                </script>
            </div>
        </div>
    </div>
</div>
<?php require_once('../resources/views/home/footer.php') ?>