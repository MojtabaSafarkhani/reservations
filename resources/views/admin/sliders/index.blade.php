@extends("admin.layout.main")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ليست اسلايدر ها</h4>
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
                        <td>#</td>
                        <td>تصوير</td>
                        <td>لينک</td>
                        <td>ويرايش</td>
                        <td>حذف</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $key=>$slider)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><img src="{{$slider->image_url}}" width="60px"></td>
                            <td>{{$slider->link}}</td>
                            <td>
                                <a href="{{route('sliders.edit',$slider)}}" class="btn btn-success">ويرايش</a>
                            </td>
                            <td>
                                <form action="{{route('sliders.destroy',$slider)}}" method="post">
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
