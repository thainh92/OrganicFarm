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

    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
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
                        <i class='bx bxs-map'></i>
                        Số 8 Tôn Thất Thuyết, Mỹ Đình, Thành Phố Hà Nội
                    </li>
                    <li>
                        <i class='bx bx-envelope'></i>
                        <a href="mailto:organicfarm@gmail.com">organicfarm@gmail.com</a>
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
                        <img src="assets/img/logo.png" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home-page') }}">
                    <img src="assets/img/logo.png" alt="image">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('home-page') }}" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Shop
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('fruits-page') }}" class="nav-link">
                                        Fruits
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('vegetable-page') }}" class="nav-link">
                                        Vegetable
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('organicvegetable-page') }}" class="nav-link">
                                                Organic Vegetables
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('mushroom-page') }}" class="nav-link">
                                                Fresh Mushrooms
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('meat-page') }}" class="nav-link">
                                        Fresh Meat
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('pork-page') }}" class="nav-link">
                                                Pork
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('beef-page') }}" class="nav-link">
                                                Beef
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('poultryegg-page') }}" class="nav-link">
                                                Poultry - Eggs
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('seafood-page') }}" class="nav-link">
                                                Sea Food
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('dryfood-page') }}" class="nav-link">
                                        Dry Food
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('nuts-page') }}" class="nav-link">
                                                Nuts
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('cereals-page') }}" class="nav-link">
                                                Cereals
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('noodles-page') }}" class="nav-link">
                                                Noodles
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('rice-page') }}" class="nav-link">
                                                Rice
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('drinkmilk-page') }}" class="nav-link">
                                        Drinks & Milk
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('juice-page') }}" class="nav-link">
                                                Juice
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('milk-page') }}" class="nav-link">
                                                Fresh Milk
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="shop-2.html" class="nav-link">
                                        Gift & Combo
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Gift Box
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Combo
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="team.html" class="nav-link">
                                        Team
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">
                                        Pricing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Account
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">
                                                Login
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">
                                                Register
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-of-service.html" class="nav-link">
                                        Terms of Service
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Services
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="services.html" class="nav-link">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="services-details.html" class="nav-link">
                                        Services Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-2.html" class="nav-link">
                                        Blog Three Column
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">
                                        Blog Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact-page')}}" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="cart.html">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>
                        <div class="option-item">
                            <form class="search-box">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit"><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                        <div class="option-item">
                            <div class="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
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
                                <a href="cart.html">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>
                        <div class="option-item">
                            <form class="search-box">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit"><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                        <div class="option-item">
                            <div class="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
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
                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
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
                            <a href="{{ route('home-page') }}">Orgo</a>
                        </h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                                <img src="assets/img/instagram/instagram1.jpg" alt="image">
                                <i class="bx bxl-instagram"></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="assets/img/instagram/instagram2.jpg" alt="image">
                                <i class="bx bxl-instagram"></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="assets/img/instagram/instagram3.jpg" alt="image">
                                <i class="bx bxl-instagram"></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="assets/img/instagram/instagram4.jpg" alt="image">
                                <i class="bx bxl-instagram"></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="assets/img/instagram/instagram5.jpg" alt="image">
                                <i class="bx bxl-instagram"></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="assets/img/instagram/instagram6.jpg" alt="image">
                                <i class="bx bxl-instagram"></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="assets/img/instagram/instagram7.jpg" alt="image">
                                <i class="bx bxl-instagram"></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="assets/img/instagram/instagram8.jpg" alt="image">
                                <i class="bx bxl-instagram"></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <img src="assets/img/instagram/instagram1.jpg" alt="image">
                                <i class="bx bxl-instagram"></i>
                                <a href="#" target="_blank" class="link-btn"></a>
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
                            <a href="terms-of-service.html">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">Privacy Policy</a>
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

{{-- Place for script --}}
@yield('script-tag');
</body>
</html>
