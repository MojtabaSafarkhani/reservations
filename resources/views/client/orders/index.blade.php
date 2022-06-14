@extends("home.layout.main")

@section('content')
    @include('client.profile.layout.aside')



    <div class="col-md-8 mx-auto  mt-5 vh-100 ">
        <table
            class="table table-hover table-striped table-light table-bordered align-middle text-center  ">
            <thead>
            <tr >
                <td>نام اقامتگاه</td>
                <td>نام مهمان</td>
                <td>تعداد نفرات</td>
                <td>هزينه کل (تومان)</td>
                <td>تاريخ ورود</td>
                <td>تاريخ خروج</td>
                <td>وضعيت</td>
            </tr>
            </thead>
            <tbody>


            @foreach($orders  as $order)
                <tr  style="height: 70px">
                    <td>{{$order->hotel->name}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->total_person}}</td>
                    <td>{{$order->total_cost}}</td>
                    <td>{{$order->check_in_to_persian}}</td>
                    <td>{{$order->check_out_to_persian}}</td>
                    <td>
                      <span
                            class="{{$order->status_to_persian['class']}} p-1 fw-bold rounded-3">
                            {{$order->status_to_persian['message']}}</span>
                    </td>
                </tr>
            @endforeach

            </tbody>


        </table>
    </div>

    </div>
    </div>
    </div>


@endsection

