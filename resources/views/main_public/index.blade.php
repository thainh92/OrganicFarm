@extends('layouts.PublicLayout')
@section('title','Organic Farm')
@section('content')
    <section class="home_container">
        <div>ddaay la ddang au</div>


        <!-- Start Main Banner Area -->
        <div class="main-banner">
            <div class="main-banner-item banner-item-two">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <span>Take Natural Taste From Our Shop</span>
                                        <h1>Lead a Healthier Life with Organic Food</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                                        <div class="banner-btn">
                                            <a href="shop-1.html" class="default-btn">Our Shop</a>
                                            <a href="cart.html" class="optional-btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="main-banner-image">
                                        <img src="assets/img/banner-woman.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-banner-shape">
                <div class="shape-1">
                    <img src="assets/img/banner-shape/banner-shape-1.png" alt="image">
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Food Area -->
        <section class="food-area pb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="food-item">
                            <div class="food-image">
                                <img src="assets/img/food/food-1.jpg" alt="image">
                            </div>
                            <div class="food-content">
                                <h3>Fresh Fruits</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="food-item">
                            <div class="food-image">
                                <img src="assets/img/food/food-2.jpg" alt="image">
                            </div>
                            <div class="food-content">
                                <h3>Fresh Vegetables</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="food-item">
                            <div class="food-image">
                                <img src="assets/img/food/food-3.jpg" alt="image">
                            </div>
                            <div class="food-content">
                                <h3>Beef Meat</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Food Area -->

        <!-- Start Top Products Area -->
        <section class="top-products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Trending Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-1.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Darling Oranges</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$38.00</span>
                                    <span class="old-price">$125.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-2.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Strawberry</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$30.00</span>
                                    <span class="old-price">$116.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-3.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Cabbage</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$40.00</span>
                                    <span class="old-price">$179.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-4.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Nectarine</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$45.00</span>
                                    <span class="old-price">$135.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-5.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Seasoned Tomatoes</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$68.00</span>
                                    <span class="old-price">$168.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-6.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Seasoned Carrot</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$30.00</span>
                                    <span class="old-price">$130.00</span>
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
                </div>
            </div>
        </section>
        <!-- End Top Products Area -->

        <!-- Start Deal Area -->
        <section class="deal-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="deal-title">
                            <h2>Deals Of The Weeks</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                        </div>

                        <div class="deal-content">
                            <div id="timer" class="flex-wrap d-flex justify-content-center">
                                <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
                                <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
                                <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
                                <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
                            </div>

                            <div class="deal-btn">
                                <a href="cart.html" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="deal-image">
                            <img src="assets/img/deal/deal-1.png" alt="image">

                            <div class="offer">
                                <h4>50%</h4>
                                <span>Off</span>
                            </div>
                        </div>
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

        <!-- Start Featured Products Area -->
        <section class="featured-products-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Featured  Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/featured-products/featured-products-1.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Bean</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$3.00</span>
                                    <span class="old-price">$12.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/featured-products/featured-products-2.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Pomegranate</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$30.00</span>
                                    <span class="old-price">$122.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/featured-products/featured-products-3.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Avocado</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$40.00</span>
                                    <span class="old-price">$140.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/featured-products/featured-products-4.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Capsicum</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$33.00</span>
                                    <span class="old-price">$133.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/featured-products/featured-products-5.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">WaterMelon</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$23.00</span>
                                    <span class="old-price">$125.00</span>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/featured-products/featured-products-6.jpg" alt="image"></a>

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
                                    <a href="shop-details.html">Crab Apples</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$45.00</span>
                                    <span class="old-price">$120.00</span>
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
                </div>
            </div>
        </section>
        <!-- End Featured Products Area -->

        <!-- Start Gallery Area -->
        <section class="gallery-area bg-fafafa pt-100 pb-70">
            <div class="container-fluid">
                <div class="section-title">
                    <h2>Our Cultivation Farmland Gallery</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-gallery-box">
                            <div class="gallery-image">
                                <a href="#"><img src="assets/img/gallery/gallery-1.jpg" alt="image"></a>
                            </div>

                            <div class="gallery-content">
                                <h3>
                                    <a href="shop-details.html">Seasoned Tomatoes</a>
                                </h3>
                                <span>Farming</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-gallery-box">
                            <div class="gallery-image">
                                <a href="#"><img src="assets/img/gallery/gallery-2.jpg" alt="image"></a>
                            </div>

                            <div class="gallery-content">
                                <h3>
                                    <a href="#">Fresh Organic Milk</a>
                                </h3>
                                <span>Food</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery-box">
                            <div class="gallery-image">
                                <a href="#"><img src="assets/img/gallery/gallery-3.jpg" alt="image"></a>
                            </div>

                            <div class="gallery-content">
                                <h3>
                                    <a href="#">Veterinary Research</a>
                                </h3>
                                <span>Cultivation</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery-box">
                            <div class="gallery-image">
                                <a href="#"><img src="assets/img/gallery/gallery-4.jpg" alt="image"></a>
                            </div>

                            <div class="gallery-content">
                                <h3>
                                    <a href="#">Fresh Vegetables</a>
                                </h3>
                                <span>Agriculturist</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-gallery-box">
                            <div class="gallery-image">
                                <a href="#"><img src="assets/img/gallery/gallery-5.jpg" alt="image"></a>
                            </div>

                            <div class="gallery-content">
                                <h3>
                                    <a href="#">Fresh Strawberry</a>
                                </h3>
                                <span>Fresh Food</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Gallery Area -->

        <!-- Start Video Area -->
        <div class="video-area ptb-100">
            <div class="container">
                <div class="video-content">
                    <h3>Watch Intro Video</h3>
                    <a href="https://www.youtube.com/watch?v=Jh5oX0VRnzk" class="video-btn popup-youtube">
                        <i class='bx bxl-youtube'></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Video Area -->

        <!-- Start Others Food Area -->
        <section class="others-food-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Organic Shop of Department</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="others-food-item">
                            <img src="assets/img/others-food/others-food-1.png" alt="image">

                            <div class="content">
                                <h3>Fresh Fish</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="others-food-item">
                            <img src="assets/img/others-food/others-food-2.png" alt="image">

                            <div class="content">
                                <h3>Fresh Fruits</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="others-food-item">
                            <img src="assets/img/others-food/others-food-3.png" alt="image">

                            <div class="content">
                                <h3>Fresh Vegetables</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Others Food Area -->

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

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
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

        <!-- Start Newsletter Area -->
        <div class="newsletter-area ptb-100">
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
        </div>
        <!-- End Newsletter Area -->

        <!-- Start Partner Area -->
        <div class="partner-area ptb-100">
            <div class="container">
                <div class="partner-slider owl-carousel owl-theme">
                    <div class="partner-item">
                        <img src="assets/img/partner/partner-1.png" alt="image">
                    </div>

                    <div class="partner-item">
                        <img src="assets/img/partner/partner-2.png" alt="image">
                    </div>

                    <div class="partner-item">
                        <img src="assets/img/partner/partner-3.png" alt="image">
                    </div>

                    <div class="partner-item">
                        <img src="assets/img/partner/partner-4.png" alt="image">
                    </div>

                    <div class="partner-item">
                        <img src="assets/img/partner/partner-5.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->
    </section>
@endsection
@section('script-tag')
    <script></script>
@endsection
