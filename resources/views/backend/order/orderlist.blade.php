@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Order List</h1>
    		
  		</div>
  	</div>

    <div class="card my-5">
        <div class="card-body">
            <div class="row">


                <div class="col-md-5 ">
                    <div class="form-group row">
                        <label class="form-control-label ml-3 mt-2">Start date</label>
                        <div class="col-md-12">
                            <input type="date" name="startdate" class="form-control startdate">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="form-group row">
                        <label class="form-control-label ml-3 mt-2"> End date</label>
                        <div class="col-md-12">
                            <input type="date" name="enddate" class="form-control enddate">
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="form-control-label ml-3 mt-3"> </label>
                            <div class="col-md-12 mt-3">
                                <button class="btn btn-outline-success search_date "><i class="fas fa-search"></i></button>
                            </div>  
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Voucher No</th>
    					<th>User</th>
    					<th>Total</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody class="order_search_list">
    				@php $i=1; @endphp
    				@foreach($orders as $order)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$order->voucherno}}</td>
    					<td>{{$order->user->name}}</td>
    					<td>{{$order->total}} MMK</td>
    					<td>
    						<a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Detail</a>
    						
                            <a href="#" class="btn btn-success">Confirm</a>

    						<a href="#" class="btn btn-danger">Delete</a>
    					</td>
    				</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection