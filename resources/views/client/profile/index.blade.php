@extends("home.layout.main")

@section('content')
    @include('client.profile.layout.aside')



    <div class="col-md-8 mx-auto  mt-5 vh-100 ">
        <table
            class="table table-hover table-striped table-light table-bordered align-middle text-center  ">
            <thead>
            <tr>
                <td>نام</td>
                <td>ايميل</td>
                <td>نقش</td>
                <td>ويرايش</td>
            </tr>
            </thead>
            <tbody>


            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->translateTitle()}}</td>
                <td>
                    <a href="{{route('profile.edit')}}" class="btn btn-success">ويرايش</a>
                </td>
            </tr>

            </tbody>


        </table>
    </div>

    </div>
    </div>
    </div>


@endsection

