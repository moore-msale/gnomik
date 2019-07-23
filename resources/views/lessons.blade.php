@extends('layouts.app')
@section('content')
    <div class="container-fluid header" style="-webkit-background-size: cover;background-position: bottom;background-size: cover;background-image: url({{ asset('images/header.png') }});">
        <div class="row align-items-center justify-content-center pt-5" style="height: 300px;">
            <h1 style="font-family:'Coiny';font-size: 39px;line-height: 43px;color: #FFFFFF;">Список занятий</h1>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12 pl-lg-5 pr-lg-5">
                <p class="text-fut-bold ml-3 mr-3 pl-lg-4 pr-lg-4" style="font-size: 16px;line-height: 21px;text-align: center;color: #000000;">В «ГНОМИКе» за годы работы сформировался собственный опыт, благодаря которому привыкание малыша к  саду проходит в среднем за неделю. Малыш становится своим в группе ребят, совместные игры – продолжительнее, а и их «сюжеты» всё длиннее.</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="{{ asset('images/pic.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3" id="courses">
        <div class="row p-lg-5 p-md-5 p-3">
            <p class="text-fut-bold ml-lg-3 mr-lg-3 pl-lg-4 pr-lg-4" style="font-size: 22px;line-height: 28px;color: #000000;">В частном детском саду “ ГНОМИК ” проводятся следующие учебно-воспитательные занятия:</p>
        </div>
        <div class="row">
            <div class="container-fluid">
                <div class="row pl-lg-5 pr-lg-5">
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/Group.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">уроки шахмат</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/musical-note.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">музыка, ритмопластика</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/book.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">английский язык (игровая форма проведения)</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/conversation.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">уроки этикета</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/mathematical-symbols.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">математика (на основе деятельностного метода)</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/XMLID 763.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">логика (развитие мыслительных операций)</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/save.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">ознакомление с окружающим миром</p>
                    </div>
                </div>
                <div class="row mt-5 pl-lg-5 pr-lg-5">
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/book2.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">развитие речи (обучение чтению и развитие графических навыков)</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/motion-sensor.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">сенсорика</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/Group (1).png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">знакомство с детской литературой</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/Page 1.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">изобразительное искусство, лепка, аппликация и конструирование</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/warrior.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">гимнастика</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/grammar.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">обучение грамоте</p>
                    </div>
                    <div class="col-lg col-md-3 col-6 text-center">
                        <img src="{{ asset('images/courses/ballet.png') }}" alt="">
                        <p style="margin-top: 15px;font-family: Futura PT Light;font-size: 16px;line-height: 21px;text-align: center;color: #000000;">физкультурно-хореографические занятия</p>
                    </div>
                </div>
                <div class="row mt-5 pl-5 pr-5">
                    <p style="margin-left: 3%;font-family: Futura PT Bold;font-size: 22px;line-height: 28px;color: #000000;">А также:</p>
                </div>
                <div class="row pl-lg-5 pr-lg-5">
                    <div class="col-lg-6 col-md-6 col-12 pl-lg-4">
                        <ul>
                            <li style="margin-top: 4%;font-family: Futura PT Light;font-size: 17px;line-height: 21px;color: #000000;">Детский психолог, логопед — дефектолог, врач – педиатр систематически проводят
                                интегрированную диагностическую работу, консультируют родителей.</li>
                            <li style="margin-top: 4%;font-family: Futura PT Light;font-size: 17px;line-height: 21px;color: #000000;">4-х разовое питание. Каждый ребенок получает сбалансированное питание высокого
                                качества.</li>
                            <li style="margin-top: 4%;font-family: Futura PT Light;font-size: 17px;line-height: 21px;color: #000000;">Для детей организуются познавательные праздники : интерактивные театрализованные игры с участием приглашённых артистов, проводятся утренники и развлекательные мероприятия.</li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <ul>
                            <li style="margin-top: 4%;font-family: Futura PT Light;font-size: 17px;line-height: 21px;color: #000000;">В детском саду функционирует летний детский бассейн.</li>
                            <li style="margin-top: 9%;font-family: Futura PT Light;font-size: 17px;line-height: 21px;color: #000000;">Каждое утро осмотр ведет детский педиатр.</li>
                            <li style="margin-top: 9%;font-family: Futura PT Light;font-size: 17px;line-height: 21px;color: #000000;">Подготовка к школе (тестирование)</li>
                        </ul>
                    </div>
                </div>
                <div class="row p-lg-5">
                    <p class="text-fut-bold ml-3 mr-3 pl-4 pr-4" style="font-size: 22px;line-height: 28px;color: #000000;">Дополнительные услуги: детского сада “ ГНОМИК ”</p>
                    <p class="text-fut-light ml-3 mr-3 pl-4 pr-4" style="margin-top: 1%;font-size: 17px;line-height: 21px;color: #000000;">Уважаемые родители, мы с удовольствием сообщаем Вам об  услуге, которой Вы можете воспользоваться, если у Вас возникает  потребность поручить нам ребёнка на день,сутки, неделю и более  (в выходные, праздничные и в будние дни).</p>
                </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid pt-5" id="contact-us">
        <div class="row justify-content-center">
            <h2 style="font-family: Coiny; font-size: 30px; line-height: 33px;">Или приезжайте в гости знакомиться</h2>
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="phone">
                        <img src="{{ asset('images/phone-call.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 16px;color: #000;">(0556) 75-94-44</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="map">
                        <img src="{{ asset('images/map-location.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 16px;color: #000;">ул. Радищева 23 (ул. Советская/Дружбы,
                            магазин ”Планета электроники”)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="time">
                        <img src="{{ asset('images/time.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 16px;color: #000;">Время работы детского сада с 7.30 до 18.30</p>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-4"> </div>
                <div class="col-lg-4 col-md-4 col-12 pl-lg-5 pr-lg-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="soc-icons">
                                    <a href="https://www.instagram.com/detskiy_sad_gnomik/"><img src="{{ asset('images/instagram.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="soc-icons">
                                    <img src="{{ asset('images/fb.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="soc-icons">
                                    <img src="{{ asset('images/whattsapp.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="divider-before-map"></div>
    <div class="container-fluid pl-0 pr-0" id="map-block">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HYAqAFk578JUrPPqoesDQW3JtaSLwgdK" width="100%" height="550"></iframe>
    </div>
@endsection