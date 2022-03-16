@extends('admin.layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ليست ميزبانان</h4>
            </div>
        </div>
    </div>
    @include('admin.notification')
    <div class="container mt-5 g-3 ">
        <div class="row  align-items-center justify-content-center text-center">

            <div class="col-md-10 m-auto">
                <table class="table table-hover table-striped table-light table-bordered">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>نام</td>
                        <td>کدملی</td>
                        <td>شماره تماس</td>
                        <td>آدرس</td>
                        <td>عکس کد ملی</td>
                        <td>وضعيت</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hosts as $key=>$host)
                        <tr style="height: 50px">
                            <td>{{$key+1}}</td>
                            <td>{{$host->user->name}}</td>
                            <td>{{$host->national_code}}</td>
                            <td>{{$host->phone}}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#address-{{$key}}">
                                    نمايش ادرس
                                </button>
                                <div class="modal fade" id="address-{{$key}}" tabindex="-1" data-bs-backdrop="static">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="address-{{$key}}">آدرس
                                                    ميزبان: {{$host->user->name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{$host->address}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#photo-{{$key}}">
                                    نمايش عکس
                                </button>
                                <div class="modal fade" id="photo-{{$key}}" tabindex="-1" data-bs-backdrop="static">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="photo-{{$key}}">عکس
                                                    ميزبان: {{$host->user->name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img class="" src="{{$host->image_url}}">
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{route('hosts.photo',['path'=>$host->image_url])}}"
                                                   class="btn btn-secondary">دانلود
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection


