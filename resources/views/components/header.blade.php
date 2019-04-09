<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="{{asset('/')}}" class="site-logo">
                        <img src="{{asset('image/logo1.jpg')}}" alt="logo">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">






                        <form class="header-search-form">
                            <input type="text" placeholder="Search...">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                </div>




                    <div class="col-xl-4 col-lg-5">

                        <div class="user-panel">
                            @if(session()->has('admin'))

                                <div class="up-item">
                                    <i class="flaticon-profile"></i>
                                    <a href="{{route('logout') }}">adminpanel</a>
                                </div>
                            @endif


                                @if(session()->has('user'))







                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <a href="{{route('logout') }}">Log out</a>
                            </div>






                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                    <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty:''}}</span>
                                </div>
                                <a href="{{route('getCart')}}">Shopping Cart</a>
                            </div>



                        </div>
                    </div>

                        @else

                    <div class="up-item">
                        <i class="flaticon-profile"></i>
                        <a href="{{asset('/login')}}">Sign in</a>  or <a href="{{asset('/register')}}">Create Account</a>
                    </div>
                        @endif





            </div>
        </div>
    </div>

</header>