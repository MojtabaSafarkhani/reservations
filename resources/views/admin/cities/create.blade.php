@extends("admin.layout.main")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ایجاد شهر</h4>
            </div>
        </div>
    </div>

    <div class="container mt-5 g-3  ">
        <div class="row  align-items-center justify-content-center ">

            <div class="col-md-6 m-auto bg-light">
                <form action="{{route('cities.store')}}" method="post" class="was_validated needs-validations"
                      novalidate>
                    @csrf
                    <div class="m-3 ">
                        <label class="form-label" for="name">نام</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" autocomplete="off"
                               placeholder="نام شهر را وارد کنيد"
                               name="name">
                        @error('name') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <label class="form-label" for="slug">نامک</label>
                        <input type="text" class="form-control  @error('slug') is-invalid @enderror " id="slug"
                               placeholder="نامک شهر را وارد کنيد(به انگليسي)"
                               name="slug">
                        @error('slug') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <label class="form-label" for="city_id">استان</label>
                        <select class="form-select  @error('city_id') is-invalid @enderror " id="city_id"
                                name="city_id">
                            <option value="">ندارد</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                        @error('city_id') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="m-3 ">
                        <input type="submit" class="btn btn-success" value="تاييد">
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
