@extends('layouts.front')

@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-12  " >
            <div class="panel panel-default">
                <div class="panel-heading h2 my-4 text-center">Dashboard</div>

                <div class="panel-body">
                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                              <label for="image">Price</label>
                              <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                        </div>
                        <div class="form-group">
                              <label for="image">Image</label>
                              <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                              <button style="background-color:#f26827; color: antiquewhite" class="form-control">Save Product</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
