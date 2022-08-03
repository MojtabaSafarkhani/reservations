@extends("home.layout.main")

@section('content')
    @include('client.profile.layout.aside')
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
            <div class="col-md-12 mx-auto">
                @include('client.notifications.notification')
            </div>
        </div>
    </div>
    <div class="container mt-2 g-3 ">
        <div class="row  align-items-center justify-content-center text-center">

            <div class="col-md-9 m-auto">
                <table class="table table-hover table-striped table-light table-bordered align-middle ">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>نام</td>
                        <td>مجوز بومگردي</td>
                        <td>افزودن ويژگي</td>
                        <td>گالري</td>
                        <td>نمايش</td>
                        <td>وضعيت</td>
                        <td>ويرايش</td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($hotels as $key=>$hotel)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$hotel->name}}</td>
                            <td><a href="{{route('license.download',['path'=>$hotel->license])}}"
                                   class="btn btn-secondary">دانلود</a></td>
                            <td><a href="{{route('features.hotel.create',$hotel)}}" class="btn btn-dark">ويژگي</a></td>
                            <td>
                                <a href="{{route('hotels.galleries.index',$hotel)}}"
                                   class="btn btn-primary">گالري</a>
                            </td>
                            <td>
                                <a href="{{route('hotels.show',$hotel)}}"
                                   class="btn btn-success">نمايش</a>
                            </td>
                            <td class=" ">
                                @php
                                    $translate=$hotel->getIsPulishedTranslateAttribute();
                                @endphp

                                <span
                                    class="{{$translate['color']}} p-1 fw-bold rounded-3 ">{{$translate['message']}}
                                </span>
                            </td>
                            <td>

                                <button type="button" class="btn btn-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#hotel-{{$hotel->id}}">

                                        ويرايش يا حذف
                                    </button>

                                    <div class="modal fade" id="hotel-{{$hotel->id}}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">حذف يا ويرايش اقامتگاه</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>شما ميتوانيد اقامتگاه {{$hotel->name}}
                                                        را
                                                        ویرایش یا حذف کنید!
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{route('client.hotel.destroy',$hotel)}}"
                                                          method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">حذف</button>
                                                    </form>
                                                    <form action="{{route('client.hotels.edit',$hotel)}}" method="get">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success"
                                                                data-bs-dismiss="modal">ویرایش
                                                        </button>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    {{$hotels->links()}}
@endsection

