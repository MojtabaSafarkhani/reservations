<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css"/>
    <title> رزرو اقامتگاه</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/Moja.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/Moja.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/Moja.png"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    @yield('link')
</head>
<header>
    <div class="px-3 homeHeader text-white ">
        <div class="container-fluid ">
            <div class="row align-middle">
                <ul class="nav col-12 my-md-0 text-small mw-100 align-items-center">
                    <li>
                        <a href="{{route('home')}}"
                           class="nav-link  "
                        >
                            <img src="{{asset('assets/images/favicons/Moja.png')}}" width="35px" class="rounded-1" alt="">
                        </a>
                    </li>
                    @if(auth()->user())
                        <li>
                            <div class="dropdown nav-link text-white ">
                                <a class="btn btn-dark dropdown-toggle " href="#" role="button" id="dropdownMenuLink"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <spanp>{{auth()->user()->name}}</spanp>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    @if(auth()->user()->role->title==='host')
                                        <li>
                                            <a href="{{route('client.host.index')}}"
                                               class="dropdown-item  mt-1 @if(request()->routeIs('client.host.index')) disable fw-bolder text-muted pe-none @endif"

                                            >
                                                مشخصات
                                            </a>
                                        </li>

                                    @endif
                                    <li>
                                        <a class="dropdown-item @if(request()->routeIs('profile.index')) disable fw-bolder text-muted pe-none @endif"
                                           href="{{route('profile.index')}}">پروفايل</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item">
                                            <form action="/logout" method="post">
                                                @csrf
                                                <input type="submit" value="خروج" class="btn btn-danger btn-sm">
                                            </form>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>


                        @if(auth()->user()->role->hasPermissions('read_dashboard'))
                            <li>
                                <a href="{{route('admin.dashboard')}}"
                                   class="nav-link text-white mt-1  @if(request()->routeIs('admin.dashboard')) disable fw-bolder text-muted pe-none @endif"
                                >
                                    پنل مديريت
                                </a>
                            </li>

                        @endif

                        <div class="me-auto"></div>
                        <div class="text-start">

                            <span type="button" class="p-2 rounded-1 text-dark fw-bold bg-warning">{{\Hekmatinasser\Verta\Verta::now()->format('Y/m/d')}}</span>
                        </div>
                    @endif

                </ul>

            </div>
        </div>
    </div>

</header>

<body class="homeBody">

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 homeHeader ">
            <div class="d-flex flex-column align-items-center align-items-sm-start  px-3 pt-2  min-vh-100">

                <ul class="nav nav-pills  flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="menu">
                    <li class="nav-item">
                        <a href="#category" data-bs-toggle="collapse" class="nav-link px-0  text-white">
                            <i class="bi bi-bookmark-fill"></i> <span class="ms-1 d-none d-sm-inline">دسته بندي</span>
                        </a>
                        <ul class="collapse @if(request()->routeIs('categories.*')) show @endif nav flex-column ms-1 "
                            id="category" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('categories.create')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline ">ايجاد دسته بندي</span> </a>
                            </li>
                            <li>
                                <a href="{{route('categories.index')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">ليست دسته بندي ها</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#cities" data-bs-toggle="collapse" class="nav-link px-0  text-white">
                            <i class="bi bi-signpost-split"></i><span class="ms-1 d-none d-sm-inline">شهر</span>
                        </a>
                        <ul class="collapse @if(request()->routeIs('cities.*')) show @endif nav flex-column ms-1 "
                            id="cities" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('cities.create')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline ">ايجاد شهر</span> </a>
                            </li>
                            <li>
                                <a href="{{route('cities.index')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">ليست شهرها</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#slider" data-bs-toggle="collapse" class="nav-link px-0  text-white">
                            <i class="bi bi-sliders"></i><span class="ms-1 d-none d-sm-inline">اسلايدر</span>
                        </a>
                        <ul class="collapse @if(request()->routeIs('sliders.*')) show @endif nav flex-column ms-1 "
                            id="slider" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('sliders.create')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline ">ايجاد اسلايدر</span> </a>
                            </li>
                            <li>
                                <a href="{{route('sliders.index')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">ليست اسلايدرها</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#hosts" data-bs-toggle="collapse" class="nav-link px-0  text-white">
                            <i class="bi bi-person-circle"></i> <span class="ms-1 d-none d-sm-inline">ميزبانان</span>
                        </a>
                        <ul class="collapse @if(request()->routeIs('hosts.*')) show @endif nav flex-column ms-1 "
                            id="hosts" data-bs-parent="#menu">
                            <li>
                                <a href="{{route('hosts.index')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">ليست ميزبانان</span> </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#features" data-bs-toggle="collapse" class="nav-link px-0  text-white">
                            <i class="bi bi-clipboard2-plus-fill"></i><span
                                class="ms-1 d-none d-sm-inline">ويژگي ها</span>
                        </a>
                        <ul class="collapse @if(request()->routeIs('features.*')) show @endif nav flex-column ms-1 "
                            id="features" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('features.create')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline ">ايجاد ويژگي</span> </a>
                            </li>
                            <li>
                                <a href="{{route('features.index')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">ليست ويژگي ها</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#hotels" data-bs-toggle="collapse" class="nav-link px-0  text-white">
                            <i class="bi bi-house-fill"></i><span class="ms-1 d-none d-sm-inline">اقامتگاه ها</span>
                        </a>
                        <ul class="collapse @if(request()->routeIs('hotels.*')) show @endif nav flex-column ms-1 "
                            id="hotels" data-bs-parent="#menu">
                            <li>
                                <a href="{{route('hotels.index')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">ليست اقامتگاه ها</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#reserve" data-bs-toggle="collapse" class="nav-link px-0  text-white">
                            <i class="bi bi-currency-dollar"></i> <span class="ms-1 d-none d-sm-inline">پرداختي ها</span>
                        </a>
                        <ul class="collapse @if(request()->routeIs('admin.reserve.*')) show @endif nav flex-column ms-1 "
                            id="reserve" data-bs-parent="#menu">
                            <li>
                                <a href="{{route('admin.reserve.index')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">ليست پرداختي ها</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#comments" data-bs-toggle="collapse" class="nav-link px-0  text-white">
                            <i class="bi bi-chat-square-text-fill"></i> <span class="ms-1 d-none d-sm-inline">کامنت ها</span>
                        </a>
                        <ul class="collapse @if(request()->routeIs('admin.comments.*')) show @endif nav flex-column ms-1 "
                            id="comments" data-bs-parent="#menu">
                            <li>
                                <a href="{{route('admin.comments.index')}}" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">ليست کامنت ها</span> </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <hr>

            </div>
        </div>
        <div class="col py-3">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script>

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
@yield('script')


</body>
</html>
