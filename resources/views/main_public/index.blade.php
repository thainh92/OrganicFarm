@extends('layouts.master')
@section('title','Home')
@section('content')
    <section class="home-container">
        <!-- Start Main Slider Area -->
        <div class="main-slider-area">
            <div class="home-slides owl-carousel owl-theme">
                <div class="main-slider-item main-slider-two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="main-slider-content">
                                            <span>Take Natural Taste From Our Shop</span>
                                            <h1>Organic Food Is Good For Health</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                                            <div class="slider-btn">
                                                <a href="shop-1.html" class="default-btn">Our Shop</a>
                                                <a href="cart.html" class="optional-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="main-slider-image-wrap">
                                            <img src="assets/img/main-slider/main-slider-2.jpg" alt="image">

                                            <div class="slider-shape">
                                                <img src="assets/img/main-slider/main-slider-shape.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider-item main-slider-two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="main-slider-content">
                                            <span>Take Natural Taste From Our Shop</span>
                                            <h1>Vegetables Good For Health</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                                            <div class="slider-btn">
                                                <a href="shop-1.html" class="default-btn">Our Shop</a>
                                                <a href="cart.html" class="optional-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="main-slider-image-wrap">
                                            <img src="assets/img/main-slider/main-slider-3.jpg" alt="image">

                                            <div class="slider-shape">
                                                <img src="assets/img/main-slider/main-slider-shape.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slider-shape">
                <div class="shape-1">
                    <img src="assets/img/main-slider/slider-shape-1.png" alt="image">
                </div>

                <div class="shape-2">
                    <img src="assets/img/main-slider/slider-shape-2.png" alt="image">
                </div>
            </div>
        </div>
        <!-- End Main Slider Area -->

        <!-- Start Special Features Area -->
        <section class="special-features-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Special Features</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-special-features">
                            <div class="image">
                                <img src="assets/img/special-features/special-features-1.png" alt="image">
                            </div>

                            <div class="content">
                                <h3>Fresh Organic Food Provides</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-special-features">
                            <div class="image">
                                <img src="assets/img/special-features/special-features-2.png" alt="image">
                            </div>

                            <div class="content">
                                <h3>Fast & Easy Food Delivery</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-special-features">
                            <div class="image">
                                <img src="assets/img/special-features/special-features-3.png" alt="image">
                            </div>

                            <div class="content">
                                <h3>Very Easy Payment System</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Special Features Area -->

        <!-- Start Top Products Area -->
        <section class="top-products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Trending Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    @foreach($featured as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product/{{$item->thumbnail}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sale">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="#">{{$item->name}}</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">{{$item->price}}</span>
                                    <span class="old-price">{{$item->price}}</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Top Products Area -->

        <!-- Start Services Area -->
        <section class="services-area bg-image pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>What Services We Provide</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-apple"></i>
                            </div>
                            <h3>Natural Food</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-nature"></i>
                            </div>
                            <h3>Biologically Safe</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-forest"></i>
                            </div>
                            <h3>Biodiversity</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-organic"></i>
                            </div>
                            <h3>100% Organic</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-plant"></i>
                            </div>
                            <h3>Gardening</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-leaf"></i>
                            </div>
                            <h3>Organic Vegetables</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-heart"></i>
                            </div>
                            <h3>Fresh & Organic</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-apple"></i>
                            </div>
                            <h3>Organic Food</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->

        <!-- Start Features Area -->
        <section class="features-area pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="features-image">
                            <img src="assets/img/features-2.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="features-item">
                            <div class="features-content">
                                <span>Features</span>
                                <h3>Special Product For Orgo Loving People</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                            </div>

                            <div class="features-inner-content">
                                <div class="icon">
                                    <i class="flaticon-nature"></i>
                                </div>
                                <h4>Natural Products</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>

                            <div class="features-inner-content">
                                <div class="icon">
                                    <i class="flaticon-leaf"></i>
                                </div>
                                <h4>Best Food For Health</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>

                            <div class="features-inner-content">
                                <div class="icon">
                                    <i class="flaticon-medal"></i>
                                </div>
                                <h4>Award-Winning Company</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Area -->

        <!-- Start Featured Products Area -->
        <section class="featured-products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Featured  Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    @foreach($trending as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product/{{$item->thumbnail}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="#">{{$item->name}}</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">{{$item->price}}</span>
                                    <span class="old-price">{{$item->price}}</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Featured Products Area -->

        <!-- Start Deal Area -->
        <section class="deal-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h2>Subscribe To Our Newsletter</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form class="newsletter-form">
                            <input type="email" class="input-newsletter" placeholder="Enter Email Address" name="EMAIL" required autocomplete="off">

                            <button type="submit">Subscribe Now</button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="deal-shape">
                <div class="shape-1">
                    <img src="assets/img/deal/deal-shape-1.png" alt="image">
                </div>
                <div class="shape-2">
                    <img src="assets/img/deal/deal-shape-2.png" alt="image">
                </div>
                <div class="shape-3">
                    <img src="assets/img/deal/deal-shape-3.png" alt="image">
                </div>
                <div class="shape-4">
                    <img src="assets/img/deal/deal-shape-4.png" alt="image">
                </div>
            </div>
        </section>
        <!-- End Deal Area -->

        <!-- Start Pricing Area -->
        <section class="pricing-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Pricing Plan</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
                                <h3>Basic Plan</h3>
                            </div>

                            <div class="price">
                                $60 <span>Weekly</span>
                            </div>

                            <ul class="pricing-features">
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cherry Tomatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Imported Snap Peas
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cucumbers
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    White Potatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Organic Vegetables
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Unlimited Creative Ideas
                                </li>
                            </ul>

                            <div class="pricing-btn">
                                <a href="#" class="default-btn">
                                    Purchase Plan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
                                <h3>Standard Plan</h3>
                            </div>

                            <div class="price">
                                $149 <span>Monthly</span>
                            </div>

                            <ul class="pricing-features">
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cherry Tomatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Imported Snap Peas
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cucumbers
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    White Potatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Organic Vegetables
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Unlimited Creative Ideas
                                </li>
                            </ul>

                            <div class="pricing-btn">
                                <a href="#" class="default-btn">
                                    Purchase Plan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-box">
                            <div class="pricing-header">
                                <h3>Premium Plan</h3>
                            </div>

                            <div class="price">
                                $179 <span>Yearly</span>
                            </div>

                            <ul class="pricing-features">
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cherry Tomatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Imported Snap Peas
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Cucumbers
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    White Potatoes
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Organic Vegetables
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Unlimited Creative Ideas
                                </li>
                            </ul>

                            <div class="pricing-btn">
                                <a href="#" class="default-btn">
                                    Purchase Plan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Area -->

        <!-- Start Testimonial Area -->
        <section class="testimonial-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Client’s Feedback</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="info">
                            <img src="assets/img/client/client-1.jpg" alt="image">
                            <h3>Ken Morris</h3>
                            <span>Organic Farmer</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>

                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="info">
                            <img src="assets/img/client/client-2.jpg" alt="image">
                            <h3>Johansen Lisa</h3>
                            <span>Organic Farmer</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>

                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="info">
                            <img src="assets/img/client/client-3.jpg" alt="image">
                            <h3>Lodi Kheda</h3>
                            <span>Organic Farmer</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>

                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->

        <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Latest Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="image">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" alt="image"></a>

                                <div class="date">
                                    <span>20 December 2020</span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="blog-details.html">What You Should Know About Detox Water</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="image">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt="image"></a>

                                <div class="date">
                                    <span>24 December 2020</span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="blog-details.html">Better Hot Drink Elegant You Can Order By Online</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="image">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-3.jpg" alt="image"></a>

                                <div class="date">
                                    <span>29 December 2020</span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="blog-details.html">Role of Genetics in Treating Low-grade Glioma</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
    </section>
@endsection
@section('script-tag')
    <script></script>
@endsection
