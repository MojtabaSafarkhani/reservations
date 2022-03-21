@extends("admin.layout.main")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ليست ويژگي ها</h4>
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
                        <td>عنوان</td>
                        <td>تصویر</td>
                        <td>ويرايش</td>
                        <td>حذف</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($features as $key=>$feature)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$feature->title}}</td>
                            <td><img src="{{$feature->image_url}}" width="60px"></td>

                            <td>
                                <a href="{{route('features.edit',$feature)}}" class="btn btn-success">ويرايش</a>
                            </td>
                            <td>
                                <form action="{{route('features.destroy',$feature)}}" method="post">
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
