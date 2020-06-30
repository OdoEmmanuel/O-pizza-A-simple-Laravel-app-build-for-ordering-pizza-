@extends('layouts.front')

@section('page')
      <div class="container-fluid">
            <div class="row bg-border-color medium-padding60">
                  <div class="container">
                        <div class="row">
                           <div class="col-lg-12"> 
                              <div class="cart">
                                    <h2 class="order-title align-center mb-3">In Your Shopping Cart: <span class="c-primary" style="color: #f26827;"> {{ Cart::content()->count() }} items</span></h2>
                              </div>
                              <form action="#" method="post" class="cart-main">
                                    <table class="table table-reponsive table-bordered " >
                                    <thead style="background: #f26827;">
                                    <tr>
                                          <th class="product-remove">&nbsp;</th>
                                          <th class="product-thumbnail" >Product</th>
                                          <th class="product-price text-center">Price</th>
                                          <th class="product-quantity text-center">Quantity</th>
                                          <th class="product-subtotal text-center">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Cart::content() as $pdt)
                                          <tr class="cart_item">
                                                <td class="product-remove">
                                                      <a href="{{ route('cart.delete', ['id' => $pdt->rowId ]) }}" class="product-del remove" title="Remove this item">
                                                      <i class="seoicon-delete-bold"></i>
                                                      </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                      <div class="cart-product__item">
                                                      <a href="/">
                                                            <img src="{{ asset($pdt->model->image) }}" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image img-responsive img-thumbnail" width="150px" height="150px" >
                                                      </a>
                                                      <div class="cart-product-content">
                                                            <h5 class="cart-product-title">{{ $pdt->name }}</h5>
                                                      </div>
                                                      </div>
                                                </td>
                                                <td class="product-price">
                                                      <h5 class="price amount">${{ $pdt->price }} | &euro;{{ number_format($pdt->price * 0.888243, 2) }}</h5>
                                                </td>
                                                <td class="product-quantity">
                                                         <div class="quantity">
                                                      <a href="{{ route('cart.decr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}" class="quantity-minus">-</a>
                                                            <input title="Qty" class="email input-text text" type="text" value="{{ $pdt->qty }}" placeholder="1" readonly>
                                                      <a href="{{ route('cart.incr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}" class="quantity-plus">+</a>
                                                      </div>
                                                </td>
                                                <td class="product-subtotal">
                                                      <h5 class="total amount">${{ $pdt->total() }} | &euro;{{ number_format($pdt->total() * 0.888243, 2) }}</h5>
                                                </td>
                                          </tr>
                                    @endforeach
  
                                    </tbody>
                                    </table>
                              </form>
                              <div class="cart-total">
                                    <h3 class="cart-total-title">Cart Totals</h3>
                                    <h5 class="cart-total-total">Total: <span class="price">${{ Cart::total() }} | &euro;{{ number_format( Cart::total() * 0.888243, 2) }}</span></h5>
                                    <a href="{{ route('cart.checkout') }}" style="background: #f26827;" class="btn btn-small mb-4">
                                    <span class="text">Checkout</span>
                                    <span class="semicircle"></span>
                                    </a>
                              </div>
                        </div>
                        </div>
                  </div>
            </div>
      </div>
@endsection
