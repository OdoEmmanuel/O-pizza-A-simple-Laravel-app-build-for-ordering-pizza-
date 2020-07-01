@extends('layouts.front')

@section('page')
<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading h2 my-4 text-center">Dashboard</div>

                <div class="panel-body">
                    <form action="{{ route('products.update', ['id' => $product->id ]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="image">Price</label>
                              <input type="number" name="price" value="{{ $product->price }}" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="image">Image</label>
                              <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                              <button class="form-control btn btn-success" style="background: #f26827;">Save Product</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
