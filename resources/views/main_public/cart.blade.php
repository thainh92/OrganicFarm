@extends('layouts.master')
@section('title','Cart')
@section('content')
    <section class="cart-container">
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Cart</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('home-page') }}">Home</a>
                                </li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Cart Area -->
		<section class="cart-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form>
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="assets/img/top-products/top-products-1.jpg" alt="item">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-details.html">Darling Oranges</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$455.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class='bx bx-minus'></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$455.00</span>
                                                <a href="#" class="remove">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="assets/img/top-products/top-products-2.jpg" alt="item">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-details.html">Strawberry</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$541.50</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class='bx bx-minus'></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$541.50</span>
                                                <a href="#" class="remove">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="assets/img/top-products/top-products-3.jpg" alt="item">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-details.html">Seasoned Tomatoes</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$140.50</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class='bx bx-minus'></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$140.50</span>
                                                <a href="#" class="remove">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="assets/img/top-products/top-products-4.jpg" alt="item">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-details.html">Seasoned Carrot</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$547.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class='bx bx-minus'></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$547.00</span>
                                                <a href="#" class="remove">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-buttons">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-sm-7 col-md-7">
                                        <a href="shop-1.html" class="default-btn">
                                            Back to Shop
                                        </a>
                                    </div>
                                    <div class="col-lg-5 col-sm-5 col-md-5 text-right">
                                        <a href="#" class="default-btn">
                                            Update Cart
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-totals">
                                <h3>Cart Totals</h3>
                                <ul>
                                    <li>Subtotal 
                                        <span>$1683.50</span>
                                    </li>
                                    <li>Shipping 
                                        <span>$30.00</span>
                                    </li>
                                    <li>Total 
                                        <span><b>$1713.50</b></span>
                                    </li>
                                </ul>
                                <a href="#" class="default-btn">
                                    Proceed to Checkout
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
		<!-- End Cart Area -->
    </section>
@endsection
@section('script-tag')
    <script></script>
@endsection