@extends("admin.layout.main")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ایجاد اسلايدر</h4>
            </div>
        </div>
    </div>

    <div class="container mt-5 g-3  ">
        <div class="row  align-items-center justify-content-center ">

            <div class="col-md-6 m-auto bg-light">
                <form action="{{route('sliders.store')}}" method="post" class=""
                      novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="m-3 ">
                        <label class="form-label" for="image">تصویر</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror " id="image"
                               name="image" >
                        @error('image') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <label class="form-label" for="link">لينک</label>
                        <select class="form-select  @error('link') is-invalid @enderror " id="link"
                                  name="link">
                            @foreach($links as $link)
                                <option value="{{$link->slug}}">{{$link->name}}</option>
                            @endforeach
                        </select>
                        @error('link') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <input type="submit" class="btn btn-success" value="تاييد">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
