@extends('layouts.front')
@section('page')

<div class="container mx-auto mb-4">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <h2 class="order-title align-center mb-3">List Of Order</span></h2>

                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" width="80%">
                        <thead style="background: #f26827;">
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Home Address</th>
                            <th>Mobile Number</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                             @foreach($checkouts as $checkout)
                          <tr>
                            <td>{{ $checkout->first_name }}</td>
                            <td>{{ $checkout->last_name }}</td>
                            <td>{{ $checkout->email }}</td>
                            <td>{{ $checkout->state }}</td>
                            <td>{{ $checkout->city }}</td>
                            <td>{{ $checkout->address }}</td>
                            <td>{{ $checkout->mobile_phone }}</td>
                            <td>{{  $checkout->item }}</td>
                            <td>{{  $checkout->quantity }}</td>
                            <td>{{  $checkout->amount }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
