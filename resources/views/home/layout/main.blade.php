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
    <div class="px-3 homeHeader text-white ">
        <div class="container-fluid ">
            <div class="row align-middle">
                <ul class="nav col-12 my-md-0 text-small mw-100 align-items-center">
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
                                    <li><a class="dropdown-item @if(request()->routeIs('profile.index')) disable fw-bolder text-muted pe-none @endif" href="{{route('profile.index')}}">پروفايل</a></li>
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
                        <li class="">
                            <a href="{{route('home')}}"
                               class="nav-link text-white mt-1  @if(request()->routeIs('home')) disable fw-bolder text-muted pe-none @endif ">
                                خانه
                            </a>
                        </li>

                        @if(auth()->user()->role->hasPermissions('read_dashboard'))
                            <li>
                                <a href="{{route('admin.dashboard')}}"
                                   class="nav-link text-white mt-1 "
                                >
                                    پنل مديريت
                                </a>
                            </li>

                        @endif



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


@yield('content')


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

