@extends('layouts.app')
@section('content')
    <div class="container-fluid header" style="-webkit-background-size: cover;background-position: bottom;background-size: cover;background-image: url({{ asset('images/header.png') }});">
        <div class="row align-items-center justify-content-center pt-5" style="height: 300px;">
            <h1 class="px-md-0 px-4" style="font-family:'Coiny';font-size: 39px;line-height: 43px;color: #FFFFFF;">Жизнь “Гномика” в фотографиях</h1>
        </div>
    </div>

    <div class="container-fluid pt-lg-5 pb-lg-5 pl-5 pr-5 pt-lg-0 pt-4">
        <div class="row pl-lg-5 pr-lg-5">
            <p class="text-fut-light" style="font-size: 22px;line-height: 28px;color: #000000;">Детские эмоции нельзя сыграть, нельзя спрогнозировать, и в них нельзя сфальшивить – всего этого дети еще не умеют, они искренни и непосредственны в своих мыслях и чувствах. Детские эмоции можно только почувствовать! Работа всего нашего коллектива направлена на то, чтобы эмоции детей, посещающих наш детский сад, были яркие, насыщенные, позитивные.</p>
        </div>
    </div>

    <div class="container-fluid gallery-block pt-lg-0 pt-3">
        <ul class="col-lg-10 col-md-12 col-10 justify-content-around ml-auto mr-auto pr-0 nav nav-tabs" style="border:none!important;" id="myTab" role="tablist">
            <li class="nav-item pr-3 mt-lg-0 mt-3">
                <a class="d-flex justify-content-center align-items-center nav-link p-md-2 text-center text-fut-light {{ isset($id) && $id == 5 ? 'active show' : '' }}"
                   style="width: 207px;height: 54px;background: #ffbd87;border-radius: 10px;color:#000;font-family: 'Futura PT Bold';font-size: 20px;"
                   data-toggle="tab" href="#общие" role="tab" aria-controls=""
                   aria-selected="true">Общие</a>
            </li>
            <li class="nav-item pr-3 mt-lg-0 mt-3">
                <a class="d-flex justify-content-center align-items-center nav-link p-md-2 text-center text-fut-light {{ isset($id) && $id == 1 ? 'active show' : '' }}"
                   style="width: 207px;height: 54px;background: #FFA4A3;border-radius: 10px;color:#000;font-family: 'Futura PT Bold';font-size: 20px;"
                   data-toggle="tab" href="#спальные" role="tab" aria-controls=""
                   aria-selected="true">Спальные места</a>
            </li>
            <li class="nav-item pr-3 mt-lg-0 mt-3">
                <a class="d-flex justify-content-center align-items-center nav-link p-md-2 text-center text-fut-light {{ isset($id) && $id == 2 ? 'active show' : '' }}"
                   style="width: 207px;height: 54px;background: #F9FF85;border-radius: 10px;color:#000;font-family: 'Futura PT Bold';font-size: 20px;"
                   data-toggle="tab" href="#столовая" role="tab" aria-controls=""
                   aria-selected="true">Столовая</a>
            </li>
            <li class="nav-item pr-3 mt-lg-0 mt-3">
                <a class="d-flex justify-content-center align-items-center nav-link p-md-2 text-center text-fut-light {{ isset($id) && $id == 3 ? 'active show' : '' }}"
                   style="width: 207px;height: 54px;background: #92D7FE;border-radius: 10px;color:#000;font-family: 'Futura PT Bold';font-size: 20px;"
                   data-toggle="tab" href="#игровая" role="tab" aria-controls=""
                   aria-selected="true">Игровая</a>
            </li>
            <li class="nav-item pr-3 mt-lg-0 mt-3">
                <a class="d-flex justify-content-center align-items-center nav-link p-md-2 text-center text-fut-light  {{ isset($id) && $id == 4 ? 'active' : '' }}"
                   style="width: 207px;height: 54px;background: #BEF077;border-radius: 10px;color:#000;font-family: 'Futura PT Bold';font-size: 20px;"
                   data-toggle="tab" href="#сад" role="tab" aria-controls=""
                   aria-selected="true">Сад</a>
            </li>

        </ul>

        <div class="tab-content col-12 pt-5 pb-lg-5" id="myTabContent">
            <div class="tab-pane fade {{ isset($id) && $id == 1 ? 'active show' : '' }}" id="спальные" role="tabpanel" aria-labelledby="">
                <div class="photo-gallery">
                    <div class="container">
                        <div class="row photos">
                            @foreach($galleries as $gallery)
                                @if($gallery->type == "Спальня")
                                    <div class="col-sm-6 col-md-4 col-lg-4 item text-center pt-lg-4 pt-4"><a href="{{ asset('storage/'.$gallery->image)  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('storage/'.$gallery->image)  }}"></a></div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade {{ isset($id) && $id == 2 ? 'active show' : '' }}" id="столовая" role="tabpanel" aria-labelledby="">
                <div class="photo-gallery">
                    <div class="container">
                        <div class="row photos">
                            @foreach($galleries as $gallery)
                                @if($gallery->type == "Столовая")
                            <div class="col-sm-6 col-md-4 col-lg-4 item text-center pt-lg-4 pt-4"><a href="{{ asset('storage/'.$gallery->image)  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('storage/'.$gallery->image)  }}"></a></div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade {{ isset($id) && $id == 3 ? 'active show' : '' }}" id="игровая" role="tabpanel" aria-labelledby="">
                <div class="photo-gallery">
                    <div class="container">
                        <div class="row photos">
                            @foreach($galleries as $gallery)
                                @if($gallery->type == "Игровая")
                                    <div class="col-sm-6 col-md-4 col-lg-4 item text-center pt-lg-4 pt-4"><a href="{{ asset('storage/'.$gallery->image)  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('storage/'.$gallery->image)  }}"></a></div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{ isset($id) && $id == 4 ? 'active show' : '' }}" id="сад" role="tabpanel" aria-labelledby="">
                <div class="photo-gallery">
                    <div class="container">
                        <div class="row photos">
                            @foreach($galleries as $gallery)
                                @if($gallery->type == "Сад")
                                    <div class="col-sm-6 col-md-4 col-lg-4 item text-center pt-lg-4 pt-4"><a href="{{ asset('storage/gallery/'.$gallery->image)  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('storage/'.$gallery->image)  }}"></a></div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{ isset($id) && $id == 5 ? 'active show' : '' }}" id="общие" role="tabpanel" aria-labelledby="">
                <div class="photo-gallery">
                    <div class="container">
                        <div class="row photos">
                            @foreach($galleries as $gallery)
                                @if($gallery->type == "Общие")
                                    <div class="col-sm-6 col-md-4 col-lg-4 item text-center pt-lg-4 pt-4"><a href="{{ asset('storage/'.$gallery->image)  }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('storage/'.$gallery->image)  }}"></a></div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-lg-5 pt-4" id="contact-us">
        <div class="row justify-content-center">
            <h2 style="font-family: Coiny; font-size: 30px; line-height: 33px;">Или приезжайте в гости знакомиться</h2>
        </div>
        <div class="container pt-lg-5 pt-3">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="phone">
                        <img src="{{ asset('images/phone-call.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 20px;color: #000;">(0556) 75-94-44</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="map">
                        <img src="{{ asset('images/map-location.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 20px;color: #000;">ул. Радищева 23 (ул. Советская/Дружбы,
                            магазин ”Планета электроники”)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="time">
                        <img src="{{ asset('images/time.png')  }}" alt="">
                        <p class="text-fut-light" style="font-size: 20px;color: #000;">Время работы детского сада с 7.30 до 18.30</p>
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
    @push('scripts')
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    @endpush

@endsection
