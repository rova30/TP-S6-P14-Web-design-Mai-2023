@extends('layout')

<?php
    use Carbon\Carbon;
    Carbon::setLocale('fr');
?>
    @section('content')

    <section class="bg-dark pt-6">

        <div class="container"  style="margin-top:80px">
            <div class="col-md-8">
                <h1 class="text-white fs-lg-3 fs-md-3 fs-2">Bienvenue, vous trouverez ici les dernières infos sur l'IA.</h1>
                <form action="{{url('/search')}}" method="get">
                <div class="row mt-5">
                    <div class="col-auto w-100 w-lg-50">
                        @if(isset($keyword))
                            <input class="form-control mb-2 border-light fs-1" type="text" name="keyword" placeholder="Tapez un mot clé"  value="{{$keyword}}" />
                            @else
                                <input class="form-control mb-2 border-light fs-1" type="text" name="keyword" placeholder="Tapez un mot clé" />
                        @endif
                    </div>
                    <div class="col-auto mt-2 mt-lg-0">
                        <button class="btn btn-success text-dark fs-1" type="submit">Rechercher</button>
                    </div>
                </div>
                </form>

            </div>
            <div class="swiper mt-6">
                <div class="swiper-container swiper-theme" data-swiper='{"slidesPerView":1,"breakpoints":{"640":{"slidesPerView":1,"spaceBetween":10},"768":{"slidesPerView":2,"spaceBetween":20},"1025":{"slidesPerView":3,"spaceBetween":40}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"},"loop":false,"freeMode":true,"loopedSlides":3}'>
                    <div class="swiper-wrapper">
                        @foreach($articles as $article)
                        <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                            <a href="{{url('/article')}}/{{Str::slug($article->titre)}}-{{$article->id}}">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <h4 class="text-black">{{$article->titre}}</h4>
                                <div class="d-flex align-items-center gap-3 mt-5">
                                    <div class="text-black">
                                        <p class="mb-0 fw-bold text-dark">{{$article->getRedacteurUserAttribute()->nom}}&nbsp;{{$article->getRedacteurUserAttribute()->prenom}}</p><small>{{Carbon::parse($article->dateheurepublication)->isoFormat('dddd DD MMMM YYYY, HH:mm')}}</small>
                                    </div>
                                </div>
                            </div>
                            </a>

                        </div>
                        @endforeach
                        @if(count($articles) == 0)
                            <div class="col-xl-12 col-xxl-6 col-lg-6 col-sm-6">
                                    <div class=""><strong>Aucun résultat.</strong></div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="swiper-button-next"><span class="fas fa-arrow-right fs-lg-3 fs-2"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-arrow-left fs-lg-3 fs-2"></span></div>
            </div>
        </div>

    </section>

    @endsection

