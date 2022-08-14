@extends('admin.layout.main')


@section('content')

    <div class="container-fluid   ">
        <div class="row justify-content-evenly text-white">
            <div class="col-md-3 bg-dark rounded-1" style="height: 150px">
                <p class="p-1 m-1">تعداد کل کاربران :</p>
                <p class="text-center text-warning fw-bold fs-1 mt-1">{{\App\Models\User::all()->count()}}</p>
            </div>
            <div class="col-md-3 bg-dark rounded-1" style="height: 150px">
                <p class="p-1 m-1">تعداد کل اقامتگاه ها :</p>
                <p class="text-center text-warning fw-bold fs-1 mt-1">{{\App\Models\Hotel::all()->count()}}</p>
            </div>
            <div class="col-md-3 bg-dark rounded-1" style="height: 150px">
                <p class="p-1 m-1">تعداد کل سفارش ها :</p>
                <p class="text-center text-warning fw-bold fs-1 mt-1">{{\App\Models\Order::all()->count()}}</p>
            </div>
        </div>


    </div>
    <div class="m-2"></div>
    <div class="container-fluid   ">
        <div class="row justify-content-evenly text-white">
            <div class="col-md-4 bg-dark rounded-1" style="height: 150px">
                <p class="p-1 m-1">تعداد پرداختی های موفق :</p>
                <p class="text-center text-warning fw-bold fs-1 mt-1">{{\App\Models\Reserve::query()->where('status','ok')->count()}}</p>

            </div>
            <div class="col-md-4 bg-dark rounded-1" style="height: 150px">
                <p class="p-1 m-1"> مجموع پرداختی ها :</p>
               <div class="text-center">
                   <span class="text-center text-warning fw-bold fs-1 mt-1">{{number_format(\App\Models\Reserve::query()->where('status','ok')->sum('total_cost'))}}</span>
                   <span class="text-end">تومان</span>
               </div>

            </div>


        </div>


@endsection

