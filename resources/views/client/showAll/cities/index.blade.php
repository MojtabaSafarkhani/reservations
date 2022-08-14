@extends('home.layoutNew.main')

@section('content')

    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>نمايش همه {{$city->name}}</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route('home')}}">خانه</a></li>
                        <li><span>.</span></li>
                        <li class="active">تور</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Popular Tours Two Start-->
    <section class="popular-tours-two">
        <div class="container">
            @if($hotels->count()>0)
                <div class="row">
                    @foreach($hotels as $hotel)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <!--Popular Tours Two Single-->
                            <div class="popular-tours__single">
                                <div class="popular-tours__img">
                                    <img
                                        src="@if($hotel->galleries()->first()){{$hotel->galleries()->first()->image_url}}@else {{asset('assets/images/resources/popular-tours__img-2.jpg')}} @endif"
                                        alt="">

                                </div>
                                <div class="popular-tours__content">
                                    <div class="popular-tours__stars">
                                        <i class="fa fa-star"></i>{{$hotel->hotel_rating}}
                                    </div>
                                    <h3 class="popular-tours__title"><a
                                            href="{{route('client.hotel.show',$hotel)}}">{{$hotel->name}}</a></h3>
                                    <h5 class="popular-tours__title_city">
                                        {{$hotel->city->name}}</h5>
                                    <p class="popular-tours__rate"><span>{{number_format($hotel->cost)}} تومان</span>

                                        @if($hotel->HotelContainsZero())
                                            /هر نفر
                                        @else
                                            /هر شب

                                        @endif

                                    </p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="popular-tours__title" style="text-align: center">متاسفانه موردی یافت نشد !</p>
        @endif
    </section>
    {{$hotels->links()}}

@endsection
