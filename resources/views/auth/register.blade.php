@extends('auth.layout.main')

@section('content')

    <div class="container background_for_login"
         style="background-image: url({{asset('/storage/images/icon/background.jpg')}});">

        <div class="row vh-100 align-items-center justify-content-center p-2">
            <a href="{{route('home')}}" class="text-center "><img
                    src="{{asset('storage/images/icon/Moja.png')}}" width="60px" alt=""> </a>
            <div class="col-md-4 bg-white rounded-2 "  style="box-shadow: 0px 0px 14px 3px">

                <h2 class="text-dark text-center p-2">ثبت نام</h2>
                <form action="/register" method="post" class="needs-validations was_validated" novalidate>
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">نام</label>
                        <input type="text" name="name" placeholder="نام خود را وارد کنید"
                               class="form-control @error('name') is-invalid @enderror" id="name"
                               value="{{old('name')}}"
                               aria-describedby="emailHelp">
                        @error('name') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">ايميل</label>
                        <input type="email" dir="rtl" name="email" placeholder="example@gmail.com"
                               value="{{old('email')}}"
                               class="form-control @error('email') is-invalid @enderror" id="email">
                        @error('email') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">رمز عبور</label>
                        <input type="password" name="password" placeholder="رمز عبور خود را وارد کنید"
                               class="form-control  @error('password') is-invalid @enderror" id="exampleInputPassword1">
                        @error('password') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label"> تکرار رمز عبور</label>
                        <input type="password" name="password_confirmation" placeholder="رمز عبور خود را تکرار کنید"
                               class="form-control  @error('password') is-invalid @enderror"
                               id="exampleInputPassword1">
                        @error('password') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label"> نقش </label>
                        <select class="form-select mb-2  @error('role_id') is-invalid @enderror" name="role_id"
                                aria-label="Default select example">
                            <option value="2">ميزبان</option>
                            <option value="3">مهمان</option>
                        </select>
                        @error('role_id') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark my-3">تاييد</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection


