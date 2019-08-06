@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <div class="" id="main"
         style="padding-top:7%; background-image: url({{ asset('images/mainbg.png') }});background-position: bottom; background-size: cover;">
        <div class="container-fluid main-ht" style="padding-left: 8%; padding-bottom:10%;">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12 text-coin" style="padding-top: 10%;">
                    <h1 class="text-media text-white blok1-h1">
                        ЧАСТНЫЙ ДЕТСКИЙ
                        <br>САД "ГНОМИК"
                    </h1>

                    <div class="container-fluid row pt-2 nomarnopad">
                        <div class="col-lg-2 col-3">
                            <img class="img-in-first-block" style="width: 100%;" src="{{asset('images/main1.png')}}"
                                 alt="">
                        </div>
                        <div class="col-lg-4 col-9">
                            <span class="text-fut-light text-white blok1-span">Малыши чувствуют заботу и внимание воспитателей с первых дней пребывания  в нашем саду</span>
                        </div>
                        <div class="col-lg-2 col-3">
                            <img class="img-in-first-block" style="width: 100%;" src="{{asset('images/main2.png')}}"
                                 alt="">
                        </div>
                        <div class="col-lg-4 col-9">
                            <span class="text-fut-light text-white blok1-span">Команда профессиональных педагогов обеспечивает всестороннее развитие личности ребенка</span>
                        </div>
                    </div>
                    <div class="container-fluid row nomarnopad d-lg-block d-none" style="padding-top: 5%;">
                        <div class="col-12 text-left" style="padding-left: 40%;">
                            <p class="text-white text-slogan" style="font-family: 'Segoe Print'; font-size:25px; line-height: 44px;
  transform: rotate(-22.54deg);
  -webkit-transform: rotate(-22.54deg);
  -moz-transform: rotate(-22.54deg);
  -ms-transform: rotate(-22.54deg);
  -o-transform: rotate(-22.54deg);">
                                Разбуди в
                                <br>
                                ребенке гения!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12 pb-lg-0 pb-5">
                    <img class="w-100" src="{{ asset('images/bmain.png') }}" alt="">
                    <div class="container-fluid row nomarnopad d-lg-none d-block" style="padding-top: 5%;">
                        <div class="col-12 text-left" style="padding-left: 40%;">
                            <p class="text-white text-slogan" style="font-family: 'Segoe Print'; font-size:25px; line-height: 44px;

  transform: rotate(-22.54deg);
  -webkit-transform: rotate(-22.54deg);
  -moz-transform: rotate(-22.54deg);
  -ms-transform: rotate(-22.54deg);
  -o-transform: rotate(-22.54deg);">
                                Разбуди в
                                <br>
                                ребенке гения!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="no-bg" id="about_us pb-5"
         style="padding-top:5%; background-image: url({{ asset('images/secbg.png') }}); background-size: cover;">
        <div class="col-12 text-center pb-lg-0 pb-0">
            <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px;">Почему мы?</h2>
        </div>
        <div class="container-fluid nomarnopad row">
            <div class="col-lg-4 col-md-6 d-lg-block d-none" style="padding-left: 8%;">
                <img class="in-left" style="z-index:100; position: absolute;" src="{{ asset('images/toy.png') }}"
                     alt="">
            </div>
            <div class="col-lg-3 col-md-6 blocker" style="padding-top: 10%; padding-left: 5%;">
                <div class="p-lg-5 p-3 text-center mt-lg-0 mt-3" style="background: linear-gradient(180deg, #4989D1 0%, #596DC6 100%);
border-radius: 10px; z-index:-500;">
                    <img class="mob-w" src="{{ asset('images/smiling-baby.svg') }}" alt="">
                    <p class="text-fut-bold pt-4 text-white" style="font-size: 16px; line-height: 21px;">
                        Возраст детей -
                        <br>
                        от 2 до 7 лет.
                    </p>
                    <p class="text-fut-light text-white" style="font-size: 13px; line-height: 17px; padding-top: 10%;">
                        Частный детский сад «Гномик» имеет ряд преимуществ:
                    </p>
                </div>
                <img class="clouds d-md-block d-none" style="position: absolute; right:-30%; bottom:-15%;"
                     src="{{ asset('images/cloud.png') }}" alt="">
            </div>
            <div class="col-lg-4 col-12 in-right" style="padding-left:5%; padding-top: 14%;">
                <div class="container-fluid row nomarnopad">
                    <div class="col-2">
                        <span style="font-family: Coiny; font-size: 39px; line-height: 43px;">
                    1
                </span>
                    </div>
                    <div class="col-10">
                        <span class="text-fut-light" style="font-size: 15px; line-height: 19px;">
