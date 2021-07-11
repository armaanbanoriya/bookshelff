<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title> @yield('title','')</title>
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{url('front/assets/img/favi.svg')}}" /> --}}

    <!--**********************************
        all css files
    *************************************-->

    <!--***************************************************
       fontawesome,bootstrap,plugins and main style css
     ***************************************************-->

    <link rel="stylesheet" href="{{url('front/assets/css/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/simple-line-icons.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('front/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/plugins/plugins.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/style.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
{{-- Autocomplete --}}
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
     $(document).ready(function (){

        src= "{{route('searchproductajax')}}";
        $( "#search_text" ).autocomplete({
         source: function(request, response){
             $.ajax({
                 url: src,
                 data:{
                     term: request.term
                 },
                 dataType: "json",
                 success: function (data){
                    response(data);
                }
            });
        },
        minLength: 1,
    });
    $(document).on('click','.ui-menu-item',function(){
        $('#search-form').submit();
    });
});

</script>

    <!--****************************
         Minified  css
    ****************************-->

    <!--***********************************************
       vendor min css,plugins min css,style min css
     ***********************************************-->
    <!-- <link rel="stylesheet" href="{{url('front/assets/css/vendor/vendor.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/plugins/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/style.min.css')}}" /> -->

    <style>


        .contact_bt{
            position: absolute!important;
           right: 0;
           background-color: #10a341;
           border-radius: -14px;
           color: white;
           font-size: 20px;
           font-weight: 100;
        }

        .ui-menu-item :hover{
            font-weight: 400;
            font-family: 'Open Sans';
              color: whitesmoke;
            background: linear-gradient(135deg,#009ffd,#2a2a72 98%);
            border-radius: 20px;
            border: 1px solid green;
            text-decoration: underline orange;

        }
        .ui-widget.ui-widget-content {
            border-radius: 20px;
        }

        @media(min-width: 800px)
        {
            .prodimage{
                height: 550px;
                width: 400px;

                position: relative;
                left: 109px;
            }

        }

        form.cmxform label.error, label.error
        {
            color: red;
            font-style: italic;
        }


        .toast-success
        {
            background-color:#000!important;
            position: relative!important;
            top: 300px;
        }

        .toast-warning
        {
            background-color: rgb(255, 61, 13) !important;
            position: relative!important;
            top: 300px;
        }

            /*Button start*/


            .btncss
            {
                /* text-align: center; */
                /* margin-top: 360px; */
            }
            .btnext
            {
                border: 1px solid #020609;
                background: none;
                padding: 10px 20px;
                font-size: 20px;

                cursor: pointer;
                margin: 10px;
                transition: 0.8s;
                position: relative;
                overflow: hidden;
            }
            .btnext1,.btnext2
            {
                color: #ebab20;
            }
            .btnext3,.btnext4{
                color: rgb(247, 243, 243);
            }
            .btnext1:hover,.btnext2:hover{
                color: #fff;
            }
            .btnext3:hover,.btnext4:hover{
                color: #000000;
            }
            .btnext::before{
                content: "";
                position: absolute;
                left: 0;
                width: 100%;
                /* height: 0%; */
                background: #000000;
                z-index: -1;
                transition: 0.8s;
            }
            .btnext1::before,.btnext3::before
            {
                top: 0;
                border-radius: 0 0 50% 50%;
            }
            .btnext2::before,.btnext4::before
            {
                bottom: 0;
                border-radius: 50% 50% 0 0;
            }
            .btnext3::before,.btnext4::before
            {
                height: 180%;
            }
            .btnext1:hover::before,.btnext2:hover::before
            {
                height: 180%;
            }
            .btnext3:hover::before,.btnext4:hover::before
            {
                height: 0%;
            }

        /*button end*/

        .hero-side-category .category-menu {
            height: auto!important;
        }

        /* Social button start */
        @media(max-width: 400px)
        {
            .social
            {
                margin-block: 12px;
                padding: 13px;
                margin-bottom: -1px;
            }
        }
        /* Social button end */
        .newlog{
                display: none!important;
            }

        /* login button start */
        @media(min-width: 992px)
        {
            .newlog{
                display: block!important;
            }
        }
        /* Login button end */

        .logindrop{
            position: relative;
            top: unset!important;
            left: -71px!important;
            transform: none!important;



        }

        .scroll{
            overflow: auto;

        }

    </style>
</head>

<body>


<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme3 offcanvas-mobile-menu">
    <div class="inner">
         <div class=" text-left">
                @guest
                <hr>
                <a href="{{url('signin')}}" type="button" class="btn text-left"><span class="menu-text">Login</span></a>
                <hr>

                @if (Route::has('register'))
                <a href="{{('signup')}}"  type="button" class="btn" ><span class="menu-text">Register</span></a>
                <hr>
                @endif
                @else
             <li>
                <nav class="offcanvas-menu">
                    <ul>
                    <li><a style="font-size: 20px" href="#" ><span class="menu-text">{{ Auth::user()->name }}</span></a>
                        <ul class="offcanvas-submenu">
                            <li>
                                <a href="{{('/')}}"><span class="menu-text">Home</span></a>
                                <a href="{{url('checkout')}}"><span class="menu-text">Checkout</span></a>
                                <a href="{{url('myaccount')}}"><span class="menu-text">My Account</span></a>
                                <a href="{{url('front/logout')}}"><span class="menu-text">Logout</span></a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                    </nav>
                <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">

                </ul>
             </li>
            @endguest

        </div>
        <div class="text-right pt-5">
        <button class="offcanvas-close">x</button>
        </div>
        {{-- <div class="offcanvas-head mb-4">
            <nav class="offcanvas-top-nav">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="mx-4"><a href="compare.html"><i class="ion-ios-loop-strong"></i> Compare <span>(0)</span>
                        </a></li>
                    <li class="mx-4">
                        <a href="wishlist.html"> <i class="ion-android-favorite-outline"></i> Wishlist
                            <span>(0)</span></a>
                    </li>
                </ul>
            </nav>
        </div> --}}
        {{-- <nav class="offcanvas-menu">
            <ul>


                </li>



                {{-- <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav> --}}
    </div>
</div>
<!-- offcanvas-mobile-menu end -->


<!-- OffCanvas Cart Start -->

<div id="offcanvas-cart" class="offcanvas offcanvas-cart scroll theme3">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between"  >
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>

        @php
            $session= Session::getId();
            $r = DB::table('carts')->where('session_id',$session)->get();


            if (Auth::check()) {
                $cart = DB::table('carts')->where('useremail',Auth::user()->email)->get();

            }

        @endphp
        <ul class="minicart-product-list"  >
                @php
                    $total_amount=0;
                @endphp
            @if(Auth::check())
                 @if($cart->count()>0)

                   @foreach($cart as $cartdata)

                   <li >
                        <a href="{{url('productdetail/'.$cartdata->product_id)}}" class="image"><img src="{{url('upload/'.$cartdata->product_image)}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="{{url('productdetail/'.$cartdata->product_id)}}" class="title">{{$cartdata->product_name}}</a>
                            <span class="quantity-price">{{$cartdata->product_quantity}} x <span class="amount">Rs. {{$cartdata->product_price}}/-</span></span>
                            <a href="{{url('cart/delete/')}}/{{$cartdata->product_id}}" class="remove">×</a>
                        </div>
                </li>
                @php
                     $total_amount=$total_amount+($cartdata->product_price*$cartdata->product_quantity);
                @endphp

                  @endforeach
                @endif
            @else
                @if($r->count()>0)

                    @foreach($r as $cartdata1)
                        <li>
                            <a href="{{url('productdetail/'.$cartdata1->product_id)}}" class="image"><img src="{{url('upload/'.$cartdata1->product_image)}}"
                                    alt="Cart product Image"></a>
                            <div class="content">
                                <a href="{{url('productdetail/'.$cartdata1->product_id)}}" class="title">{{$cartdata1->product_name}}</a>
                                <span class="quantity-price">{{$cartdata1->product_quantity}} x <span class="amount">Rs. {{$cartdata1->product_price}}/-</span></span>
                                <a href="{{url('cart/delete/')}}/{{$cartdata1->product_id}}" class="remove">×</a>
                            </div>
                        </li>
                        @php
                             $total_amount=$total_amount+($cartdata1->product_price*$cartdata1->product_quantity);
                        @endphp


                    @endforeach

                @endif

            @endif

        </ul>

        <div class="sub-total d-flex flex-wrap justify-content-between">
            <strong>Subtotal :</strong>
            <span class="amount">Rs. <?php echo $total_amount ?> /-</span>
        </div>
        <a href="{{url('cart')}}" class="btn theme--btn-ddefault btn--lg d-block d-sm-inline-block rounded-5 mr-sm-2">view
            cart</a>
        <a onclick="return mycheckout();"
            class="btn theme-btn--dark3 btn--lg d-block d-sm-inline-block mt-4 mt-sm-0 rounded-5">checkout</a>
        {{-- <p class="minicart-message">Free Shipping on All Orders Over $100!</p> --}}
    </div>

</div>

<!-- OffCanvas Cart End -->
<!-- header start -->
<header>
    <!-- header-middle satrt -->
    <div class="header-middle theme3 topdeskhead py-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5 col-lg-2 order-first">
                    <div class="logo text-center text-sm-left mb-30 mb-sm-0">
                        <a href="{{url('/')}}"><img src="{{url('front/assets/img/logo/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                @php
                    use App\Category;
                @endphp

                @php
                      $data = Category::with('products')->get();
                @endphp

                <div class="col-lg-7 order-1 order-lg-0">
                    <div class="d-flex flex-wrap w-100 align-items-center">
                        <div class="vertical-menu d-none d-lg-block">
                            <button class="menu-btn d-flex"><span class="ion-android-menu"></span>All Categories<span
                                    class="ion-ios-arrow-down d-block ml-auto"></span> </button>.

                            <ul class="vmenu-content display-none">
                                @foreach ($data as $catproduct)
                                <li class="menu-item">
                                    <a >{{$catproduct->name}}<i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-mega-menu flex-wrap">
                                        <li>
                                            <a href="#">
                                                <span> <strong>{{$catproduct->name}}</strong></span>
                                            </a>
                                            @foreach ($catproduct->products as $item )
                                            <ul class="submenu-item">
                                                <li><a href="{{url('productdetail/'.$item->id)}}">{{$item->product_name}}</a></li>

                                            </ul>
                                            @endforeach
                                        </li>
                                    </ul>
                                    <!-- sub menu -->
                                </li>
                                @endforeach
                            </ul>

                            <!-- menu content -->
                        </div>
                        <div class="search-form width-calc-from-left pl-35 mt-30 mt-lg-0">
                            <form id="search-form" action="{{url('/searching')}}" method="post" class="form-inline position-relative">
                                @csrf
                                <input style="border: 2px solid #205fec;
                                border-radius: 28px;
                                border-style: outset;" class="form-control theme3" id="search_text" type="search" name="search_product" placeholder="Enter your search key ...">
                                <button name="searchbtn" class="btn bg-white search-btn position-left" ><i
                                        class="icon-magnifier"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-lg-3">
                    <!-- search-form end -->
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                        <div class="cart-block-links theme3">
                            <ul class="d-flex">

                                <li class="mr-0 cart-block position-relative">
                                    <a class="offcanvas-toggle" href="#offcanvas-cart">
                                        <span class="position-relative">
                                            <i class="icon-bag"></i>
                                            <span class="badge cbdg1">
                                                @if(Auth::check()) {{$cart->count()}}
                                                @else {{$r->count()}}
                                                @endif </span>
                                        </span>

                                    </a>
                                </li>
                                <!-- cart block end -->
                                &nbsp;
                                &nbsp;
                                <div class="newlog">
                                    @guest
                                    <a href="{{url('signin')}}" style="color: white;" class="btn btn-secondary" >Login </a>
                                    @if(Auth::check())
                                    <li class="nav-item">
                                        {{-- <a class="nav-link" href="{{ ('signup') }}">Register</a> --}}
                                    </li>
                                @endif
                                @else
                                    @if (Auth::User()->role==1)
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                            {{ Auth::user()->name  }}
                                        </button>
                                        <div class="dropdown-menu logindrop bg- border-warning ">
                                          <div class="card-menu" style="width: 15rem;" >
                                            <div class="card-body text-success " >
                                                <p class="text-center mb-3" >{{Auth::user()->email}}</p>
                                               <h5 class="text-center"><a href="{{url('myaccount')}}"  class="card-title btn btn-info" >My account</a></h5>
                                                <div class="row">
                                                    <div class="col">

                                              <a href="{{url('myaccount')}}" class="btn btn-success" >My Orders</a>

                                             <a href="{{url('front/logout')}}" class="btn btn-danger" style="position: relative; left: 17px;">Logout</a>


                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    @else
                                    <a href="{{url('signin')}}" style="color: white;" class="btn btn-secondary" >Login </a>
                                    @endif
                                    @endguest
                                </div>
                            </ul>
                        </div>
                        <div class="mobile-menu-toggle theme3 d-lg-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewbox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->
    <div class="mobile-category-nav d-lg-none pb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">


                            <ul>
                                @foreach ($data as $catproduct)

                                <li class="menu-item-has-children menu-item-has-children-1">
                                    <a href="#">{{$catproduct->name}}<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->

                                    @foreach ($catproduct->products as $item )
                                    <ul class="category-mega-menu category-mega-menu-1">
                                        <li><a href="{{url('productdetail/'.$item->id)}}">{{$item->product_name}}</a></li>

                                    </ul>
                                    @endforeach
                                </li>


                                <li class="hidden"><a href="#">Projectors</a></li>
                                {{-- <li>
                                    <a href="#" id="more-btn"><i class="ion-ios-plus-empty"></i>
                                        More Categories</a>
                                </li> --}}
                                @endforeach
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=======  End of category menu =======-->
</header>
<!-- header end -->


@yield('content')

<!-- footer strat -->
<footer class="bg-light theme3 position-relative">
    <!-- footer bottom start -->
    <div class="footer-bottom pt-80 pb-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 mb-30">
                    <div class="footer-widget mx-w-400">
                        <div class="footer-logo mb-35">
                            <a href="{{url('/')}}" class="">
                                <img src="{{url('front/assets/img/logo/logo.png')}}" alt="footer logo">
                            </a>
                        </div>
                        <p class="text mb-30">A Laravel project. Conceptualized by Armaan Banoriya.</p>
                        <div class="address-widget mb-30">
                            <div class="media">
                                <span class="address-icon mr-3">
                                    <img src="{{url('front/assets/img/icon/phone3.png')}}" alt="phone">
                                </span>
                                <div class="media-body">
                                    <p class="help-text text-uppercase">NEED HELP?</p>
                                    <h4 class="title text-dark"><a href="tel:+91 7773007074">(+91) 7773007074</a></h4>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Support</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Linkedin</a></li>

                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Links</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="{{url('signin')}}">Login</a></li>

                            <li><a href="{{url('myaccount')}}">My account</a></li>
                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Contact Us</h2>
                            </div>
                        </div>
                        <p class="text mb-20">We are here to help.</p>
                        <div class="nletter-form mb-35">
                            <form  method="post" action="" class="form-inline position-relative">
                            <input type="text" class="form-control" name="" placeholder="Enter Your Email"  required>
                            <br>
                            <textarea name="" placeholder="Enter your message.." class="form-control" cols="30" rows="3" required></textarea>
                            <br>
                            <button type="submit" class="btn contact_bt text-capitalize" >Send</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom end -->
    <!-- coppy-right start -->
    <div class="coppy-right pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-left">
                        <p class="mb-3 mb-md-0">Copyright &copy; <a href="https://www.linkedin.com/in/armaan-banoriya-b59307108/">Armaan Banoriya</a>. All
                            Rights Reserved</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8">

                </div>
            </div>
        </div>
    </div>
    <!-- coppy-right end -->
</footer>
<!-- footer end -->

<!-- modals start -->
<!-- first modal -->
<div class="modal fade theme3 style1" id="quick-view" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 mx-auto col-lg-5 mb-5 mb-lg-0">
                        <div class="product-sync-init mb-20">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="{{url('front/assets/img/hot-deals/thumb/4.jpg')}}" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="{{url('front/assets/img/hot-deals/thumb/5.jpg')}}" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="{{url('front/assets/img/hot-deals/thumb/6.jpg')}}" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="{{url('front/assets/img/hot-deals/thumb/7.jpg')}}" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>

                        <div class="product-sync-nav">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="{{url('front/assets/img/hot-deals/thumb/4.2x.jpg')}}"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="{{url('front/assets/img/hot-deals/thumb/5.2x.jpg')}}"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="{{url('front/assets/img/hot-deals/thumb/6.2x.jp')}}g"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="{{url('front/assets/img/hot-deals/thumb/7.2x.jp')}}g"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5 mt-md-0">
                        <div class="modal-product-info">
                            <div class="product-head">
                                <h2 class="title">New Balance Running Arishi trainers in triple</h2>

                                <h4 class="sub-title">Reference: demo_5</h4>
                                <div class="star-content mb-20">
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                            <div class="product-body mb-40">
                                <div class="d-flex align-items-center mb-30">
                                    <h6 class="product-price"><del class="del">$23.90</del>
                                        <span class="onsale">$21.51</span></h6>
                                    <span class="badge position-static bg-dark p-2 rounded-0 ml-2">Save 10%</span>
                                </div>
                                <p>Break old records and make new goals in the New Balance® Arishi Sport v1.</p>
                                <ul>
                                    <li>Predecessor: None.</li>
                                    <li>Support Type: Neutral.</li>
                                    <li>Cushioning: High energizing cushioning.</li>
                                </ul>
                            </div>
                            <div class="product-footer">
                                <div class="product-count style d-flex flex-column flex-sm-row my-4">
                                    <div class="count d-flex">
                                        <input type="number" min="1" max="10" step="1" value="1">
                                        <div class="button-group">
                                            <button class="count-btn increment"><i
                                                    class="fas fa-chevron-up"></i></button>
                                            <button class="count-btn decrement"><i
                                                    class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn theme-btn--dark3 btn--xl mt-5 mt-sm-0 rounded-5">
                                            <span class="mr-2"><i class="ion-android-add"></i></span>
                                            Add to cart
                                        </button>
                                    </div>
                                </div>

                                <div class="pro-social-links mt-10">
                                    <ul class="d-flex align-items-center">
                                        <li class="share">Share</li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-google"></i></a></li>
                                        <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style2" id="compare" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="title"><i class="fa fa-check"></i> Product added to compare.</h5>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->

@php
    use App\Product;

    $modalproduct  =  Product::all();
@endphp

<script>
    $(document).ready(function () {
        $('.modalid').click(function () {
            var userid = $(this).data('id');
            // alert(userid);
            $.ajax({
                url: 'productdetail/'+id,
                type: "POST",
                data: {"id": id},
                success: function (response) {
                    console.log(response);
                    // $('modal-body').html(response);
                    // $('#add-to-cart').modal('show');

                }
            });

        });
    });
</script>


<div class="modal fade style3" id="add-to-cart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center bg-dark">
                <h5 class="modal-title" id="add-to-cartCenterTitle"> <span class="ion-checkmark-round"></span>
                    Product successfully added to your shopping cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {{-- @if ($modalproduct)
                @foreach ($modalproduct as $items) --}}
                <div class="row">
                    <div class="col-lg-5 divide-right">
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <img src="{{url('/upload/'.$items->product_image)}}" alt="img"> --}}
                            </div>
                            <div class="col-md-6 mb-2 mb-md-0">
                                <h4 class="product-name">New Balance Running Arishi trainers in triple</h4>
                                <h5 class="price">$$29.00</h5>
                                <h6 class="color"><strong>Dimension: </strong>: <span class="dmc">40x60cm</span> </h6>
                                <h6 class="quantity"><strong>Quantity:</strong>&nbsp;1</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="modal-cart-content">
                            <p class="cart-products-count">There is 1 item in your cart.</p>
                            <p><strong>Total products:</strong>&nbsp;$123.72</p>
                            <p><strong>Total shipping:</strong>&nbsp;$7.00 </p>
                            <p><strong>Taxes</strong>&nbsp;$0.00</p>
                            <p><strong>Total:</strong>&nbsp;$130.72 (tax excl.)</p>
                            <div class="cart-content-btn">
                                <button type="button" class="btn theme-btn--dark3 btn--md mt-4"
                                    data-dismiss="modal">Continue
                                    shopping</button>
                                <button class="btn theme-btn--dark3 btn--md mt-4"><i
                                        class="ion-checkmark-round"></i>Proceed to
                                    checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach
                @endif --}}

        </div>
    </div>
