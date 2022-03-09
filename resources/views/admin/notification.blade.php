@if(session()->has('success'))

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@elseif(session()->has('delete'))

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session()->get('delete')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif
