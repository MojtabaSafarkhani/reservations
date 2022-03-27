@extends('home.layout.main')


@section('content')

    <div class="container-fluid">

        <div class="row vh-100 align-items-center justify-content-center m-auto">
            <div class="col-md-8 bg-white rounded-2 p-3 m-3  ">
                <form action="{{route('client.hotel.store')}}" method="post" class="row g-3 align-middle" novalidate
                      enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 mb-2">
                        <label for="name" class="form-label">نام</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               id="name" value="{{old('name')}}" placeholder="نام اقامتگاه را وارد کنيد">
                        @error('name') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="phone" class="form-label">تلفن</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone"
                               id="phone" name="phone" value="{{old('phone')}}" placeholder="09121212021">
                        @error('phone') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="category_id" class="form-label">دسته بندي</label>
                        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id"
                                id="category_id"
                                aria-label="Default select example">
                            <option disabled>دسته بندي اقامتگاه را انتخاب کنيد</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @if(old('category_id')==$category->id) selected @endif
                                >{{$category->title}}</option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="city_id" class="form-label">شهر</label>
                        <select class="form-select @error('city_id') is-invalid @enderror" name="city_id" id="city_id"
                                aria-label="Default select example">
                            <option disabled>شهر را انتخاب کنيد</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}"
                                        @if(old('city_id')==$city->id) selected @endif
                                >{{$city->name}}</option>
                            @endforeach
                        </select>
                        @error('city_id') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="cost" class="form-label"> مبلغ براي يک شب (تومان)</label>
                        <input type="text" name="cost" class="form-control @error('cost') is-invalid @enderror"
                               id="cost" value="{{old('cost')}}" placeholder="هزينه اقامتگاه را وارد کنيد">
                        @error('cost') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label">توضيحات</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                  id="description"
                                  placeholder="توضيحات مربوط به اقامتگاه">{{old('description')}}</textarea>
                        @error('description') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label">نشاني </label>
                        <textarea name="address" class="form-control @error('address') is-invalid @enderror"
                                  id="address" placeholder="نشاني را وارد کنيد!">{{old('address')}}</textarea>
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
