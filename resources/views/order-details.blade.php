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
                            <a href="{{route('product-detail', $item->id)}}">{{$item['productInfo']->name}}</a>
                        </td>
                        <td class="product-total">
                            <span class="subtotal-amount">{{number_format($item['productInfo']->price)}} x {{$item['quanty']}}$</span>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td class="total-price">
                        <span>Order Total</span>
                    </td>
                    <td class="product-subtotal">
                        <span class="subtotal-amount">{{number_format(Session::get('Cart')->totalPrice) + 10}}$</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endif