<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand color-text-nav" href="http://localhost/Metropolisweb/public" style="color: blue">
            <img src="../img/grupometropolis.png" width="190" heigth="75" alt="">
        </a>
        <div class="collapse navbar-collapse d-none d-sm-none d-md-block" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-light">
                    <li class="nav-item" id="tab-somos">
                        <a class="nav-link" href="http://localhost/Metropolisweb/public/info">Quienes Somos</a>
                    </li>
                    <li class="nav-item" id="tab-prov">
                        <a class="nav-link" href="http://localhost/Metropolisweb/public/prov">Provedores</a>
                    </li>
                    <li class="nav-item"id="tab-sedes">
                        <a class="nav-link" href="http://localhost/Metropolisweb/public/sedes">Sedes</a>
                    </li>
                    <li class="nav-item" id="tab-catl">
                        <a class="nav-link" href="http://localhost/Metropolisweb/public/catalogo" :active="request()->routeIs('home.productos')">Productos</a>
                    </li>
                </ul>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button type="button" class="btn btn-ligt" href="#"><i class="fas fa-search"></i></button>
                </form>
            </ul>
            <ul class="btn-group ">
                <li class="list-inline-item"><a style="color:#3b5998" class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-5" href="https://www.facebook.com/Metropolisdelacosta/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li class="list-inline-item"><a style="color:#56953e" class="g-color-white-opacity-0_8 g-color-Succes--hover g-pa-5" href="https://api.whatsapp.com/send?phone=3223926224" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                <li class="list-inline-item"><a style="color:#CF7232" class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-5" href="https://www.instagram.com/grupo_metropolis/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li class="list-inline-item"><a style="color:#CF7232" class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-5" href="http://localhost/Metropolisweb/public/cars" target=""><ion-icon name="cart-outline"></ion-icon></a></li>
                <li class="list-inline-item"><a style="color:#E2AA32" class="g-color-white-opacity-0_8 g-color-primary--hover g-pa-5" href="http://localhost/Metropolisweb/public/aut" target=""><ion-icon name="person-circle-outline"></ion-icon></a></li>
            </ul>
        </div>
    </nav>
</header>