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
    <div class="container mt-5 g-3 ">
        <div class="row  align-items-center justify-content-center text-center">

            <div class="col-md-8 m-auto">
                <table class="table table-hover table-striped table-light table-bordered align-middle ">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>نام</td>
                        <td>افزودن ويژگي</td>
                        <td>گالري</td>
                        <td>نمايش</td>
                        <td>وضعيت</td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($hotels as $key=>$hotel)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$hotel->name}}</td>
                            <td><a class="btn btn-dark">ويژگي</a></td>
                            <td>
                                <a href="{{route('hotels.galleries.index',$hotel)}}"
                                   class="btn btn-primary">گالري</a>
                            </td>
                            <td>
                                <a href="{{route('hotels.show',$hotel)}}"
                                   class="btn btn-success">نمايش</a>
                            </td>
                            <td>
                                @php
                                    $translate=$hotel->getIsPulishedTranslateAttribute();
                                @endphp

                                <span
                                    class="{{$translate['color']}} p-1 fw-bold rounded-3 ">{{$translate['message']}}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>



@endsection

