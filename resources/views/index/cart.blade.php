@include('index.header')
<section id="cart">
    <table>
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr class="cart-car">
                <td id="remove-btn"><a href="#"> <i class="far fa-times-circle"></i></a></td>
                <td><img src="{{asset('upload')}}/{{$cars->car_img_name1}}" height="100%" width="100%"/></td>
                <td>{{$cars -> car_name}}</td>
                <td>{{$cars -> car_price}}</td>
                <td><input type="number" value="1"></td>
                <td>${{$cars -> car_price}}</td>
            </tr>
        </tbody>
    </table>
</section>

<section id="cart-add">
    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>${{$cars -> car_price}}</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>${{$cars -> car_price}}</strong></td>
            </tr>
        </table>

        <button class="btn-main">Proceed to checkout</button>
    </div>
</section>
@include('index.footer')