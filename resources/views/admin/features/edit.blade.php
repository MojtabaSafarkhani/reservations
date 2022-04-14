@extends("admin.layout.main")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ایجاد ويژگي</h4>
            </div>
        </div>
    </div>

    <div class="container mt-5 g-3  ">
        <div class="row  align-items-center justify-content-center ">

            <div class="col-md-6 m-auto bg-light">
                <form action="{{route('features.update',$feature)}}" method="post" class=""
                      novalidate enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="m-3 ">
                        <label class="form-label" for="title">عنوان</label>
                        <input type="text" class="form-control  @error('title') is-invalid @enderror " id="title"
                               placeholder="عنوان را وارد کنيد"
                               name="title" value="{{$feature->title}}">
                        @error('title') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <label class="form-label" for="image">تصویر</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror " id="image"
                               name="image">
                        @error('image') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>

                    <div class="my-auto text-center">
                        <img src="{{$feature->image_url}}" width="50px">
                    </div>

                    <div class="m-3 ">
                        <input type="submit" class="btn btn-success" value="تاييد">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
