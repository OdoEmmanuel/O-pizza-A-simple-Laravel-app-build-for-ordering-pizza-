@extends('layouts.front')

@section('page')

      <div class="container">
            <div class="row medium-padding120">
                  <div class="product-details">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="product-details-thumb">
                                    <div class="swiper-wrapper">
                                    <div class="product-details-img-wrap swiper-slide">
                                          <img src="{{ asset($product->image) }}" alt="product" data-swiper-parallax="-10">
                                    </div>
                              </div>
                        </div>
                        </div>


                        <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                        <div class="product-details-info">
                              <div class="product-details-info-price">${{ number_format($product->price,2) }} | &euro;{{ number_format($product->price * 0.888243, 2) }}</div>
                              <h3 class="product-details-info-title">{{ $product->name }}</h3>
                              <p class="product-details-info-text">{{ $product->description }}
                              </p>

                              <form action="{{ route('cart.add') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="quantity">
                                          <a href="#" class="quantity-minus quantity-minus-d">-</a>
                                          <input title="Qty" class="email input-text qty text" name="qty" type="text" value="1">
                                          <a href="#" class="quantity-plus quantity-plus-d">+</a>
                                    </div>

                                    <input type="hidden" name="pdt_id" value="{{ $product->id }}">

                                    <button class="btn btn-medium" style="background: #f26827;">
                                          <span class="text">Add to Cart</span>
                                          <i class="seoicon-commerce"></i>
                                          <span class="semicircle"></span>
                                    </button>
                              </form>
                        </div>
                        </div>
                  </div>
            </div>
      </div>

@endsection