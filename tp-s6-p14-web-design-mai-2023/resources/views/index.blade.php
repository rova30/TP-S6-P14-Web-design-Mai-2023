<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>TP-Web&Design | Front-Office</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo asset('assets/front-office/img/favicons/apple-touch-icon.png')?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo asset('assets/front-office/img/favicons/favicon-32x32.png')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo asset('assets/front-office/img/favicons/favicon-16x16.png')?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo asset('assets/front-office/img/favicons/favicon.ico')?>">
    <link rel="manifest" href="<?php echo asset('assets/front-office/img/favicons/manifest.json')?>">
    <meta name="msapplication-TileImage" content="<?php echo asset('assets/front-office/img/favicons/mstile-150x150.png')?>">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo asset('assets/front-office/vendors/prism/prism.css')?>" rel="stylesheet">
    <link href="<?php echo asset('assets/front-office/vendors/swiper/swiper-bundle.min.css')?>" rel="stylesheet">
    <link href="<?php echo asset('assets/front-office/css/theme.css" rel="stylesheet')?>" />
    <link href="<?php echo asset('assets/front-office/css/user.css')?>" rel="stylesheet" />

</head>


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href=""><img src="<?php echo asset('assets/front-office/img/Logo.png')?>" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>











    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-dark pt-6">

        <div class="container"  style="margin-top:50px">
            <div class="col-md-6">
                <h1 class="text-white fs-lg-5 fs-md-3 fs-2">Bienvenue, vous trouverez ici les derniers infos sur l'IA.</h1>
            </div>
            <div class="swiper mt-7">
                <div class="swiper-container swiper-theme" data-swiper='{"slidesPerView":1,"breakpoints":{"640":{"slidesPerView":1,"spaceBetween":10},"768":{"slidesPerView":2,"spaceBetween":20},"1025":{"slidesPerView":3,"spaceBetween":40}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"},"loop":true,"freeMode":true,"loopedSlides":3}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <h4 class="text-black">“Buyer buzz partner network disruptive non-disclosure agreement business”</h4>
                                <div class="d-flex align-items-center gap-3 mt-5"><img src="<?php echo asset('assets/front-office/img/review/1.png')?>" alt="" />
                                    <div class="text-black">
                                        <p class="mb-0 fw-bold text-dark">Albus Dumbledore</p><small>Manager @ Howarts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <h4 class="text-black">“Learning curve infrastructure value proposition advisor strategy user experience hypotheses investor.”</h4>
                                <div class="d-flex align-items-center gap-3 mt-5"><img src="<?php echo asset('assets/front-office/img/review/2.png')?>" alt="" />
                                    <div class="text-black">
                                        <p class="mb-0 fw-bold text-dark">Severus Snape</p><small>Manager @ Slytherin</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <h4 class="text-black">“Release facebook responsive web design business model canvas seed money monetization.”</h4>
                                <div class="d-flex align-items-center gap-3 mt-5"><img src="<?php echo asset('assets/front-office/img/review/3.png')?>" alt="" />
                                    <div class="text-black">
                                        <p class="mb-0 fw-bold text-dark">Harry Potter</p><small>Team Leader @ Gryffindor</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <h4 class="text-black">“Buyer buzz partner network disruptive non-disclosure agreement business”</h4>
                                <div class="d-flex align-items-center gap-3 mt-5"><img src="<?php echo asset('assets/front-office/img/review/1.png')?>" alt="" />
                                    <div class="text-black">
                                        <p class="mb-0 fw-bold text-dark">Albus Dumbledore</p><small>Manager @ Howarts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"><span class="fas fa-arrow-right fs-lg-3 fs-2"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-arrow-left fs-lg-3 fs-2"></span></div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->





</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->






<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pt-0">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-sm-12"><a href=""><img class="img-fluid mt-5 mb-4" src="<?php echo asset('assets/front-office/img/black-logo.png')?>" alt="" /></a>
                <p class="w-lg-75 text-gray">Social media validation business model canvas graphical user interface launch party creative facebook iPad twitter.</p>
            </div>
            <p class="text-gray">All rights reserved.</p>
        </div>
        <!-- end of .container-->
    </div>
</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="<?php echo asset('assets/front-office/vendors/popper/popper.min.js')?>"></script>
<script src="<?php echo asset('assets/front-office/vendors/bootstrap/bootstrap.min.js')?>"></script>
<script src="<?php echo asset('assets/front-office/vendors/anchorjs/anchor.min.js')?>"></script>
<script src="<?php echo asset('assets/front-office/vendors/is/is.min.js')?>"></script>
<script src="<?php echo asset('assets/front-office/vendors/fontawesome/all.min.js')?>"></script>
<script src="<?php echo asset('assets/front-office/vendors/lodash/lodash.min.js')?>"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll')?>"></script>
<script src="<?php echo asset('assets/front-office/vendors/prism/prism.js')?>"></script>
<script src="<?php echo asset('assets/front-office/vendors/swiper/swiper-bundle.min.js')?>"></script>
<script src="<?php echo asset('assets/front-office/js/theme.js')?>"></script>

</body>

</html>
