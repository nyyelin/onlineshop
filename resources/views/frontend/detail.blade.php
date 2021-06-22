@extends('frontendtemplate')

@section('content')
  <!-- Subcategory Title -->
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Code Number : {{$itemdetail->codeno}} </h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent">
          <li class="breadcrumb-item">
            <a href="{{route('homepage')}}" class="text-decoration-none secondarycolor"> Home </a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{route('homepage')}}" class="text-decoration-none secondarycolor"> {{$itemdetail->name}} </a>
          </li>
          
          <li class="breadcrumb-item active" aria-current="page">
            Item Detail
          </li>
        </ol>
    </nav>

    <div class="row mt-5">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <img src="{{ asset($itemdetail->photo)}}" class="img-fluid">
      </div>  


      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
        
        <h4> {{$itemdetail->name}} </h4>

        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
            <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
            <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
            <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
            <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
          </ul>
        </div>

        <p>
          {{$itemdetail->description}}
        </p>

        <p> 
          <span class="text-uppercase "> Current Price : </span>
          <span class="maincolor ml-3 font-weight-bolder"> {{$itemdetail->price}} Ks </span>
        </p>

        <p> 
          <span class="text-uppercase "> Brand : </span>
          <span class="ml-3"> <a href="" class="text-decoration-none text-muted"> {{$itemdetail->brand->name}} </a> </span>
        </p>


                @if(Auth()->user())
                @php $role_name = Auth::user()->getRoleNames();
                
                @endphp
                @if($role_name[0] == 'Admin')
                     <a href="javascript:void(0)" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
                      You are not Customer
                    </a>
                @else
                  <a href="javascript:void(0)" class="addtocartBtn text-decoration-none btn_add_to_cart" data-id = '{{$itemdetail->id}}' data-name = '{{$itemdetail->name}}' data-photo = '{{$itemdetail->photo}}' data-price= '{{$itemdetail->price}}' data-discount = '{{$itemdetail->discount}}' data-user_id = "{{Auth::id()}}">Add to Cart</a>
                @endif
                @else

                <a href="{{route('loginpage')}}" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
                  Login To Check Out
                </a>
                @endif
        


      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12">
        <h3> Related Item </h3>
        <hr>
      </div>
      
      @foreach($relate_items as $relate_item)
      @if($relate_item->id != $itemdetail->id)
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 show_photo">
        <a href="{{route('itemdetailpage',$relate_item->id)}}" style="text-decoration: none; color: gray;">
          <img src="{{ asset($relate_item->photo)}}" class="img-fluid" style="width: 300px;height: 200px">
          <p>Name : {{$relate_item->name}}</p>

        </a>
      </div>
      @endif
      @endforeach

      
    </div>

    
  </div>
@endsection