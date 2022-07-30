@extends('home.layout.main')


@section('content')
    @include('client.profile.layout.aside')
    <div class="container-fluid">

        <div class="row  align-items-center justify-content-center m-auto">
            <div class="col-md-8 bg-white rounded-2 p-3 m-3  ">
                <form action="{{route('client.hotels.update',$hotel)}}" method="post" class="row g-3 align-middle"
                      novalidate
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6 mb-2">
                        <label for="name" class="form-label">نام</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               id="name" value="{{$hotel->name}}" placeholder="نام اقامتگاه را وارد کنيد">
                        @error('name') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="phone" class="form-label">تلفن</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone"
                               id="phone" name="phone" value="{{$hotel->phone}}" placeholder="09121212021">
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
                                        @if($hotel->category_id==$category->id) selected @endif
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
                                        @if($hotel->city_id==$city->id) selected @endif
                                >{{$city->name}}</option>
                            @endforeach
                        </select>
                        @error('city_id') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="cost" class="form-label"> مبلغ براي يک شب (تومان)</label>
                        <input type="text" name="cost" class="form-control @error('cost') is-invalid @enderror"
                               id="cost" value="{{$hotel->cost}}" placeholder="هزينه اقامتگاه را وارد کنيد">
                        @error('cost') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="col-md-12 control-label mb-2" for="checkboxes">ظرفيت</label>
                        <br>
                        <div class="form-check form-check-inline mb-1 col-6 col-md-4 ">
                            <input class="form-check-input " type="checkbox" id="inlineCheckbox1" value="1"
                                   name="capacity[]" @if($hotel->isCapacityExists(1)) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox1">اتاق يک نفره</label>
                        </div>
                        <div class="form-check form-check-inline mb-1 col-6 col-md-4">
                            <input class="form-check-input " type="checkbox" id="inlineCheckbox2" value="2"
                                   name="capacity[]" @if($hotel->isCapacityExists(2)) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox2">اتاق دو نفره</label>
                        </div>
                        <div class="form-check form-check-inline mb-1 col-6 col-md-4">
                            <input class="form-check-input " type="checkbox" id="inlineCheckbox3" value="3"
                                   name="capacity[]" @if($hotel->isCapacityExists(3)) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox3">اتاق سه نفره</label>
                        </div>
                        <div class="form-check form-check-inline mb-1 col-6 col-md-4">
                            <input class="form-check-input " type="checkbox" id="inlineCheckbox4" value="4"
                                   name="capacity[]" @if($hotel->isCapacityExists(4)) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox4">اتاق چهار نفره</label>
                        </div>
                        <div class="form-check form-check-inline mb-1 col-6 col-md-4">
                            <input class="form-check-input " type="checkbox" id="inlineCheckbox5" value="5"
                                   name="capacity[]" @if($hotel->isCapacityExists(5)) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox5">اتاق پنج نفره</label>
                        </div>
                        <div class="form-check form-check-inline mb-1 col-6 col-md-4">
                            <input class="form-check-input " type="checkbox" id="inlineCheckbox6" value="6"
                                   name="capacity[]" @if($hotel->isCapacityExists(6)) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox6">اتاق شش نفره</label>
                        </div>
                        <div class="form-check form-check-inline mb-1 col-6 col-md-4">
                            <input class="form-check-input " type="checkbox" id="inlineCheckbox7" value="7"
                                   name="capacity[]" @if($hotel->isCapacityExists(7)) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox7">اتاق هفت نفره</label>
                        </div>

                        <div class="form-check form-check-inline mb-1 col-6 col-md-4">
                            <input class="form-check-input "
                                   type="checkbox" id="inlineCheckbox0" value="0" name="capacity[]" @if($hotel->isCapacityExists(0)) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox0">هيچ کدام</label>

                        </div>
                        @error('capacity')<p class="text-danger my-1">{{$message}}</p> @enderror
                        @error('capacity.*')<p class="text-danger my-1">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-2">
                        <label for="license" class="form-label">مجوز بومگردي</label>
                        <input type="file" dir="rtl" name="license"
                               class="form-control @error('license') is-invalid @enderror"
                               id="license">
                        @error('license') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label">توضيحات</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                  id="description"
                                  placeholder="توضيحات مربوط به اقامتگاه">{{$hotel->description}}</textarea>
                        @error('description') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label">نشاني </label>
                        <textarea name="address" class="form-control @error('address') is-invalid @enderror"
                                  id="address" placeholder="نشاني را وارد کنيد!">{{$hotel->address}}</textarea>
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
