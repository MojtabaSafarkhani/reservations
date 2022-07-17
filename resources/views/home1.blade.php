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
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="swiper-slide-inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h2> سفر و ماجرا جویی</h2>
                                    <p>دوست داری کجا بری؟</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="swiper-slide-inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h2> سفر و ماجرا جویی</h2>
                                    <p>دوست داری کجا بری؟</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="swiper-slide-inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h2> سفر و ماجرا جویی</h2>
                                    <p>دوست داری کجا بری؟</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slider-nav">

                <div class="main-slider-button-next"><span class="icon-right-arrow"></span> </div>
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
                        <form class="tour-search-one" action="tour-sidebar.html">
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
                                        <label for="category">نام شهر</label>
                                        <input type="text" placeholder="کلید واژه" name="category" id="category">
                                    </div>
                                </div>
                                <div class="tour-search-one__btn-wrap">
                                    <button type="submit" class="thm-btn tour-search-one__btn">پیدا کن</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Tour Search End-->

    <!--Destinations One Start-->
    <section class="destinations-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">لیست مقصد</span>
                <h2 class="section-title__title">به مکانهای عجیب و غریب بروید</h2>
            </div>
            <div class="row masonary-layout">
                <div class="col-xl-3 col-lg-3">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-1.png" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a href="destinations-details.html">اسپانیا</a>
                                </h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-2.png" alt="">
                            <div class="destinations-one__content">
                                <p class="destinations-one__sub-title">حیات وحش</p>
                                <h2 class="destinations-one__title"><a href="destinations-details.html">اسپانیا</a>
                                </h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-3.png" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a href="destinations-details.html">اسپانیا</a>
                                </h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-4.png" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a
                                        href="destinations-details.html">اسپانیا</a></h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-5.png" alt="">
                            <div class="destinations-one__content">
                                <p class="destinations-one__sub-title">حیات وحش</p>
                                <h2 class="destinations-one__title"><a
                                        href="destinations-details.html">اسپانیا</a></h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
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

    <!--Popular Tours Start-->
    <section class="popular-tours">
        <div class="popular-tours__container">
            <div class="section-title text-center">
                <span class="section-title__tagline">تورهای ویژه</span>
                <h2 class="section-title__title">محبوب ترین تورها</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="popular-tours__carousel owl-theme owl-carousel">
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-1.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">تور 2 روزه پارک ملی</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-2.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">عمق ساحل را کشف کنید</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-3.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">عمق ساحل را کشف کنید</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-4.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">عمق ساحل را کشف کنید</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-1.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">عمق ساحل را کشف کنید</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-2.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">تور 2 روزه پارک ملی</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-3.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">عمق ساحل را کشف کنید</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-4.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">تور 2 روزه پارک ملی</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-1.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">تور 2 روزه پارک ملی</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-2.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">تور 2 روزه پارک ملی</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-3.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">تور 2 روزه پارک ملی</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-4.jpg" alt="">
                                <div class="popular-tours__icon">
                                    <a href="tour-details.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <div class="popular-tours__stars">
                                    <i class="fa fa-star"></i> 8.0 عالی
                                </div>
                                <h3 class="popular-tours__title"><a href="tour-details.html">تور 2 روزه پارک ملی</a></h3>
                                <p class="popular-tours__rate"><span>1800 تومان</span> /هر نفر</p>
                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="tour-details.html">3 روز</a></li>
                                    <li><a href="tour-details.html">+12 </a></li>
                                    <li><a href="tour-details.html">لس آنجلس</a></li>
                                </ul>
                            </div>
                        </div>
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
                <span class="section-title__tagline">توصیفات و بررسی ها</span>
                <h2 class="section-title__title">آنچه آنها می گویند</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                        <div class="testimonial-one__single">

                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">

                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">

                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">

                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">

                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">

                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">

                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">

                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">

                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>


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
                        <img src="assets/images/gallery/gallery-one-img-1.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-1.jpg">مازندران</a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="200ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-2.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-2.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="300ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-3.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-3.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="400ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-4.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-4.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="500ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-5.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-5.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Gallery Oned End-->


    <!--Why Choose End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="news-one__top">
                <div class="row">
                    <div class="col-xl-9 col-lg-9">
                        <div class="news-one__top-left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">از پست وبلاگ</span>
                                <h2 class="section-title__title">اخبار و مقالات</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="news-one__top-right">
                            <a href="news-details.html" class="news-one__btn thm-btn">دیدن همه </a>                            </div>
                    </div>
                </div>
            </div>
            <div class="news-one__bottom">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="assets/images/blog/news-one-img-1.jpg" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>مرداد</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title">
                                    <a href="news-details.html">سفر به زیباترین مکانهای جهان</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="assets/images/blog/news-one-img-2.jpg" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>مرداد</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title">
                                    <a href="news-details.html">سفر به زیباترین مکانهای جهان</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="assets/images/blog/news-one-img-3.jpg" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>مرداد</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title">
                                    <a href="news-details.html">سفر به زیباترین مکانهای جهان</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News One End-->


@endsection
