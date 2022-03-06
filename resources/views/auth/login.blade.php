@extends('auth.layout.main')


@section('content')

     <div class="container">

         <div class="row vh-100 align-items-center justify-content-center">
             <h2 class="text-center text-primary">  سامانه رزرو اقامتگاه</h2>
             <div class="col-md-4 bg-white rounded-2 ">

                 <h2 class="text-info text-center p-3">ورود</h2>
                 <form class="">
                     <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">ايميل</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputPassword1" class="form-label">رمز عبور</label>
                         <input type="password" class="form-control" id="exampleInputPassword1">
                     </div>
                     <div class="mb-3 form-check">
                         <input type="checkbox" class="form-check-input" style="float: right; margin-left: 10px;" id="exampleCheck1">
                         <label class="form-check-label " for="exampleCheck1">به خاطر سپردن</label>
                     </div>
                     <div class="mb-4">
                         <a href="#" class="btn btn-danger"> رمز عبور را فراموش کرده ام </a>
                     </div>
                     <button type="submit" class="btn btn-primary mb-3">تاييد</button>
                 </form>
             </div>

         </div>
     </div>

@endsection
