<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pierre Senna</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Pierre Senna</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#moi">À propros de moi</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Mes créations</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">Étudiant en Desgin Produit</h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Mes créations</a>
            </div>
        </div>
    </div>
</header>

<!-- Services    https://cdn.dribbble.com/users/5911/screenshots/1382887/laptop.gif-->
<section class="page-section" id="moi">
    <div class="container">
        <h2 class="text-center mt-0">À propos de moi</h2>
        <hr class="divider my-6" />

    </div>
</section>
<!-- Portfolio-->
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href={{asset('images/portfolio/fullsize/porsche.JPG')}}>
                    <img class="img-fluid" src={{asset('images/portfolio/thumbnails/porsche.JPG')}} alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-name">Porsche 991.2 Carrera S Board</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href={{asset('images/portfolio/fullsize/Porsche2.JPG')}}>
                    <img class="img-fluid" src={{asset('images/portfolio/thumbnails/Porshe2.JPG')}} alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-name">Porsche 991 992 Targa 4</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href={{asset('images/portfolio/fullsize/snk.JPG')}}>
                    <img class="img-fluid" src={{asset('images/portfolio/thumbnails/snk.JPG')}} alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-name">Livai x 930 Turbo</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href={{asset('images/portfolio/fullsize/bmw.JPG')}}>
                    <img class="img-fluid" src={{asset('images/portfolio/thumbnails/bmw.JPG')}} alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-name">BMW E3 3.0</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href={{asset('images/portfolio/fullsize/undraw_under_construction_46pa.png')}}>
                    <img class="img-fluid" src={{asset('images/portfolio/thumbnails/undraw_under_construction_46pa (1).png')}} alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">En cours</div>
                        <div class="project-name">Coming soon</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/undraw_under_construction_46pa.png">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/undraw_under_construction_46pa%20(1).png" alt="" />
                    <div class="portfolio-box-caption p-3">
                        <div class="project-category text-white-50">En cours</div>
                        <div class="project-name">Coming soon</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Formation-->
<section class="page-section bg-primary" id="formation">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <a class="btn btn-danger btn-xl js-scroll-trigger" href="/dashboard/">Demande de dessin !</a>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0">Contactez-moi!</h2>
                <hr class="divider my-4" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="text-align: center;">
                <a href="https://www.instagram.com/pierre_is_drawing/" target="_blank"><img src={{asset('images/reseaux/instagram.png')}} width="80px" alt="instagram"/></a>

                <a href="mailto:contact@yourwebsite.com"><img src="{{asset('images/reseaux/mail.jpeg')}}" width="115px" alt="mail" style="margin-top: 4px;"/></a>
            </div>
            <div class="col-md-4"></div>



        </div>
    </div>
</section>
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container"><div class="small text-center text-muted">Copyright © 2021 Louis Dussoulier</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
