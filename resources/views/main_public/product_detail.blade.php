@extends('layouts.master')
@section('title','Product Detail')
@section('content')
    <div class="product-details-container">
        <!-- Start Product Details Area -->
        <section class="product-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row d-flex d-flex justify-content-around">
                            <div class="col-lg-4 col-md-12">
                                <div class="product-details-image d-flex justify-content-center"><img src="{{asset('assets/img/product/'.$product->thumbnail)}}"></div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div class="product-details-desc">
                                    <h3>{{$product->name}}</h3>
                                    <div class="price">
                                        <span class="new-price">{{$product->price}}</span>
                                        <span class="old-price">{{$product->price}}</span>
                                    </div>
                                    <div class="product-review">
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <a href="#" class="rating-count">3 reviews</a>
                                    </div>
                                    <p>{{$product->description}}</p>
                                    <div class="product-add-to-cart">
                                        <div class="input-counter">
                                            <span class="minus-btn">
                                                <i class='bx bx-minus'></i>
                                            </span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn">
                                                <i class='bx bx-plus'></i>
                                            </span>
                                        </div>
                                        <a onclick="AddCart({{$product->id}})" href="javascript:" data-tooltip="tooltip" data-placement="top" title="Add to Cart">
                                            <button type="submit" class="default-btn">
                                                Add to cart
                                                <span></span>
                                            </button>
                                        </a>
                                    </div>

                                    <div class="buy-checkbox-btn">
                                        <div class="item">
                                            <input class="inp-cbx" id="cbx" type="checkbox">
                                            <label class="cbx" for="cbx">
                                                <span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                </span>
                                                <span>I agree with the terms and conditions</span>
                                            </label>
                                        </div>
                                        <div class="item">
                                            <a href="#" class="btn btn-light">Buy it now!</a>
                                        </div>
                                    </div>

                                    <div class="products-share">
                                        <ul class="social">
                                            <li><span>Share:</span></li>
                                            <li>
                                                <a href="https://www.facebook.com/organicfarmfoods/" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/toforganic" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a>
                                            </li>
                                            <li>
                                                <a href="https://in.linkedin.com/company/letsgrowfood" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/theorganicfarm/" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab products-details-tab">
                            <div class="row">
                                <!--
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#">
                                                <div class="dot"></div>
                                                Description
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="dot"></div>
                                                Reviews
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="tab_content">
                                        <div class="tabs_item">
                                            <a href="#">
                                                <div class="dot"></div>
                                                <h3>Description</h3>
                                            </a>
                                            <div class="products-details-tab-content">
                                                <p>Clean, healthy products.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab_content">
                                        <div class="tabs_item">
                                            <div class="products-details-tab-content">
                                                <div class="product-review-form">
                                                    <h3>Customer Reviews</h3>
                                                    <div class="review-title">
                                                        <div class="rating">
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                        </div>
                                                        <p>Based on 3 reviews</p>
                                                        <a href="#" class="default-btn">
                                                            Write a Review
                                                        </a>
                                                    </div>
                                                    <div class="review-comments">
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                                            <p>Good product, I'm very satisfied</p>
                                                            <a class="review-report-link" style="cursor: pointer;">Report as Inappropriate</a>
                                                        </div>
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>Sep 24, 2021</strong></span>
                                                            <p>We run a 137-year-old family owned and operated organic apple farming & management company serving about 90 parcels (approx. 200 acres). We have been certified with Organic Certifiers (OC) since 2008 after switching from one of the larger certifying agencies where we were getting lost in the corporate shuffle after 15 years of loyalty. From our initial phone call to OC, we could sense that this is a company run like a family-owned business–something we could relate to. We have been very pleased with the personal, professional and friendly service that we receive and the relationship that we have built with OC over the past 5 years. We look forward to working with Organic Certifiers for years to come.</p>
                                                            <a class="review-report-link" style="cursor: pointer;">Report as Inappropriate</a>
                                                        </div>
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>Mar 9, 2022</strong></span>
                                                            <p>When we first decided to look into becoming organic certified, we were scared of the process and unknown. We investigated several organic agencies for help. Organic Certifiers were very helpful and patient in the certifying process. We love the personal attention with any question or request. They are very good about keeping us updated on new regulatory requirements. We appreciate their kind and cooperative approach in their communication. Organic Certifiers have been great business partners in helping us expand our organic products. We are so grateful we choose Organic Certifiers.</p>
                                                            <a class="review-report-link" style="cursor: pointer;">Report as Inappropriate</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-form">
                                                        <h3>Write a Review</h3>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <textarea name="review-body" id="review-body" cols="30" rows="7" placeholder="Write your comments here" class="form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <button type="submit" class="default-btn">
                                                                        Submit Review
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="related-shop">
                            <h4>Related Products</h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="top-products-item">
                                        <div class="products-image">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/top-products/top-products-1.jpg')}}" alt="image"></a>

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

                                <div class="col-lg-6 col-md-6">
                                    <div class="top-products-item">
                                        <div class="products-image">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/top-products/top-products-2.jpg')}}" alt="image"></a>

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

                                <div class="col-lg-6 col-md-6">
                                    <div class="top-products-item">
                                        <div class="products-image">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/top-products/top-products-3.jpg')}}" alt="image"></a>

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

                                <div class="col-lg-6 col-md-6">
                                    <div class="top-products-item">
                                        <div class="products-image">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/top-products/top-products-4.jpg')}}" alt="image"></a>

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
                            </div>
                        </div>
                    -->
                    </div>


                </div>
            </div>
        </section>
        <!-- End Product Details Area -->

        <!-- Start Featured Products Area -->
        <!--
        <section class="featured-products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Featured  Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-1.jpg')}}" alt="image"></a>

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

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-2.jpg')}}" alt="image"></a>

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

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-3.jpg')}}" alt="image"></a>

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

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-4.jpg')}}" alt="image"></a>

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

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-5.jpg')}}" alt="image"></a>

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

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-6.jpg')}}" alt="image"></a>

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

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-7.jpg')}}" alt="image"></a>

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
                                    <a href="shop-details.html">Pea-nut</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$65.00</span>
                                    <span class="old-price">$156.00</span>
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

                    <div class="col-lg-3 col-md-6">
                        <div class="featured-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{asset('assets/img/featured-products/featured-products-8.jpg')}}" alt="image"></a>

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
                                    <a href="shop-details.html">Mint</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$49.00</span>
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
                </div>
            </div>
        </section>
    -->
        <!-- End Featured Products Area -->
    </div>
@endsection
@section('script-tag')
    <script></script>
@endsection
