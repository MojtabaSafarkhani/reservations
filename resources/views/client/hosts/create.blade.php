@extends('home.layout.main')


@section('content')
    @include('client.profile.layout.aside')
    <div class="container-fluid">
        <div class="mb-4"><h3 >ثبت مشخصات</h3></div>
        <div class="row align-items-center justify-content-center m-auto">
            <div class="col-md-6 bg-white rounded-2 p-3 m-3  ">
                <form action="{{route('host.register.post')}}" method="post" class="" novalidate enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-2">
                        <label for="phone" class="form-label">تلفن</label>
                        <input type="number" name="phone" placeholder="09121212021"
                               class="form-control @error('phone') is-invalid @enderror" id="phone"
                               value="{{old('phone')}}">
                        @error('phone') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="national_code" class="form-label">کدملي</label>
                        <input type="number" dir="rtl" name="national_code" placeholder="0067809905"
                               value="{{old('national_code')}}"
                               class="form-control @error('national_code') is-invalid @enderror" id="national_code">
                        @error('national_code') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="national_card_photo" class="form-label">عکس کارت ملی</label>
                        <input type="file" dir="rtl" name="national_card_photo"
                               class="form-control @error('national_card_photo') is-invalid @enderror"
                               id="national_card_photo">
                        @error('national_card_photo') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label">نشاني محل سکونت</label>
                        <textarea  name="address" class="form-control @error('address') is-invalid @enderror"
                                  id="address">{{old('address')}}</textarea>
                        @error('address') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark my-3">تاييد</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection
