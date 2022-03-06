@extends('auth.layout.main')

@section('content')

    <div class="container">

        <div class="row vh-100 align-items-center justify-content-center">
            <h2 class="text-center text-primary"> سامانه رزرو اقامتگاه</h2>
            <div class="col-md-4 bg-white rounded-2 ">

                <h2 class="text-info text-center p-2">ثبت نام</h2>
                <form action="/register"  method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">نام</label>
                        <input type="text" name="name" placeholder="نام خود را وارد کنید" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">ايميل</label>
                        <input type="email" name="email" placeholder="ایمیل خود را وارد کنید" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">رمز عبور</label>
                        <input type="password" name="password" placeholder="رمز عبور خود را وارد کنید" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label"> تکرار رمز عبور</label>
                        <input type="password" name="password_confirmation" placeholder="رمز عبور خود را تکرار کنید" class="form-control"
                               id="exampleInputPassword1">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label"> نقش </label>
                        <select class="form-select mb-2" name="role_id" aria-label="Default select example">
                            <option value="">ميزبان</option>
                            <option value="">مهمان</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">تاييد</button>
                </form>
            </div>

        </div>
    </div>

@endsection


