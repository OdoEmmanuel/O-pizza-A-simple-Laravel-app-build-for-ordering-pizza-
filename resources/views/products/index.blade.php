@extends('layouts.front')

@section('page')
<div class="container mx-auto mb-4">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading h2 my-4 text-center">Products</div>

                <div class="panel-body">
                    <table class="table table-reponsive table-bordered ">
                        <thead  class="text-center" style="background: #f26827;">
                              <th>
                                    Name
                              </th>
                              <th colspan="2">
                                    Price
                              </th>
                              <th>
                                    Edit
                              </th>
                              <th>
                                    Delete
                              </th>
                        </thead>
                        <tbody class="text-center">
                              @foreach($products as $product)
                                    <tr>
     
                                          <td>{{ $product->name }}</td>
                                          <td>${{ number_format($product->price, 2) }}</td>
                                          <td>&euro;{{ number_format($product->price * 0.888243, 2) }}</td>
                                          <td>
                                                <a href="{{ route('products.edit', ['id' => $product->id ]) }}" class="btn btn-default btn-xs">Edit</a>
                                          </td>
                                          <td>
                                                <form action="{{ route('products.destroy', ['id' => $product->id ]) }}" method="post">
                                                      {{ csrf_field() }}
                                                      {{ method_field('DELETE') }}
                                                      <button class="btn btn-xs btn-danger">Delete</button>
                                                </form>
                                          </td>
                                    </tr>
                              @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
