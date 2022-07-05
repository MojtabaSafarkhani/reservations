@extends("home.layout.main")

@section('content')
    @include('client.profile.layout.aside')



    <div class="col-md-8 mx-auto  mt-5 vh-100 ">
        <table
            class="table table-hover table-striped table-light table-bordered align-middle text-center  ">
            <thead>
            <tr>
                <td>نام اقامتگاه</td>
                <td>نام مهمان</td>
                <td>تعداد نفرات</td>
                <td> هزينه کل (تومان)</td>
                <td>تاريخ ورود</td>
                <td>تاريخ خروج</td>
                <td>وضعيت</td>
            </tr>
            </thead>
            <tbody>


            @foreach($orders  as $order)
                <tr style="height: 70px">
                    <td>{{$order->hotel->name}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->total_person}}</td>
                    <td>{{$order->total_cost}}</td>
                    <td>{{$order->check_in_to_persian}}</td>
                    <td>{{$order->check_out_to_persian}}</td>

                    <td>
                        <span class="btn btn-{{$order->status_to_persian['class']}} btn-sm "
                              @can('JustOneTimeToChangeStatusOfOrder',$order)
                              data-bs-toggle="tooltip"
                              data-bs-placement="top" title="تغيير وضعيت"

                                @endcan
                        >
                            <button type="button" class="btn btn-sm {{$order->status_to_persian['class']}}  fw-bold "
                                    data-bs-toggle="modal"
                                    data-bs-target="#order-{{$order->id}}"
                            >
                                {{$order->status_to_persian['message']}}
                            </button>
                        </span>
                    </td>

                </tr>


                @can('JustOneTimeToChangeStatusOfOrder',$order)
                    <div class="modal fade" id="order-{{$order->id}}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">تغيير وضعيت سفارش</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>شما در حال تغيير دادن وضعيت مهمان به اسم
                                        {{$order->user->name}}
                                        هستيد اگر اين مهمان را تاييد کنيد لينک پرداخت براي مهمان ايميل ميشود
                                        !
                                        فقط يک بار مي توانيد وضعيت را تغيير دهيد!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{route('host.orders.reject',$order)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">رد سفارش</button>
                                    </form>
                                    <form action="{{route('host.store.transaction',$order)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">تاييد
                                            سفارش
                                        </button>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>

                @endcan
            @endforeach

            </tbody>


        </table>
        <div class="container">
            <div class="row align-items-center justify-content-center text-center ">
                <div class="col-md-10   ">

                    {{ $orders->links() }}

                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>


@endsection


