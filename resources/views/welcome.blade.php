@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <div class="" id="main" style="padding-top:5%; padding-bottom:4%;  background-image: url({{ asset('images/mainbg.png') }}); background-size: cover;">
        <div class="container-fluid main-ht" style="padding-left: 8%; height: 120vh;">
            <div class="row">

                <div class="col-md-6 col-12 text-coin" style="padding-top: 12%;">
                    <h1 class="text-media text-white" style="font-size: 55px; line-height: 120%; font-family: 'Coiny';">
                        ЧАСТНЫЙ ДЕТСКИЙ
                        <br>САД "ГНОМИК"
                    </h1>

                <div class="container-fluid row pt-2">
                    <div class="col-2">
                        <img style="width: 100%;" src="{{asset('images/main1.png')}}" alt="">
                    </div>
                    <div class="col-4">
                                     <span class="text-fut-light text-white" style="font-size:13px; line-height: 17px;">Сайт рыбатекст поможет дизайнеру, верстальщику
дизайнеру, верстальщику</span>
                    </div>
                    <div class="col-2">
                        <img style="width: 100%;" src="{{asset('images/main2.png')}}" alt="">
                    </div>
                    <div class="col-4">
                                     <span class="text-fut-light text-white" style="font-size:13px; line-height: 17px;">Сайт рыбатекст поможет дизайнеру, верстальщику
дизайнеру, верстальщику</span>
                    </div>
                </div>
                <div class="container-fluid row" style="padding-top: 5%;">
                    <div class="col-12 text-left" style="padding-left: 40%;">
                        <p class="text-white" style="font-family: 'Segoe Print'; font-size:25px; line-height: 44px;

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
                <div class="col-6">
                    <img src="{{ asset('images/bmain.png') }}" alt="">
                </div>
        </div>
    </div>
    </div>

    <div class="" id="about_us" style="padding-top:5%; background-image: url({{ asset('images/secbg.png') }}); background-size: 100% 100%; height:130vh;">
        <div class="col-12 text-center">
            <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px;">Почему мы?</h2>
        </div>
        <div class="container-fluid row">
            <div class="col-4" style="padding-left: 8%;">
                <img class="in-left" style="z-index:100; position: absolute;" src="{{ asset('images/toy.png') }}" alt="">
            </div>
            <div class="col-3" style="padding-top: 10%; padding-left: 5%;">
                <div class="p-5" style="background: linear-gradient(180deg, #4989D1 0%, #596DC6 100%);
border-radius: 10px; z-index:-500;">
                    <img src="{{ asset('images/smiling-baby.png') }}" alt="">
                    <p class="text-fut-bold pt-4 text-white" style="font-size: 16px; line-height: 21px;">
                        Возраст детей -
                        <br>
                        от 2 до 7 лет.
                    </p>
                    <p class="text-fut-light text-white" style="font-size: 13px; line-height: 17px; padding-top: 10%;">
                        Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать
                    </p>
                </div>
                <img class="clouds" style="position: absolute; right:-30%; bottom:-15%;" src="{{ asset('images/cloud.png') }}" alt="">
            </div>
            <div class="col-4 in-right" style="padding-left:5%; padding-top: 14%;">
                <div class="container-fluid row">
                    <div class="col-2">
                        <span style="font-family: Coiny; font-size: 39px; line-height: 43px;">
                    1
                </span>
                    </div>
                    <div class="col-10">
                        <span class="text-fut-light" style="font-size: 15px; line-height: 19px;">
Сайт рыбатекст поможет дизайнеру Сайт рыбатекст поможет Сайт
                    </span>
                    </div>
                </div>

                <div class="container-fluid row mt-3">
                    <div class="col-2">
                        <span style="font-family: Coiny; font-size: 39px; line-height: 43px;">
                    2
                </span>
                    </div>
                    <div class="col-10">
                        <span class="text-fut-light" style="font-size: 15px; line-height: 19px;">
