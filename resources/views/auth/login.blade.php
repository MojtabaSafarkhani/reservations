@extends('auth.layout.main')


@section('content')

    <div class="container">

        <div class="row vh-100 align-items-center justify-content-center p-3">
            <h2 class="text-center text-dark"> سامانه رزرو اقامتگاه</h2>
            <div class="col-md-4 bg-white rounded-2 ">

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

        </div>
    </div>

@endsection
