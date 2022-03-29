@extends("home.layout.main")

@section('content')

    <div class="container-fluid mt-2 p-2">
        <div class="row">
            <div class="col-md-5 ms-2 ms-5">
                <h4> {{$hotel->name}}</h4>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7  mx-auto ">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://media.tehrantimes.com/d/t/2021/06/20/4/3808608.jpg" class="d-block w-100"
                                 alt="...">
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://www.potatobusiness.com/cwsd.php?Z3AuX2txZ3FhKUNzfW5_LENRI2l_aQ.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://www.europeanregionofgastronomy.org/wp-content/uploads/2016/05/3020337-poster-p-1-with-farmplicity-the-farm-to-table-movement-meets-the-21st-century.jpg"
                                class="d-block w-100" alt="...">
                        </div>
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
        <div class="my-3"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <h5>توضيحات</h5>
                <p>{{$hotel->description}}</p>
            </div>
        </div>
        <div class="my-3"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h5>آدرس</h5>
                        <p>{{$hotel->address}}</p>
                    </div>
                    <div class="col-md-2 offset-md-1">
                        <h5>تلفن</h5>
                        <p>{{$hotel->phone}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h5>دسته بندي</h5>
                        <p>{{$hotel->category->title}}</p>
                    </div>
                    <div class="col-md-2 offset-md-1 ">
                        <h5>شهر</h5>
                        <p>{{$hotel->city->name}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4"></div>
        <div class="row">
            <div class="col-md-7  mx-auto">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h5>هزينه براي يک شب</h5>
                        <p>{{$hotel->cost}} تومان</p>
                    </div>
                    <div class="col-md-2 offset-md-1 ">
                        <h5> ميزبان</h5>
                        <p>{{$hotel->host->user->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


@endsection