Сайт рыбатекст поможет дизайнеру Сайт рыбатекст поможет Сайт
                    </span>
                    </div>
                </div>

                <div class="container-fluid row  mt-3">
                    <div class="col-2">
                        <span style="font-family: Coiny; font-size: 39px; line-height: 43px;">
                    3
                </span>
                    </div>
                    <div class="col-10">
                        <span class="text-fut-light" style="font-size: 15px; line-height: 19px;">
Сайт рыбатекст поможет дизайнеру Сайт рыбатекст поможет Сайт
                    </span>
                    </div>
                </div>

                <div class="container-fluid row mt-3">
                    <div class="col-2">
                        <span style="font-family: Coiny; font-size: 39px; line-height: 43px;">
                   4
                </span>
                    </div>
                    <div class="col-10">
                        <span class="text-fut-light" style="font-size: 15px; line-height: 19px;">
Сайт рыбатекст поможет дизайнеру Сайт рыбатекст поможет Сайт
                    </span>
                    </div>
                </div>

            </div>
            <img class="cloud-left" style="position:absolute; right:8%; bottom: -102%; z-index: -5;" src="{{ asset('images/cloud-right.png') }}" alt="">
            <img class="cloud-right" style="position:absolute; right:3%; bottom: -105%; z-index: -5;" src="{{ asset('images/cloud-left.png') }}" alt="">
            <img class="sun" style="position:absolute; right:5%; bottom: -92%; z-index: -6;" src="{{ asset('images/sun.png') }}" alt="">
        </div>
        <div class="col-12 text-center" style="margin-top: 11%;">
            <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px; padding-bottom:4%;">Наши мероприятия</h2>
        </div>
    </div>

    <div class="container" style="padding-bottom: 7%;">
        <div class="row">
            <div class="col-9">
                <div class="container-fluid row">
                    <div class="col-5 px-2 pb-3 mr-3" style="background-color: #EF827F;">
                        <div class="container-fluid row">
                            <div class="col-6  pt-4">
                                <p class="text-white text-fut-bold" style="font-size: 19px; line-height: 140%;">
                                    Культурный
                                    <br>
                                    отдых
                                </p>
                                <img class="pt-3" src="{{'images/pointimg1.png'}}" alt="">
                            </div>
                            <div class="col-6">
                                <img style="position: absolute; top:-11%; right:-35%;" src="{{'images/point1.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-5 px-2 pb-3 mr-3" style="background-color: #EF827F;">
                        <div class="container-fluid row">
                            <div class="col-6  pt-4">
                                <p class="text-white text-fut-bold" style="font-size: 19px; line-height: 140%;">
                                    Праздники
                                </p>
                                <img class="pt-3" src="{{'images/pointimg2.png'}}" alt="">
                            </div>
                            <div class="col-6">
                                <img style="position: absolute; top:-11%; right:-35%;" src="{{'images/point2.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid row mt-3">
                    <div class="col-5 px-2 pb-3 mr-3" style="background-color: #EF827F;">
                        <div class="container-fluid row">
                            <div class="col-6 pt-4">
                                <p class="text-white text-fut-bold" style="font-size: 19px; line-height: 140%;">
                                    Экскурсии
                                </p>
                                <img class="pt-3" src="{{'images/pointimg3.png'}}" alt="">
                            </div>
                            <div class="col-6">
                                <img style="position: absolute; top:-11%; right:-35%;" src="{{'images/point3.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-5 px-2 pb-3 mr-3" style="background-color: #EF827F;">
                        <div class="container-fluid row">
                            <div class="col-6  pt-4">
                                <p class="text-white text-fut-bold" style="font-size: 19px; line-height: 140%;">
                                    Активный
                                    <br>
                                    отдых
                                </p>
                                <img class="pt-3" src="{{'images/pointimg4.png'}}" alt="">
                            </div>
                            <div class="col-6">
                                <img style="position: absolute; top:-11%; right:-35%;" src="{{'images/point4.png'}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 pr-5" style="padding-top:7%; position: absolute; right:11%;">
                <p class="text-fut-light" style="font-size: 16px; line-height: 140%;">
                    Наши мероприятия нацелены на расширение кругозора и получение новых эмоций у детей.
                </p>
                <p class="text-fut-light" style="font-size: 16px; line-height: 140%;">
                    Мы тщательно выстраиваем среду, в которой пребывают дети, и заботимся о том, чтобы она всегда была вдохновляющая, экологичная и обогащенная интересными событиями.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" style="background-image: url('{{asset('images/sector.jpg')}}'); background-size: 100% 100%     ; height:115vh;">
            <div class="col-6" style="padding-left:12%; padding-top: 10%;">
                <h2 class="" style="font-family: Coiny; font-size: 39px; line-height: 43px; color: white;">
                    О наших занятиях
                </h2>
                
                <p style="padding-top:10%;">
                    <img src="{{asset('images/31.png')}}" alt="">
                    <img src="{{asset('images/32.png')}}" style="padding-left:5%;" alt="">
                    <img src="{{asset('images/33.png')}}" style="padding-left:5%;" alt="">
                    <img src="{{asset('images/34.png')}}" style="padding-left:5%;" alt="">
                    <img src="{{asset('images/35.png')}}" style="padding-left:5%;" alt="">
                    <img src="{{asset('images/36.png')}}" style="padding-left:5%;" alt="">
                </p>

                <p class="text-fut-light" style="font-size: 16px; line-height: 140%; color:white; padding-right: 25%; padding-top:2%;">
                    Мы ценим индивидуальность каждого ребенка, применяем гибкий подход к обучению, что позволяет каждому малышу развиваться в соответствии со своими способностями до полного раскрытия потенциальных возможностей.
                </p>

                <p class="text-fut-light" style="font-size: 16px; line-height: 140%; color:white; padding-right: 25%; padding-top: 2%; padding-bottom: 5%;">
                    Мы следуем главному принципу: в детском саду ребёнку должно быть уютно, интересно и радостно — как дома.
                </p>

                <button class="py-3 px-5 text-fut-light" style="font-size: 16px;border:none; color:white; background-color: #518CDC; box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                    Перейти к списку занятий
                </button>
            </div>
            <div class="col-6 pt-5">
                <img class="in-bottom" src="{{ asset('images/kid.png')  }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-image: url('{{ asset('images/sector4.jpg') }}'); background-size: 100% 100%;">
        <div class="row" style="padding-left:9%; padding-right:9%;">
            <div class="col-12 text-center" style="margin-top: 6%; margin-bottom: 5%;">
                <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px; padding-bottom:4%;">Галерея</h2>
            </div>

            <div class="col-8">
                <div class="container" style="background: linear-gradient(180deg, #FF6976 0%, #FF6F59 100%); border-radius:10px;">
                    <div class="row">
                    <div class="col-6" style="padding-top:8%; padding-left: 5%; padding-bottom:8%;">
                        <p class="text-white text-fut-bold" style="font-size: 24px; line-height: 31px;">
                            Сайт рыбатекст
                            <br>
                            поможет дизайнеру
                        </p>
                        <p class="text-white text-fut-light" style="font-size:16px; line-height: 21px;">
                            Сайт рыбатекст поможет
                            <br>
                            дизайнеру, верстальщику,
                            <br>
                            вебмастеру
                        </p>
                        <p>
                            <button class="py-3 px-5 text-fut-light" style="font-size: 16px;border:none; color:white; background-color: #518CDC; box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.25); border-radius: 10px;">
                                Перейти в галерею
                            </button>
                        </p>
                    </div>
                    <div class="col-6">
                        <img style="position:absolute; top:-19.5%; left:-10%;" src="{{'images/gallery1.png'}}" alt="">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-4" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('images/gallery2.png')}}); background-size: cover; border-radius: 10px;">
            <p class="text-fut-bold" style="font-size:30px; line-height: 38px; color:white; position: absolute; bottom:0%; left:0%; padding-left:5%;">
                Сад
            </p>
            </div>
            <div class="container-fluid pt-3">
                <div class="row">
                    <div class="col-4">
                        <div class="container"
                             style="padding-top:50%; padding-bottom:50%;background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('images/gallery3.png')}}); background-size: cover; border-radius: 10px;">
                            <p class="text-fut-bold"
                               style="font-size:30px; line-height: 38px; color:white; position: absolute; bottom:0%; left:0%; padding-left:8%;">
                                Столовая
                            </p>
                        </div>
                    </div>

                    <div class="col-8"
                         style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('images/gallery4.png')}}); background-size: cover; border-radius: 10px;">
                        <p class="text-fut-bold"
                           style="font-size:30px; line-height: 38px; color:white; position: absolute; bottom:0%; left:0%; padding-left:5%;">
                            Спальня
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center" style="margin-top: 10%; margin-bottom: 5%;">
                <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px; padding-bottom:4%;">Пример меню на
                    неделю</h2>
                <div class="container">
                    <div class="row justify-content-center">
                        <img class="col-1 mr-3" src="{{asset('images/fruit1.png')}}" alt="">
                        <ul class="col-3 pr-0 nav nav-tabs" style="border:none!important;" id="myTab" role="tablist">
                            <li class="nav-item pr-3">
                                <a class="nav-link p-md-2 text-center text-fut-light active"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #FFA4A3;"
                                   data-toggle="tab" href="#Пн" role="tab" aria-controls=""
                                   aria-selected="true">Пн</a>
                            </li>
                            <li class="nav-item pr-3">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #F9FF85;"
                                   data-toggle="tab" href="#Вт" role="tab" aria-controls=""
                                   aria-selected="true">Вт</a>
                            </li>
                            <li class="nav-item pr-3">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #92D7FE;"
                                   data-toggle="tab" href="#Ср" role="tab" aria-controls=""
                                   aria-selected="true">Ср</a>
                            </li>
                            <li class="nav-item pr-3">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #BEF077;"
                                   data-toggle="tab" href="#Чт" role="tab" aria-controls=""
                                   aria-selected="true">Чт</a>
                            </li>
                            <li class="nav-item pr-3">
                                <a class="nav-link p-md-2 text-center text-fut-light"
                                   style="color:black; font-size:18px; line-height: 23px; border-radius:15px; background-color: #E2CFFD;"
                                   data-toggle="tab" href="#Пт" role="tab" aria-controls=""
                                   aria-selected="true">Пт</a>
                            </li>
                        </ul>
                        <img class="col-1" src="{{asset('images/fruit2.png')}}" alt="">
                    </div>
                </div>
            </div>
                <div class="tab-content col-12" id="myTabContent">
                    <div class="tab-pane fade active show" id="Пн" role="tabpanel" aria-labelledby="">
                        <div class="container">
                            <div class="col-12 text-center" style="margin-bottom: 5%;">
                                <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                    Понедельник
                                </h2>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="{{ asset('images/food1.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Завтрак
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food2.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Обед
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>

                            <div class="row justify-content-center" style="padding-top: 3%;">
                                <div class="col-3">
                                    <img src="{{ asset('images/food3.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Полдник
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food4.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Ужин
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="Вт" role="tabpanel" aria-labelledby="">
                        <div class="container">
                            <div class="col-12 text-center" style="margin-bottom: 5%;">
                                <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                    Вторник
                                </h2>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="{{ asset('images/food1.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Завтрак
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food2.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Обед
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>

                            <div class="row justify-content-center" style="padding-top: 3%;">
                                <div class="col-3">
                                    <img src="{{ asset('images/food3.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Полдник
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food4.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Ужин
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Ср" role="tabpanel" aria-labelledby="">
                        <div class="container">
                            <div class="col-12 text-center" style="margin-bottom: 5%;">
                                <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                   Среда
                                </h2>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="{{ asset('images/food1.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Завтрак
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food2.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Обед
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>

                            <div class="row justify-content-center" style="padding-top: 3%;">
                                <div class="col-3">
                                    <img src="{{ asset('images/food3.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Полдник
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food4.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Ужин
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Чт" role="tabpanel" aria-labelledby="">
                        <div class="container">
                            <div class="col-12 text-center" style="margin-bottom: 5%;">
                                <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                    Четверг
                                </h2>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="{{ asset('images/food1.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Завтрак
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food2.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Обед
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>

                            <div class="row justify-content-center" style="padding-top: 3%;">
                                <div class="col-3">
                                    <img src="{{ asset('images/food3.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Полдник
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food4.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Ужин
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Пт" role="tabpanel" aria-labelledby="">
                        <div class="container">
                            <div class="col-12 text-center" style="margin-bottom: 5%;">
                                <h2 class="text-fut-bold" style="font-size: 39px; line-height: 43px;">
                                    Пятница
                                </h2>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="{{ asset('images/food1.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Завтрак
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food2.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Обед
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>

                            <div class="row justify-content-center" style="padding-top: 3%;">
                                <div class="col-3">
                                    <img src="{{ asset('images/food3.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Полдник
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('images/food4.png') }}" alt="">
                                </div>
                                <div class="col-2">
                                    <h3 class="text-fut-bold" style="font-size: 25px; line-height: 32px;">
                                        Ужин
                                    </h3>
                                    <p class="text-fut-light" style="font-size: 16px; line-height: 21px; padding-right: 20%;">
                                        Картофельный суп с овощами
                                        Поджарка из курицы с cпагетти
                                        Огурцы свежие
                                        Xлеб
                                        Компот
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>


    </div>

    <div class="container pt-5 mt-5 mb-5 pb-5" id="employees">
        <div class="col-12 text-center pb-5">
            <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px;">Наши сотрудники</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="carousel w-100">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6 pt-4 pr-2">
                                        <div class="container carousel-block-2 align-items-center" style="background: rgba(150, 199, 216, 0.44); border-radius: 5px;">
                                            <div class="row h-100">
                                                <div class="col-6">
                                                    <img class="" style="position: absolute;transform: translateY(-25px);" src="{{ asset('images/teacher.png') }}" alt="">
                                                </div>
                                                <div class="col-6 pl-5 align-self-center">
                                                    <h3 style="font-family: 'Futura PT Bold';font-size: 26px;line-height: 33px;color:#000;">Наталья Петровна</h3>
                                                    <p class="pt-2" style="font-family: 'Futura PT Light';font-size: 17px;line-height: 22px;color:#000;">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев</p>
                                                    <div class="row">
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pt-4 pl-2">
                                        <div class="container carousel-block-2 align-items-center" style="background: rgba(162, 106, 196, 0.44); border-radius: 5px;">
                                            <div class="row h-100">
                                                <div class="col-6">
                                                    <img class="" style="position: absolute;transform: translateY(-25px);" src="{{ asset('images/teacher.png') }}" alt="">
                                                </div>
                                                <div class="col-6 pl-5 align-self-center">
                                                    <h3 style="font-family: 'Futura PT Bold';font-size: 26px;line-height: 33px;color:#000;">Наталья Петровна</h3>
                                                    <p class="pt-2" style="font-family: 'Futura PT Light';font-size: 17px;line-height: 22px;color:#000;">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев</p>
                                                    <div class="row">
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6 pt-4 pr-2">
                                        <div class="container carousel-block-2 align-items-center" style="background: rgba(150, 199, 216, 0.44); border-radius: 5px;">
                                            <div class="row h-100">
                                                <div class="col-6">
                                                    <img class="" style="position: absolute;transform: translateY(-25px);" src="{{ asset('images/teacher.png') }}" alt="">
                                                </div>
                                                <div class="col-6 pl-5 align-self-center">
                                                    <h3 style="font-family: 'Futura PT Bold';font-size: 26px;line-height: 33px;color:#000;">Наталья Петровна</h3>
                                                    <p class="pt-2" style="font-family: 'Futura PT Light';font-size: 17px;line-height: 22px;color:#000;">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев</p>
                                                    <div class="row">
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pt-4 pl-2">
                                        <div class="container carousel-block-2 align-items-center" style="background: rgba(162, 106, 196, 0.44); border-radius: 5px;">
                                            <div class="row h-100">
                                                <div class="col-6">
                                                    <img class="" style="position: absolute;transform: translateY(-25px);" src="{{ asset('images/teacher.png') }}" alt="">
                                                </div>
                                                <div class="col-6 pl-5 align-self-center">
                                                    <h3 style="font-family: 'Futura PT Bold';font-size: 26px;line-height: 33px;color:#000;">Наталья Петровна</h3>
                                                    <p class="pt-2" style="font-family: 'Futura PT Light';font-size: 17px;line-height: 22px;color:#000;">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев</p>
                                                    <div class="row">
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                        <div class="col-3"> <img class="" src="{{ asset('images/diploma.png') }}" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5" id="reviews">
        <div class="container-fluid">
            <div class="row justify-content-center pt-3">
                <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px; color: #fff;">Отзывы о нашем детском садике</h2>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-5 mt-5 pt-3 paddingleft">
                    <img src="{{ asset('images/right-quotation-mark.png') }}" alt="">
                    <div class="owl-carousel pt-5">
                        <div class="item">
                            <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке</p>
                            <h5 class="mb-0">Айнура</h5>
                            <h6>мама</h6>
                        </div>
                        <div class="item">
                            <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке</p>
                            <h5 class="mb-0">Айнура</h5>
                            <h6>мама</h6>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
        

    </div>

    <div class="container-fluid" id="news">
        <div class="row h-100">
            <div class="col-1"></div>
            <div class="col-5 align-self-center pt-5" style="padding-left: 5%;">
                <h2 style="font-family: Coiny; font-size: 39px; line-height: 43px; padding-bottom: 4%;">Открытие нашего второго филиала!</h2>
                <p style="font-size: 16px;line-height: 21px;">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке</p>
                <p style="font-size: 16px;line-height: 21px;">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке</p>
            </div>
            <div class="col-6"></div>
        </div>
    </div>

    <div class="container-fluid" id="call-back">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-7">
                    <h3 style="font-family: Coiny; font-size: 30px; line-height: 33px; padding-bottom:3%; color: #fff;">Лист ожидания открыт</h3>
                    <p style="font-size: 16px;line-height: 21px;color: #FFFFFF;">Если Вы хотите забронировать место для Вашего ребенка, запишитесь онлайн для получения подробной информации и наш администратор свяжется с Вами.</p>
                    <p style="font-size: 16px;line-height: 21px;color: #FFFFFF;">Если Вы хотите забронировать место для Вашего ребенка, запишитесь онлайн для получения подробной информации и наш администратор свяжется с Вами.</p>
                    <p style="font-size: 16px;line-height: 21px;color: #FFFFFF;">Перечень документов, необходимых для поступления.</p>

                    <button class="py-3 px-5 text-fut-light btn btn-join mt-3">
                        Документы
                    </button>
                </div>
                <div class="col-5">
                    <form>
                        <div class="form-group">
                            <label style="font-weight: bold;font-size: 20px;line-height: 27px;text-align: center;color: #FFFFFF;">
                                Заказать обратный звонок</label>
                            <input type="text" class="form-control" id="form-name" placeholder="Имя">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="form-phone" placeholder="Номер">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" placeholder="Коментарии"></textarea>
                        </div>

                        <button type="submit" class="btn btn-submit">Перезвоните мне</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5" id="contact-us">
        <div class="row justify-content-center">
            <h2 style="font-family: Coiny; font-size: 30px; line-height: 33px;">Или приезжайте в гости знакомиться</h2>
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-4">
                    <div class="phone">
                        <img src="{{ asset('images/phone-call.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 16px;color: #000;">(0556) 75-94-44</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="map">
                        <img src="{{ asset('images/map-location.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 16px;color: #000;">ул. Радищева 23 (ул. Советская/Дружбы,
                            магазин ”Планета электроники”)</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="time">
                        <img src="{{ asset('images/time.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 16px;color: #000;">Время работы детского сада с 7.30 до 18.30</p>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-4"> </div>
                <div class="col-4 pl-5 pr-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-4"><img src="{{ asset('images/whatsapp.png') }}" alt=""></div>
                            <div class="col-4"><img src="{{ asset('images/whatsapp.png') }}" alt=""></div>
                            <div class="col-4"><img src="{{ asset('images/whatsapp.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>



    @push('scripts')
        <script>

        </script>
    @endpush
@endsection