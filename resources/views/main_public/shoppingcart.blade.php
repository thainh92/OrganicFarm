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
                        <form id="list-cart">
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
                                        @if(Session::has("Cart") != null)
                                            @foreach(Session::get('Cart')->products as $item)
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="assets/img/product/{{$item['productInfo']->thumbnail}}" alt="item">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="shop-details.html">{{$item['productInfo']->name}}</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="unit-amount">${{number_format($item['productInfo']->price)}}</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <div class="input-counter">
                                                            <span class="minus-btn">
                                                                <i class='bx bx-minus'></i>
                                                            </span>
                                                            <input id="quanty-item-{{$item['productInfo']->id}}" type="text" value="{{$item['quanty']}}">
                                                            <span class="plus-btn">
                                                                <i class='bx bx-plus'></i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="subtotal-amount">${{number_format($item['price'])}}</span>
                                                        <a href="#" class="remove" onclick="DeleteListItemCart({{$item['productInfo']->id}})">
                                                            <i class='bx bx-save'></i>
                                                        </a>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <a href="#" class="remove" onclick="DeleteListItemCart({{$item['productInfo']->id}})">
                                                            <i class='bx bx-trash'></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
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
                                @if(Session::has("Cart") != null)
                                    <ul>
                                        <li>Subtotal 
                                            <span>${{number_format(Session::get('Cart')->totalPrice)}}</span>
                                        </li>
                                        <li>Shipping 
                                            <span>$10</span>
                                        </li>
                                        <li>Total 
                                            <span><b>${{number_format(Session::get('Cart')->totalPrice) + 10}}</b></span>
                                        </li>
                                    </ul>
                                    <a href="#" class="default-btn">
                                        Proceed to Checkout
                                    </a>
                                @endif
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
    <script>
        function DeleteListItemCart(id) {
            $.ajax({
                url: 'Delete-Item-List-Cart/'+id,
                type: 'GET',
            }).done(function(response){
                RenderListCart(response);
                alertify.success('Add Success');
            });
        }
        
        function SaveListItemCart(id) {
            $.ajax({
                url: 'Save-Item-List-Cart/'+id+'/'+$("#quanty-item-"+id).val(),
                type: 'GET',
            }).done(function(response){
                RenderListCart(response);
                alertify.success('Save Success');
            });
        }

        function RenderListCart(response) {
            $("#list-cart").empty();
            ("#list-cart").html(response);
        }


    </script>
@endsection