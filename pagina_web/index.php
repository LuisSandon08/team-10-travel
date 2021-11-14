<!DOCTYPE html>



<html lang="es">

<head>


    <meta charset="utf-8" />
    <meta name="description" content="agencia de viajes, paseos." />
    <meta name="author" content="team 10 travel" />
    <meta name="keyboards" content="sitio de agencia de viajes, team 10, travel, team 10 travel" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team 10 Travel</title>
    <link rel="icon" href="img/logo.png">

    <!-- custom css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


    <!-- font text -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&display=swap" rel="stylesheet" />

    <!-- js jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

</head>



<header id="inicio">

    <!--  INICIO  -->

    <?php include_once 'php/menu.php' ?>

    <hr>

    <!-- SHOWCASE -->


    <div class="case">


        <div class="principal">


   <!-- Swiper -->
   <div id="conoci" class="swiper mySwiper">
        

        <div class=" swiper-wrapper">

            <div class="swiper-slide">
                <img src="img/nosotras.jpg" alt="">
            </div>
            <div class="swiper-slide"><img src="img/nosotras.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="" alt="" class="">
            </div>
            <div class="swiper-slide">
                <img src="" alt="" class="">
            </div>
            <div class="swiper-slide">
                <img src="" alt="">
            </div>
            <div class="swiper-slide">
                <img src="" alt="">
            </div>
            <div class="swiper-slide">
                <img src="" alt="">
            </div>
            <div class="swiper-slide">
            </div>
            <div class="swiper-slide">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

            <div class="showcase">
                <div class="prom">
                    <h2 class="prom"><span class="typed"></span></h2>
                </div>

                <button class="btm">ver mas</button>
            </div>
        </div>

    </div>

</header>

<body>



    <!-- new cards -->

    <div class="vol-btn">
        <a href="#inicio"><i class='bx bx-up-arrow-alt' id="vol-btn2"></i></a>
    </div>

    <nav>


        <div class="cards">

            <div class="content">
                <img src="img/playaB.jpg" alt="p-blanca" class="news 1">
                <h3>BARU-PLAYA BLANCA</h3>
                <li>Transporte terrestre</li>
                <li>Almuerzo tipico</li>
                <h4>$70.000 2/p</h4>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#playa-blanca">reservar</button>
            </div>

            <div class="content">
                <img src="img/tierrabomba.jpg" alt="T-bomba" class="news 1">
                <h3>PARAISO DEL SOL-TIERRABOMBA</h3>
                <li>Transporte en lancha ida y vuelta (desde el hospital de bocagrande)</li>
                <li>Coctel de bienvenida</li>
                <li>Almuerzo tipico</li>
                <li>Uso de camas de playa</li>
                <h4>$100.000 2/p</h4>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#paraiso">reservar</button>
            </div>

            <div class="content">
                <img src="img/Abahia.jpg" alt="A-bahia" class="news 1">
                <h3>ATARDECER POR LA BAHIA</h3>
                <li>Recorido panoramico por la bahia 2 horas</li>
                <li>Barra libre de cuba libre</li>
                <li>Musica, animacion</li>
                <h4>$120.000 2/p</h4>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#playa-blanca">reservar</button>
            </div>

            <div class="content">
                <img src="img/tamarindo.PNG" alt="tamarindo" class="news 1">
                <h3>DAY TOUR TAMARINDO BEACH HOUSE</h3>
                <li>Transporte ida y regreso en lancha</li>
                <li>Coctel de bienvenida</li>
                <li>Almuerzo típico</li>
                <li>Camas lounge</li>
                <h4>$160.000 2/p</h4>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#playa-blanca">reservar</button>

            </div>

            <div class="content">
                <img src="img/Nbahia.jpg" alt="N-bahia" class="news 1">
                <h3>TOUR NOCTURNO POR LA BAHIA</h3>
                <li>Recorido panoramico por la bahia 2 horas</li>
                <li>Barra libre de cuba libre</li>
                <li>Musica, animacion</li>
                <li>Entrada a una discoteca</li>
                <h4>$120.000 2/p</h4>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="">reservar</button>
            </div>

            <div class="content">
                <img src="img/lizamar.jpg" alt="lizamar" class="news 1">
                <h3>LIZAMAR</h3>
                <li>Transporte en lancha</li>
                <li>almuerzo tipico</li>
                <li>Uso de instalaciones, asoleadoras, camas longes, parque infantil y piscina de agua dulce</li>
                <h4>$300.000 2/p</h4>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#lizamar">reservar</button>
            </div>
        </div>


        <hr id="clienteF">


        <!-- client happy -->

        <div class="h2f">
            <h4 class="clientes"><span class="clients"></span></h4>
        </div>

        <div class="client">


            <div class="">
                <img src="img/c-islote.jpeg" alt="">
            </div>

            <div class="">
                <img src="img/c-chinos.jpeg" alt="">
            </div>

            <div class="">
                <img src="img/c-volcan.jpeg" alt="">
            </div>

            <div class="">
                <img src="img/santamarta.jpeg" alt="">
            </div>

        </div>


    </nav>

    <?php
    include_once 'php/footer.php'
     ?>
    <!-- PASARELA -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!-- END PASARELA -->

    <!--SCROLL-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!--js typed-->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12">
    </script>

    <!-- JS -->
    <script src="js/main.js">
    </script>
    <script src="js/slider.js"></script>

    <script src="//code.tidio.co/7olfqrg4xw1zeanhhzjngpfolhv5ekyu.js" async></script>
</body>

</html>