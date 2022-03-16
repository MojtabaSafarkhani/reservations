@extends("home.layout.main")

@section('content')

    <div class="container mt-2 p-2">
        <div class="row">
            <div class="col-md-5">
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
    <div class="container   g-3 ">
        <div class="row  align-items-center justify-content-center text-center">

            <div class="col-md-12 m-auto">
                <table class="table table-hover table-striped table-light table-bordered my-5   ">
                    <thead>
                    <tr>

                        <td>تلفن</td>
                        <td>کدملي</td>
                        <td>نشاني</td>
                        <td>عکس کارت ملي</td>
                        <td>وضعيت</td>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>

                        <td>{{$host->phone}}</td>
                        <td>{{$host->national_code}}</td>
                        <td><a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample"
                               role="button" aria-expanded="false" aria-controls="collapseExample">
                                نمايش آدرس
                            </a></td>
                        <td><a class="btn btn-success btn-sm" data-bs-toggle="collapse" href="#collapsePhoto"
                               role="button" aria-expanded="false" aria-controls="collapseExample">
                                نمايش عکس
                            </a></td>
                        <td>

                            <span
                                class="fw-bolder p-1 rounded-3 d-inline-block  {{$status['class']}}">{{$status['message']}}</span>

                        </td>


                    </tr>
                    </tbody>
                </table>

                <div class="collapse mb-5" id="collapsePhoto">
                    <div class="card card-body d-block bg-transparent border-0 text-center">
                        <img class="w-auto h-auto"
                             src="{{$host->image_url}}">
                    </div>
                </div>
                <div class="collapse mb-5" id="collapseExample">
                    <div class="card card-body">
                        {{$host->address}}
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection

