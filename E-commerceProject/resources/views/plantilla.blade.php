
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/BaseResponsive.css">
    <script src="/js/main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <title>
    @yield("titulo")
    </title>
</head>

<body>
    <header>
        <div class="top">
                <div class="top-right links">
                    @if (Route::has('login'))
                            @auth
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                            @csrf
                                    <button type="submit" class="logout">Logout</button>
                                </form>
                                <div class="cart">
                                    <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                            @endauth
                    @endif
                    
                </div>
        </div>
        <nav class="nav">
            <a href="/"><img class="logo" src="/img/logo.png" alt=""></a>
            <div class="search-container flex-container center">
                    <form class="flex-container center flex-nowrap" id="searchForm" method="get" action="productos/search">
                        <input id="search" placeholder="Buscar" type="search" name="q" value="" class="inputField">
                        <input class="magnifier" type="image" src="/img/search.svg" value="Buscar">
                    </form>
            </div>
        </nav>
                   
        <nav class="navbar-nav justify-content-center navbar-expand-md navbar-dark bg-primary">  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse container navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @foreach($categorias as $categoria)
                    <a class="nav-item nav-link active" href="/categoria/{{$categoria->id}}">{{$categoria->nombre}}</a>
                    @endforeach
                </div>
            </div>
        </nav>
    </header>

@yield("cuerpo")

    <footer>
        <div class="sucursales fix-container">
            <div class="spacer">
                <h3 class="title-component">Sucursales</h3>
                <span class="line"></span>
            </div>
            <div class="sucursal-container">
                <div class="sucursal-map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.184220461507!2d-58.44580918427581!3d-34.54889078047388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436ef74b8e5%3A0x2aea39ac02ee146f!2sAv.+Monroe+860%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1544740352077"
                        height="326" width="628" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="sucursal-data-container">
                    <div class="sucursal selected" data-name="nunez">
                        <h2 class="sucursal-name">NUÑEZ</h2>
                        <P class="sucursal-data">Monroe 860| CP10001 | CABA</P>
                        <P class="sucursal-data">Tel: +54 11 5263-7400</P>
                    </div>
                    <div class="sucursal" data-name="centro">
                        <h2 class="sucursal-name">CENTRO</h2>
                        <P class="sucursal-data">Lima 1111| CP10001 | CABA</P>
                        <P class="sucursal-data">Tel: +54 11 5263-7400</P>
                    </div>
                    <div class="sucursal" data-name="brasil">
                        <h2 class="sucursal-name">BRASIL</h2>
                        <P class="sucursal-data">Av. Dr. Cardoso de Melo 90 | CP10001 | San Pablo</P>
                        <P class="sucursal-data">Tel: +55 11 4858-4000</P>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="questions fluid-container">
            <div class="questions-container fix-container ">
                <div class="col-md-4center-text col-xs-12">
                    <div class="question">
                        <div class="service-icon">
                            <img class="question-img" src="/img/question-mark.png" alt="">
                        </div>
                        <div class="question-text-container">
                            <h3 class="question-text-title">Pago Seguro</h3>
                            <p class="question-text">Tus datos estan protegidos con nosotros</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  center-text col-xs-12">
                    <div class="question">
                        <div class="service-icon">
                            <img class="question-img" src="/img/truck.png" alt="">
                        </div>
                        <div class="question-text-container">
                            <h3 class="question-text-title">Envíos</h3>
                            <p class="question-text">A todo el país</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 center-text col-xs-12">
                    <div class="question">
                        <div class="service-icon">
                            <img class="question-img" src="/img/cards.png" alt="">
                        </div>
                        <div class="question-text-container">
                            <h3 class="question-text-title">Métodos de pago</h3>
                            <p class="question-text">Hasta 6 cuotas sin interés</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="bottom fix-container">
            <div class="bottom-container">
                <div class="col-md-4 col-xs-12 flex-container center">
                    <div class="us-container">
                        <h3 class="bottom-title">NOSOTROS</h3>
                        <ul>
                            <li>
                                <a class="us-link" href="/quienes-somos">Quienes Somos</a>
                            </li>
                            <li>
                                <a class="us-link" href="/contact">Trabaja con Nosotros</a>
                            </li>
                            <li>
                                <a class="us-link" href="/contact">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4  col-xs-12 flex-container center">
                    <div class="us-container">
                        <h3 class="bottom-title">CATEGORIAS</h3>
                        <ul>
                            @foreach($categorias as $categoria)
                                <li>
                                    <a class="us-link" href="/categoria/{{$categoria->id}}">{{$categoria->nombre}}</a>
                                </li>
                            @endforeach
                        <ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 flex-container center">
                    <div class="us-container">
                        <h3 class="bottom-title">ENTERATE DE NUESTRAS NOVEDADES</h3>
                        <P class="us-link">Recibí alertas de descuentos y nuevos productos</P>
                        <form class="form-email flex-container space-between" action="" method="post" name="form">
                            <input type="email" name="email" class="email" placeholder="Ingresá tu email">
                            <button type="submit" class="submit-mail">ENVIAR</button>
                        </form>
                        <div class="footer-social">
                            <a href="https://www.instagram.com/" class="it"><img src="/img/instagram.png" alt="insta"></a>
                            <a href="https://www.twitter.com/" class="tw"><img src="/img/twitter.png" alt=""></a>
                            <a href="https://www.facebook.com/" class="fb"><img src="/img/facebook.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="fix-container margin-bottom">
                <div class="bottom-data flex-container center align-items-center">
                    <p><strong>Atención al cliente: <span class="red">+54 11 5263-7400</span></strong> | Lunes a Viernes de 9 a 18 hs.</p>
                    <a class="flex-container" href="">
                        <img src="/img/afip.png" alt="" class="img-afip">
                    </a>
                </div>
            </div>
    
        </div>
    </footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
