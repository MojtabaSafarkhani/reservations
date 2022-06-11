@if(session()->has('warning'))

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{session()->get('warning')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>

@elseif(session()->has('success'))

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto mt-2">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>


@endif
