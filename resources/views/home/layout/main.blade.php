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
                            <a href="{{route('home')}}"
                               class="nav-link text-white mt-1  @if(request()->routeIs('home')) disable fw-bolder text-muted pe-none @endif ">
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
                        @if(auth()->user()->role->hasPermissions('read_dashboard'))
                            <li>
                                <a href="{{route('admin.dashboard')}}"
                                   class="nav-link text-white mt-1 "
                                >
                                    پنل مديريت
                                </a>
                            </li>

                        @endif

                        @if(auth()->user()->role->title==='host')
                            <li>
                                <a href="{{route('host.index')}}"
                                   class="nav-link text-white mt-1 @if(request()->routeIs('host.index')) disable fw-bolder text-muted pe-none @endif"

                                >
                                    ثبت مشخصات
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

