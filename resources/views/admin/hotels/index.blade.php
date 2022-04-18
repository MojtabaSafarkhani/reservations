@extends('admin.layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ليست هتل ها</h4>
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
                            <td>نام</td>
                            <td>نمایش</td>
                            <td>وضعيت</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hotels as $key=>$hotel)
                            <tr style="height: 50px">
                                <td>{{$key+1}}</td>
                                <td>{{$hotel->name}}</td>
                                <td><a href="" class="btn btn-success">نمايش</a></td>
                                <td><p id="status-text-{{$hotel->id}}">{{$hotel->status_translate}}</p>
                                    <button type="button" id="accept-hotels" onClick="accept_hotels({{$hotel->id}});"
                                            class="btn btn-success btn-sm d-inline">
                                        <i class="bi bi-check-lg fs-5"></i></button>
                                    <button type="button" id="reject-hotels" onClick="reject_hotels({{$hotel->id}});"
                                            class="btn btn-danger btn-sm d-inline"><i
                                            class="bi bi-x fs-5"></i></button>


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


@section('script')

    <script type="text/javascript">

        function accept_hotels(hotelId) {


            $.ajax({
                type: "post",
                url: "{{route('hotels.accept')}}",
                data: {
                    _token: "{{csrf_token()}}",
                    hotelId: hotelId,
                },
                success: function (data) {
                    console.log(data.hotel)
                    $("#status-text-" + data.hotel['id']).text(data.hotel['status_translate'])

                }
            });


        }

        function reject_hotels(hotelId) {


            $.ajax({
                type: "post",
                url: "{{route('hotels.reject')}}",
                data: {
                    _token: "{{csrf_token()}}",
                    hotelId: hotelId,
                },
                success: function (data) {

                    $("#status-text-" + data.hotel['id']).text(data.hotel['status_translate'])

                }
            });


        }

    </script>

@endsection
