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
                            <span class="unit-amount">{{$item['productInfo']->price}}</span>
                        </td>
                        <td class="product-quantity">
                            <div class="input-counter">
                                <span class="minus-btn">
                                    <i class='bx bx-minus'></i>
                                </span>
                                <input type="text" value="{{$item['quanty']}}">
                                <span class="plus-btn">
                                    <i class='bx bx-plus'></i>
                                </span>
                            </div>
                        </td>
                        <td class="product-subtotal">
                            <span class="subtotal-amount">${{number_format($item['price']->price)}}</span>
                            <a href="#" class="remove">
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