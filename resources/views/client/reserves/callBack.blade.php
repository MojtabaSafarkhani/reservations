@extends('home.layoutNew.main')

@section('content')

    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>نتيجه پرداخت</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route('home')}}">خانه</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="destinations-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 m-auto">
                    <div class="destinations-details__left">

                        <div class="destinations-details__discover ">
                            @if($reserve->status==='ok')
                                <h3 class="destinations-details__title text-success  ">پرداخت موفق</h3>
                            @else
                               <h3 class="destinations-details__title text-danger  ">پرداخت ناموفق</h3>

                            @endif
                        </div>
                        <div class="destinations-details__overview">
                            <ul class="list-unstyled destinations-details__overview-list text-center">
                                <li>
                                    <div class="destinations-details__overview-left">
                                        <p>نام مهمان</p>
                                    </div>
                                    <div class="destinations-details__overview-right">
                                        <p>{{$reserve->order->user->name}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="destinations-details__overview-left">
                                        <p>نام اقامتگاه</p>
                                    </div>
                                    <div class="destinations-details__overview-right">
                                        <p>{{$reserve->order->hotel->name}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="destinations-details__overview-left">
                                        <p>روز ورود</p>
                                    </div>
                                    <div class="destinations-details__overview-right">
                                        <p>{{$reserve->order->check_in_to_persian}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="destinations-details__overview-left">
                                        <p>روز خروج</p>
                                    </div>
                                    <div class="destinations-details__overview-right">
                                        <p>{{$reserve->order->check_out_to_persian}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="destinations-details__overview-left">
                                        <p>هزينه کل</p>
                                    </div>
                                    <div class="destinations-details__overview-right">
                                        <p>{{$reserve->total_cost}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="destinations-details__overview-left">
                                        <p>وضعيت پرداخت</p>
                                    </div>
                                    <div class="destinations-details__overview-right">
                                        <p>{{$reserve->status_translate['message']}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
