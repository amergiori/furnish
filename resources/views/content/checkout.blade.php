@extends('master')
@section('content')
<div class="row">
    {{ Breadcrumbs::render('checkout') }}
</div>

<!-- shopping-cart -->
<div id="shopping-cart">
    <div class="container">
      <div class="row">
        <div class="col-10">
          @if ($cart)
          <!-- shopping cart table -->
          <table class="shopping-cart">
              <thead>
                  <tr>
                      {{-- <th class="image">&nbsp;</th> --}}
                      <th>Product</th>
                      <th>Price</th>
                      <th class="text-center">Quantity</th>
                      <th>Total</th>
                      <th class="text-center">Remove</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($cart as $item)
                <tr class="cart-item">
                    {{-- <td class="image"><a href="#"><img src="{{asset('images/products/' . $item['image'])}}" alt=""></a></td> --}}
                    <td>{{ $item['name'] }}</td>
                    <td>${{ $item['price'] }}</td>
                    <td class="text-center">
                      <a href="{{ url('shop/update-cart?productID=' . $item['id']) . '&op=minus' }}" class="update-cart-btn"><i class="fas fa-minus-circle"></i></a>
                      <input size="1" type="text" data-id="{{ $item['id'] }}"  min="0"  value="{{ $item['quantity'] }}" class="text-center">
                      <a href="{{ url('shop/update-cart?productID=' . $item['id']) . '&op=plus' }}" class="update-cart-btn"><i class="fas fa-plus-circle"></i></a>
                    </td>
                    <td>${{ $item['price'] * $item['quantity'] }}</td>
                    <td class="remove text-center"><a href="{{ url('shop/checkout-remove-item?productID=' . $item['id']) }}" class="btn btn-danger-filled x-remove justify-content-center">×</a></td>
                </tr>
                @endforeach
          </table>
          <!-- / shopping cart table -->
        </div>
      </div>

            <div class="col-sm-6 cart-total">
                <h4>Cart Total</h4>
                <p>Subtotal: <span>${{ Cart::getTotal() }}</span></p>
                <p>Shipping: <span>Free</span></p>
                <p>Total: <span>${{ Cart::getTotal() }}</span></p>
            <a href="{{ url('shop/order-now') }}" class="btn btn-primary-filled btn-rounded"><i class="lnr lnr-exit"></i> <span><b>Order Now</b></span></a>
            </div><!-- / cart-total -->

            <div class="col-sm-3 cart-checkout">
                <a href="{{ url('shop/clear-cart') }}" class="btn btn-default-filled btn-rounded "><i class="lnr lnr-cart"></i> <span><b>Clear Cart</b></span></a>
            </div><!-- / cart-checkout -->
          @else
          <div id="empty-cart">
            <div class="col-sm-6 category">
              <h3>Cart is empty... </h3>
              &nbsp;&nbsp;&nbsp;&nbsp;<b>Please visit our shop</b></p>
            </div>
              <div class="col-sm-6 category">
                <a href="{{ url('shop') }}">
                      <div class="category-item">
                          <img src="{{ asset('images/products/couches/couch5.jpg') }}" alt="shop">
                          <div class="overlay">
                              <div class="caption">
                                  <h4>Shop</h4>
                              </div>
                          </div>
                      </div><!-- / category-item -->
                  </a>
              </div>
          </div>
          @endif
        </div><!-- / row -->
    </div><!-- / container -->
</div>
<!-- / shopping-cart -->
@endsection 