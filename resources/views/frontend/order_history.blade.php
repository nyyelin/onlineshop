@extends('frontendtemplate')

@section('content')
  <!-- Subcategory Title -->
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Your Order Histories</h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container mt-5">
    
    <!-- Shopping Cart Div -->
    <div class="row mt-5 shoppingcart_div">
      <div class="col-12">
        <a href="{{route('homepage')}}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
          <i class="icofont-shopping-cart"></i>
          Continue Shopping 
        </a>
      </div>
    </div>

    <div class="row mt-5 shoppingcart_div">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th> No </th>
              <th>Date</th>
              <th> Item Photo  </th>
              <th> Name </th>
              <th> Brand </th>
              <th>Price</th>
              <th>Qty</th>
              <th>Subtotal</th>

            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($orders as $order_history)

              @foreach($order_history->items as $order_detail)
              @php
                $subtotal = $order_detail->pivot->qty * $order_detail->price;
                $order_date = date('d-m-Y',strtotime($order_history->orderdate));
                $day = date('D',strtotime($order_history->orderdate))
              @endphp
              <tr>
                <td>{{$i++}}</td>
                <td>{{$order_date}} < {{$day}} ></td>
                <td><img src="{{asset($order_detail->photo)}}" width="120px" height="100px" class="rounded circle"></td>
                <td>{{$order_detail->name}}</td>
                <td>{{$order_detail->brand->name}}</td>
                <td>{{$order_detail->price}} MMK</td>
                <td>{{$order_detail->pivot->qty}}</td>
                <td>{{$subtotal}} MMK</td>

              </tr>
              @endforeach

            @endforeach
            
          </tbody>
          <tfoot>
            <tr>
             
            </tr>
          </tfoot>
        </table>
      </div>
    </div>

    <!-- No Shopping Cart Div -->
    <div class="row mt-5 noneshoppingcart_div text-center">
      
      

      <div class="col-12 mt-5 ">
        <a href="{{route('homepage')}}" class="btn btn-secondary mainfullbtncolor px-3" > 
          <i class="icofont-shopping-cart"></i>
          Continue Shopping 
        </a>
      </div>

    </div>
    

  </div>
@endsection