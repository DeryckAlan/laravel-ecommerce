@extends('layouts.front')

@section('title')
	Checkout
@endsection

@section('content')
	<div class="py-3 mb-4 shadow-sm bg-warning border-top">
		<div class="container">
			<h6 class="mb-0">
				<a href="{{ url('/') }}">
					Home
				</a>/
				<a href="{{ url('cart') }}">
					Cart
				</a>
				<a href="{{ url('checkout') }}">
					Checkout
				</a>
			</h6>
		</div>
	 </div>

	<div class="container mt-3">
		<form action="{{ url('place-order') }}" method="POST">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-7">
					<div class="card">
						<div class="card-body">
							<h6>Basic Details</h6>
							<hr>
							<div class="row checkout-form">
								<div class="col-md-6">
									<label for="firstName">First Name</label>
									<input type="text" class="form-control firstname" value="{{ Auth::user()->name }}" name="fname" placeholder="Enter Fist Name">
									<span id="fname_error" class="text-danger"></span>
								</div>
								<div class="col-md-6">
									<label for="">Last Name</label>
									<input type="text" class="form-control lastname" value="{{ Auth::user()->lname }}"  name ="lname" placeholder="Enter Last Name">
									<span id="lname_error" class="text-danger"></span>
								</div>
								<div class="col-md-6 tm-3">
									<label for="">Email</label>
									<input type="text" class="form-control email" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Email">
									<span id="email_error" class="text-danger"></span>
								</div>
								<div class="col-md-6 mt-3">
									<label for="">Phone Number</label>
									<input type="text" class="form-control phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter Phone Number">
									<span id="phone_error" class="text-danger"></span>
								</div>
								<div class="col-md-6 mt-3">
									<label for="">Address 1</label>
									<input type="text" class="form-control address1" value="{{ Auth::user()->address1 }}" name="address1" placeholder="Enter Address 1">
									<span id="address1_error" class="text-danger"></span>
								</div>
								<div class="col-md-6 mt-3">
									<label for="">Address 2</label>
									<input type="text" class="form-control address2" value="{{ Auth::user()->address2 }}" name="address2" placeholder="Enter Address 2">
									<span id="address2_error" class="text-danger"></span>
								</div>
								<div class="col-md-6 mt-3">
									<label for="">City</label>
									<input type="text" class="form-control city" value="{{ Auth::user()->city }}" name="city" placeholder="Enter City">
									<span id="city_error" class="text-danger"></span>
								</div>
								<div class="col-md-6 mt-3">
									<label for="">State</label>
									<input type="text" class="form-control state" value="{{ Auth::user()->state }}" name="state" placeholder="Enter State">
									<span id="state_error" class="text-danger"></span>
								</div>
								<div class="col-md-6 mt-3">
									<label for="">Country</label>
									<input type="text" class="form-control country" value="{{ Auth::user()->country }}" name="country" placeholder="Enter Country">
									<span id="country_error" class="text-danger"></span>
								</div>
								<div class="col-md-6 mt-3">
									<label for="">Pin Code</label>
									<input type="text" class="form-control pincode" value="{{ Auth::user()->pincode }}" name="pincode" placeholder="Enter Pin Code">
									<span id="pincode_error" class="text-danger"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5"> 
				<div class="card">
					@if($cartitems->count() >= 0)
						<div class="card-body">
							<h4>Order Details</h4>
							<hr>
							<table class="table table-striped table-bordered">
								<thead>
									<th>Product</th>
									<th>Quantity</th>
									<th>Price</th>
								</thead>
								<tbody>
									@foreach($cartitems as $item)
									<tr>
										<td>{{ $item->products->name }}</td>
										<td>{{ $item->prod_qty }}</td>
										<td>{{ $item->products->selling_price}}</td>
									</tr>
									@endforeach
								</tbody>
							</table> 
							<hr>
							<button type="submit" class="btn btn-primary w-100 btn-success">Place Order | COD </button>
							<button type="button" class="btn btn-primary w-100 mt-3 rozorpay_btn">Pay</button>
						</div>
					@else
						<div class="card-body text-center">
			 				<h2>Your <i class="fa fa-shopping-cart"></i> Cart is empty</h2>
			 				<a href="{{ url('category') }}" class="btn btn-outline-primary float-end">Continue Shopping</a>
			 			</div>
			 		@endif					
				</div>
			</div>
			</div>
		</form>
	</div>
@endsection