</div>
<!-- modals end -->




    <!--***********************
        all js files
     ***********************-->

    <!--******************************************************
        jquery,modernizr ,poppe,bootstrap,plugins and main js
     ******************************************************-->

    <script src="{{url('front/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('front/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{url('front/assets/js/popper.min.js')}}"></script>
    <script src="{{url('front/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{url('front/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('front/assets/js/plugins/plugins.js')}}"></script>
    <script src="{{url('front/assets/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- // Message Script Start --}}
        @if(Session::has('l_success'))
      <script>
      toastr.success("{!!Session::get('l_success')!!}");
     </script>
      @endif

      @if(Session::has('lo_success'))
      <script>
      toastr.success("{!!Session::get('lo_success')!!}");
     </script>
      @endif
      {{-- MEssage end --}}

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--***************************
          Minified  js
     ***************************-->

    <!--***********************************
         vendor,plugins and main js
      ***********************************-->

    <!-- <script src="{{url('front/assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{url('front/assets/js/plugins/plugins.min.js')}}"></script>
    <script src="{{url('front/assets/js/main.js')}}"></script> -->
    <script src="{{url('front/assets/js/jquery.validate.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script>
        function select_payment_method()
        {
        if($('.stripe').is(':checked') || $('.cod').is(':checked') || $('.paytm').is(':checked') || $('.razorpay').is(':checked') || $('.payumoney').is(':checked') ){
        alert('checked');
        }
        else{
        alert('Please select payment method');
        return false;
    }
        }

    </script>

    <script>
       		// validate signup form on keyup and submit
               $("#registerForm").validate({
			rules: {
				name: "required",
				name: {

					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
                    minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true,
                    remote: "check-email"
				},


			},
			messages: {
				name: "Please enter your Name",


				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please confirm your password",
					equalTo: "Please enter the same password as above"
				},
				email:{
                    required: "Please Enter Your Email",
					email: "Please Enter Your Valid Email",
                    remote: "Email already exists"

                }
			}
		});

    </script>
    <script>
         // Login Form Jquery

         $("#loginForm").validate({
			rules: {
                email: {
					required: true,
					email: true
                },
				password: {
					required: true
				},

			},
			messages: {

				email: {
                    required: "Please Enter Your Email",
					email: "Please Enter Your Valid Email"

                },
                password: {
					required: "Please provide a password"
				}

            }
		});
    </script>

    <script>
        function mycheckout()
        {
            @if (Auth::check())
            location.href = "{{url('checkout')}}";
            @else
            location.href = "{{url('signin')}}";
            @endif
        }
    </script>



</body>

</html>
