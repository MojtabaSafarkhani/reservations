@extends("home.layout.main")

@section('content')
    @include('client.profile.layout.aside')



    <div class="col-md-8 mx-auto  mt-5 vh-100 ">
        <table
            class="table table-hover table-striped table-light table-bordered align-middle text-center  ">
            <thead>
            <tr>
                <td>نام هتل</td>
                <td>نام مسافر</td>
                <td>تعداد نفرات</td>
                <td>هزينه کل</td>
                <td>تاريخ ورود</td>
                <td>تاريخ خروج</td>
                <td>وضعيت</td>
            </tr>
            </thead>
            <tbody>


            @foreach($orders  as $order)
                <tr>
                    <td>{{$order->hotel->name}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->total_person}}</td>
                    <td>{{$order->total_cost}}</td>
                    <td>{{$order->check_in}}</td>
                    <td>{{$order->check_out}}</td>
                    <td>{{$order->status}}</td>

                </tr>
            @endforeach

            </tbody>


        </table>
    </div>

    </div>
    </div>
    </div>


@endsection


