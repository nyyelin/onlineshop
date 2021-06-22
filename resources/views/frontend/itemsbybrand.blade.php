@extends('frontendtemplate')

@section('content')
  <!-- Subcategory Title -->
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Brand Name : {{$brand->name}} </h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container mt-5">


    <div class="row mt-5">
            <div class="col">
                <div class="bbb_viewed_title_container">
                    <h3 class="bbb_viewed_title"> Brand Category Name  </h3>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="icofont-rounded-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="icofont-rounded-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">
              @foreach($brand->items as $brand_item)
              <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="pad15">
                      <img src="{{ asset($brand_item->photo)}}" class="img-fluid">
                      <a href="{{route('itemdetailpage',$brand_item->id)}}" style="text-decoration: none; color: gray">
                        <p class="text-truncate">{{$brand_item->name}}</p>
                        <p class="item-price">
                          <strike>{{$brand_item->discount}} Ks </strike> 
                          <span class="d-block">{{$brand_item->price}} Ks</span>
                        </p>
                      </a>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                      <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                      <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                      <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                      <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                    </ul>
                  </div>

                   @if(Auth()->user())
                    @php $role_name = Auth::user()->getRoleNames();
                    
                    @endphp
                    @if($role_name[0] == 'Admin')
                         <a href="javascript:void(0)" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
                          You are not Customer
                        </a>
                    @else
                      <a href="javascript:void(0)" class="addtocartBtn text-decoration-none btn_add_to_cart" data-id = '{{$brand_item->id}}' data-name = '{{$brand_item->name}}' data-photo = '{{$brand_item->photo}}' data-price= '{{$brand_item->price}}' data-discount = '{{$brand_item->discount}}' data-user_id = "{{Auth::id()}}">Add to Cart</a>
                    @endif
                    @else
                    <a href="{{route('loginpage')}}" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
                      Login To Check Out
                    </a>
                    @endif

                   

                  
              </div>
            </div>
          </div>
              @endforeach

      </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <div class="bbb_viewed_title_container">
                <h3 class="bbb_viewed_title"> Brand Category  </h3>
                <div class="bbb_viewed_nav_container">
                    <div class="bbb_viewed_nav bbb_viewed_prev"><i class="icofont-rounded-left"></i></div>
                    <div class="bbb_viewed_nav bbb_viewed_next"><i class="icofont-rounded-right"></i></div>
                </div>
            </div>
            <div class="bbb_viewed_slider_container">
                <div class="owl-carousel owl-theme bbb_viewed_slider">
          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                  <img src="{{ asset('frontend/image/item/saisai_one.jpg')}}" class="img-fluid">
                    <p class="text-truncate">Multi Item Carousel</p>
                    <p class="item-price">
                      <strike>250,000 Ks </strike> 
                      <span class="d-block">230,000 Ks</span>
                    </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>
                </div>
              </div>
          </div>

          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/saisai_three.jpg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <strike>250,000 Ks </strike> 
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>

          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/saisai_four.jpg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <strike>250,000 Ks </strike> 
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>

          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/giordano_one.jpg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <strike>250,000 Ks </strike> 
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>

          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/giordano_two.jpg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>

          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/giordano_three.jpg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>

          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/giordano_four.jpg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <strike>250,000 Ks </strike> 
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>

          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/apple_four.jpeg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>

          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/apple_four.jpeg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>


          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/apple_one.jpg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <strike>250,000 Ks </strike> 
                        <span class="d-block">230,000 Ks</span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>

          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/apple_three.jpg')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>


          <div class="owl-item">
              <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="pad15">
                    <img src="{{ asset('frontend/image/item/apple_two.png')}}" class="img-fluid">
                      <p class="text-truncate">Multi Item Carousel</p>
                      <p class="item-price">
                        <strike>250,000 Ks </strike> 
                        <span class="d-block">230,000 Ks </span>
                      </p>

                      <div class="star-rating">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                  <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                </ul>
              </div>

              <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

                  </div>
              </div>
          </div>

      </div>
            </div>
        </div>
    </div>

  </div>
@endsection