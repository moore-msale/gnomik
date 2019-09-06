<nav class="navbar menuse navbar-expand-lg py-0 w-100 pr-0 d-lg-block d-none container-fluid" style="z-index: 999; background: rgba(0,0,0,0); position: fixed;">
    <div class="container">
        <div class="row w-100">
            <div class="col-md-1 col-4 px-4 logs logs3" style="display: flex; align-items: center;">
                <a href="/" style="">
                    <img class="logo main-logo" src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="col-md-11 col-8 collapse navbar-collapse"  id="navbarSupportedContent">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav">
                        <li class="nav-item p-3">
                            <a href="/" class="text-white nav-fut-bold menu-point" style="font-family: Coiny; text-decoration: none;">Главная</a>
                        </li>
                        <li class="nav-item p-3">
                            <a href="\#about_us" class="text-white menu-point" style="font-family: Coiny; text-decoration: none;">О нас</a>
                        </li>
                        <li class="nav-item p-3">
                            <a href="/lessons" class="text-white menu-point" style="font-family: Coiny; text-decoration: none;">Список занятий</a>
                        </li>
                        <li class="nav-item p-3">
                            <a href="\#gallery" class="text-white menu-point" style="font-family: Coiny; text-decoration: none;">Галерея</a>
                        </li>
                        <li class="nav-item p-3">
                            <a href="\#events" class="text-white menu-point" style="font-family: Coiny; text-decoration: none;">Мероприятия</a>
                        </li>
                        <li class="nav-item p-3" id="pick">
                            <a href="#contact-us" class="text-white menu-point" style="font-family: Coiny; text-decoration: none;">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-xl py-0 w-100 pr-0 bg-white d-lg-none d-block" style="z-index: 999; background: rgba(0,0,0,0); position: fixed;">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-lg-1 col-4 px-4 py-2">
                <a href="/">
                    <img class="w-50" src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            {{--<div class="col-auto my-auto ml-auto d-xl-none px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <div id="nav-icon3">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                        </div>
                </button>
            </div>--}}
            <div class="col-auto my-auto ml-auto d-xl-none px-0">
                <button class="text-white navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <div id="nav-icon3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>                </button>
            </div>
            <div class="collapse navbar-collapse col-lg-11 col-8"  id="navbarSupportedContent">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav" id="pick">
                        <li class="nav-item p-2">
                            <a href="/" class="text-dark" style="font-family: Coiny; text-decoration: none;">Главная</a>
                        </li>
                        <li class="nav-item p-2 ">
                            <a href="/#about_us" class="text-dark" style="font-family: Coiny; text-decoration: none;">О нас</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="/lessons" class="text-dark" style="font-family: Coiny; text-decoration: none;">Список занятий</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="\#gallery" class="text-dark" style="font-family: Coiny; text-decoration: none;">Галерея</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="\#events" class="text-dark" style="font-family: Coiny; text-decoration: none;">Мероприятия</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="#contact-us" class="text-dark" style="font-family: Coiny; text-decoration: none;">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>
