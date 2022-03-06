@extends('auth.layout.main')

@section('content')

    <div class="container">

        <div class="row vh-100 align-items-center justify-content-center">
            <h2 class="text-center text-primary">  سامانه رزرو اقامتگاه</h2>
            <div class="col-md-4 bg-white rounded-2 ">

                <h2 class="text-info text-center p-2">ثبت نام</h2>
                <form class="">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">نام</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">ايميل</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label"> تکرار رمز عبور</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label"> نقش </label>
                        <select class="form-select mb-2" aria-label="Default select example">
                            <option value="">ميزبان</option>
                            <option value="">مهمان</option>
                        </select>
                    </div>

                    <div class="mb-2 form-check">
                        <input type="checkbox" class="form-check-input" style="float: right; margin-left: 10px;" id="exampleCheck1">
                        <label class="form-check-label " for="exampleCheck1">به خاطر سپردن</label>
                    </div>
                    <div class="mb-2">
                        <a href="#" class="btn btn-danger"> رمز عبور را فراموش کرده ام </a>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">تاييد</button>
                </form>
            </div>

        </div>
    </div>

@endsection


