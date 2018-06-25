<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/solar/bootstrap.min.css" rel="stylesheet" >
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/pinterest.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>TIENDA ARACELY</title>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/aracely.ico"/>
</head>
<body>
<?php
include 'menu.php';
?>
<!--Inicio de Carrusel-->
<div class="container-fluidt">
    <div class="row">
        <div class="col-12 mt-2">
            <div class="carousel slide" id="principal-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#principal-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#principal-carousel" data-slide-to="1"></li>
                    <li data-target="#principal-carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagenes/baner1.png" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>TIENDA</h5>
                            <p>golosinas en general</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/banerof.png" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/banerof2.png" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>

                <a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a href="#principal-carousel" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--fin de Carrusel-->

<!--inicio de pinteres-->
<div class="container text-center" >
    <div class="row">
        <section id="demo">
            <article class="white-panel"> <img src="imagenes/producto1.png" alt="ALT">
                <h1><a href="#">caja de galletas</a></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, error.</p>
                <h2>precio s/14.00</h2>

                <p>

                    <a  class="btn btn-success" href="carrito.html" target="_blank">Comprar</a>
                    <a  class="btn btn-primary" href="detalle1.php">Ver mas</a>
                </p>
            </article>
            <article class="white-panel"> <img src="imagenes/producto2.png" alt="ALT">
                <h1><a href="#">bolsa de videos</a></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, error.</p>
                <h2>precio s/40.00</h2>

                <p>

                    <a  class="btn btn-success" href="carrito.html">Comprar</a>
                    <a  class="btn btn-primary" href="detalle2.php">Ver mas</a>
                </p>
            </article>

            <article class="white-panel"> <img src="imagenes/producto3.png" alt="ALT">
                <h1><a href="#">caja de leche x48</a></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, perspiciatis.</p>
                <h2>precio s/50.00</h2>
                <p>
                    <a  class="btn btn-success" href="carrito.html">Comprar</a>
                    <a  class="btn btn-primary" href="detalle3.php">Ver mas</a>
                </p>
            </article>

            <article class="white-panel"> <img src="imagenes/producto4.png" alt="ALT">
                <h1><a href="#">saco de arros 10 kilos</a></h1>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, perspiciatis.</p>
                    <h2>precio s/27.00</h2>
                </div>
                <p>
                    <a  class="btn btn-success" href="carrito.html">Comprar</a>
                    <a  class="btn btn-primary" href="detalle4.php">Ver mas</a>
                </p>
            </article>
    </div>
    </section>
</div>
<!--fin de pinteres-->
<?php
include 'footer.php';
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/pinterest_grid.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
</body>
</html>