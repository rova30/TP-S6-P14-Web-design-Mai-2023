
<?php
use Carbon\Carbon;
Carbon::setLocale('fr');
?>
    <!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{Str::slug($article->titre)}}" />

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{Str::slug($article->titre)}}-{{$article->id}}</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/front-office/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/front-office/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/front-office/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/front-office/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/front-office/img/favicons/manifest.json'">
    <meta name="msapplication-TileImage" content="assets/front-office/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="/assets/front-office/vendors/prism/prism.css" rel="stylesheet">
    <link href="/assets/front-office/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/front-office/css/theme.css" rel="stylesheet')?>" />
    <link href="/assets/front-office/css/user.css" rel="stylesheet" />

</head>


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href=""><img src="<?php echo asset('assets/front-office/img/Logo.png')?>" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="{{url('/')}}">Accueil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>

        <div class="container">
            <div class="border-bottom border-dark py-7">
                <p class="text-dark text-center fs-1">Article</p>
                <br>
                <br>
                <div class="row align-items-center gx-xl-7">
                    <div class="col-lg-6 text-center"><a href="#"><img class="img-fluid" src="{{$article->img}}" alt="" /></a></div>
                    <div class="col-lg-6 mt-5 mt-lg-0 text-center text-lg-start">
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                            <p class="mb-0">{{Carbon::parse($article->dateheurepublication)->isoFormat('dddd DD MMMM YYYY, HH:mm')}}</p>
                        </div><a href="#">
                            <h1 class="fs-xl-5 fs-md-4 fs-3 my-3">{{$article->titre}}</h1>
                        </a>
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-2"><a href="#">
                                <p class="mb-0">{{$article->getRedacteurUserAttribute()->nom}}&nbsp;{{$article->getRedacteurUserAttribute()->prenom}}</p>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-5">

        <div class="container">
            <div class="row align-items-center gx-xl-7">
                {!!$article->contenu!!}
            </div>
        </div>
    </section>



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
                <p class="w-lg-75 text-gray">Un site-web dont vous y trouverez les dernières infos sur l'IA.</p>
            </div>
            <p class="text-gray">Tous droits réservées.</p>
        </div>
        <!-- end of .container-->
    </div>
</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="/assets/front-office/vendors/popper/popper.min.js"></script>
<script src="/assets/front-office/vendors/bootstrap/bootstrap.min.js"></script>
<script src="/assets/front-office/vendors/anchorjs/anchor.min.js"></script>
<script src="/assets/front-office/vendors/is/is.min.js"></script>
<script src="/assets/front-office/vendors/fontawesome/all.min.js"></script>
<script src="/assets/front-office/vendors/lodash/lodash.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="/assets/front-office/vendors/prism/prism.js"></script>
<script src="/assets/front-office/vendors/swiper/swiper-bundle.min.js"></script>
<script src="/assets/front-office/js/theme.js"></script>

</body>

</html>
