@extends('auth.layout.main')


@section('content')

    <div class="container background_for_login"
         style="background-image: url({{asset('/storage/images/icon/background.jpg')}});">

        <div class="row vh-100  align-items-center justify-content-center p-3">
            <a href="{{route('home')}}" class="text-center"><img
                    src="{{asset('storage/images/icon/Moja.png')}}" width="60px" alt=""> </a>
            <div class="col-md-4 bg-white rounded-2   "  style="box-shadow: 0px 0px 14px 3px">
                <h2 class="text-dark text-center p-3">فراموشی رمز</h2>
                <form action="{{route('password.email')}}" method="post" class="p-3"
                      novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">ايميل</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{old('email')}}"
                               placeholder="example@gmail.com" id="email" aria-describedby="emailHelp">
                        @error('email') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
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
