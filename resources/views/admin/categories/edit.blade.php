@extends("admin.layout.main")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ویرایش دسته بندی {{$category->title}}</h4>
            </div>
        </div>
    </div>

    <div class="container mt-5 g-3  ">
        <div class="row  align-items-center justify-content-center ">

            <div class="col-md-6 m-auto bg-light">
                <form action="{{route('categories.update',$category)}}" method="post"
                      class="was_validated needs-validations" novalidate>
                    @csrf
                    @method("PATCH")
                    <div class="m-3 ">
                        <label class="form-label" for="title">عنوان</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror " id="title"
                               placeholder="عنوان دسته بندي را وارد کنيد" value="{{$category->title}}"
                               name="title">
                        @error('title') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <label class="form-label" for="slug">نامک</label>
                        <input type="text" class="form-control  @error('slug') is-invalid @enderror " id="slug"
                               placeholder="نامک دسته بندي را وارد کنيد(به انگليسي)"
                               name="slug" value="{{$category->slug}}">
                        @error('slug') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <input type="submit" class="btn btn-success" value="ویرایش">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
