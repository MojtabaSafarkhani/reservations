@extends('admin.layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ليست پرداخت ها</h4>
            </div>
        </div>
    </div>
    @include('admin.notification')
    <div class="container mt-5 g-3 ">
        <div class="row  align-items-center justify-content-center text-center">

            <div class="col-md-10 m-auto">
                <div class="table-responsive">
                    <table class="table table-hover align-middle table-striped table-light table-bordered">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>نام مهمان</td>
                            <td>نام اقامتگاه</td>
                            <td>شماره تراکنش</td>
                            <td> جزییات</td>
                            <td>وضعيت</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reserves as $key=>$reserve)
                            <tr style="height: 50px">
                                <td>{{$key+1}}</td>
                                <td>{{$reserve->order->user->name}}</td>
                                <td>{{$reserve->order->hotel->name}}</td>
                                <td>{{$reserve->transaction_id}}</td>
                                <td>
                                     <span class=" btn-primary btn-sm "
                                           data-bs-toggle="tooltip"
                                           data-bs-placement="top" title="نمايش جزييات"
                                     >
                            <button type="button" class="btn btn-sm  fw-bold "
                                    data-bs-toggle="modal"
                                    data-bs-target="#reserve-{{$reserve->u_string}}"
                            >
                                جزييات
                            </button>
                        </span>

                                </td>
                                <td>
                                    <span
                                        class="{{$reserve->status_translate['color']}} p-1 fw-bold rounded-3 ">{{$reserve->status_translate['message']}}
                                </span>
                                </td>
                            </tr>

                            <div class="modal fade" id="reserve-{{$reserve->u_string}}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">نمايش جزييات</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="fw-bold">نام مهمان:</p>
                                            <p>{{$reserve->order->user->name}}</p>
                                            <p class="fw-bold">نام اقامتگاه:</p>
                                            <p>{{$reserve->order->hotel->name}}</p>
                                            <p class="fw-bold">روز ورود:</p>
                                            <p>{{$reserve->order->check_in_to_persian}}</p>
                                            <p class="fw-bold">روز خروج:</p>
                                            <p>{{$reserve->order->check_out_to_persian}}</p>
                                            <p class="fw-bold">کل هزينه:</p>
                                            <p>{{number_format($reserve->total_cost)}}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center text-center ">
            <div class="col-md-10   ">

                {{ $reserves->links() }}

            </div>
        </div>
    </div>
@endsection


@section('script')

    <script type="text/javascript">

        function accept(hostId) {


            $.ajax({
                type: "post",
                url: "{{route('hosts.accept')}}",
                data: {
                    _token: "{{csrf_token()}}",
                    hostId: hostId,
                },
                success: function (data) {
                    console.log(data.host)
                    $("#status-text-" + data.host['id']).text(data.host['status_translate'])

                }
            });


        }

        function reject(hostId) {


            $.ajax({
                type: "post",
                url: "{{route('hosts.reject')}}",
                data: {
                    _token: "{{csrf_token()}}",
                    hostId: hostId,
                },
                success: function (data) {

                    $("#status-text-" + data.host['id']).text(data.host['status_translate'])

                }
            });


        }

    </script>

@endsection
