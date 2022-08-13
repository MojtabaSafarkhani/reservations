@extends('admin.layout.main')


@section('content')

    <div class="container-fluid   ">
        <div class="row justify-content-evenly text-white">
            <div class="col-md-3 bg-dark" style="height: 150px">
                <p class="p-1 m-1">تعداد کل کاربران :</p>
                <p class="text-center text-warning fw-bold fs-1 mt-1">{{\App\Models\User::all()->count()}}</p>
            </div>
            <div class="col-md-3 bg-dark" style="height: 150px">
                <p class="p-1 m-1">تعداد کل اقامتگاه ها :</p>
                <p class="text-center text-warning fw-bold fs-1 mt-1">{{\App\Models\Hotel::all()->count()}}</p>
            </div>
            <div class="col-md-3 bg-dark" style="height: 150px">
                <p class="p-1 m-1">تعداد کل سفارش ها :</p>
                <p class="text-center text-warning fw-bold fs-1 mt-1">{{\App\Models\Order::all()->count()}}</p>
            </div>
        </div>
    </div>


@endsection

