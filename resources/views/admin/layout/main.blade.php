<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <title>وبسايت رزرو اقامتگاه</title>
</head>
<header>
    <div class="p-1 homeHeader text-white ">
        <div class="container-fluid ">
            <div class="row ">
                <ul class="nav col-12 my-md-0 text-small">
                    @if(auth()->user())
                        <li>
                            <p class="nav-link text-white mt-1">
                                {{auth()->user()->name}}
                            </p>
                        </li>
                        <li class="">
                            <a href="{{route('home')}}" class="nav-link text-white mt-1 ">
                                خانه
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-white">
                                <form action="/logout" method="post">
                                    @csrf
                                    <input type="submit" value="خروج" class="btn btn-danger btn-sm">
                                </form>
                            </a>
                        </li>

                    @else
                        <li>
                            <a href="/register" class="nav-link text-white mt-1">
                                ثبت نام
                            </a>
                        </li>
                        <li>
                            <a href="/login" class="nav-link text-white mt-1">
                                ورود
                            </a>
                        </li>
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
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline ">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"> <span
                                        class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                       id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                             class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
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
@yield('script')


</body>
</html>
