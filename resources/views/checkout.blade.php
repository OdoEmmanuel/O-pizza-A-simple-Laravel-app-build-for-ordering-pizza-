@extends('layouts.front')

@section('page')
      <div class="container-fluid">
	<div class="row medium-padding60 bg-border-color">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
                                    <div class="order">
                                          <h2 class="order-title align-center">Your Order</h2>
                                          <form  action="{{ route('cart.checkout') }}" method="POST">
                                              {{ csrf_field() }}
                                          <table class="table table-reponsive table-bordered ">
                                                      <thead class="text-center">
                                                        <tr style="background: #f26827;">
                                                          <th scope="col">Product</th>
                                                          <th scope="col">Quantity</th>
                                                          <th scope="col">Total</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                         @foreach(Cart::content() as $item)
                                                        <tr class="text-center">
                                                            <td name="item"><input name ="item" id="item" type="text" class="form-control text-center" placeholder="" value="{{ $item->name }}" required readonly="readonly" ></td>
                                                            <td name="quantity"><input name ="quantity" id="quantity" type="text" class="form-control text-center" placeholder="" value="{{ $item->qty }}" readonly="readonly"> </td>

                                                          <td name="amount"><input name ="amount" id="amount" type="text" class="form-control text-center" placeholder="" value="${{ number_format($item->total(),2) }} | &euro;{{ number_format($item->total() * 0.888243, 2) }}" readonly="readonly" ></td>
                                                        </tr>
                                                        @endforeach
                                                        <tr class="text-center table-secondary">
                                                            <td>Delivery Fee</td>
                                                            <td></td>
                                                            <td>${{ number_format(Cart::total() / 10, 2) }} | &euro;{{ number_format(Cart::total() * 0.888243 / 10, 2) }}</td>
                                                      </tr>
                                                      <tr class="text-center" style="background: #f26827;">
                                                                  <td>Total Amount</td>
                                                                  <td></td>
                                                                  <td>${{ (Cart::total() / 10) + number_format(Cart::total(), 2) }} | &euro;{{ (Cart::total() / 10) + number_format(Cart::total()  * 0.888243, 2) }}</td>
                                                            </tr>
                                                      </tbody>
                                                    </table>
                                    </div>
                              </div>
                           
                              <div class="col-md-12 ftco-animate mb-3">
                              
                                          <h2 class=" order-title align-center mb-4">Address Details</h2>
                                          <div class="form-group">
                                              <input type="text" name="fname" class="form-control" placeholder="First Name *" required>
                                          </div>
                                          <div class="form-group">
                                              <input type="text" name="lname" class="form-control" placeholder="Last Name *" required>
                                          </div>
                                          <div class="form-group">
                                             <input type="email" name="email" class="form-control" placeholder="Email *" required>
                                          </div>
                                          <div class="form-group">
                                              <input type="text" name="state" class="form-control" placeholder="State *" required>
                                          </div>
                                          <div class="form-group">
                                              <input type="text" name="city" class="form-control" placeholder="City *" required>
                                           </div>
                                           <div class="form-group">
                                              <input type="text" name="address" class="form-control" placeholder="Address *" required>
                                           </div>
                                          <div class="form-group">
                                             <input type="text" name="mphone" class="form-control" placeholder="Mobile Phone Number *" required>
                                          </div>
                                           <div class="form-group">
                                                <button style="background-color:#f26827; color: antiquewhite" class="form-control">Submit</button>
                                          </div>
                              </div>
                              </form>
                       </div>
			</div>
	    </div>
     </div>
</div>
@endsection