Детский психолог, логопед — дефектолог, врач – педиатр, стоматолог
                    </span>
                    </div>
                </div>

                <div class="container-fluid row mt-3 nomarnopad">
                    <div class="col-2">
                        <span style="font-family: Coiny; font-size: 39px; line-height: 43px;">
                    2
                </span>
                    </div>
                    <div class="col-10">
                        <span class="text-fut-light" style="font-size: 15px; line-height: 19px;">
Организуются праздники, проводятся утренники и развлекательные мероприятия
                    </span>
                    </div>
                </div>

                <div class="container-fluid row mt-3 nomarnopad">
                    <div class="col-2">
                        <span style="font-family: Coiny; font-size: 39px; line-height: 43px;">
                    3
                </span>
                    </div>
                    <div class="col-10">
                        <span class="text-fut-light" style="font-size: 15px; line-height: 19px;">
4-х разовое питание. Каждый ребенок получает сбалансированное питание высокого
качества

                    </span>
                    </div>
                </div>

                <div class="container-fluid row mt-3 nomarnopad">
                    <div class="col-2">
                        <span style="font-family: Coiny; font-size: 39px; line-height: 43px;">
                   4
                </span>
                    </div>
                    <div class="col-10">
                        <span class="text-fut-light" style="font-size: 15px; line-height: 19px;">
