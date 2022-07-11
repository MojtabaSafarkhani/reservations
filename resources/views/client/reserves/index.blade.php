@extends("home.layout.main")

@section('content')
    @include('client.profile.layout.aside')



    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ليست پرداخت ها</h4>
            </div>
        </div>
    </div>
    <div class="container mt-5 g-3 ">
        <div class="row  align-items-center justify-content-center text-center">

            <div class="col-md-10 m-auto">
                <div class="table-responsive">
                    <table class="table table-hover align-middle table-striped table-light table-bordered">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>نام اقامتگاه</td>
                            <td>شماره تراکنش</td>
                            <td>هزینه کل(تومان)</td>
                            <td>وضعيت</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reserves as $key=>$reserve)
                            <tr style="height: 50px">
                                <td>{{$key+1}}</td>
                                <td>{{$reserve->order->hotel->name}}</td>
                                <td>{{$reserve->transaction_id}}</td>
                                <td>{{$reserve->total_cost}}</td>
                                <td>
                                    <span
                                        class="{{$reserve->status_translate['color']}} p-1 fw-bold rounded-3 ">{{$reserve->status_translate['message']}}
                                </span>
                                </td>
                            </tr>
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



