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

<body>


@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>

