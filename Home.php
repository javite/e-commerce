<?php
require_once("funciones.php");
$usuario="";
if(isset($_SESSION["usuario"])) {
  $usuario = $_SESSION["usuario"];
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/BaseResponsive.css">
    <title>REGAL.AR</title>
</head>

<body>
    <header>
        <nav class="nav">
            <img class="logo" src="img/logo.png" alt="">
             <?php if($usuario == "") :?>
            <ul class="login">
                <li>
                    <a class="registro" href="registro.php">Registrese</a>
                </li>
                <li>
                    <a class="ingreso" href="login.php">Login</a>
                </li>
            </ul>
          <?php else : ?>
            <div class="logeado">
            <ul class="logout">
                <li class="registro">
                 <a class="registro" href="detalleUsuario.php"><?="Hola"." ".$usuario."!"?></a> 
                </li>
                  <img src="" alt="">
                  <li class="logout">
                  <a class="logeado" href="logout.php">Logout</a>
                 </li>
            </ul>
            </div>
<?php
        endif; ?>
        </nav>
        <form class="buscadorForm" action="#" method="get">
            <input class="buscadorInput" type="search" placeholder="Buscar...">
            <input class="buscadorSubmit" type="submit" value="IR!" />
            <a class="carrito" href="#">
                <img class="carrito" src="img/carrito1.jpg" alt="">
            </a>
        </form>
    </header>
    <section class="divselec">
        <div class="filtros">
        <form class="categoria" action="" method="get">
            <label for="categoria"></label>
            <select id="categoria" name="categoria">
                <option value="cat1">Categoría 1</option>
                <option value="cat2">Categoría 2</option>
                <option value="cat3">Categoría 3</option>
                <option value="cat4">Categoría 4</option>
                <option value="cat5">Categoría 5</option>
                <option value="cat6">Categoría 6</option>
                <option value="cat7">Categoría 7</option>
            </select>
            <input type="submit" value="Filtrar">
        </form>
        <form class="precio" action="" method="get">
          <label for="precio"></label>
          <select id="precio" name="precio">
            <option value="max500">Hasta $500 </option>
            <option value="max1500">$500 a $1500 </option>
            <option value="max2500">$1500 a $2500 </option>
            <option value="min2500">Más de $2500 </option>
          </select>
          <input type="submit" value="Filtrar">
        </form>
        </div>
        <div class="seleccion">
            <form action="" method="get">
                <input class="radioButton" type="radio" name="opciones" value="s">
                <span>En Liquidación</span>
                <br>
                <input class="radioButton" type="radio" name="opciones" value="n">
                <span>Lo Más Vendido</span>
                <br>
                <input class="radioButton" type="radio" name="opciones" value="n">
                <span>Novedades</span>
                <br>
                <input class="buttonOpciones" type="submit" value="Aplicar">
            </form>
        </div>
    </section>

    <section class="section-articulos">
        <article class="articulos">
            <div class="imagen">
                <img src="img/producto-1.jpg" alt="">
                <a class="zoom" href="#">Detalle</a>
            </div>
            <div class="datosProducto">
                <div class="descripcion">
                    <h2 class="nombre">Producto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                </div>
                <div class="precio">
                    <h2 class="valor">$1000</h2>
                </div>
            </div>
        </article>

        <article class="articulos">
            <div class="imagen">
                <img src="img/producto-2.jpg" alt="">
                <a class="zoom" href="#">Detalle</a>
            </div>
            <div class="datosProducto">
                <div class="descripcion">
                    <h2 class="nombre">Producto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                </div>
                <div class="precio">
                    <h2 class="valor">$1000</h2>
                </div>
            </div>
        </article>

        <article class="articulos">
            <div class="imagen">
                <img src="img/producto-3.jpg" alt="">
                <a class="zoom" href="#">Detalle</a>
            </div>
            <div class="datosProducto">
                <div class="descripcion">
                    <h2 class="nombre">Producto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                </div>
                <div class="precio">
                    <h2 class="valor">$1000</h2>
                </div>
            </div>
        </article>

        <article class="articulos">
            <div class="imagen">
                <img src="img/producto-4.jpg" alt="">
                <a class="zoom" href="#">Detalle</a>
            </div>
            <div class="datosProducto">
                <div class="descripcion">
                    <h2 class="nombre">Producto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                </div>
                <div class="precio">
                    <h2 class="valor">$1000</h2>
                </div>
            </div>
        </article>

        <article class="articulos">
            <div class="imagen">
                <img src="img/producto-5.jpg" alt="">
                <a class="zoom" href="#">Detalle</a>
            </div>
            <div class="datosProducto">
                <div class="descripcion">
                    <h2 class="nombre">Producto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                </div>
                <div class="precio">
                    <h2 class="valor">$1000</h2>
                </div>
            </div>
        </article>

        <article class="articulos">
            <div class="imagen">
                <img src="img/producto-6.jpg" alt="">
                <a class="zoom" href="#">Detalle</a>
            </div>
            <div class="datosProducto">
                <div class="descripcion">
                    <h2 class="nombre">Producto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                </div>
                <div class="precio">
                    <h2 class="valor">$1000</h2>
                </div>
            </div>
        </article>
    </section>
    <footer>
        <p class="footer">Copyright © 1999-2018 Digital House courso Blend Full Stack</p>
    </footer>



</body>

</html>
