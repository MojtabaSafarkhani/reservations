@extends("home.layout.main")

@section('content')
    @include('client.profile.layout.aside')
    <div class="container mt-2 p-2">
        <div class="row">
            <div class="col-md-5 ms-5">
                <h4> مشخصات ميزبان :{{auth()->user()->name}}</h4>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="container">
        <div class="row ">
            <div class="col-md-9 mx-auto">
                @include('client.notifications.notification')
            </div>
        </div>
    </div>
    <div class="container   g-3 ">
        <div class="row  align-items-center justify-content-center text-center">

            <div class="col-md-8 m-auto">
                <table class="table table-hover table-striped table-light table-bordered my-5 align-middle   ">
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
                        <td class="d-flex align-items-center justify-content-evenly">

                            <span
                                class="fw-bolder p-1 rounded-3  {{$status['class']}}">{{$status['message']}}</span>

                            @if($host->status==="nok")

                                <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="ويرايش اطلاعات">
                                    <a href="{{route('host.edit')}}" class="fs-5 text-dark"><i
                                            class="bi bi-pen-fill"></i>
                                    </a>
                                </button>


                            @endif

                        </td>


                    </tr>
                    </tbody>
                </table>

                <div class="collapse mb-5" id="collapsePhoto">
                    <div class="card card-body d-block bg-transparent border-0 text-center">
                        <img class="w-auto h-auto image-fluid " style="max-height: 500px;max-width: 500px"
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
    <div class="mb-5"></div>

    @if($host->status=='ok')

        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-6 align-middle m-auto">
                    <a href="{{route('client.hotel.create')}}" data-bs-toggle="tooltip" data-bs-placement="top"
                       title="افزودن بومگردي"
                       class="btn btn-success border-5 btn-sm rounded-circle p-3 m-3 text-center">
                        <i class="bi bi-plus-lg fs-5"></i>
                    </a>
                </div>
            </div>
        </div>

    @endif
@endsection

