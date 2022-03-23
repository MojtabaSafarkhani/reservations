@extends('auth.layout.main')


@section('content')

    <div class="container">

        <div class="row mt-5  align-items-center justify-content-center p-3">
            <h2 class="text-center text-dark "> سامانه رزرو اقامتگاه</h2>
            <div class="col-md-4 bg-white rounded-2 mt-3 ">

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
                        <div class="col-md-4 m-auto text-center bg-success my-4 p-2">
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
