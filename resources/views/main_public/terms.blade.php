@extends('layouts.master')
@section('title','Terms Of Service')
@section('content')
    <section class="terms-container">
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Terms of Service</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('home-page') }}">Home</a>
                                </li>
                                <li>Terms of Service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Terms of Service Area -->
        <section class="terms-of-service-area ptb-100">
            <div class="container">
				<div class="terms-of-service-content">
					<h3>1. Welcome To Organic Farm Terms of Service</h3>
                    <p>
                        By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content. <br/>

                        Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.
                    </p>

                    <h3>2. The Best Trusted Farms For You</h3>
                    <p>We may collect different  from or about you depending on how you use the Services. Below are some examples to help you better understand the  we collect.</p>
                    <h3>3. Calculate the cost by your needs</h3>
                    <p>We use tools like cookies, web beacons, analytics services, and advertising providers to gather the  listed above. Some of these tools offer you the ability to opt out of  collection.</p>
                    <h3>4. We Provide Good Food For our country!</h3>
                    <ol>
                        <li>Responding to your questions and concerns;</li>
                        <li>Sending you administrative messages and information, including messages from instructors and teaching assistants, notifications about changes to our Service, and updates to our agreements;</li>
                        <li>Sending push notifications to your wireless device to provide updates and other relevant messages (which you can manage from the “options” or “settings” page of the mobile app);</li>
                    </ol>
                    <h3>5. We are a Professional Trusted Organic Company</h3>
                    <p>You can choose not to provide certain  to us, but you may not be able to use certain features of the Services.</p>
                    <ol>
                        <li>To stop receiving promotional communications from us, you can opt out by using the unsubscribe mechanism in the promotional communication you receive or by changing the email preferences in your account. Note that regardless of your email preference settings, we will send you transactional and relationship messages regarding the Services, including administrative confirmations, order confirmations, important updates about the Services, and notices about our policies.</li>
                        <li>The browser or device you use may allow you to control cookies and other types of local  storage. Your wireless device may also allow you to control whether location or other  is collected and shared. You can manage Adobe’s LSOs through their Website Storage Settings panel.</li>
                        <li>To get information and control cookies used for tailored advertising from participating companies, see the consumer opt-out pages for the Network Advertising Initiative and Digital Advertising Alliance, or if you’re located in the European Union, visit the Your Online Choices site. To opt out of Google’s display advertising or customize Google Display Network ads, visit the Google Ads Settings page. To opt out of Taboola’s targeted ads, see the Opt-out Link in their Cookie Policy.</li>
                        <li>To update  you provide directly, log into your account and update your account at any time.</li>
                    </ol>
                    <h3>6. Our Policy Concerning Children</h3>
                    <p>We recognize the privacy interests of children and encourage parents and guardians to take an active role in their children online activities and interests.</p>
				</div>
            </div>
        </section>
        <!-- End Terms of Service Area -->

        <!-- Start Newsletter Area -->
        <div class="newsletter-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h2>Subscribe To Our Newsletter</h2>
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
    </section>
@endsection
@section('script-tag')
    <script></script>
@endsection
