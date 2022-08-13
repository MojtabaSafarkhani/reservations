
    <div class="container-fluid">
        <div class="row flex-nowrap ">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0  mh-100 bg-dark" >
                <div
                    class="d-flex flex-column align-items-center align-items-sm-start  px-3 pt-2 text-white min-vh-100">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li>
                            <a href="#userOrders" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="bi bi-basket-fill"></i><span
                                    class="ms-1 d-none d-sm-inline">سفارش های شما</span> </a>
                            <ul class="collapse  nav flex-column ms-1" id="userOrders" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="{{route('user.orders.index')}}" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">ليست سفارش های شما</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#userReserve" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="bi bi-currency-dollar"></i><span
                                    class="ms-1 d-none d-sm-inline">ليست پرداختي ها</span> </a>
                            <ul class="collapse  nav flex-column ms-1" id="userReserve" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="{{route('user.reserve.index')}}" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline"> پرداختي های شما</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        @can('hostIsOk')
                            <li>
                                <a href="#hotels" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="bi bi-house-fill"></i> <span
                                        class="ms-1 d-none d-sm-inline">اقامتگاه</span> </a>
                                <ul class="collapse  @if(request()->routeIs('client.hotel.*')) show @endif   nav flex-column ms-1" id="hotels" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="{{route('client.hotel.create')}}" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">افزودن اقامتگاه</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('client.hotel.index')}}" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">ليست اقامتگاه ها</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#hostOrders" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="bi bi-cart-fill"></i><span
                                        class="ms-1 d-none d-sm-inline">سفارش ها</span> </a>
                                <ul class="collapse  nav flex-column ms-1" id="hostOrders" data-bs-parent="#menu">
                                    <li>
                                        <a href="{{route('host.orders.index')}}" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">ليست سفارش  اقامتگاه ها</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#hostReserve" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="bi bi-wallet-fill"></i><span
                                        class="ms-1 d-none d-sm-inline">پرداخت ها</span> </a>
                                <ul class="collapse  nav flex-column ms-1" id="hostReserve" data-bs-parent="#menu">
                                    <li>
                                        <a href="{{route('host.reserve.index')}}" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline"> پرداختی ها براي شما</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#hostComments" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fa fa-comment"></i><span
                                        class="ms-1 d-none d-sm-inline">کامنت ها</span> </a>
                                <ul class="collapse  nav flex-column ms-1" id="hostComments" data-bs-parent="#menu">
                                    <li>
                                        <a href="{{route('host.comments.index')}}" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">ليست کامنت ها</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
            <div class="col py-3">



