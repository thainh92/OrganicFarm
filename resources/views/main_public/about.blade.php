@extends('layouts.master')
@section('title', 'About')
@section('content')
    <section class="about-container">
        <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>About Us</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('home-page') }}">Home</a>
                                </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start About Area -->
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h3>About Us</h3>
                            <p>
                                Health is the wholeness and integrity of living systems. In a time where humans are taking
                                away the goodness of nature, we strive to turn the wheel full circle by preserving it. Our
                                philosophy is based on the principles of health, ecology, fairness, and care. We are making
                                an effort towards a sustainable agro-ecosystem that ensures soil & water conservation and
                                reduced pollution.<br />
                                Organic is not just a healthy way of eating but also one which is guilt free. When we take
                                care of the earth, it takes care of us too. Founded on the belief that nature need not lose
                                out in our quest for advancement, Organic Tattva strives to support a wholesome life print.
                                We do our bit for Mother Nature. And by making just one right change in life, so can
                                everyone else. We can change the course of the things to come. Come to be part of the
                                Organic Tattva story.
                            </p>

                            <ul class="about-list">
                                <li><i class='bx bx-check'></i> Natural Process</li>
                                <li><i class='bx bx-check'></i> Premium Quality</li>
                                <li><i class='bx bx-check'></i> Harvest Everyday</li>
                                <li><i class='bx bx-check'></i> 100% Organic</li>
                                <li><i class='bx bx-check'></i> Fast Delivery</li>
                            </ul>

                            <div class="about-btn">
                                <a href="{{ route('about-page') }}" class="default-btn">About Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/img/client/aboutus.jpg" alt="image" class="about-image-child">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Fun Facts Area -->
        <section class="fun-facts-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="1145">00</span>
                            </h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="86">00</span>
                            </h3>
                            <p>Awards Wins</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="548">00</span>
                            </h3>
                            <p>Expert Member</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="55">00</span>
                            </h3>
                            <p>Years of Serving</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fun Facts Area -->

        <!-- Start Client Area -->
        <section class="client-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Client’s Feedback</h2>
                </div>

                <div class="client-slider owl-carousel owl-theme">
                    <div class="client-item">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>

                        <p>Your level of customer service is exemplary and a rarity in this age where customers are not
                            always treated with the seriousness that they deserve. Even though the mistake concerning the
                            sell-by-date was down to my misinterpretation, your handling of the situation was totally
                            appreciated. I will continue to use and recommend NHR Organic Oils to my friends and/or anyone
                            who is interested in purchasing good quality base and essential oils. Many thanks and well done
                            for setting such a high standard of customer service</p>

                        <div class="client-info">
                            <img src="assets/img/client/client-1.png" alt="image">
                            <h3>Jacinda Meri</h3>
                            <span>Founder</span>
                        </div>
                    </div>

                    <div class="client-item">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>

                        <p>Just wanted to say I absolutely love your OILS they are my top favourites. I spoke to the man who
                            is behind the company many years ago before he launched it. I must congratulate him on his taste
                            and aromas, BEST OF THE BEST! and thank you for the orange oil complimentary ! I am so excited
                            to use these oils, my favourite is peppermint! Thank you order received with grattitude</p>

                        <div class="client-info">
                            <img src="assets/img/client/client-2.jpg" alt="image">
                            <h3>Miraj Alex</h3>
                            <span>Organic Farmer</span>
                        </div>
                    </div>

                    <div class="client-item">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>

                        <p>An aromatherapist friend told me about NHR, and I immediately fell in love with them. I haven’t
                            bought any other brands since! Our company Raw Living promotes the raw foods lifestyle to people
                            in many ways, and one of these is our own brand range of foods. Our most popular line is the raw
                            chocolate bars – this is chocolate that is healthy as it is delicious, and many people become
                            addicted (in a good way!). We use NHR oils in two of our bars: the Hi-Buzz, which contains
                            orange oil as well as pollen and Chinese herbs, and Hi-Lovers, which contains rose oil, and
                            other plant foods said to open the heart chakra. We also put the oils in several of our raw
                            chocolate cakes: my favourite is the Lavender and Purple corn cake.</p>

                        <div class="client-info">
                            <img src="assets/img/client/client-3.jpg" alt="image">
                            <h3>Edward Bold</h3>
                            <span>Agriculture Farmer</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Area -->

        <!-- Start Team Area -->
        <section class="team-area pt-100 pb-70">
            <div class="container">
                <!-- <div class="section-title">
                    <h2>OUR TEAM</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="assets/img/team/team-1.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/organicfarmfoods/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/toforganic" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/mozingomary/organic-farming/" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://in.linkedin.com/company/letsgrowfood" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/theorganicfarm/">
                                            <img src="{{ asset('assets/img/instagram/instagram1.jpg') }}" alt="image">
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div class="content">
                                <h3>Alex Maxwel</h3>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="assets/img/team/team-2.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/organicfarmfoods/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/toforganic" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/mozingomary/organic-farming/" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://in.linkedin.com/company/letsgrowfood" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/theorganicfarm/">
                                            <img src="{{ asset('assets/img/instagram/instagram1.jpg') }}" alt="image">
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div class="content">
                                <h3>Justin Roberto</h3>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="assets/img/team/team-3.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                    <li>
                                        <a href="https://www.facebook.com/organicfarmfoods/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/toforganic" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/mozingomary/organic-farming/" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://in.linkedin.com/company/letsgrowfood" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/theorganicfarm/">
                                            <img src="{{ asset('assets/img/instagram/instagram1.jpg') }}" alt="image">
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div class="content">
                                <h3>Louis Agassiz</h3>
                                <span>Organic Farmer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="assets/img/team/team-4.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/organicfarmfoods/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/toforganic" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/mozingomary/organic-farming/" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://in.linkedin.com/company/letsgrowfood" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/theorganicfarm/">
                                            <img src="{{ asset('assets/img/instagram/instagram1.jpg') }}" alt="image">
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div class="content">
                                <h3>Carl Anderson</h3>
                                <span>Agriculturist</span>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- End Team Area -->

        <!-- Start Pricing Area -->
        <section class="pricing-area pb-70">
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

        <!-- Start Why Choose Area -->
        <section class="why-choose-area pt-100">
            <div class="container">
                <div class="why-choose-item">
                    <div class="content">
                        <span>Why Choose Us</span>
                        <h3>We are Ensure of These Types</h3>
                    </div>

                    <div class="inner-content">
                        <div class="icon">
                            <i class="flaticon-leaf"></i>
                        </div>
                        <h4>Organic</h4>
                        <p>To help people live a better, healthier, and wholesome life by providing them with 100%
                            certified, authentic organic food.</p>
                    </div>

                    <div class="inner-content">
                        <div class="icon">
                            <i class="flaticon-heart"></i>
                        </div>
                        <h4>Fast and Easy</h4>
                        <p>Large service and shipping team serving all days of the week</p>
                    </div>

                    <div class="inner-content">
                        <div class="icon">
                            <i class="flaticon-plant"></i>
                        </div>
                        <h4>High Quality</h4>
                        <p>You can enjoy food that is hygienically packed and retains all the benefits of organic food,
                            without any chemical interference. We’ve always been supportive of food that is more tasty,
                            nutritious and holistic. Having seen the highest numbers when it comes to customers talking
                            about the benefit of shifting to a more organic diet, we believe it’s time for a change and that
                            time is now!.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Choose Area -->

        <!-- Start Features Area -->
        <!--
            <section class="features-area pt-100 pb-70">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="features-image">
                                <img src="assets/img/features.png" alt="image">
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
        -->
        <!-- End Features Area -->

        <!-- Start Newsletter Area -->
        <div class="newsletter-area ptb-100">
            <div class="container">
                <!-- <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h2>Subscribe To Our Newsletter</h2>
                            <p></p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form class="newsletter-form">
                            <input type="email" class="input-newsletter" placeholder="Enter Email Address" name="EMAIL"
                                required autocomplete="off">

                            <button type="submit">Subscribe Now</button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- End Newsletter Area -->

        <!-- Start Partner Area -->
        <!--
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
        -->
        <!-- End Partner Area -->
    </section>
@endsection
@section('script-tag')
    <script></script>
@endsection
