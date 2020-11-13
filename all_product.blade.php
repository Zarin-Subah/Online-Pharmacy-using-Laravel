@extends('admin_layout')
@section('admin_content')

          <p class="alert-success">
			<?php
			$message=Session::get('message');
			if($message)
			{
				echo $message;
				Session::put('message',null);
			}
           ?>
		</p>
		<div class="row-fluid sortable">		
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable datatable">
					  <thead>
						  <tr>
							  <th>Product ID</th>
							  <th>Product Name</th>
							  <th>Product Image</th>
							  <th>Product price</th>
							  <th>category Name</th>
							  <th>manufactue Name</th>
							  
						  </tr>
					  </thead> 
                 @foreach( $all_product_info as $v_product)
					  <tbody>
						<tr>
						<td>{{ $v_product->product_id }}</td>
						<td class="center">{{ $v_product->product_name }}</td>
                       <td> <img src="{{URL::to($v_product->product_image)}}" style="height: 80px; width: 80px;"></td>
                        <td class="center">{{ $v_product->product_price }} Tk</td>
                        <td class="center">{{ $v_product->category_name }}</td>
                        <td class="center">{{ $v_product->manufacture_name }}</td>
						<td class="center">
							
						</td>

						<td class="center">
                            
							<a class="btn btn-danger" href="{{URL::to('/delete-product/'.$v_product->product_id)}}" id="delete">
								<i class="halflings-icon white trash"></i> 
							</a>
						</td>
						</tr>				
					  </tbody>
                   @endforeach
				  </table>            
				</div>
			</div><!--/span-->
		
		</div><!--/row-->

@endsection