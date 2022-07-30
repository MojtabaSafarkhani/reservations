@extends('home.layout.main')


@section('content')

    <div class="container-fluid">

        <div class="row vh-100 align-items-center justify-content-center m-auto">
            <div class="col-md-4 bg-white rounded-2 p-2 m-2  ">
                <form action="{{route('host.update',$host)}}" method="post" class="" novalidate
                      enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="mb-2">
                        <label for="phone" class="form-label">تلفن</label>
                        <input type="number" name="phone" placeholder="09121212021"
                               class="form-control @error('phone') is-invalid @enderror" id="phone"
                               value="{{$host->phone}}">
                        @error('phone') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="national_code" class="form-label">کدملي</label>
                        <input type="number" dir="rtl" name="national_code" placeholder="0067809905"
                               value="{{$host->national_code}}"
                               class="form-control @error('national_code') is-invalid @enderror" id="national_code">
                        @error('national_code') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="national_card_photo" class="form-label">عکس کارت ملی</label>
                        <input type="file" dir="rtl" name="national_card_photo"
                               class="form-control @error('national_card_photo') is-invalid @enderror"
                               id="national_card_photo">
                        @error('national_card_photo') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm my-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                            نمايش عکس
                        </button>


                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label">نشاني محل سکونت</label>
                        <textarea name="address" class="form-control @error('address') is-invalid @enderror"
                                  id="address"> {{$host->address}}</textarea>
                        @error('address') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark my-3">تاييد</button>
                    </div>
                </form>
            </div>
            <div class="modal fade " data-bs-backdrop="static" id="exampleModal" tabindex="-1"
                 aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">عکس ميزبان : {{$host->user->name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center " style="max-height: 500px;max-width: 500px" >
                            <img  class="w-auto h-auto image-fluid img-thumbnail"  src="{{$host->image_url}}">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
