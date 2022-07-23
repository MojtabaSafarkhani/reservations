@extends('home.layoutNew.main')


@section('content')


    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="image-layer"
                             style="background-image: url({{$slider->image_url}});"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <a href="{{route('city.show.all',['city'=>$slider->link])}}">
                                            <h2> سفر و ماجرا جویی</h2>
                                            <p>دوست داری کجا بری؟</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <div class="main-slider-nav">

                <div class="main-slider-button-next"><span class="icon-right-arrow"></span></div>
                <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
            </div>
        </div>
    </section>

    <!--Tour Search Start-->
    <section class="tour-search">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tour-search-box">
                        <form class="tour-search-one" action="{{route('client.hotels.search')}}">
                            <div class="tour-search-one__inner">
                                <div class="tour-search-one__inputs">
                                    <div class="tour-search-one__input-box">
                                        <label for="place">نام اقامتگاه</label>
                                        <input type="text" placeholder="کلید واژه" name="hotel" id="place">
                                    </div>
                                    <div class="tour-search-one__input-box">
                                        <label for="city">نام شهر</label>
                                        <input type="text" placeholder="کلید واژه" name="city" id="city">
                                    </div>
                                    <div class="tour-search-one__input-box">
                                        <label for="category">نام دسته بندی</label>
                                        <input type="text" placeholder="کلید واژه" name="category" id="category">
                                    </div>
                                </div>
                                <div class="tour-search-one__btn-wrap">
                                    <button type="submit" class="thm-btn tour-search-one__btn">پیدا کن</button>
                                </div>

                            </div>

                        </form>
                    </div>
                    @error('error') <span
                        style="color: red;text-align: center; display: block;margin-top: 10px;">{{$message}}</span> @enderror
                </div>
            </div>
        </div>
    </section>
    <!--Tour Search End-->

    <!--Destinations One Start-->
    <section class="destinations-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline"> لیست مقصد ها</span>
                <h2 class="section-title__title">جذاب ترين شهرها</h2>
            </div>
            <div class="row masonary-layout">
                <div class="col-xl-3 col-lg-3">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/tehran.jpg" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a
                                        href="{{route('city.show.all',['city'=>'tehran'])}}">تهران</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/mazandaran.jpg" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a
                                        href="{{route('city.show.all',['city'=>'mazandaran'])}}">مازندران</a>
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/hamedan.jpg" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a
                                        href="{{route('city.show.all',['city'=>'hamedan'])}}">همدان</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/Rasht.jpg" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a
                                        href="{{route('city.show.all',['city'=>'gilan'])}}">گيلان</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/esfahan.jpg" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a
                                        href="{{route('city.show.all',['city'=>'esfahan'])}}">اصفهان</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Destinations One End-->

    <!--About One Start-->

    <!--About One End-->
    <br>
    <br>
    <br>
    <!--Popular Tours Start-->
    <section class="popular-tours">
        <div class="popular-tours__container">
            <div class="section-title text-center">
                <span class="section-title__tagline">اقامتگاه ها</span>
                <h2 class="section-title__title">
                    اخيراً
                    اضافه شده
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="popular-tours__carousel owl-theme owl-carousel">
                        @foreach($hotels as $hotel)
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img
                                        src="@if($hotel->galleries()->first()){{$hotel->galleries()->first()->image_url}}@else {{asset('assets/images/resources/popular-tours__img-2.jpg')}} @endif"
                                        alt="">
                                    {{-- <div class="popular-tours__icon">
                                         <a href="tour-details.html">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div>--}}
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> {{$hotel->hotel_rating}}
                                    </div>
                                    <h3 class="popular-tours__title"><a
                                            href="{{route('client.hotel.show',$hotel)}}">{{$hotel->name}}</a>
                                    </h3>
                                    <h5 class="popular-tours__title_city">
                                        {{$hotel->city->name}}</h5>
                                    <p class="popular-tours__rate"><span>{{$hotel->cost}} تومان</span> /هر شب</p>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-tours">
        <div class="popular-tours__container">
            <div class="section-title text-center">
                <span class="section-title__tagline">اقامتگاه ها</span>
                <h2 class="section-title__title">
                    محبوب ترين ها
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="popular-tours__carousel owl-theme owl-carousel">
                        @foreach($mostLikeHotels as $hotel)
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img
                                        src="@if($hotel->galleries()->first()){{$hotel->galleries()->first()->image_url}}@else {{asset('assets/images/resources/popular-tours__img-2.jpg')}} @endif"
                                        alt="">
                                    {{-- <div class="popular-tours__icon">
                                         <a href="tour-details.html">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div>--}}
                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i> {{$hotel->hotel_rating}}
                                    </div>
                                    <h3 class="popular-tours__title"><a
                                            href="{{route('client.hotel.show',$hotel)}}">{{$hotel->name}}</a>
                                    </h3>
                                    <h5 class="popular-tours__title_city">
                                        {{$hotel->city->name}}</h5>
                                    <p class="popular-tours__rate"><span>{{$hotel->cost}} تومان</span> /هر شب</p>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Popular Tours End-->

    <!--Video One Start-->

    <!--Video One End-->

    <!--Brand One Start-->

    <!--Brand One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-shape-2 float-bob-y">
            <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
        </div>
        <div class="testimonial-one-shape-3 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="assets/images/shapes/testimonial-one-shape-3.png" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">شهر ها</span>
                <h2 class="section-title__title">محبوب ترين ها </h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                        @foreach($cities as $city)
                            <div class="testimonial-one__single">

                                <div class="testimonail-one__content">
                                    <a href="{{route('city.show.all',$city)}}">
                                        <h2 class="testimonial-one__text">{{$city->name}}</h2>
                                    </a>
                                    <div class="testimonial-one__client-info">
                                        <a href="{{route('city.show.all',$city)}}"><h3
                                                class="testimonial-one__client-name">{{$city->slug}}</h3></a>
                                        <p class="testimonial-one__client-title">مُجا</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one-bg" style="background-image: url(assets/images/shapes/gallery-map.png)"></div>
        <div class="gallery-one__container-box clearfix">
            <ul class="list-unstyled gallery-one__content clearfix">
                <li class="wow fadeInUp" data-wow-delay="100ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/hotel.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="{{route('category.show.all',['category'=>'hotel'])}}">هتل</a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="200ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/hostel.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="{{route('category.show.all',['category'=>'hostel'])}}">هاستل</a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="300ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/apartment.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="{{route('category.show.all',['category'=>'apartment'])}}">آپارتمان</a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="400ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/cottage-4.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="{{route('category.show.all',['category'=>'cottage'])}}">کلبه</a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="500ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/villa.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="{{route('category.show.all',['category'=>'villa'])}}">ويلا</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>




@endsection
