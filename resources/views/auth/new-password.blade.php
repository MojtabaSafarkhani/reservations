@extends('auth.layout.main')


@section('content')

    <div class="container  background_for_login"
         style="background-image: url({{asset('/storage/images/icon/background.jpg')}});">

        <div class="row vh-100   align-items-center justify-content-center p-3">
            <a href="{{route('home')}}" class="text-center text-dark"><img
                    src="{{asset('storage/images/icon/Moja.png')}}" width="60px" alt=""> </a>
            <div class="col-md-4 bg-white rounded-2 mt-3 " style="box-shadow: 0px 0px 14px 3px">
                <form action="{{route('password.update')}}" method="post" class="p-3"
                      novalidate>
                    @csrf

                    <input type="hidden" name="token" value="{{$request->route('token')}}">
                    <div class="mb-3">
                        <label for="email" class="form-label">ايميل</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{old('email')}}"
                               placeholder="example@gmail.com" id="email" aria-describedby="emailHelp">
                        @error('email') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز جديد</label>
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="password">
                        @error('password') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">
                            تکرار رمز جديد
                        </label>
                        <input type="password" name="password_confirmation"
                               class="form-control @error('password_confirmation') is-invalid @enderror"

                               id="password_confirmation">
                        @error('password_confirmation') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark my-3">
                            تاييد
                        </button>

                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection
