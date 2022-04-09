<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Metropolis</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../resources/css/estilos.css">
        <link rel="stylesheet" href="../resources/login/plugins/sweetalert2/sweetalert2.min.css">
        <link rel="stylesheet" type="text/css" href="../resources/login/fuentes/iconic/css/material-design-iconic-font.min.css">
        <script src="../resources/login/jquery/jquery-3.3.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="../resources/login/popper/popper.min.js"></script>
        <script src="../resources/login/plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="../resources/js/codigo.js"></script>
    </head>
    <body>
        <div class="container-login">
            <div class="wrap-login">
                <form class="login-form validate-form" id="formLogin" action="" method="post">
                    <a class="navbar-brand" href="http://localhost/Metropolisweb/public"><span class="login-form-title"><img src="../img/logo2.png" alt="Logo" style="width:150px;" class="rounded-pill"></span>
                    <div class="wrap-input100" data-validate = "Usuario incorrecto">
                        <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                        <span class="focus-efecto"></span>
                    </div>
                    <div class="wrap-input100" data-validate="Password incorrecto">
                        <input class="input100" type="password" id="password" name="password" placeholder="Password">
                        <span class="focus-efecto"></span>
                    </div>
                    <div class="container-login-form-btn">
                        <div class="wrap-login-form-btn">
                            <div class="login-form-bgbtn"></div>
                            <button type="submit" name="submit" class="login-form-btn">CONECTAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>