@extends('front.master')

@section('title','Wish List')


@section('content')

<style type="text/css">

   .product-card
    {
        width:18%;
        height: auto;
        /box-shadow: 0 10px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%) !important;/
    }
    .img-fluid
    {
        height: 280px;
    }
    @media(max-width: 700px)
    {
        .product-card
        {
            margin: 5%;
            width: 90%;
        }

    }
</style>
<hr>

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme3 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-grid-3-column.html">Wishlist</a></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->

    <div class="container-fluid bg-lighten2">

                    @if(session('message'))

                         <p class ="alert alert-success">
                          {{session('message')}}
                         </p>
                    @endif

                    @if(session('error'))

                         <p class ="alert alert-danger">
                          {{session('error')}}
                         </p>

                    @endif

            <div class="container row">


                     @foreach ($wish as $prod)

                    <div class="mt-20 mb-50 pb-20 mr-20 product-card alert-light">


                        <div class="mx-50">
                            <a href="{{url('front/productdetail/'.$prod->id)}}">
                                <img src="{{ url('/upload/'.$prod->product_image) }}" alt="thumbnail" class="img-fluid d-block">
                            </a><br>
                            <a href="{{url('productdetail/'.$prod->product_id)}}">
                                <h5 class=" mb-30">{{$prod->product_name}}</h5>
                            </a>
                            <div class="d-flex align-items-center mb-30">
                                <h5 class="mr-20">Rs. {{$prod->product_price}}</h5>
                            </div>


                            <form method="post" action="{{url('addtocart')}}">

                            @csrf

                            <input type="hidden" name="product_id" value="{{$prod->id}}">

                            <input type="hidden" name="product_name" value="{{$prod->product_name}}">

                            <input type="hidden" name="product_quantity" value="1">

                            <input type="hidden" name="product_price" value="{{$prod->product_price}}">

                            <input type="hidden" name="product_image" value="{{$prod->product_image}}">


                            <div>
                                <button class="alert-info rounded-pill mr-2">
                                    <i class="ion-android-add"></i> <i class="fas fa-shopping-cart"> Add to Cart</i>
                                </button>

                            </form>

                               <a href="{{url('wishlist/itemdelete/'.$prod->id)}}" type="button" class="alert-danger btn-lg rounded-pill"><i class="fas fa-trash-alt"></i></a>

                            </div>
                        </div>

                    </div>

                    @endforeach


            </div>

    </div>

@endsection