Проводится подготовка к школе (тестирование)
                    </span>
                    </div>
                </div>

            </div>
            <div class="row row-with-animation d-md-block d-none">
                <img class="cloud-left d-lg-block d-none" style="position:absolute; right:8%; top:40px; z-index: -5;"
                     src="{{ asset('images/cloud-right.png') }}" alt="">
                <img class="cloud-right d-lg-block d-none" style="position:absolute; right:3%; top: 0px; z-index: -5;"
                     src="{{ asset('images/cloud-left.png') }}" alt="">
                <img class="sun" style="position:absolute; right:5%; top:-70px; z-index: -6;"
                     src="{{ asset('images/sun.png') }}" alt="">
            </div>
        </div>
        <div class="col-12 text-center" style="margin-top: 11%;">
            <h2 class="meropriyatiya"
                style="font-family: Coiny; font-size: 39px; line-height: 43px; padding-bottom:4%;">Наши мероприятия</h2>
            <div class="row row-with-animation2">
                <img class="cloud-right" style="position:absolute; right:3%; top:50px; z-index: -5;"
                     src="{{ asset('images/cloud-right.png') }}" alt="">
                <img class="cloud-left" style="position:absolute; right:8%; top: 80px; z-index: -5;"
                     src="{{ asset('images/cloud-left.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container" id="event" style="padding-bottom: 7%;">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="container-fluid row nomarnopad flex-lg-wrap flex-md-nowrap flex-wrap">
                    <div class="endf col-lg-5 col-md-6 col-12 px-2 pb-3 mr-lg-3 mr-md-3 mr-0 mb-lg-0 mb-3"
                         style="background-color: #EF827F;">
                        <div class="container-fluid row pr-lg-3 pr-0">
                            <div class="col-6  pt-4">
                                <p class="text-white text-fut-bold" style="font-size: 19px; line-height: 140%;">
                                    Культурный
                                    <br>
                                    отдых
                                </p>
                                <img class="pt-3" src="{{'images/pointimg1.svg'}}" alt="">
                            </div>
                            <div class="col-6 px-lg-3 px-0">
                                <img class="d-lg-block d-none" style="position: absolute; top:-11%; right:-35%;"
                                     src="{{'images/point1.png'}}" alt="">
                                <img class="d-lg-none d-block w-100 pt-lg-0 pt-3" src="{{'images/point1.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="endf col-lg-5 col-md-6 col-12 px-2 pb-3 mr-lg-3 mr-0"
                         style="background-color: #EF827F;">
                        <div class="container-fluid row pr-lg-3 pr-0">
                            <div class="col-6  pt-4">
                                <p class="text-white text-fut-bold" style="font-size: 19px; line-height: 140%;">
                                    Праздники
                                </p>
                                <img class="pt-3" src="{{'images/pointimg2.svg'}}" alt="">
                            </div>
                            <div class="col-6 px-lg-3 px-0">
                                <img class="d-lg-block d-none" style="position: absolute; top:-11%; right:-35%;"
                                     src="{{'images/point2.png'}}" alt="">
                                <img class="d-lg-none d-block w-100 pt-lg-0 pt-3" src="{{'images/point2.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid row mt-3 nomarnopad flex-lg-wrap flex-md-nowrap flex-wrap">
                    <div class="endf col-lg-5 col-md-6 col-12 px-2 pb-3 mr-3 mb-lg-0 mb-3"
                         style="background-color: #EF827F;">
                        <div class="container-fluid row pr-lg-3 pr-0">
                            <div class="col-6 pt-4">
                                <p class="text-white text-fut-bold" style="font-size: 19px; line-height: 140%;">
                                    Экскурсии
                                </p>
                                <img class="pt-3" src="{{'images/pointimg3.svg'}}" alt="">
                            </div>
                            <div class="col-6 px-lg-3 px-0">
                                <img class="d-lg-block d-none" style="position: absolute; top:-11%; right:-35%;"
                                     src="{{'images/point3.png'}}" alt="">
                                <img class="d-lg-none d-block w-100 pt-lg-0 pt-3" src="{{'images/point3.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="endf col-lg-5 col-md-6 col-12 px-2 pb-3 mr-3" style="background-color: #EF827F;">
                        <div class="container-fluid row pr-lg-3 pr-0">
                            <div class="col-6 pt-4">
                                <p class="text-white text-fut-bold" style="font-size: 19px; line-height: 140%;">
                                    Активный
                                    <br>
                                    отдых
                                </p>
                                <img class="pt-3" src="{{'images/pointimg4.svg'}}" alt="">
                            </div>
                            <div class="col-6 px-lg-3 px-0">
                                <img class="d-lg-block d-none" style="position: absolute; top:-11%; right:-35%;"
                                     src="{{'images/point4.png'}}" alt="">
                                <img class="d-lg-none d-block w-100 pt-lg-0 pt-3" src="{{'images/point4.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 pr-lg-5 pr-3 transform-0" style="padding-top:7%; transform: translateX(-7em);">
                <p class="text-fut-light" style="font-size: 16px; line-height: 140%;">
                    Наши мероприятия нацелены на расширение кругозора и получение новых эмоций у детей.
                </p>
                <p class="text-fut-light" style="font-size: 16px; line-height: 140%;">
                    Мы тщательно выстраиваем среду, в которой пребывают дети, и заботимся о том, чтобы она всегда была
                    вдохновляющая, экологичная и обогащенная интересными событиями.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row pb-lg-5 pb-5"
             style="background-image: url('{{asset('images/sector.jpg')}}'); background-size: cover; background-position: bottom;">
            <div class="col-lg-6 col-12" style="padding-left:12%; padding-top: 10%;">
                <h2 class="" style="font-family: Coiny; font-size: 39px; line-height: 43px; color: white;">
                    О наших занятиях
                </h2>

                <p class="maxwidth" style="padding-top:10%;">
                    <img src="{{asset('images/31.svg')}}" alt="">
                    <img src="{{asset('images/32.svg')}}" style="padding-left:5%;" alt="">
                    <img src="{{asset('images/33.svg')}}" style="padding-left:5%;" alt="">
                    <img src="{{asset('images/34.svg')}}" style="padding-left:5%;" alt="">
                    <img src="{{asset('images/35.svg')}}" style="padding-left:5%;" alt="">
                    <img src="{{asset('images/36.svg')}}" style="padding-left:5%;" alt="">
                </p>

                <p class="text-fut-light"
                   style="font-size: 16px; line-height: 140%; color:white; padding-right: 25%; padding-top:2%;">
                    Мы ценим индивидуальность каждого ребенка, применяем гибкий подход к обучению, что позволяет каждому
                    малышу развиваться в соответствии со своими способностями до полного раскрытия потенциальных
                    возможностей.
                </p>

                <p class="text-fut-light"
                   style="font-size: 16px; line-height: 140%; color:white; padding-right: 25%; padding-top: 2%; padding-bottom: 5%;">
                    Мы следуем главному принципу: в детском саду ребёнку должно быть уютно, интересно и радостно — как
                    дома.
                </p>

                <button class="py-lg-3 px-lg-5 py-2 px-3 text-fut-light btn" style="background-color: #518CDC;">
                    <a style="text-decoration: none;color: #fff;" href="/lessons">Перейти к списку занятий </a>
                </button>
            </div>
            <div class="col-6 pt-5">
                <img class="d-lg-block d-none in-bottom" src="{{ asset('images/kid.png')  }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid" id="gallery"
         style="background-image: url('{{ asset('images/5.png') }}'); background-size:cover;">
        <div class="row nopadsides padsides" style="padding-left:9%; padding-right:9%;">
            <div class="col-12 text-center" style="margin-top: 6%; margin-bottom: 5%;">
                <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px; padding-bottom:4%;">Галерея</h2>
            </div>

            <div class="col-lg-8 col-md-6 col-12 nopadsides d-md-block d-none">
                <div class="container"
                     style="background: linear-gradient(180deg, #FF6976 0%, #FF6F59 100%); border-radius:10px;">
                    <div class="row fixedheight">
                        <div class="col-lg-6 col-md-12 col-12"
                             style="padding-top:8%; padding-left: 5%; padding-bottom:8%;">
                            <p class="text-white text-fut-bold" style="font-size: 24px; line-height: 31px;">
                                Мы ценим каждый момент, проведенный с детьми в нашем детском саду «Гномик»
                            </p>
                            <p>
                                <button class="py-lg-3 py-2 px-lg-5 px-3 text-fut-light btn"
                                        style="background-color: #518CDC; width: 210px;">
                                    <a style="text-decoration: none;color: #fff;" href="/gallery">Перейти в галерею</a>
                                </button>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="d-lg-block d-md-none d-none" style="position:absolute; top:-25.5%; left:-10%;"
                                 src="{{'images/gallery1.png'}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 h40 d-md-block d-none"
                 style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('images/gallery2.png')}}); background-size: cover; border-radius: 10px;">
                <a href="{{ asset('gallery/4') }}">
                    <p class="text-fut-bold"
                       style="font-size:30px; line-height: 38px; color:white; position: absolute; bottom:0%; left:0%; padding-left:5%;">
                        Сад
                    </p>
                </a>
            </div>
            <div class="container-fluid pt-3 d-md-block d-none">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 h40 padbot">
                        <div class="container"
                             style="padding-top:50%; padding-bottom:50%;background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('images/gallery3.png')}}); background-size: cover; border-radius: 10px;">
                            <a href="{{ asset('gallery/2') }}">
                                <p class="text-fut-bold"
                                   style="font-size:30px; line-height: 38px; color:white; position: absolute; bottom:0%; left:0%; padding-left:8%;">
                                    Столовая
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="testt col-lg-8 col-md-6 col-12 h40"
                         style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('images/gallery4.png')}}); background-size: cover; border-radius: 10px;">
                        <a href="{{ asset('gallery/1') }}">
                            <p class="text-fut-bold"
                               style="font-size:30px; line-height: 38px; color:white; position: absolute; bottom:0%; left:0%; padding-left:5%;">
                                Спальня
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-12 d-md-none d-block">
                <div class="container"
                     style="background: linear-gradient(180deg, #FF6976 0%, #FF6F59 100%); border-radius:10px;">
                    <div class="row fixedheight">
                        <div class="col-lg-6 col-md-12 col-12"
                             style="padding-top:8%; padding-left: 5%; padding-bottom:8%;">
                            <p class="text-white text-fut-bold" style="font-size: 24px; line-height: 31px;">
                                Мы ценим каждый момент, проведенный с детьми в нашем детском саду «Гномик»
                            </p>
                            <p>
                                <button class="py-lg-3 py-2 px-lg-5 px-3 text-fut-light btn"
                                        style="background-color: #518CDC; width: 210px;">
                                    <a style="text-decoration: none;color: #fff;" href="/gallery">Перейти в галерею</a>
                                </button>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 d-lg-block d-md-none d-none">
                            <img class="" style="position:absolute; top:-25.5%; left:-10%;"
                                 src="{{'images/gallery1.png'}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-md-0 mt-3 d-md-none d-block">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="container"
                             style="padding-top:48%; padding-bottom:48%; background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('images/gallery2.png')}}); background-size: cover; border-radius: 10px;">
                            <a href="{{ asset('gallery/4') }}">
                                <p class="text-fut-bold"
                                   style="font-size:30px; line-height: 38px; color:white; position: absolute; bottom:0%; left:0%; padding-left:8%;">
                                    Сад
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-3 d-md-none d-block">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 h40 padbot">
                        <div class="container"
                             style="padding-top:50%; padding-bottom:50%;background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('images/gallery3.png')}}); background-size: cover; border-radius: 10px;">
                            <a href="{{ asset('gallery/2') }}">
                                <p class="text-fut-bold"
                                   style="font-size:30px; line-height: 38px; color:white; position: absolute; bottom:0%; left:0%; padding-left:8%;">
                                    Столовая
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="testt col-lg-8 col-md-6 col-12 mt-lg-0 mt-md-0 mt-3 d-md-none d-block">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="container"
                                     style="padding-top:50%; padding-bottom:50%; background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('images/gallery4.png')}}); background-size: cover; border-radius: 10px;">
                                    <a href="{{ asset('gallery/1') }}">
                                        <p class="text-fut-bold"
                                           style="font-size:30px; line-height: 38px; color:white; position: absolute; bottom:0%; left:0%; padding-left:8%;">
                                            Спальня
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="menu"
         style="background-image: url({{ asset('images/6.png') }}); background-size: cover;">
        <div class="row pad-x-0" style="padding-left:9%; padding-right:9%;">
            <div class="col-12 text-center" style="margin-top: 10%; margin-bottom: 5%;">
                <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px; padding-bottom:4%;">Пример меню на
                    неделю</h2>
                <div class="container">
                    <div class="row justify-content-center flex-nowrap">
                        <img class="d-lg-block d-none col-1 mr-3" style="height: 100%;"
                             src="{{asset('images/fruit1.png')}}" alt="">
                        <ul class="col-lg-10 col-12 justify-content-center pr-0 nav nav-tabs"
                            style="border:none!important;" id="myTab" role="tablist">
                            <li class="nav-item p-2">
                                <a class="nav-link p-md-2 text-center text-fut-light active"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #FFA4A3;"
                                   data-toggle="tab" href="#каша" role="tab" aria-controls=""
                                   aria-selected="true">Каша</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #F9FF85;"
                                   data-toggle="tab" href="#завтраки" role="tab" aria-controls=""
                                   aria-selected="true">Завтраки (на второе)</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #92D7FE;"
                                   data-toggle="tab" href="#полдник" role="tab" aria-controls=""
                                   aria-selected="true">Полдник</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #BEF077;"
                                   data-toggle="tab" href="#напитки" role="tab" aria-controls=""
                                   aria-selected="true">Напитки и молочная продукция</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #cffbfd;"
                                   data-toggle="tab" href="#супы" role="tab" aria-controls=""
                                   aria-selected="true">Супы</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #E2CFFD;"
                                   data-toggle="tab" href="#второе " role="tab" aria-controls=""
                                   aria-selected="true">На второе </a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #fde4cf;"
                                   data-toggle="tab" href="#салаты " role="tab" aria-controls=""
                                   aria-selected="true">Салаты </a>
                            </li>
                        </ul>
                        <img class="d-lg-block d-none col-1" style="height: 100%;" src="{{asset('images/fruit2.png')}}"
                             alt="">
                    </div>
                </div>
            </div>
            <div class="tab-content col-12" id="myTabContent">
                <div class="tab-pane fade active show" id="каша" role="tabpanel" aria-labelledby="">
                    <div class="container">
                        <div class="col-12 text-center" style="margin-bottom: 5%;">
                            <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                Каши и фрукты
                            </h2>
                        </div>
                        <div class="row justify-content-center pt-lg-0 pt-5">
                            <div class="col-lg-3 col-6">
                                <img src="{{ asset('images/1-1.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6">
                                <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                    Каши
                                </h3>
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Манная каша <br>
                                    Кукурузная каша <br>
                                    Гречневая каша <br>
                                    Рисовая каша <br>
                                    Геркулесовая каша <br>
                                    Ячневая каша <br>
                                </p>
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <img src="{{ asset('images/2.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                    Фрукты
                                </h3>
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Яблоки <br>
                                    Бананы <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="завтраки" role="tabpanel" aria-labelledby="">
                    <div class="container">
                        <div class="col-12 text-center" style="margin-bottom: 5%;">
                            <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                Завтраки (на второе)
                            </h2>
                        </div>
                        <div class="row justify-content-center pt-lg-0 pt-5">
                            <div class="col-lg-3 col-6">
                                <img src="{{ asset('images/3-1.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Сырники <br>
                                    Оладьи <br>
                                    Гренки <br>
                                    Бутерброды с маслом/ с сыром <br>
                                </p>
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <img src="{{ asset('images/4-1.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Блинчики <br>
                                    Бутерброды с икрой <br>
                                    Бутерброд с шоколадным маслом <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="полдник" role="tabpanel" aria-labelledby="">
                    <div class="container">
                        <div class="col-12 text-center" style="margin-bottom: 5%;">
                            <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                Полдник
                            </h2>
                        </div>
                        <div class="row justify-content-center pt-lg-0 pt-5">
                            <div class="col-lg-3 col-6">
                                <img src="{{ asset('images/5-1.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Булочки с разными начинками <br>
                                    Ватрушка с сахарной пудрой <br>
                                    Песочное печенье <br>
                                    Кукурузные палочки <br>
                                    Вафли молочные <br>
                                </p>
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <img src="{{ asset('images/6-1.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Крекеры «рыбка» <br>
                                    Бамбуковые палочки <br>
                                    Маффины <br>
                                    Кексы <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="напитки" role="tabpanel" aria-labelledby="">
                    <div class="container">
                        <div class="col-12 text-center" style="margin-bottom: 5%;">
                            <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                Напитки и молочная продукция
                            </h2>
                        </div>
                        <div class="row justify-content-center pt-lg-0 pt-5">
                            <div class="col-lg-3 col-6">
                                <img src="{{ asset('images/7.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6">
                                <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                    Напитки
                                </h3>
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Компот из сухофруктов <br>
                                    Морс из ягод чай с лимоном чай с шиповником <br>
                                    Сок натуральный в банках <br>
                                </p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <img src="{{ asset('images/8.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6">
                                <h3 class="text-fut-bold pt-lg-0 pt-4" style="font-size: 25px; line-height: 32px;">
                                    Молочная продукция
                                </h3>
                                <p class="text-fut-light pt-lg-0 pt-4" style="font-size: 16px; line-height: 21px;">
                                    Кефир <br>
                                    Творог <br>
                                    Айран <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="супы" role="tabpanel" aria-labelledby="">
                    <div class="container">
                        <div class="col-12 text-center" style="margin-bottom: 5%;">
                            <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                Супы
                            </h2>
                        </div>
                        <div class="row justify-content-center pt-lg-0 pt-5">
                            <div class="col-lg-3 col-6">
                                <img src="{{ asset('images/9.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Чечевичный суп с мясом <br>
                                    Борщ со сметаной с мясом <br>
                                    Пшенной суп с мясом <br>
                                    Гороховый суп с мясом <br>
                                    Гречневый суп с мясом <br>
                                </p>
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <img src="{{ asset('images/10.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Рисовый суп с мясом <br>
                                    Суп картофельный с мясом <br>
                                    Картофельный суп с мясом <br>
                                    Щи из щавеля со сметаной <br>
                                    Суп вермишелевый с мясом <br>
                                </p>
                            </div>
                        </div>

                        <div class="row justify-content-center" style="padding-top: 3%;">
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <img src="{{ asset('images/11.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Уха из семги с пшеном <br>
                                    Жидкий лагман (детский) <br>
                                    Свекольник со сметаной <br>
                                    Суп с клецками с мясом <br>
                                    Куриный суп лапша <br>
                                </p>
                            </div>
                            <div class="col-3">

                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="второе" role="tabpanel" aria-labelledby="">
                    <div class="container">
                        <div class="col-12 text-center" style="margin-bottom: 5%;">
                            <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                На второе
                            </h2>
                        </div>
                        <div class="row justify-content-center pt-lg-0 pt-5">
                            <div class="col-lg-3 col-6">
                                <img src="{{ asset('images/12.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Плов с мясом <br>
                                    Макароны по - флотски <br>
                                    Бефстроганов с пюре <br>
                                    Оромо (картошка, фарш, лук, тесто) <br>
                                </p>
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <img src="{{ asset('images/13.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Спагетти с мясным подливом <br>
                                    Рагу (мясо, капуста, картошка) <br>
                                    Мясо по-французски <br>
                                    Тефтели с гречкой <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="салаты" role="tabpanel" aria-labelledby="">
                    <div class="container">
                        <div class="col-12 text-center" style="margin-bottom: 5%;">
                            <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                Салаты
                            </h2>
                        </div>
                        <div class="row justify-content-center pt-lg-0 pt-5">
                            <div class="col-lg-3 col-6">
                                <img src="{{ asset('images/14.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Помидоры, огурцы, сметана <br>
                                    Салат овощной (морковь, огурцы, капуста) <br>
                                    Салат (морковный) <br>
                                    Салат (капустный) <br>
                                </p>
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <img src="{{ asset('images/15.png') }}" alt="">
                            </div>
                            <div class="col-lg-3 col-6 pt-lg-0 pt-4">
                                <p class="text-fut-light" style="font-size: 16px; line-height: 21px;">
                                    Салат (свекольный) <br>
                                    Салат (оливье) <br>
                                    Салат (винегрет) <br>
                                    Салат (крабовый) <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-lg-5 pt-0 mt-5 mb-5 pb-lg-5 pb-0" id="employees">
        <div class="col-12 text-center pb-lg-5 pb-3">
            <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px;">Наши сотрудники</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="carousel w-100">
                    <div class="owl-carousel">

                        @foreach($teachers as $teacher)
                            <div class="item car-media">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 pt-4 pr-lg-2">
                                            <div class="container carousel-block-2 align-items-center"
                                                 style="background: rgba(150, 199, 216, 0.44); border-radius: 5px;">
                                                <div class="row h-100">
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <img class="d-md-block d-none"
                                                             style="position: absolute;transform: translateY(-25px);"
                                                             src="{{ asset('storage/'.$teacher->image) }}" alt="">
                                                        <img class="d-md-none d-block"
                                                             src="{{ asset('storage/'.$teacher->image) }}" alt="">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12 pl-lg-5 pl-md-0 align-self-center">
                                                        <h3 style="font-family: 'Futura PT Bold';font-size: 26px;line-height: 33px;color:#000;">
                                                            {{ $teacher->name }}</h3>
                                                        <p class="pt-2"
                                                           style="font-family: 'Futura PT Light';font-size: 17px;line-height: 22px;color:#000;">
                                                            {!! $teacher->specialist !!}
                                                        </p>
                                                        <div class="row">
                                                            @if($teacher->certificates)
                                                                @foreach(json_decode($teacher->certificates, true) as $certificate)
                                                                    <div class="mr-1"><a data-fancybox="nasiba"
                                                                                          href="{{ asset('storage/'.$certificate) }}"><img
                                                                                    src="{{ asset('images/diploma.svg') }}" style="width: 30px; height: auto;"></a>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5" id="reviews" style="padding-bottom:10%;">
        <div class="container-fluid mb-md-5 mb-5 pb-md-5 pb-5">
            <div class="row justify-content-center pt-3">
                <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px; color: #fff;">Отзывы о нашем детском
                    садике</h2>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-lg-5 col-md-5 col-12 mt-5 pt-0 paddingleft">
                    <img src="{{ asset('images/right-quotation-mark.png') }}" alt="">
                    <div class="owl-carousel pt-lg-5 pt-2">
                        <div class="item">
                            <p>Большое спасибо! Теперь моя доча хочет еще больше к вам в садик!</p>
                            <h5 class="mb-0">Роза</h5>
                            <h6>мама</h6>
                        </div>
                        <div class="item">
                            <p>Супер! Заходишь во двор садика и попадаешь в сказку!</p>
                            <h5 class="mb-0">Айнура</h5>
                            <h6>мама</h6>
                        </div>
                        <div class="item">
                            <p>Спасибо Вам за неимоверно теплую и добрую атмосферу. Приветливых воспитателей и
                                замечательных деток!</p>
                            <h5 class="mb-0"> Elstudio event</h5>
                        </div>
                        <div class="item">
                            <p>Супер! Заходишь во двор садика и попадаешь в сказку!</p>
                            <h5 class="mb-0">Айнура</h5>
                            <h6>мама</h6>
                        </div>
                        <div class="item">
                            <p>Новогодний праздник прошел на УРА! Спасибо самому лучшему садику «Гномик»! Все было на
                                высшем уровне! Спасибо за ваш труд. Мы были в восторге, а дети до космоса счастливы. Ну
                                а подарочки всегда самые крутые!</p>
                            <h5 class="mb-0">Асель Бакыт</h5>
                        </div>
                        <div class="item">
                            <p>Нургуль Сайниловна, Вы у нас самый лучший и ответственный директор! Очень приятно
                                наблюдать за Вашим подходом к своему делу, то с какой заботой вы относитесь к вашим
                                детям. Очень любим Вас и благодарим. Желаем вам процветания в вашем ответственном
                                деле!</p>
                            <h5 class="mb-0">Чолпон</h5>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>


    </div>


    <div class="container-fluid no-bg" id="news">
        <div class="row parallax-effects d-lg-block d-none">
            <div class="blokparallax">
                <div class="parallax">
                    <div class="water"><img class="" src="{{ asset('images/Ellipse.png') }}" alt=""></div>
                </div>
            </div>
            <div class="blokparallax2">
                <div class="parallax2">
                    <div class="water"><img class="" src="{{ asset('images/Vector.png') }}" alt=""></div>
                </div>
            </div>
            <div class="blokparallax3">
                <div class="parallax2">
                    <div class="water"><img class="" src="{{ asset('images/Ellipse-2.png') }}" alt=""></div>
                </div>
            </div>
        </div>
        <div class="row row-with-animation3 d-lg-block d-none">
            <img class="sun" style="position:absolute;right:9%; top:15%; z-index: 0;"
                 src="{{ asset('images/Polygon.png') }}" alt="">
        </div>

        <div class="row h-100">
            <div class="col-1 d-md-block d-none"></div>
            <div class="col-lg-5 col-md-6 col-12 align-self-center pt-lg-5 pt-0" style="padding-left: 5%;">
                <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px; padding-bottom: 4%;">Открытие нашего
                    второго филиала!</h2>
                <p style="font-size: 16px;line-height: 21px;">В скором времени частный детский сад «Гномик»
                    расширится</p>
                <p style="font-size: 16px;line-height: 21px;">И мы будем рады видеть еще больше деток и их счастливые
                    лица в нашем втором филиале очень скоро!</p>
            </div>
            <div class="col-6"></div>
        </div>
    </div>

    <div class="container-fluid py-lg-5 py-md-5 py-5" id="call-back">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-7 col-md-6 col-12">
                    <h3 style="font-family: Coiny; font-size: 30px; line-height: 33px; padding-bottom:3%; color: #fff;">
                        Лист ожидания открыт</h3>
                    <p style="font-size: 16px;line-height: 21px;color: #FFFFFF;">Если Вы хотите забронировать место для
                        Вашего ребенка, запишитесь онлайн для получения подробной информации и наш администратор
                        свяжется с Вами.</p>
                    <p style="font-weight: bold;font-size: 18px;line-height: 21px;color: #FFFFFF; margin-bottom: 2px; margin-top: 5%;">
                        Документы, необходимые для поступления:</p>
                    <h2 style="font-size: 18px;line-height: 21px;color: #FFFFFF;">Форма 26 и форма 63</h2>
                </div>
                <div class="col-lg-5 col-md-6 col-12 pt-md-0 pt-5">

                    <form>
                        <div class="send-success-mail p-1 d-none">
                            <i class="fas fa-check-circle" style="color:#00D9C0;"></i><span class="pl-2 text-white"
                                                                                            style="font-family:'Coiny'; font-size:12px;">Отзыв успешно отправлен!</span>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;font-size: 20px;line-height: 27px;text-align: center;color: #FFFFFF;">
                                Заказать обратный звонок</label>
                            <input type="text" class="form-control" id="form-name" placeholder="Имя">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="form-phone" placeholder="Номер">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="form-message" rows="3"
                                      placeholder="Коментарии"></textarea>
                        </div>

                        <button id="ajax-message" type="submit" class="btn btn-submit">Перезвоните мне</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 mt-lg-5 mt-0" id="contact-us">
        <div class="row justify-content-center">
            <h2 style="font-family: Coiny; font-size: 30px; line-height: 33px;">Или приезжайте в гости знакомиться</h2>
        </div>
        <div class="container pt-lg-5 pt-3 pb-lg-0 pb-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="phone">
                        <img src="{{ asset('images/phone-call.png')  }}" alt="">
                        <p class="text-fut-light w-100" style="font-size: 16px;color: #000;">(0556) 75-94-44</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 py-lg-0 py-md-0 py-5">
                    <div class="map">
                        <img src="{{ asset('images/map-location.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 16px;color: #000;">ул. Радищева 23 (ул.
                            Советская/Дружбы,
                            магазин ”Планета электроники”)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="time">
                        <img src="{{ asset('images/time.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 16px;color: #000;">Время работы детского сада с 7.30
                            до 18.30</p>
                    </div>
                </div>
            </div>
            <div class="row pt-lg-5 pt-5">
                <div class="col-4"></div>
                <div class="col-lg-4 col-md-4 col-12 pl-lg-5 pl-3 pr-lg-5 pl-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="soc-icons">
                                    <a href="https://www.instagram.com/detskiy_sad_gnomik/"><img
                                                src="{{ asset('images/instagram.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="soc-icons">
                                    <img src="{{ asset('images/fb.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="soc-icons">
                                    <img src="{{ asset('images/whattsapp.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid footer-fix" id="divider-before-map"></div>
    <div class="container-fluid pl-0 pr-0" id="map-block">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HYAqAFk578JUrPPqoesDQW3JtaSLwgdK" width="100%"
                height="550"></iframe>
    </div>

    @push('scripts')
        <script>
            jQuery(function ($) {
                var currentX = '';
                var currentY = '';
                var movementConstant = .015;
                $(document).mousemove(function (e) {
                    if (currentX == '') currentX = e.pageX;
                    var xdiff = e.pageX - currentX;
                    currentX = e.pageX;
                    if (currentY == '') currentY = e.pageY;
                    var ydiff = e.pageY - currentY;
                    currentY = e.pageY;
                    $('.parallax div').each(function (i, el) {
                        var movement = (i + 1) * (xdiff * movementConstant);
                        var movementy = (i + 1) * (ydiff * movementConstant);
                        var newX = $(el).position().left + movement;
                        var newY = $(el).position().top + movementy;
                        $(el).css('left', newX + 'px');
                        $(el).css('top', newY + 'px');
                    });
                });
            });
        </script>
        <script>
            jQuery(function ($) {
                var currentX = '';
                var currentY = '';
                var movementConstant = .015;
                $(document).mousemove(function (e) {
                    if (currentX == '') currentX = e.pageX;
                    var xdiff = e.pageX - currentX;
                    currentX = e.pageX;
                    if (currentY == '') currentY = e.pageY;
                    var ydiff = e.pageY - currentY;
                    currentY = e.pageY;
                    $('.parallax2 div').each(function (i, el) {
                        var movement = (i - 1) * (xdiff * movementConstant);
                        var movementy = (i + 1) * (ydiff * movementConstant);
                        var newX = $(el).position().left + movement;
                        var newY = $(el).position().top + movementy;
                        $(el).css('left', newX + 'px');
                        $(el).css('top', newY + 'px');
                    });
                });
            });
        </script>
    @endpush
@endsection