@extends('layouts.app')
@section('content')
    <div class="container-fluid header" style="-webkit-background-size: cover;background-position: bottom;background-size: cover;background-image: url({{ asset('images/header.png') }});">
        <div class="row align-items-center justify-content-center pt-5" style="height: 300px;">
            <h1 style="font-family:'Coiny';font-size: 39px;line-height: 43px;color: #FFFFFF;">Жизнь “Гномика” в фотографиях</h1>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5 pl-5 pr-5">
        <div class="row pl-5 pr-5">
            <p class="text-fut-light" style="font-size: 22px;line-height: 28px;color: #000000;">Детские эмоции нельзя сыграть, нельзя спрогнозировать, и в них нельзя сфальшивить – всего этого дети еще не умеют, они искренни и непосредственны в своих мыслях и чувствах. Детские эмоции можно только почувствовать! Работа всего нашего коллектива направлена на то, чтобы эмоции детей, посещающих наш детский сад, были яркие, насыщенные, позитивные.</p>
        </div>
    </div>

    <div class="container-fluid gallery-block">
        <ul class="col-10 justify-content-around ml-auto mr-auto pr-0 nav nav-tabs" style="border:none!important;" id="myTab" role="tablist">
            <li class="nav-item pr-3">
                <a class="d-flex justify-content-center align-items-center nav-link p-md-2 text-center text-fut-light active"
                   style="width: 207px;height: 54px;background: #FFA4A3;border-radius: 10px;color:#000;font-family: 'Futura PT Bold';font-size: 16px;"
                   data-toggle="tab" href="#спальные" role="tab" aria-controls=""
                   aria-selected="true">Спальные места</a>
            </li>
            <li class="nav-item pr-3">
                <a class="d-flex justify-content-center align-items-center nav-link p-md-2 text-center text-fut-light"
                   style="width: 207px;height: 54px;background: #F9FF85;border-radius: 10px;color:#000;font-family: 'Futura PT Bold';font-size: 16px;"
                   data-toggle="tab" href="#столовая" role="tab" aria-controls=""
                   aria-selected="true">Столовая</a>
            </li>
            <li class="nav-item pr-3">
                <a class="d-flex justify-content-center align-items-center nav-link p-md-2 text-center text-fut-light"
                   style="width: 207px;height: 54px;background: #92D7FE;border-radius: 10px;color:#000;font-family: 'Futura PT Bold';font-size: 16px;"
                   data-toggle="tab" href="#игровая" role="tab" aria-controls=""
                   aria-selected="true">Игровая</a>
            </li>
            <li class="nav-item pr-3">
                <a class="d-flex justify-content-center align-items-center nav-link p-md-2 text-center text-fut-light"
                   style="width: 207px;height: 54px;background: #BEF077;border-radius: 10px;color:#000;font-family: 'Futura PT Bold';font-size: 16px;"
                   data-toggle="tab" href="#сад" role="tab" aria-controls=""
                   aria-selected="true">Сад</a>
            </li>
        </ul>

        <div class="tab-content col-12 pt-5 pb-5" id="myTabContent">
            <div class="tab-pane fade active show" id="спальные" role="tabpanel" aria-labelledby="">
                <div class="photo-gallery">
                    <div class="container">
                        <div class="row photos">
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                        </div>
                        <div class="row photos pt-4">
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="столовая" role="tabpanel" aria-labelledby="">
                <div class="photo-gallery">
                    <div class="container">
                        <div class="row photos">
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                        </div>
                        <div class="row photos pt-4">
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center"><a href="{{ asset('images/1.png')  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images/1.png')  }}"></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="игровая" role="tabpanel" aria-labelledby="">
                <div class="container">
                </div>
            </div>
            <div class="tab-pane fade" id="сад" role="tabpanel" aria-labelledby="">
                <div class="container">
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
                            <div class="col-4">
                                <div class="soc-icons">
                                    <img src="{{ asset('images/instagram.png') }}" alt="">
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
    @push('scripts')
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    @endpush

@endsection