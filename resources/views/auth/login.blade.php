@extends('auth.layout.main')


@section('content')

    <div class="container background_for_login"
         style="background-image: url({{asset('/storage/images/icon/background.jpg')}});">

        <div class="row vh-100 align-items-center justify-content-center p-3">
            <a href="{{route('home')}}" class="text-center text-dark"><img
                    src="{{asset('storage/images/icon/Moja.png')}}" width="60px" alt=""> </a>
            <div class="col-md-4 bg-white rounded-2 " style="box-shadow: 0px 0px 14px 3px">

                <h2 class="text-dark text-center p-3">ورود</h2>
                <form action="/login" method="post" class="needs-validations was_validated" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">ايميل</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{old('email')}}"
                               placeholder="example@gmail.com" id="email" aria-describedby="emailHelp">
                        @error('email') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" placeholder="رمز عبور خود را وارد کنید" name="password"
                               class="form-control @error('password') is-invalid @enderror" id="password">
                        @error('password') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" class="form-check-input"
                               style="float: right; margin-left: 10px;" id="remember">
                        <label class="form-check-label" for="remember">به خاطر سپردن</label>
                    </div>
                    <div class="mb-4">
                        <a href="{{route('password.request')}}" class="btn btn-danger"> رمز عبور را فراموش کرده ام </a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark my-3">تاييد</button>
                    </div>
                </form>
            </div>
            @if (session('status'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 m-auto text-center bg-opacity-10 fw-bold p-2">
                            <div class="">
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>

                </div>
            @endif
        </div>

    </div>


@endsection
