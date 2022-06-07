@extends("home.layout.main")
@section('link')
    <link type="text/css" rel="stylesheet"
          href="https://unpkg.com/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css"/>
    <script type="text/javascript"
            src="https://unpkg.com/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/persian-date@1.1.0/dist/persian-date.min.js"></script>


@endsection
@section('content')

    <div class="container-fluid mt-2 p-2">
        <div class="row">
            <div class="col-md-5 ms-2 ms-5">
                <h4> {{$hotel->name}}</h4>
                @can('HotelIsPublishedForLike',$hotel)
                    <button class="btn btn-white" onclick="like({{$hotel->id}})"><i id="like-{{$hotel->id}}"
                                                                                    class="bi bi-suit-heart-fill fs-1 @if($hotel->is_liked) like @endif"></i>
                    </button>
                @endcan
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="container">
        @if($hotel->galleries()->count()>0)

            @php
                $images=$hotel->galleries;

            $active=random_int(0,($hotel->galleries()->count()-1));
            @endphp
            <div class="row">
                <div class="col-md-7  mx-auto ">
                    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-indicators ">
                            @foreach($images as $key=>$image)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="{{$key}}"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">

                            @foreach($images as $key=>$image)

                                <div class="carousel-item
                                              @if($key==$active)
                                    active
                                @endif
                                    ">
                                    <img src="{{$image->image_url}}"
                                         class="d-block w-100 rounded-3"
                                         alt="...">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif
        <div class="my-3"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <h5>توضيحات</h5>
                <p>{{$hotel->description}}</p>
            </div>
        </div>
        <div class="my-3"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h5>آدرس</h5>
                        <p>{{$hotel->address}}</p>
                    </div>
                    <div class="col-md-2 offset-md-1">
                        <h5>تلفن</h5>
                        <p>{{$hotel->phone}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h5>دسته بندي</h5>
                        <p>{{$hotel->category->title}}</p>
                    </div>
                    <div class="col-md-2 offset-md-1 ">
                        <h5>شهر</h5>
                        <p>{{$hotel->city->name}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h5>هزينه براي يک شب</h5>
                        <p>{{$hotel->cost}} تومان</p>
                    </div>
                    <div class="col-md-2 offset-md-1 ">
                        <h5> ميزبان</h5>
                        <p>{{$hotel->host->user->name}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h5 class="mb-2"> ظرفيت</h5>
                        <div class="container">
                            <div class="row  row-cols-md-2">

                                @if(collect($hotel->capacity)->contains(0))

                                    <p> هيچکدام</p>

                                @else
                                    @foreach($hotel->capacity as $capacity)
                                        <div class="cols-12">
                                            <p class="ms-1 ">اتاق {{$capacity}} نفره </p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4"></div>

        @if($hotel->features()->count()>0)
            <div class="row">
                <div class="col-md-7 mx-auto ">

                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h5 class="mb-2">ويژگي</h5>

                            <div class="container">
                                <div class="row row-cols-md-2 ">
                                    @foreach($hotel->features as $feature)
                                        <div class="cols-12">
                                            <p class=" align-middle ">{{$feature->title}}
                                                <img src="{{str_replace('public','/storage',$feature->image)}}" alt=""
                                                     width="25px">
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        @endif
        <div class="my-4"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <div class="row align-items-center">
                    <div class="bg-white rounded-2">
                        <form action="">
                            <div class="row g-3 my-2">
                                <div class="col">
                                    <label for="check_in">روز ورود</label>
                                    <input type="text" id="check_in" name="check_in"
                                           class="form-control example1">
                                </div>
                                <div class="col">
                                    <label for="check_out">روز خروج</label>
                                    <input type="text" class="form-control example1" name="check_out" id="check_out">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="total_person" class="form-label">تعداد نفرات</label>
                                <input type="number" min="0" max="7" class="form-control" id="total_person"
                                       name="total_person">
                            </div>
                            <div class="text-center my-2">
                                <input type="submit" value="ارسال درخواست رزرو" class="btn btn-dark mx-auto">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{--      <div class="container">
                  <div class="row">
                      <div class="col-md-8">
                          p
                      </div>
                  </div>
              </div>
          </div>--}}

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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

        @section('script')

            <script>
                function like(HotelId) {
                    console.log(HotelId);
                    $.ajax({
                        type: 'post',
                        url: '/likes/' + HotelId,
                        data: {
                            _token: "{{csrf_token()}}",
                        },
                        success: function (data) {
                            var icon = $('#like-' + HotelId);
                            console.log(icon);
                            if (icon.hasClass('like')) {
                                icon.removeClass('like');
                            } else {
                                icon.addClass('like');
                            }
                            /* $('#like_count').text(data.liked_count);*/
                        }


                    })

                }
            </script>
            <script src="node_modules/persian-date/dist/persian-date.js" type="text/javascript"></script>
            <script type="text/javascript">
                new persianDate().format(); // "۱۳۹۶-۰۱-۱۱ ۲۳:۳۳:۲۷ ب ظ" (when i run in my console)
            </script>
            <script type="text/javascript">
                $(".example1").persianDatepicker({
                    observer: true,
                    initialValue: true,
                    initialValueType: 'persian',
                    format: 'YYYY/MM/DD'

                })
            </script>

@endsection

