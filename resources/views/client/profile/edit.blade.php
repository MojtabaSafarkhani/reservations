@extends("home.layout.main")

@section('content')
    @include('client.profile.layout.aside')



    <div class="container">

        <div class="row vh-100 align-items-center justify-content-center p-3">
            <div class="col-md-8 bg-white rounded-2 ">

                <h2 class="text-dark text-center p-2">ويرايش</h2>
                <form action="{{route('profile.update',$user)}}" method="post" class="needs-validations was_validated"
                      novalidate>
                    @csrf
                    @method("PATCH")
                    <div class="mb-2">
                        <label for="name" class="form-label">نام</label>
                        <input type="text" name="name" placeholder="نام خود را وارد کنید" autocomplete="off"
                               class="form-control @error('name') is-invalid @enderror" id="name"
                               value="{{$user->name}}"
                               aria-describedby="emailHelp">
                        @error('name') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">ايميل</label>
                        <input type="email" dir="rtl" name="email" placeholder="example@gmail.com"
                               value="{{$user->email}}"
                               class="form-control @error('email') is-invalid @enderror" id="email">
                        @error('email') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="oldPassword" class="form-label"> رمز عبور فعلي</label>
                        <input type="password" name="oldPassword" placeholder="رمز عبور فعلي خود را وارد کنید"
                               class="form-control  @error('oldPassword') is-invalid @enderror"
                               id="oldPassword">
                        @error('oldPassword') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label"> رمز عبور جديد</label>
                        <input type="password" name="password" placeholder="رمز عبور جديد خود را وارد کنید"
                               class="form-control  @error('password') is-invalid @enderror"
                               id="password">
                        @error('password') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="password_confirmation" class="form-label"> تکرار رمز عبور جديد</label>
                        <input type="password" name="password_confirmation"
                               placeholder="رمز عبور جديد خود را تکرار کنید"
                               class="form-control  @error('password') is-invalid @enderror"
                               id="password_confirmation">
                        @error('password') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark my-3">تاييد</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    </div>
    </div>
    </div>


@endsection

