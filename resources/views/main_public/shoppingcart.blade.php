
@extends('layouts.master')
@section('title','Cart')
@section('style')
<style>
    #cart-icon {
        display: none;
    }
</style>
@endsection
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
                                                <tr class="product-line">
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="assets/img/product/{{$item['productInfo']->thumbnail}}" alt="item">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="shop-details.html">{{$item['productInfo']->name}}</a>
                                                    </td>
                                                    <td class="product-price">              
                                                        <span class="unit-amount">{{number_format($item['productInfo']->price, 2)}}</span>
                                                        <span>$</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <div class="input-counter">
                                                            <span class="minus-btn" id="decrease">
                                                                <i class='bx bx-minus'></i>
                                                            </span>
                                                            <input onkeypress='javascript: return isNumber(event)' autocomplete='off' class="quantity" min="1" data-id="{{$item['productInfo']->id}}" id="quanty-item-{{$item['productInfo']->id}}" type="text" value="{{$item['quanty']}}">
                                                            <span class="plus-btn" id="increment">
                                                                <i class='bx bx-plus'></i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">              
                                                        <span class="subtotal-amount" id="refresh-section">{{number_format($item['price'], 2)}}</span>
                                                        <span>$</span>
                                                        <a href="#" class="remove">
                                                            <i class='bx bx-trash' onclick="DeleteListItemCart({{$item['productInfo']->id}})"></i>
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
                                        <a href="#" class="default-btn edit-all">
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
                                            <span>$</span>
                                            <span class="totals-value" id="cart-subtotal">{{number_format(Session::get('Cart')->totalPrice, 2)}}</span>
                                        </li>
                                        <li>Shipping
                                            <span class="totals-value" id="cart-shipping">Free Shipping</span>
                                        </li>
                                        <li>Total
                                            <span>$</span>
                                            <span class="totals-value" id="cart-total"><b>{{number_format(Session::get('Cart')->totalPrice, 2)}}</b></span>
                                        </li>
                                    </ul>
                                    <a href="{{route('checkout-page')}}" class="default-btn">
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
                alertify.error('Delete Success');
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
            $("#list-cart").html(response);

            $('.input-counter').each(function() {
                var spinner = jQuery(this),
                input = spinner.find('input[type="text"]'),
                btnUp = spinner.find('.plus-btn'),
                btnDown = spinner.find('.minus-btn'),
                min = input.attr('min'),
                max = input.attr('max');

                btnUp.on('click', function() {
                    var oldValue = parseFloat(input.val());
                    if (oldValue >= max) {
                        var newVal = oldValue;
                    } else {
                        var newVal = oldValue + 1;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });
                btnDown.on('click', function() {
                    var oldValue = parseFloat(input.val());
                    if (oldValue <= min) {
                        var newVal = oldValue;
                    } else {
                        var newVal = oldValue - 1;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });
		    });
        }

        $(".edit-all").on("click", function(){
            var lists = [];
            $("table tbody tr td").each(function(){
                $(this).find("input").each(function(){
                    var element = { key: $(this).data("id"), value: $(this).val() };
                    lists.push(element);
                });
            });
            $.ajax({
                url: 'Save-All',
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "data": lists
                }
            }).done(function(response){
                location.reload();
            });
        });

        function isNumber(evt) {
            var iKeyCode = (evt.which) ? evt.which : evt.keyCode
            if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
                return false;
            
            return true;
        };
        
        $(document).ready(function() {
            /* Set rates + misc */
            
            var fadeTime = 300;

            $('.input-counter input').change(function() {
                updateQuantity(this);
            });

            /* Recalculate cart */
            
            function recalculateCart() {  
                var subtotal = 0;
              /* Sum up row totals */
              $('.product-line').each(function() {
                subtotal += parseFloat($(this).children().children('.product-subtotal .subtotal-amount').text());    
                console.log($(this).children().children('.product-subtotal .subtotal-amount').text());        
              });
              /* Calculate totals */
              var total = subtotal + 10;
              console.log(total);
              /* Update totals display */
              $('.totals-value').fadeOut(fadeTime, function() {
                $('#cart-subtotal').html(subtotal.toFixed(2));
                $('#cart-total').html(total.toFixed(2));
                if (total == 0) {
                  $('.checkout').fadeOut(fadeTime);
                } else {
                  $('.checkout').fadeIn(fadeTime);
                }
                $('.totals-value').fadeIn(fadeTime);
              });
            }

            /* Update quantity */
            function updateQuantity(quantityInput) {
              /* Calculate line price */
              var productRow = $(quantityInput).parent().parent().parent();
              var price = parseFloat(productRow.children().children('.unit-amount').text());
              var quantity = $(quantityInput).val();
              var linePrice = price * quantity;
            
            
              /* Update line price display and recalc cart totals */
              productRow.children().children('.product-subtotal .subtotal-amount').each(function() {
                
                $(this).fadeOut(fadeTime, function() {
                  $(this).text(linePrice.toFixed(2));
                  recalculateCart();
                  $(this).fadeIn(fadeTime);     
                });
                
              });
            }
            
            });
        
        
    </script>
@endsection
