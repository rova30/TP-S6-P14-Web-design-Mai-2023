<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Chef Rédacteur | Back-Office</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/back-office/images/favicon.png">
    <link rel="stylesheet" href="/assets/back-office/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/back-office/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="/assets/back-office/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="/assets/back-office/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/back-office/vendor/select2/css/select2.min.css">


</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="" class="brand-logo">
            <img class="logo-abbr" src="/assets/back-office/images/logo.png" alt="">
            <img class="logo-compact" src="/assets/back-office/images/logo-text.png" alt="">
            <img class="brand-title" src="/assets/back-office/images/logo-text.png" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="" class="dropdown-item">
                                    <i class="icon-user"></i>
                                    @if (session()->get('redacteurchef')!=null)
                                        <span class="ml-2">{{session()->get('redacteurchef')[0]->prenom}}</span>
                                    @endif
                                </a>
                                <a href="{{url('/logoutRedacteurChef')}}" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Se déconnecter</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="quixnav">
        <div class="quixnav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Menu</li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-app-store"></i><span class="nav-text">Article</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{url('/redacteur-chef')}}">En attente de validation</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div id="contenu">
                    <div class="card">
                        <div class="card-body">
                            {!!$article->contenu!!}
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">{{$article->dateheurecreation}}</p>
                            <br><br>
                            <a href="{{url('/redacteur-chef/article/put')}}/{{$article->id}}" class="btn btn-outline-primary">Modifier</a>
                            <a href="{{url('/redacteur-chef/article/validate')}}/{{$article->id}}" class="btn btn-primary float-right">Valider</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Content body end
***********************************-->


    <!--**********************************
        Footer start
***********************************-->
    <div class="footer" style="">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
        </div>
    </div>
    <!--**********************************
        Footer end
***********************************-->

    <!--**********************************
       Support ticket button start
***********************************-->

    <!--**********************************
       Support ticket button end
***********************************-->

</div>

<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="/assets/back-office/vendor/global/global.min.js"></script>
<script src="/assets/back-office/js/quixnav-init.js"></script>
<script src="/assets/back-office/js/custom.min.js"></script>


<!-- Vectormap -->
<script src="/assets/back-office/vendor/raphael/raphael.min.js"></script>
<script src="/assets/vendor/morris/morris.min.js"></script>


<script src="/assets/back-office/vendor/circle-progress/circle-progress.min.js"></script>
<script src="/assets/back-office/vendor/chart/Chart.bundle.min.js"></script>

<script src="/assets/back-office/vendor/gaugeJS/dist/gauge.min.js"></script>

<!--  flot-chart js -->
<script src="/assets/back-office/vendor/flot/jquery.flot.js"></script>
<script src="/assets/back-office/vendor/flot/jquery.flot.resize.js"></script>

<!-- Owl Carousel -->
<script src="/assets/back-office/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<!-- Counter Up -->
<script src="/assets/back-office/vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="/assets/back-office/vendor/jqvmap/js/jquery.vmap.usa.js')?>"></script>
<script src="/assets/vendor/jquery.counterup/jquery.counterup.min.js')?>"></script>


<script src="/assets/back-office/js/dashboard/dashboard-1.js')?>"></script>
<script src="/assets/back-office/vendor/select2/js/select2.full.min.js')?>"></script>
<script src="/assets/back-office/js/plugins-init/select2-init.js')?>"></script>


</body>

</html>
