<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content=""/>
  <meta name="author" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> Shopules </title>

  <!-- Favicon-->
  <link rel="icon" sizes="57x57" href="{{ asset('frontend/favicon/apple-icon-57x57.png')}}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/favicon/apple-icon-60x60.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/favicon/apple-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/favicon/apple-icon-76x76.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/favicon/apple-icon-114x114.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/favicon/apple-icon-120x120.png')}}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/favicon/apple-icon-144x144.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/favicon/apple-icon-152x152.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/favicon/apple-icon-180x180.png')}}"> 
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('frontend/favicon/android-icon-192x192.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend/favicon/favicon-96x96.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/favicon/favicon-16x16.png')}}">

  <!-- iconfont CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/icon/icofont/icofont.min.css')}}">
  <!-- Boxicon CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/icon/boxicons-master/css/boxicons.min.css')}}">
  
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/media_query.css')}}">
  
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}">

  <!-- OWL CAROUSEL -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.theme.default.css')}}">

</head>
<body>

  <!-- Navigation-->
  <div class="container-fluid">

    <div class="row shadow-sm p-3 bg-white rounded d-flex align-items-center">
      <!-- LOGO -->
      <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4 order-1">
        <span class="d-xl-none d-lg-none d-md-inline d-sm-inline d-inline  p-1 navslidemenu">
          <i class="icofont-navigation-menu"></i>
        </span>
        <img src="{{ asset('frontend/logo/logo_big.jpg')}}" class="img-fluid d-xl-inline d-lg-inline d-md-none d-sm-none d-none">

        <img src="{{ asset('frontend/logo/logo_med.jpg')}}" class="img-fluid d-xl-none d-lg-none d-md-inline d-sm-none d-none" style="width: 100px">

        <img src="{{ asset('frontend/logo/logo.jpg')}}" class="img-fluid d-xl-none d-lg-none d-md-none d-sm-inline d-inline pl-2" style="width: 30px">
      </div>
      
      <!-- Search Bar -->
      <div class="col-xl-6 col-lg-6 col-md-4 col-sm-2 col-2 order-xl-2 order-lg-2 order-md-3 order-sm-3 order-3">
        <div class="row">
          <div class="col-lg-8 col-2 ">
            <div class="has-search d-xl-block d-lg-block d-none ">
                <div class="input-group">
                    <input class="form-control pl-4 border-right-0 border" type="search" placeholder="Search" id="">
                    <span class="input-group-append searchBtn">
                        <div class="input-group-text bg-transparent">
                          <i class="icofont-search"></i>
                        </div>
                    </span>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-10">
            

                    @guest


                    <span classs="float-right d-xl-block d-lg-block d-md-block d-none">
                      <a href="{{route('loginpage')}}" class="text-decoration-none loginLink"> Login </a> | <a href="" class="text-decoration-none loginLink"> Sign-up </a>
                    </span>
                  @else

             
                  <a id="navbarDropdown" class="loginLink text-decoration-none dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu" >

                      <a href="" class="dropdown-item">Profile</a>

                      <a href="{{route('order_detail')}}" class="dropdown-item">Order History</a>

                      <a class="dropdown-item btn_logout"  href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>

                      
                  </div>
              
              @endguest
          </div>
        </div>
      </div>
      
      <!-- Shopping-cart -->
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 order-xl-3 order-lg-3 order-md-4 order-sm-4 order-4 text-right">
        <!-- Search ICON shopping cart -->

        <div class="d-xl-none d-lg-none d-md-none d-sm-inline d-inline searchiconBtn mr-2">
          <i class="icofont-search"></i>
        </div>

        <a href="{{route('shoppingcartpage')}}" class="text-decoration-none d-xl-inline d-lg-inline d-md-inline d-sm-none d-none shoppingcartLink"> 
          <i class="icofont-shopping-cart"></i> 
          <span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti"> 0 </span>
          <span class="price">  </span>
        </a>

    
        <!-- App Download -->

        <a href=""><img src="{{ asset('frontend/image/download.png')}}" class="img-fluid d-xl-inline d-lg-inline d-md-none d-sm-none d-none" style="width: 150px"></a>
      </div>
    </div>
  </div>
  <div id="myPage"></div>
  
  <!-- Sub Nav (WEB) -->
  <div class="container subNav d-xl-block d-lg-block d-none my-3">
    <div class="row align-items-center">
      <div class="col-3 align-items-center">
        <p class="d-inline pr-3"> Shop By </p>

        <div class="dropdown d-inline-block">
                <a class="nav-link text-decoration-none text-dark font-weight-bold d-block" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2"> Category </span>
            <i class="icofont-rounded-down pt-2"></i>

              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach($categories as $category)
                  <li class="dropdown-submenu">
                    <a class="dropdown-item" href="javascript:void(0)">
                      {{$category->name}}
                      <i class="icofont-rounded-right float-right"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <h6 class="dropdown-header">
                        {{$category->name}}
                      </h6>
                      @foreach($category->subcategories as $category_subcategory)
                        <li><a class="dropdown-item" href="{{route('filteritemspage',$category_subcategory->id)}}">{{$category_subcategory->name}}</a></li>
                        
                      @endforeach
                    </ul>
                  </li>
                  <div class="dropdown-divider"></div>

                  @endforeach

              </ul>
            </div>
      </div>

      <div class="col-3">
        <a href="{{route('promotionspage')}}" class="text-decoration-none text-dark font-weight-bold"> Promotions </a>
      </div>
      <div class="col-3">
        <div class="hov-dropdown d-inline-block">
                <a class="text-decoration-none text-dark font-weight-bold" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2"> Merchants </span>
            <i class="icofont-rounded-down pt-2"></i>

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="#">Action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
      </div>

      <div class="col-3">
        <div class="hov-dropdown d-inline-block">
                <a class="text-decoration-none text-dark font-weight-bold" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2"> Services </span>
            <i class="icofont-rounded-down pt-2"></i>

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="#">
                    Help Center
                  </a>
                  <div class="dropdown-divider"></div>
                  
                  <a class="dropdown-item" href="#">
                    Order
                  </a>
                  <div class="dropdown-divider"></div>
                  
                  <a class="dropdown-item" href="#">
                    Shipping & Delivery
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    Payment
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    Returns & Refunds
                  </a>

                </div>
            </div>
      </div>
    </div>
  </div>

  <!-- Sub Nav (MOBILE) -->
  <div id="mySidebar" class="sidebar">
    <div class="row">
      <div class="col-10">
          <img src="{{ asset('frontend/logo/logo_med_trans.png')}}" class="img-fluid" style="width: 100px">
      </div>
      <div class="col-2">
        <a href="javascript:void(0)" class="closebtn text-decoration-none">
            <i class="icofont-close-line"></i>
          </a>
      </div>
    </div>
    
    <div class="mt-3">
      <p class="text-muted ml-4"> Shop By </p>
      <hr>
        <a data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="category">
          Category
          <i class="icofont-rounded-down float-right mr-3"></i>

        </a>

      <div class="collapse sidebardropdown_container_category mt-3" id="category">
          <a href="" class="py-2"> Category One </a>
          <a href="" class="py-2"> Category Two </a>
          <a href="" class="py-2"> Category Three </a>
          <a href="" class="py-2"> Category Four </a>
          <a href="" class="py-2"> Category Five </a>
      </div>

      <hr>

        <a href="#"> Poromotion </a>
      <hr>

        <a data-toggle="collapse" href="#brand" role="button" aria-expanded="false" aria-controls="brand">
          Merchants
          <i class="icofont-rounded-down float-right mr-3"></i>

        </a>

      <div class="collapse sidebardropdown_container_category mt-3" id="brand">
          <a href="" class="py-2"> Brand One </a>
          <a href="" class="py-2"> Brand Two </a>
          <a href="" class="py-2"> Brand Three </a>
          <a href="" class="py-2"> Brand Four </a>
          <a href="" class="py-2"> Brand Five </a>
      </div>
      <hr>

      <a data-toggle="collapse" href="#service" role="button" aria-expanded="false" aria-controls="service">
          Service
          <i class="icofont-rounded-down float-right mr-3"></i>
        </a>

      <div class="collapse sidebardropdown_container_category mt-3" id="service">
          <a href="" class="py-2"> Help Center </a>
          <a href="" class="py-2"> Order </a>
          <a href="" class="py-2"> Shipping & Delivery </a>
          <a href="" class="py-2"> Payment </a>
          <a href="" class="py-2"> Returns & Refunds </a>
      </div>
      <hr>

      <a href="{{route('loginpage')}}"> Login | Signup</a>
      <hr>

      <a href="#"> Cart [ <span class="cartNoti"> 1 </span> ]  </a>
      <hr>

      <img src="{{ asset('frontend/image/download.png')}}" class="img-fluid ml-2 text-center" style="width: 150px">
      <hr>

      <p class="text-white ml-3"> Copyright &copy; <img src="{{ asset('frontend/logo/logo_wh_transparent.png')}}" style="width: 20px; height: 20px"> 2019  </p>

    </div>
  </div>

  
  @yield('content')


  <!-- Footer -->
  <div class="container-fluid bg-light p-5 align-content-center align-items-center mt-5">
    
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="row">
            <div class="col-md-4">
              <i class="icofont-fast-delivery serviceIcon maincolor"></i>
            </div>
          
            <div class="col-md-8">
                <h6>Door to Door Delivery</h6>
                <p class="text-muted" style="font-size: 12px">On-time Delivery</p>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="row">
            <div class="col-md-4">
              <i class="icofont-headphone-alt-2 serviceIcon maincolor"></i>
            </div>
          
            <div class="col-md-8">
                <h6> Customer Service </h6>
                <p class="text-muted" style="font-size: 12px">  09-779-999-915 ??? <br> 09-779-999-913 </p>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="row">
            <div class="col-md-4">
              <i class='bx bx-undo serviceIcon maincolor'></i>
            </div>
          
            <div class="col-md-8">
                <h6 > 100% satisfaction </h6>
                <p class="text-muted" style="font-size: 12px"> 3 days return </p>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="row">
            <div class="col-md-4">
              <i class="icofont-credit-card serviceIcon maincolor"></i>
            </div>
          
            <div class="col-md-8">
                <h6> Cash on Delivery </h6>
                <p class="text-muted" style="font-size: 12px"> Door to Door Service </p>
            </div>
          </div>
        </div>
      </div>
  </div>
  
  <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1> News Letter </h1>
        <p>
          Subscribe to our newsletter and get 10% off your first purchase
        </p>

      </div>
      
      <div class="offset-2 col-8 offset-2 mt-5">
        <form>
          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg px-5 py-3" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-left-radius: 15rem; border-bottom-left-radius: 15rem">
              
              <div class="input-group-append">
                <button class="btn btn-secondary subscribeBtn" type="button" id="button-addon2"> Subscribe </button>
              </div>


          </div>
        </form>
      </div>

    </div>
  </div>

  <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

  <footer class="py-3 mt-5">
    <div class="container">
      <div class="text-center pb-3">
      <a href="#myPage" title="To Top" class="text-white to_top text-decoration-none">
          <i class="icofont-rounded-up" style="font-size: 20px"></i>
      </a>
    </div>
      <p class="m-0 text-center text-white">Copyright &copy; <img src="{{ asset('frontend/logo/logo_wh_transparent.png')}}" style="width: 30px; height: 30px"> 2019</p>
    </div>
  </footer>

  <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js')}}"></script>
  <!-- BOOTSTRAP JS -->
  <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/custom.js')}}"></script>

  <!-- Owl Carousel -->
  <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/localstorage_custom.js')}}"></script>

</body>
</html>