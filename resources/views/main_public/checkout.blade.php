@extends('layouts.master')
@section('title','Check out')
@section('content')
    <section class="checkout-container">
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Checkout</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Checkout Area -->
		<section class="checkout-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="user-actions">
                            <i class='bx bx-link-external'></i>
                            <span>Returning customer?
                                <a href="login.html">Click here to login</a>
                            </span>
                        </div>
                    </div>
                </div>
                <form action="{{ url('place-order') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="billing-details">
                                <h3 class="title">Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
										    <label for="validationTooltip03">Country <span class="required">*</span></label>
                                            <div class="select-box">
                                                <select class="form-control" name="country" id="validationTooltip04">
                                                    <option value="5">Vietnam</option>
                                                    <option value="1">China</option>
                                                    <option value="2">United Kingdom</option>
                                                    <option value="0">Germany</option>
                                                    <option value="3">France</option>
                                                    <option value="4">Japan</option>
                                                </select>  
                                            </div>
                                            <div class="invalid-tooltip">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="validationTooltip01">First Name <span class="required">*</span></label>
                                            <input type="text" class="form-control" name="first_name" id="validationTooltip01">
                                            <div class="invalid-tooltip">
                                                Please choose a unique and valid first name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="validationTooltip02">Last Name <span class="required">*</span></label>
                                            <input type="text" class="form-control" name="last_name" id="validationTooltip02">
                                            <div class="invalid-tooltip">
                                                Please choose a unique and valid last name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="validationTooltip03">Address <span class="required">*</span></label>
                                            <input type="text" class="form-control" name="address" id="validationTooltip03">
                                            <div class="invalid-tooltip">
                                                Please choose a unique and valid address.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email Address<span class="required">*</span></label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1">
                                            <div class="invalid-tooltip">
                                                Please provide a valid email.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="validationTooltip05">Phone <span class="required">*</span></label>
                                            <input type="text" class="form-control" name="phone" id="validationTooltip05">
                                            <div class="invalid-tooltip">
                                                Please provide a valid phone.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="order-details">
                                <h3 class="title">Your Order</h3>
                                @if(Session::has("Cart") != null)
                                    <div class="order-table table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(Session::get('Cart')->products as $item)
                                                    <tr>
                                                        <td class="product-name">
                                                            <a href="#">{{$item['productInfo']->name}}</a>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="subtotal-amount">${{number_format($item['productInfo']->price)}} x {{$item['quanty']}}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td class="total-price">
                                                        <span>Order Total</span>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="subtotal-amount" name="total">${{number_format(Session::get('Cart')->totalPrice) + 10}}</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                                <div class="payment-box">
                                    <div class="payment-method">
                                        <p>
                                            <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                            <label for="direct-bank-transfer">Direct Bank Transfer</label>
                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                        </p>
                                        <p>
                                            <input type="radio" id="paypal" name="radio-group">
                                            <label for="paypal">PayPal</label>
                                        </p>
                                        <p>
                                            <input type="radio" id="cash-on-delivery" name="radio-group">
                                            <label for="cash-on-delivery">Cash on Delivery</label>
                                        </p>
                                    </div>
                                    <button class="default-btn" type="submit">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
		<!-- End Checkout Area -->
    </section>
@endsection
@section('script-tag')
    <script>
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
              .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                  if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                  }

                  form.classList.add('was-validated')
                }, false)
              })
        })()
    </script>
@endsection
