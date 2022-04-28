@extends("home.layout.main")
@section('content')
    <div class="col-12">
        <div class="container mt-4 p-2">
            <div class="row justify-content-end">
                <div class="col-md-5 ">
                    <h4>افزودن ویژگی به
                        {{$hotel->name}}
                    </h4>

                </div>
                <div class="col-md-4 ">
                    <a href="{{route('client.hotel.index')}}" class="btn btn-warning fw-bold">بازشگت به ليست</a>
                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 mx-auto bg-white p-3 ">
                    <form class="pr-20" action="{{route('features.hotel.store',$hotel)}}" method="post">
                        @csrf
                        <div class="row">
                            @foreach($features as $feature)
                                <div class="form-group col-md-4 p-1 my-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$feature->id}}"
                                               id="features.{{$feature->id}}"
                                               name="features[]"
                                               @if($hotel->hasFeatures($feature))
                                               checked
                                            @endif
                                        >
                                        <label class="form-check-label" for="features.{{$feature->id}}">
                                            {{$feature->title}}
                                            <img src="{{str_replace('public','/storage',$feature->image)}}"

                                                 width="25px" alt="">
                                        </label>


                                    </div>

                                </div>

                            @endforeach
                        </div>


                        <div class="row">
                            <div class="col-md-6 mx-auto text-center">
                                <button type="submit" class="btn btn-primary">افزودن</button>
                            </div>
                        </div>


                    </form>
                </div>


            </div>
        </div>
    </div>

    </div>


@endsection

