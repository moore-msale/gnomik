@extends('layouts.app')
@section('content')
    <div class="container-fluid header"
         style="-webkit-background-size: cover;background-position: bottom;background-size: cover;background-image: url({{ asset('images/header.png') }});">
        <div class="row align-items-center justify-content-center  pt-5" style="height: 300px;">
            <h1 class=" text-md-center" style="font-family:'Coiny';font-size: 39px;line-height: 43px;color: #FFFFFF; text-align: center;">Список занятий</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12 pl-lg-5 pr-lg-5">
                <p class="text-fut-light ml-3 mr-3 pl-lg-4 pr-lg-4"
                   style="font-size: 24px;line-height: 30px;text-align: center;color: #000000; letter-spacing: 0.02em;">В <img style="height: 30px;width: 95px; display: inline"  src="{{ asset('images/logo_gnomik.svg') }}"> за годы работы
                    сформировался собственный опыт, благодаря которому привыкание малыша к саду проходит в среднем за
                    неделю. Малыш становится своим в группе ребят, совместные игры – продолжительнее, а и их «сюжеты» всё
                    длиннее.</p>
            </div>
            <div class="col-lg-6 col-md-6 text-md-left text-center">
                <img class="w-75 mt-4" src="{{ asset('images/pic.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3" id="courses">
        <div class="row p-lg-5 p-md-3 p-3">
            <p class="text-fut-bold ml-lg-3 mr-lg-3 pl-lg-4 pr-lg-4 text-md-left text-center"
               style="font-family: Coiny;font-size: 26px;line-height: 30px;color: #000000;">В частном детском саду <img style="height: 30px;width: 95px; display: inline"  src="{{ asset('images/logo_gnomik.svg') }}"> проводятся
                следующие учебно-воспитательные занятия:</p>
        </div>
        <div class="container-fluid row">
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/Group.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    уроки шахмат</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/musical-note.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    музыка, ритмопластика</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/book.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    английский язык (игровая форма проведения)</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/conversation.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    уроки этикета</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/mathematical-symbols.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.4rem;line-height: 21px;text-align: center;color: #000000;">
                    математика (на основе деятельностного метода)</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/XMLID 763.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    логика (развитие мыслительных операций)</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/save.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    ознакомление с окружающим миром</p>
            </div>

            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/book2.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.4rem;line-height: 21px;text-align: center;color: #000000;">
                    развитие речи (обучение чтению и развитие графических навыков)</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/motion-sensor.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    сенсорика</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/Group (1).png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    знакомство с детской литературой</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/Page 1.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.3rem;line-height: 21px;text-align: center;color: #000000;">
                    изобразительное искусство, лепка, аппликация и конструирование</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/warrior.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size:1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    гимнастика</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/grammar.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size:1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    обучение грамоте</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/ballet.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size:1.3rem;line-height: 21px;text-align: center;color: #000000;">
                    физкультурно-хореографические занятия</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/ball.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size:1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    футбол</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/fight.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    тхэквондо</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/chineselng.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    китайский язык</p>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center pt-md-2 pt-4">
                <img src="{{ asset('images/courses/math.png') }}" alt="">
                <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 1.5rem;line-height: 21px;text-align: center;color: #000000;">
                    ментальная арифметика</p>
            </div>
        </div>
        <div class="row mt-5 pl-5 pr-5">
            <p style="margin-left: 3%;font-family: Coiny;font-size: 26px;font-size: 23px;line-height: 28px;color: #000000;">А
                также:</p>
        </div>
        <div class="row pl-lg-5 pr-lg-5">
            <div class="col-lg-6 col-md-6 col-12 pl-lg-4">
                <ul style="font-size: 23px;">
                    <li style="margin-top: 4%; font-family: Futura PT Light;line-height: 21px;color: #000000;">
                        Детский психолог, логопед — дефектолог, врач – педиатр систематически проводят
                        интегрированную диагностическую работу, консультируют родителей.
                    </li>
                    <li style="margin-top: 4%;font-family: Futura PT Light;line-height: 21px;color: #000000;">
                        4-х разовое питание. Каждый ребенок получает сбалансированное питание высокого
                        качества.
                    </li>
                    <li style="margin-top: 4%;font-family: Futura PT Light;line-height: 21px;color: #000000;">
                        Для детей организуются познавательные праздники : интерактивные театрализованные игры с участием
                        приглашённых артистов, проводятся утренники и развлекательные мероприятия.
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <ul style="font-size: 23px;">
                    <li style="margin-top: 4%;font-family: Futura PT Light;line-height: 21px;color: #000000;">
                        В детском саду функционирует летний детский бассейн.
                    </li>
                    <li style="margin-top: 9%;font-family: Futura PT Light;line-height: 21px;color: #000000;">
                        Каждое утро осмотр ведет детский педиатр.
                    </li>
                    <li style="margin-top: 9%;font-family: Futura PT Light;line-height: 21px;color: #000000;">
                        Подготовка к школе (тестирование)
                    </li>
                </ul>
            </div>
        </div>
        <div class="row p-lg-5 text-md-left">
            <p class="text-fut-bold ml-3 mr-3 pl-4 pr-4 pt-md-0 pt-4 text-md-left"
               style="font-family: Coiny;font-size: 26px;line-height: 28px;color: #000000;">Дополнительные услуги: детского сада <img style="height: 30px;width: 95px; display: inline"  src="{{ asset('images/logo_gnomik.svg') }}"></p>
            <p id="contact-us" class="text-fut-light ml-3 mr-3 pl-4 pr-4"
               style="margin-top: 1%;font-size: 23px;line-height: 21px;color: #000000; text-align: left;">Уважаемые родители, мы с
                удовольствием сообщаем Вам об услуге, которой Вы можете воспользоваться, если у Вас возникает
                потребность поручить нам ребёнка на день,сутки, неделю и более (в выходные, праздничные и в будние
                дни).</p>
        </div>
    </div>



    @include('_partials.pre_footer')

    <div class="container-fluid" id="divider-before-map"></div>
    <div class="container-fluid pl-0 pr-0" id="map-block">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HYAqAFk578JUrPPqoesDQW3JtaSLwgdK" width="100%"
                height="550"></iframe>
    </div>
@endsection
