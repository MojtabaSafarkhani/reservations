<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> رزرو اقامتگاه</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/Moja.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/Moja.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/Moja.png"/>

    <meta name="description" content="Tevily HTML Template For Tour"/>

    <!-- fonts -->


    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css"/>
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css"/>
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css"/>
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css"/>
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/tevily-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css"/>
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/twentytwenty/twentytwenty.css"/>
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css"/>
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css"/>

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/tevily.css"/>
    <link rel="stylesheet" href="/assets/css/tevily-responsive.css"/>
</head>

<body>
<div class="preloader">
    <img class="preloader__image" width="60" src="/assets/images/favicons/Moja.png" alt=""/>
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header clearfix">

        <nav class="main-menu clearfix">
            <div class="main-menu-wrapper clearfix">
                <div class="container clearfix">
                    <div class="main-menu-wrapper-inner clearfix">
                        <div class="main-menu-wrapper__left clearfix">
                            <div class="main-menu-wrapper__logo">
                                <a href="{{route('home')}}"><img src="/assets/images/favicons/Moja.png" alt=""></a>
                            </div>
                            <div class="main-menu-wrapper__main-menu">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown @if(request()->routeIs('home')) current @endif">
                                        <a href="{{route('home')}}">خانه</a>
                                    </li>
                                    @if(auth()->user())
                                        <li class="dropdown">
                                            <a>{{auth()->user()->name}}</a>
                                        </li>
                                        <li class="dropdown @if(request()->routeIs('profile.index')) current @endif">
                                            <a href="{{route('profile.index')}}">پروفايل</a>
                                            @if(auth()->user()->role->title==='host')
                                                <ul>
                                                    <li><a href="{{route('client.host.index')}}">مشخصات</a></li>
                                                </ul>
                                            @endif
                                        </li>

                                        <li class="dropdown @if(request()->routeIs('likes.index')) current @endif">
                                            <a href="{{route('likes.index')}}">علاقه مندي ها</a>
                                        </li>
                                        @if(auth()->user()->role->hasPermissions('read_dashboard'))
                                            <li class="dropdown">
                                                <a href="{{route('admin.dashboard')}}">پنل مديريت</a>
                                            </li>

                                        @endif
                                    @else
                                        <li class="dropdown">
                                            <a href="{{route('register')}}">ثبت نام</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{route('login')}}">ورود</a>
                                        </li>

                                    @endif
                                </ul>
                            </div>
                        </div>
                        @auth()
                            <div class="main-menu-wrapper__right">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button style="border: none;" type="submit" href="#"
                                            class="main-menu__user icon-avatar">

                                    </button>
                                </form>

                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


@yield('content')

<!--Site Footer One Start-->
    <footer class="site-footer">
        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="index.html"><img src="/assets/images/favicons/Moja-bac-tosi.png"
                                                              alt=""></a>
                                </div>
                                <p class="footer-widget__about-text">به آژانس سفر و تور ما خوش آمدید. لورم به سادگی متن
                                    را ارسال می کند.</p>
                                <ul class="footer-widget__about-contact list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-square-alt"></i>
                                        </div>
                                        <div class="text">
                                            <a href="tel:09162352304">09162352304</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <a href="mailto:setinco@gmail.com">setinco@gmail.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p>ایران یزد خیابان مطهری</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__company clearfix">
                                <h3 class="footer-widget__title">شرکت</h3>
                                <ul class="footer-widget__company-list list-unstyled">
                                    <li><a href="about.html">درباره ما</a></li>
                                    <li><a href="#">وبلاگ</a></li>
                                    <li><a href="#">جوایز</a></li>
                                    <li><a href="#">همکاری با ما</a></li>
                                    <li><a href="#">گروه را ملاقات کن</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__explore">
                                <h3 class="footer-widget__title">بیشتر</h3>
                                <ul class="list-unstyled footer-widget__explore-list">
                                    <li><a href="#">حساب</a></li>
                                    <li><a href="#">مجوز</a></li>
                                    <li><a href="#">تماس با ما</a></li>
                                    <li><a href="#">مشارکت</a></li>
                                    <li><a href="#">حریم خصوصی</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__explore">
                                <h3 class="footer-widget__title">بیشتر</h3>
                                <ul class="list-unstyled footer-widget__explore-list">
                                    <li><a href="#">حساب</a></li>
                                    <li><a href="#">مجوز</a></li>
                                    <li><a href="#">تماس با ما</a></li>
                                    <li><a href="#">مشارکت</a></li>
                                    <li><a href="#">حریم خصوصی</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--Site Footer One End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="/assets/images/resources/logo-2.png" width="155"
                                                              alt=""/></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:setinco@gmail.com">setinco@gmail.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">09162352304</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->


    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->


<!-- /.search-popup -->

@yield('script')
<script src="/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="/assets/vendors/odometer/odometer.min.js"></script>
<script src="/assets/vendors/swiper/swiper.min.js"></script>
<script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="/assets/vendors/wow/wow.js"></script>
<script src="/assets/vendors/isotope/isotope.js"></script>
<script src="/assets/vendors/countdown/countdown.min.js"></script>
<script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="/assets/vendors/twentytwenty/twentytwenty.js"></script>
<script src="/assets/vendors/twentytwenty/jquery.event.move.js"></script>
<script src="/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/assets/vendors/vegas/vegas.min.js"></script>
<script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="/assets/vendors/timepicker/timePicker.js"></script>
<script src="/assets/vendors/bootstrap-datepicker.min.js"></script>
<script src="/assets/vendors/bootstrap-datepicker.fa.min.js"></script>


<!-- template js -->
<script src="/assets/js/tevily.js"></script>
</body>

</html>
