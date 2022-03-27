@extends("home.layout.main")

@section('content')

    <div class="container-fluid mt-2 p-2">
        <div class="row">
            <div class="col-md-5 ms-2 ms-5">
                <h4> مشخصات ميزبان :{{auth()->user()->name}}</h4>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 mx-auto">
                @include('client.notifications.notification')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4 col-md-10 m-auto ">
            @foreach($hotels as $hotel)
                <div class="col">
                    <div class="card h-100">
                        {{--<img src="..." class="card-img-top" alt="...">--}}
                        <div class="card-body">
                            <h5 class="card-title">{{$hotel->name}}</h5>
                            <p class="card-text">{{$hotel->description}}</p>
                            <hr>
                            <p class="card-text">{{$hotel->address}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted d-flex">
                                <a class="btn btn-success btn-sm me-auto ">نمايش</a>
                                <a class="btn btn-success btn-sm me-auto ">نمايش</a>
                                <a class="btn btn-success btn-sm ">نمايش</a>

                            </small>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>



@endsection

