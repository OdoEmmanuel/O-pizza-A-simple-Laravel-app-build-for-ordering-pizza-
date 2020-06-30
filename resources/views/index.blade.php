@extends('layouts.front')

@section('page')
    <div class="container">
            <div class="books-grid">
                    <div class="panel-heading h2 my-4 text-center">Our Menu</div>
            <div class="row mb30" id="menu">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 border">
                        <div class="books-item">
                            <div class="books-item-thumb">
                                <img src="{{ asset($product->image) }}" alt="Pizza" width="165px" height="165px">
                                <div class="overlay overlay-books"></div>
                            </div>

                            <div class="books-item-info">
                                <a href="{{ route('product.single', ['id' => $product->id ]) }}">
                                    <h5 class="books-title">{{ $product->name }}</h5>
                                </a>
                                <p class="text-dark">{{ Illuminate\Support\Str::limit($product->description),8}}
                                <a href="{{ route('product.single', ['id' => $product->id ]) }}" >
                                       <span class="books-price">More</span></p>
                                </a>

                                <div class="books-title">${{ number_format($product->price,2) }} | &euro;{{  $total_in_euros = number_format($product->price * 0.888243, 2) }}</div>
                            </div>

                            <a href="{{ route('cart.rapid.add', ['id' => $product->id ]) }}" class="btn btn-small" class="text" style="background: #f26827; border-color: #f26827">
                                <span >Add to Cart</span>
                                <i class="seoicon-commerce"></i>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row pb120">
                <div class="col-lg-12">{{ $products->links()  }}</div>
            </div>
        </div>
    </div>
@endsection