@extends('admin.master')

@section('title','Invoice')
@section('content')
<head>
    <style>
        body {
    background-color: #eee
}

.fs-12 {
    font-size: 12px
}

.fs-15 {
    font-size: 15px
}

.name {
    margin-bottom: -2px
}

.product-details {
    margin-top: 13px
}
    </style>
</head>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="receipt bg-white p-3 rounded"><img src="{{url('front/assets/img/logo/logo.png')}}" width="120">

               <br>
                <h4 class="mt-2 mb-3">Your order is confirmed!</h4>
                <h6 class="name">Hello John,</h6><span class="fs-12 text-black-50">your order has been confirmed and will be shipped in two days</span>
                <hr>
                <div class="d-flex flex-row justify-content-between align-items-center order-details">
                    <div><span class="d-block fs-12">Order date</span><span class="font-weight-bold">12 March 2020</span></div>
                    <div><span class="d-block fs-12">Order number</span><span class="font-weight-bold">OD44434324</span></div>
                    <div><span class="d-block fs-12">Payment method</span><span class="font-weight-bold">Credit card</span><img class="ml-1 mb-1" src="https://i.imgur.com/ZZr3Yqj.png" width="20"></div>
                    <div><span class="d-block fs-12">Shipping Address</span><span class="font-weight-bold text-success">New Delhi</span></div>
                </div>
                <hr>
                @foreach ($orproducts as $orproducts)
                    <?php
                    $total_amount=0;
                    ?>

                <div class="d-flex justify-content-between align-items-center product-details">
                    <div class="d-flex flex-row product-name-image"><img class="" src=" {{ '/upload/'.$orproducts->product_image}}" width="80">
                        <div class="d-flex flex-column justify-content-between ml-2">
                            <div><span class="d-block font-weight-bold p-name">{{$orproducts->product_name}}</span><span class="fs-12">Clothes</span></div><span class="fs-12">Product Quantity:
                                {{$orproducts->product_quantity}}</span>
                        </div>
                    </div>
                    <div class="product-price">
                        <h5>Rs. {{$orproducts->product_price}}/-</h5>
                    </div>
                </div>
                <?php


 $total_amount=$total_amount+($orproducts->product_price*$orproducts->product_quantity);

                ?>
                @endforeach
                <div class="mt-5 amount row">
                    <div class="d-flex justify-content-center col-md-6"><img src="https://i.imgur.com/AXdWCWr.gif" width="250" height="100"></div>
                    <div class="col-md-6">

                        <div class="billing">
                            <div class="d-flex justify-content-between"><span>Subtotal</span><span class="font-weight-bold">Rs.<?php echo $total_amount ?>/-</span></div>
                            <div class="d-flex justify-content-between mt-2"><span>Shipping fee</span><span class="font-weight-bold">Rs. 0/- </span></div>
                            <div class="d-flex justify-content-between mt-2"><span>Tax</span><span class="font-weight-bold">Rs. 0/-</span></div>
                            <div class="d-flex justify-content-between mt-2"><span class="text-success">Discount</span><span class="font-weight-bold text-success">Rs. 0/-</span></div>
                            <hr>
                            <div class="d-flex justify-content-between mt-1"><span class="font-weight-bold">Total</span><span class="font-weight-bold text-success">Rs. <?php echo $total_amount ?>/-</span></div>
                        </div>

                    </div>
                </div><span class="d-block">Expected delivery date</span><span class="font-weight-bold text-success">12 March 2020</span><span class="d-block mt-3 text-black-50 fs-15">We will be sending a shipping confirmation email when the item is shipped!</span>
                <hr>
                <div class="d-flex justify-content-between align-items-center footer">
                    <div class="thanks"><span class="d-block font-weight-bold">Thanks for shopping</span><span>Amazon team</span></div>
                    <div class="d-flex flex-column justify-content-end align-items-end"><span class="d-block font-weight-bold">Need Help?</span><span>Call - 974493933</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
