@extends("admin.layout.main")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ليست شهر ها</h4>
            </div>
        </div>
    </div>
    @include('admin.notification')
    <div class="container mt-5 g-3 ">
        <div class="row  align-items-center justify-content-center text-center">

            <div class="col-md-8 m-auto">
                <table class="table table-hover table-striped table-light table-bordered">
                    <thead>
                    <tr>
                        <td>نام</td>
                        <td>نامک</td>
                        <td>استان</td>
                        <td>ويرايش</td>
                        <td>حذف</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cities as $city)
                        <tr>
                            <td>{{$city->name}}</td>
                            <td>{{$city->slug}}</td>
                            <td>{{optional($city->state)->name}}</td>
                            <td>
                                <a href="{{route('cities.edit',$city->slug)}}" class="btn btn-success">ويرايش</a>
                            </td>
                            <td>
                                <form action="{{route('cities.destroy',$city)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" class="btn btn-danger" value="حذف">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
