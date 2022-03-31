@extends("home.layout.main")

@section('content')

    <div class="container-fluid mt-2 p-2">
        <div class="row">
            <div class="col-md-5 ms-2 ms-5">
                <h4> مشخصات ميزبان :{{auth()->user()->name}}</h4>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 mx-auto">
                @include('client.notifications.notification')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  align-items-center justify-content-center ">

            <div class="col-md-8 m-auto">
                <form action="{{route('hotels.galleries.store',$hotel)}}" method="post" class="row g-3 align-middle"
                      novalidate
                      enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="image" class="form-label">افزودن عکس </label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                               id="image">
                        @error('image') <span class="invalid-feedback mt-1">{{$message}}</span>@enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark my-3">تاييد</button>
                    </div>
                </form>


            </div>
            <div class="col-md-8 my-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($images as $image)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{$image->image_url}}" class="card-img-top" alt="...">
                                <div class="card-footer text-center">
                                    <form
                                        action="{{route('hotels.galleries.destroy',['hotel'=>$hotel,'gallery'=>$image])}}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" name="delete" class="btn btn-danger btn-sm" value="حذف">
                                    </form>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


@endsection

