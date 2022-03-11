@extends("admin.layout.main")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ويرايش اسلايدر</h4>
            </div>
        </div>
    </div>

    <div class="container mt-5 g-3  ">
        <div class="row  align-items-center justify-content-center ">

            <div class="col-md-6 m-auto bg-light">
                <form action="{{route('sliders.update',$slider)}}" method="post" class=""
                      novalidate enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="m-3 ">
                        <label class="form-label" for="image">تصویر</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror " id="image"
                               name="image" value="{{old('image')}}">
                        <img src="{{$slider->image_url}}" width="160px"
                             class="my-5 rounded image-thumbnail">
                        @error('image') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <label class="form-label" for="link">لينک</label>
                        <input type="text" class="form-control  @error('link') is-invalid @enderror " id="link"
                               placeholder="لينک را وارد کنيد(به انگليسي)"
                               name="link" value="{{$slider->link}}">
                        @error('link') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <input type="submit" class="btn btn-success" value="ويرايش">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
