@extends('home.layout.main')

@section('content')

    @if($sliders->count()>0)
        @php
            $a=random_int(0,count($sliders)-1);
        @endphp
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto my-2 ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            </button>
                            @foreach($sliders as $key=>$slider)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="{{$key}}"
                                        class="@if($a==$key) active @endif " aria-current="true" aria-label="Slide 1">
                            @endforeach
                        </div>
                        <div class="carousel-inner rounded-2">

                            @foreach($sliders as $key=>$slider)
                                <div class="carousel-item @if($a==$key) active @endif ">
                                    <img src="{{$slider->image_url}}" class="d-block w-100" alt="...">
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
        </div>

    @endif

    {{-- <div class="container">
         <div class="row row-cols-1 row-cols-md-5 g-4">
             <div class="col">
                 <div class="card h-100">
                     <img src="..." class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title">Card title</h5>
                         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     </div>
                     <div class="card-footer">
                         <small class="text-muted">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="card h-100">
                     <img src="..." class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title">Card title</h5>
                         <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                     </div>
                     <div class="card-footer">
                         <small class="text-muted">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="card h-100">
                     <img src="..." class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title">Card title</h5>
                         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                     </div>
                     <div class="card-footer">
                         <small class="text-muted">Last updated 3 mins ago</small>
                     </div>
                 </div>
             </div>
         </div>
     </div>--}}

@endsection
