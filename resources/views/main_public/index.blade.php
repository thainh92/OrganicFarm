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
                                            <p>Meats produced conventionally may have a higher occurrence of bacteria resistant to antibiotic treatment. The overall risk of bacterial contamination of organic foods is the same as conventional foods.</p>
                                            <!--
                                            <div class="slider-btn">
                                                <a href="shop-1.html" class="default-btn">Our Shop</a>
                                                <a href="cart.html" class="optional-btn">Add to Cart</a>
                                            </div>
                                            -->
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="main-slider-image-wrap">
                                            <img src="assets/img/main-slider/main-slider-2.png" alt="image" class="main-slider-image-wrap-1" style="height: 1000px">

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
                                            <p>Studies have shown small to moderate increases in some nutrients in organic produce. The best evidence of a significant increase is in certain types of flavonoids, which have antioxidant properties.</p>
                                            <!--
                                            <div class="slider-btn">
                                                <a href="shop-1.html" class="default-btn">Our Shop</a>
                                                <a href="cart.html" class="optional-btn">Add to Cart</a>
                                            </div>
                                            -->
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="main-slider-image-wrap">
                                            <img src="assets/img/main-slider/main-slider-3a.jpg" alt="image" class="main-slider-image-wrap-1" style="height: 1000px">

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
                    <p>The special features on our website will help you access clean products in the fastest and most effective way.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-special-features">
                            <div class="image">
                                <img src="assets/img/special-features/1.jpg" alt="image" style="height: 600px">
                            </div>

                            <div class="content">
                                <h3>Fresh Organic Food Provides</h3>
                                <p>Organic products are grown, harvested and preserved according to best practices, resulting in fresh, delicious products, essential nutrients are preserved</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-special-features">
                            <div class="image">
                                <img src="assets/img/special-features/2.jpg" alt="image" style="height: 600px">
                            </div>

                            <div class="content">
                                <h3>Fast & Easy Food Delivery</h3>
                                <p>Enthusiastic customer care team, large shipping team, continuous service throughout the day, you can order the desired products and receive the fastest</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-special-features">
                            <div class="image">
                                <img src="assets/img/special-features/3.jpg" alt="image" style="height: 600px">
                            </div>

                            <div class="content">
                                <h3>Very Easy Payment System</h3>
                                <p>Diverse payment methods, help you pay easily, save time. You can choose to pay online by phone, reducing face-to-face contact</p>
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
                    <p>The most popular products (sorted by the number of purchases in the month)</p>
                </div>

                <div class="row">
                    @foreach($featured as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="#"><img src="{{asset('assets/img/product/'.$item->thumbnail)}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a onclick="AddCart({{$item->id}})" href="javascript:" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
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
                    <p></p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-apple"></i>
                            </div>
                            <h3>Natural Food</h3>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-nature"></i>
                            </div>
                            <h3>Biologically Safe</h3>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-forest"></i>
                            </div>
                            <h3>Biodiversity</h3>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-organic"></i>
                            </div>
                            <h3>100% Organic</h3>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-plant"></i>
                            </div>
                            <h3>Gardening</h3>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-leaf"></i>
                            </div>
                            <h3>Organic Vegetables</h3>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-heart"></i>
                            </div>
                            <h3>Fresh & Organic</h3>
                            <a href="#" class="read-btn">Read More +</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-apple"></i>
                            </div>
                            <h3>Organic Food</h3>
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
                            <img src="assets/img/features-2.png" alt="image" style="width: 900px; height: 900px;">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="features-item">
                            <div class="features-content">
                                <span>Features</span>
                                <h3>Special Product For Orgo Loving People</h3>
                                <p></p>
                            </div>

                            <div class="features-inner-content">
                                <div class="icon">
                                    <i class="flaticon-nature"></i>
                                </div>
                                <h4>Natural Products</h4>
                                <p>To help people live a better, healthier, and wholesome life by providing them with 100% certified, authentic organic food.</p>
                            </div>

                            <div class="features-inner-content">
                                <div class="icon">
                                    <i class="flaticon-leaf"></i>
                                </div>
                                <h4>Best Food For Health</h4>
                                <p>You can enjoy food that is hygienically packed and retains all the benefits of organic food, without any chemical interference. We’ve always been supportive of food that is more tasty, nutritious and holistic. Having seen the highest numbers when it comes to customers talking about the benefit of shifting to a more organic diet, we believe it’s time for a change and that time is now!.</p>
                            </div>

                            <div class="features-inner-content">
                                <div class="icon">
                                    <i class="flaticon-medal"></i>
                                </div>
                                <h4>Award-Winning Company</h4>
                                <p>Tested and recognized by USDA Organic as a reputable and quality place to sell clean food</p>
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
                    <p>The most popular products (Sorted by the number of purchases per day)</p>
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
                            <p></p>
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
                    <p>Best combo for you</p>
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
                </div>

                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="info">
                            <img src="assets/img/client/client-1.png" alt="image">
                            <h3>Ken Morris</h3>
                            <span>Organic Farmer</span>
                        </div>
                        <p>Your level of customer service is exemplary and a rarity in this age where customers are not always treated with the seriousness that they deserve. Even though the mistake concerning the sell-by-date was down to my misinterpretation, your handling of the situation was totally appreciated. I will continue to use and recommend NHR Organic Oils to my friends and/or anyone who is interested in purchasing good quality base and essential oils. Many thanks and well done for setting such a high standard of customer service.</p>

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
                        <p>Just wanted to say I absolutely love your OILS they are my top favourites.   I spoke to the man who is behind the company many years ago before he launched it. I must congratulate him on his taste and aromas, BEST OF THE BEST! and thank you for the orange oil complimentary !  I am so excited to use these oils, my favourite is peppermint!  Thank you order received with grattitude.</p>

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
                        <p>An aromatherapist friend told me about NHR, and I immediately fell in love with them. I haven’t bought any other brands since! Our company Raw Living promotes the raw foods lifestyle to people in many ways, and one of these is our own brand range of foods. Our most popular line is the raw chocolate bars – this is chocolate that is healthy as it is delicious, and many people become addicted (in a good way!). We use NHR oils in two of our bars: the Hi-Buzz, which contains orange oil as well as pollen and Chinese herbs, and Hi-Lovers, which contains rose oil, and other plant foods said to open the heart chakra. We also put the oils in several of our raw chocolate cakes: my favourite is the Lavender and Purple corn cake.</p>

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
                    <p>Share with everyone our health insights, experiences in building delicious and nutritious meals from our clean food.</p>
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
