@extends('admin.layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ليست کامنت ها</h4>
            </div>
        </div>
    </div>
    @include('admin.notification')
    <div class="container mt-5 g-3 ">
        <div class="row  align-items-center justify-content-center text-center">

            <div class="col-md-10 m-auto">
                <div class="table-responsive">
                    <table class="table table-hover align-middle table-striped table-light table-bordered">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>نام کاربر</td>
                            <td>نام اقامتگاه</td>
                        {{--    <td>نام گيرنده</td>--}}
                            <td>نمایش متن</td>
                            <td>حذف</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $key=>$comment)
                            <tr style="height: 50px">
                                <td>{{$key+1}}</td>
                                <td>{{$comment->user->name}}</td>
                                <td>{{$comment->hotel->name}}</td>
                             {{--   <td>@if($comment->parent){{$comment->parent->user->name}}@endif</td>--}}
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#address-{{$key}}">
                                        متن پيام
                                    </button>
                                    <div class="modal fade" id="address-{{$key}}" tabindex="-1"
                                         data-bs-backdrop="static">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="address-{{$key}}">متن
                                                        پیام برای: {{$comment->hotel->name}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{$comment->comment}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form action="{{route('admin.comments.destroy',$comment)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit" class="btn btn-danger" value="حذف">
                                    </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center text-center ">
            <div class="col-md-10   ">

                {{ $comments->links() }}

            </div>
        </div>
    </div>
@endsection

