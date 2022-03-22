@extends('auth.layout.main')


@section('content')

    <div class="container">

        <div class="row mt-5  align-items-center justify-content-center p-3">
            <h2 class="text-center text-dark "> سامانه رزرو اقامتگاه</h2>
            <div class="col-md-4 bg-white rounded-2 mt-3 ">
                <form action="{{route('password.update')}}" method="post" class="p-3"
                      novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="password" class="form-label">رمز جديد</label>
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="password">
                        @error('password') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">تکرار رمز جديد</label>
                        <input type="password" name="password_confirmation"
                               class="form-control @error('password_confirmation') is-invalid @enderror"

                               id="password_confirmation">
                        @error('password_confirmation') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark my-3">تاييد</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection