<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" type="text/css">
        <title>@yield('title')</title>

        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('style');
        <style>
        .si-pic img {
            width: 70px;
        }
        .custom-checkbox .custom-control-input:checked~.custom-control-label::after{
            background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='white' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
            background-color:#f35320;
        }
        .pagination-area .page-numbers.current, .pagination-area .page-numbers:hover, .pagination-area .page-numbers:focus {
            background: #f99459;
            color: #ffffff;
            -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
            box-shadow: 0 2px 10px 0 #d8dde6;
        }
        .pagination-area {
            text-align: center;
            margin-top: 20px;
        }

        .pagination{
            width: 35px;
            height: 35px;
            margin: 0 3px;
            background-color: #ffffff;
            line-height: 35px;
            color: #111111;
            -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
            box-shadow: 0 2px 10px 0 #d8dde6;
            font-size: 18px;
            font-weight: bold;
        }
        .pagination. page-item {
            margin-left: 20px;
        }
        .page-item.active .page-link {
            background: #f99459;
            border-color:#f99459;
        }
        .page-link {
            color: #111111;
        }
        .page-link:hover {
            color:#ffffff;
            text-decoration:none;
            background-color:#f99459;
            border-color:#f99459;
        }
        .page-link:focus{
            z-index:2;
            outline:0;
            box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
        }
    </style>
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-header-information">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>HOT LINE:</span>
                            <a href="tel:0123456789">(+84) 12 3456 789</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="top-header-social">
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <!-- <li>
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                <a href="{{ url('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                                @endauth
                            </div>
                            @endif
                        </li> -->
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('home-page') }}">
                            <img src="{{asset('assets/img/logo2.png')}}" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home-page') }}">
                        <img src="{{asset('assets/img/logo2.png')}}" alt="image">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('home-page') }}" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    Shop
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @php
                                        $categories_old = DB::table('categories')->where([['parent_id', '=', null], ['deleted_at', '=', null]])->get();
                                        $categories = [];
                                        foreach($categories_old as $category) {
                                            $sub_categories = DB::table('categories')->where([['parent_id', '=', $category->id], ['deleted_at', '=', null]])->get();
                                            $category->sub_category = $sub_categories;
                                            array_push($categories ,$category);
                                        }
                                    @endphp
                                    @foreach($categories as $category)
                                        <li class="nav-item">
                                            <a href="{{route('product-page', $category->url)}}" class="nav-link">
                                                {{$category->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    About Us
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('about-page') }}" class="nav-link">
                                            About
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('faq-page') }}" class="nav-link">
                                            FAQ
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('terms-page') }}" class="nav-link">
                                            Terms of Service
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('private-page') }}" class="nav-link">
                                            Privacy Policy
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('blog-page') }}" class="nav-link">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact-page') }}" class="nav-link">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <div class="others-options d-flex align-items-center">
                            @if (Route::has('login'))
                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="#">
                                        <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                        d="M11 13.4815C12.5663 13.441 13.8649 12.8793 14.8958 11.7963C15.9268 10.7133 16.4615 9.34909 16.5 7.7037C16.4615 6.05832 15.9268 4.69412 14.8958 3.61111C13.8649 2.5281 12.5663 1.96637 11 1.92593C9.43372 1.96637 8.13511 2.5281 7.10417 3.61111C6.07322 4.69412 5.5385 6.05832 5.5 7.7037C5.5385 9.34909 6.07322 10.7133 7.10417 11.7963C8.13511 12.8793 9.43372 13.441 11 13.4815ZM11 15.4074C8.91856 15.3471 7.19033 14.5947 5.81533 13.1502C4.44033 11.7058 3.72411 9.89027 3.66667 7.7037C3.72411 5.51714 4.44033 3.70163 5.81533 2.25718C7.19033 0.81274 8.91856 0.0603457 11 0C13.0814 0.0603457 14.8097 0.81274 16.1847 2.25718C17.5597 3.70163 18.2759 5.51714 18.3333 7.7037C18.2759 9.89027 17.5597 11.7058 16.1847 13.1502C14.8097 14.5947 13.0814 15.3471 11 15.4074ZM20.1667 25.037V22.1481C20.1477 21.3258 19.8804 20.6437 19.3646 20.1019C18.8488 19.56 18.1995 19.2792 17.4167 19.2593H4.58333C3.8005 19.2792 3.15119 19.56 2.63542 20.1019C2.11964 20.6437 1.85228 21.3258 1.83333 22.1481V25.037C1.83333 25.3182 1.74747 25.549 1.57575 25.7294C1.40403 25.9098 1.18433 26 0.916667 26C0.649 26 0.429306 25.9098 0.257583 25.7294C0.0858613 25.549 0 25.3182 0 25.037V22.1481C0.0385 20.7839 0.487361 19.6505 1.34658 18.7479C2.20581 17.8453 3.28472 17.3738 4.58333 17.3333H17.4167C18.7153 17.3738 19.7942 17.8453 20.6534 18.7479C21.5126 19.6505 21.9615 20.7839 22 22.1481V25.037C22 25.3182 21.9141 25.549 21.7424 25.7294C21.5707 25.9098 21.351 26 21.0833 26C20.8157 26 20.596 25.9098 20.4242 25.7294C20.2525 25.549 20.1667 25.3182 20.1667 25.037Z"
                                        fill="#08080A" fill-opacity="0.96"/>
                                        </svg>
                                    </a>
                                @auth
                                <div class="cart-btn-dropdown">
                                    <div class="cart-btn-dropdown-child">
                                        <a class="primary-btn checkout-btn"
                                           href="{{ route('profile-page', Auth::user()->id) }}">
                                            <p>{{ Auth::user()->name }}'s account</p>
                                        </a>
                                    </div>

                                    <div class="cart-btn-dropdown-child">
                                        <a class="primary-btn checkout-btn" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <p>{{ __('Logout') }}</p>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                @else
                                <div class="cart-btn-dropdown">
                                    <div class="cart-btn-dropdown-child">
                                        <a href="{{route('login')}}" class="primary-btn checkout-btn">
                                            <p>Login</p>
                                        </a>
                                    </div>

                                    <div class="cart-btn-dropdown-child">
                                        @if (Route::has('register'))
                                        <a href="{{route('register')}}" class="primary-btn checkout-btn">
                                            <p>Register</p>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                @endauth
                                </div>
                            </div>
                            @endif
                            <div class="option-item" id="cart-icon">
                                <div class="cart-btn">
                                    @if (Route::has('login'))
                                    @auth
                                    <a href="{{ url('/cart') }}">
                                        <i class='flaticon-shopping-cart'></i>
                                        @if(Session::has('Cart') != null)
                                        <span id="total-quanty-show">{{Session::get('Cart')->totalQuanty}}</span>
                                        @else
                                        <span id="total-quanty-show">0</span>
                                        @endif
                                    </a>
                                    @else
                                    <a href="{{ route('login') }}">
                                        <i class='flaticon-shopping-cart'></i>
                                        @if(Session::has('Cart') != null)
                                        <span id="total-quanty-show">{{Session::get('Cart')->totalQuanty}}</span>
                                        @else
                                        <span id="total-quanty-show">0</span>
                                        @endif
                                    </a>
                                    @endauth
                                    @endif
                                    <div class="cart-hover">
                                        <div id="change-item-cart">
                                            @if(Session::has('Cart') != null)
                                            <div class="select-items">
                                                <table>
                                                    <tbody>
                                                        @foreach(Session::get('Cart')->products as $item)
                                                        <tr>
                                                            <td class="si-pic"><img src="assets/img/product/{{$item['productInfo']->thumbnail}}" alt=""></td>
                                                            <td class="si-text">
                                                                <div class="product-selected">
                                                                    <p>${{number_format($item['productInfo']->price)}} x {{$item['quanty']}}</p>
                                                                    <h6>{{$item['productInfo']->name}}</h6>
                                                                </div>
                                                            </td>
                                                            <td class="si-close">
                                                                <i class="ti-close" data-id="{{$item['productInfo']->id}}"></i>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="select-total">
                                                <span>total:</span>
                                                <h5>${{number_format(Session::get('Cart')->totalPrice)}}</h5>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="select-button">
                                            @if (Route::has('login'))
                                            @auth
                                            <a href="{{ url('/cart') }}" class="primary-btn view-card">VIEW CART</a>
                                            @else
                                            <a href="{{ route('login') }}" class="primary-btn view-card">LOGIN TO VIEW CART</a>
                                            @endauth
                                            @endif
                                            <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="#">
                                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                        d="M12.8533 3.01879L13.5 3.68683L14.1467 3.01879C16.8813 0.193737 21.3025 0.193737 24.0371 3.01879C26.7876 5.86027 26.7876 10.479 24.0371 13.3204L13.5718 24.1318C13.5326 24.1724 13.4674 24.1724 13.4281 24.1318L2.9629 13.3204C0.212368 10.479 0.212368 5.86027 2.9629 3.01879C5.69752 0.193737 10.1187 0.193737 12.8533 3.01879Z"
                                        stroke="#222222" stroke-width="1.8"/>
                                    </svg>
                                    <span>0</span>
                                </a>
                                <div class="cart-btn-dropdown">
                                    <div class="cart-btn-dropdown-child">
                                        <p>Save your favorite items</p>
                                        <a href="#" class="cart-btn-dropdown-create">
                                            <p>CREATE ORGANIC FARM ACCOUNT</p>
                                        </a>
                                    </div>
                                    <a href="#" class="cart-btn-dropdown-singin">
                                        <h4>SIGN OUT</h4>
                                    </a>
                                </div>
                            </div>
                            -->
                        </div>
                        <!--
                        <div class="option-item">
                            <form class="search-box">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit"><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                        -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
<div class="others-option-for-responsive">
    <div class="container">
        <div class="dot-menu">
            <div class="inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
            </div>
        </div>
        <div class="container">
            <div class="option-inner">
                <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                        <div class="cart-btn">
                            <a href="#">
                                <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                d="M11 13.4815C12.5663 13.441 13.8649 12.8793 14.8958 11.7963C15.9268 10.7133 16.4615 9.34909 16.5 7.7037C16.4615 6.05832 15.9268 4.69412 14.8958 3.61111C13.8649 2.5281 12.5663 1.96637 11 1.92593C9.43372 1.96637 8.13511 2.5281 7.10417 3.61111C6.07322 4.69412 5.5385 6.05832 5.5 7.7037C5.5385 9.34909 6.07322 10.7133 7.10417 11.7963C8.13511 12.8793 9.43372 13.441 11 13.4815ZM11 15.4074C8.91856 15.3471 7.19033 14.5947 5.81533 13.1502C4.44033 11.7058 3.72411 9.89027 3.66667 7.7037C3.72411 5.51714 4.44033 3.70163 5.81533 2.25718C7.19033 0.81274 8.91856 0.0603457 11 0C13.0814 0.0603457 14.8097 0.81274 16.1847 2.25718C17.5597 3.70163 18.2759 5.51714 18.3333 7.7037C18.2759 9.89027 17.5597 11.7058 16.1847 13.1502C14.8097 14.5947 13.0814 15.3471 11 15.4074ZM20.1667 25.037V22.1481C20.1477 21.3258 19.8804 20.6437 19.3646 20.1019C18.8488 19.56 18.1995 19.2792 17.4167 19.2593H4.58333C3.8005 19.2792 3.15119 19.56 2.63542 20.1019C2.11964 20.6437 1.85228 21.3258 1.83333 22.1481V25.037C1.83333 25.3182 1.74747 25.549 1.57575 25.7294C1.40403 25.9098 1.18433 26 0.916667 26C0.649 26 0.429306 25.9098 0.257583 25.7294C0.0858613 25.549 0 25.3182 0 25.037V22.1481C0.0385 20.7839 0.487361 19.6505 1.34658 18.7479C2.20581 17.8453 3.28472 17.3738 4.58333 17.3333H17.4167C18.7153 17.3738 19.7942 17.8453 20.6534 18.7479C21.5126 19.6505 21.9615 20.7839 22 22.1481V25.037C22 25.3182 21.9141 25.549 21.7424 25.7294C21.5707 25.9098 21.351 26 21.0833 26C20.8157 26 20.596 25.9098 20.4242 25.7294C20.2525 25.549 20.1667 25.3182 20.1667 25.037Z"
                                fill="#08080A" fill-opacity="0.96"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="option-item">
                    <div class="cart-btn">
                        <a href="{{ route('cart-page') }}">
                            <i class='flaticon-shopping-cart'></i>
                            <span>0</span>
                        </a>
                    </div>
                </div>
                /*
                <div class="option-item">
                    <div class="cart-btn">
                        <a href="#">
                            <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M12.8533 3.01879L13.5 3.68683L14.1467 3.01879C16.8813 0.193737 21.3025 0.193737 24.0371 3.01879C26.7876 5.86027 26.7876 10.479 24.0371 13.3204L13.5718 24.1318C13.5326 24.1724 13.4674 24.1724 13.4281 24.1318L2.9629 13.3204C0.212368 10.479 0.212368 5.86027 2.9629 3.01879C5.69752 0.193737 10.1187 0.193737 12.8533 3.01879Z"
                            stroke="#222222" stroke-width="1.8"/>
                        </svg>
                        <span>0</span>
                    </a>
                </div>
                */
            </div>
            /*
            <div class="option-item">
                <form class="search-box">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit"><i class="flaticon-search"></i></button>
                </form>
            </div>
            */
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- End Navbar Area -->

<!-- Sidebar Modal -->
<div class="sidebar-modal">
    <div class="sidebar-modal-inner">
        <div class="sidebar-about-area">
            <div class="title">
                <h2>About Us</h2>
                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is
                king, their lives and needs are the inspiration.</p>
            </div>
        </div>
        <div class="sidebar-instagram-feed">
            <h2>Instagram</h2>
            <ul>
                <li>
                    <a href="#">
                        <img src="{{asset('assets/img/instagram/instagram1.jpg')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('assets/img/instagram/instagram2.jpg')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('assets/img/instagram/instagram3.jpg')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('assets/img/instagram/instagram4.jpg')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('assets/img/instagram/instagram5.jpg')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('assets/img/instagram/instagram6.jpg')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('assets/img/instagram/instagram7.jpg')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('assets/img/instagram/instagram8.jpg')}}" alt="image">
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-contact-area">
            <div class="contact-info">
                <div class="contact-info-content">
                    <h2>
                        <a href="tel:+0881306298615">
                            +088 130 629 8615
                        </a>
                        <span>OR</span>
                        <a href="mailto:orgo@gmail.com">
                            orgo@gmail.com
                        </a>
                    </h2>
                    <ul class="social">
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <span class="close-btn sidebar-modal-close-btn">
            <i class="flaticon-cancel"></i>
        </span>
    </div>
</div>
<!-- End Sidebar Modal -->

<main class="main_container">
    @yield('content')
</main>

<!-- Start Footer Area -->
<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <h2>
                            <a href="{{ route('home-page') }}">Organic Farm</a>
                        </h2>
                    </div>
                    <p>Contact us ... </p>
                    <ul class="social">
                        <li>
                            <a href="#" class="facebook" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pinterest" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="linkedin" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Instagram</h3>
                    <ul class="instagram-list">
                        <li>
                            <div class="box">
                                <img src="{{asset('assets/img/instagram/1.jpg')}}" alt="image" style="width: 300px; height: 300px;">
                                <i class="bx bxl-instagram"></i>
                                <a target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="{{asset('assets/img/instagram/2.jpg')}}" alt="image" style="width: 300px; height: 300px;">
                                <i class="bx bxl-instagram"></i>
                                <a target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="{{asset('assets/img/instagram/3.jpg')}}" alt="image" style="width: 300px; height: 300px;">
                                <i class="bx bxl-instagram"></i>
                                <a target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="{{asset('assets/img/instagram/4.webp')}}" alt="image" style="width: 300px; height: 300px;">
                                <i class="bx bxl-instagram"></i>
                                <a target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="{{asset('assets/img/instagram/5.WEBP')}}" alt="image" style="width: 300px; height: 300px;">
                                <i class="bx bxl-instagram"></i>
                                <a target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="{{asset('assets/img/instagram/6.jpg')}}" alt="image" style="width: 300px; height: 300px;">
                                <i class="bx bxl-instagram"></i>
                                <a target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="{{asset('assets/img/instagram/7.jpg')}}" alt="image" style="width: 300px; height: 300px;">
                                <i class="bx bxl-instagram"></i>
                                <a target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="{{asset('assets/img/instagram/8.jpg')}}" alt="image" style="width: 300px; height: 300px;">
                                <i class="bx bxl-instagram"></i>
                                <a target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="{{asset('assets/img/instagram/9.jpg')}}" alt="image" style="width: 300px; height: 300px;">
                                <i class="bx bxl-instagram"></i>
                                <a target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Quick Links</h3>
                    <ul class="quick-links">
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Our Services</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Faq</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contact Us</h3>
                    <ul class="footer-contact-info">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>Phone</span>
                            <a href="tel:0123456789">(+84) 12 3456 789</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Email</span>
                            <a href="mailto:organicfarm@gmail.com">organicfarm@gmail.com</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>Address</span>
                            Số 8 Tôn Thất Thuyết, Mỹ Đình, Thành Phố Hà Nội
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p>
                        <i class="far fa-copyright"></i>
                        Copyright @2020 OrganicFarm. All Rights Reserved by
                        <a href="#" target="_blank">
                            OrganicFarm
                        </a>
                    </p>
                </div>

                <div class="col-lg-6 col-md-6">
                    <ul>
                        <li>
                            <a href="{{ route('terms-page') }}">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="{{ route('pricing-page') }}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Slim JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Meanmenu JS -->
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Odometer JS -->
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<!-- Jquery Appear JS -->
<script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
<!-- Ajaxchimp JS -->
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Form Validator JS -->
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- Alert -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

{{-- Place for script --}}
<script>
    function AddCart(id) {
        $.ajax({
            url: '/category/Add-Cart/'+id,
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.success('Add Success');
        });
    }

    $("#change-item-cart").on('click', '.si-close i', function() {
        $.ajax({
            url: '/category/Delete-Item-Cart/'+$(this).data('id'),
            type: 'GET',
        }).done(function(response) {
            RenderCart(response);
            alertify.error('Delete Success');
        });
    });

    function RenderCart(response) {
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#total-quanty-show").text($("#total-quanty-cart").val());
    }
    let cart = {!! json_encode(session('Cart')) !!};
    function getCart() {
        console.log(cart);
    }
</script>
@yield('script-tag');
</body>
</html>
