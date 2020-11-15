@extends('shop')
@section('content')


<div class="container">
			<div class="heading">
				<h3>Choose Your payment method</h3>
				
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Visa Card</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Paypal</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Cash on delivery</label>
							</li>
						</ul>
						
						
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
			</div>


@endsection