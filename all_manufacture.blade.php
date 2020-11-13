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
							  <th>Manufature ID</th>
							  <th>Manufacture Name</th>
							  <th>Manufacture Descripton</th>
							 
							  <th>Actions</th>
						  </tr>
					  </thead> 
                 @foreach( $all_manufacture_info as $v_manufacture)
					  <tbody>
						<tr>
						<td>{{ $v_manufacture->manufacture_id }}</td>
						<td class="center">{{ $v_manufacture->manufacture_name }}</td>
						<td class="center">{{$v_manufacture->manufacture_description}}</td>

						

						<td class="center">
                           

							<a class="btn btn-info" href="{{URL::to('/edit-manufacture/'.$v_manufacture->manufacture_id)}}">
								<i class="halflings-icon white edit"></i>  
							</a>
							<a class="btn btn-danger" href="{{URL::to('/delete-manufacture/'.$v_manufacture->manufacture_id)}}" id="delete">
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