@extends('front.master')
@section('title','Checkout')

@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">check out</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">check out</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="check-out-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    1 Personal Information
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <form method="post" action="{{url('place_order')}}" class="personal-information">

                                   @csrf


                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">
                                            Name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="name" name="" value="{{Auth::User()->name}}" class="form-control" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" name="email" id="email" value="{{Auth::User()->email}}" class="form-control" >
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <div class="col-md-3"></div>


                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    2 Shipping Addresses
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="checkout-inner border-0">
                                    <div class="checkout-address p-0">
                                        <p>
                                            The selected address will be used both as your personal address (for
                                            invoice) and as your delivery address.
                                        </p>
                                    </div>
                                    <div class="check-out-content">

                                            <div class="form-group row">
                                                <label class="col-md-3" for="Name2">Name</label>
                                                <div class="col-md-6">
                                                    <input class="form-control"  id="Name2" name="name"
                                                        type="text" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">Country</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="country">
                                                        <option>-- please choose --</option>
                                                        <option value="India">India</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">State</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="state">
                                                        <option>-- please choose --</option>
                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Chandigarh">Chandigarh</option>
                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                        <option value="Daman and Diu">Daman and Diu</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Lakshadweep">Lakshadweep</option>
                                                        <option value="Puducherry">Puducherry</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                        <option value="Haryana">Haryana</option>
                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                        <option value="Kerala">Kerala</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Manipur">Manipur</option>
                                                        <option value="Meghalaya">Meghalaya</option>
                                                        <option value="Mizoram">Mizoram</option>
                                                        <option value="Nagaland">Nagaland</option>
                                                        <option value="Odisha">Odisha</option>
                                                        <option value="Punjab">Punjab</option>
                                                        <option value="Rajasthan">Rajasthan</option>
                                                        <option value="Sikkim">Sikkim</option>
                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                        <option value="Telangana">Telangana</option>
                                                        <option value="Tripura">Tripura</option>
                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                        <option value="West Bengal">West Bengal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="city">City</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="city" name="city" type="text"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="zip">Pincode/Postal Code</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="zip" name="pincode" type="text"
                                                        required="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3" for="address1">Address</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="address1" name="address"
                                                        type="text" required="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3" for="phone">Phone</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" name="phone" id="phone" type="text" required="">
                                                </div>

                                            </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>3</span> Payment
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body pt-0">
                                <div class="custom-radio mb-4">
                                    <input type="radio" name="payment_method" value="Paytm Gateway" id="test6" class="paytm" >
                                    <label for="test6">Pay using Paytm Gateway</label>
                                </div>

                                {{-- <div class="custom-radio mb-4">
                                    <input type="radio" id="rzp-button1" name="payment_method" value="Razorpay Gateway" class="razorpay" >
                                    <label for="rzp-button1">Pay using Razorpay Gateway</label>
                                </div>

                                <div class="custom-radio mb-4">
                                    <input type="radio" id="test9" name="payment_method" value="Razorpay Gateway" class="payumoney" >
                                    <label for="test9">Pay using PayU Gateway</label>
                                </div> --}}


                                <div class="custom-radio mb-4">
                                    <input type="radio" value="Cash on Delivery" name="payment_method"  id="test7" class="cod">
                                    <label for="test7">Cash using Delivery</label>
                                </div>
                                <div class="filter-check-box mb-4">
                                    <input type="checkbox" id="20828" required="">
                                    <label class="checkout" for="20828">I agree to the terms and Conditions</label>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <ul class="list-group cart-summary rounded-0">
                    <h4 class="title mb-30 text-capitalize" style="text-align: center;" >Order Summary</h4>
                    <?php
                    $total_amount=0;
                    ?>
                    @foreach ($a as $cart)
                    <li class="list-group-item d-flex justify-content-between align-items-center">



                        <ul class="items">

                            <li>{{$cart->product_name}}</li>
                            <li>Quantity</li>

                        </ul>
                        <ul class="items">

                            <li>Rs. {{$cart->product_price}}/-</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$cart->product_quantity}}</li>

                        </ul>

                    </li>
                    <?php
                    $total_amount=$total_amount+($cart->product_price*$cart->product_quantity);
                    ?>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>Total Price</li>
                            <li>Taxes</li>
                        </ul>
                        <ul class="amount">
                            <li>Rs. <?php echo $total_amount ?>/-</li>
                            <li>Rs. 0/-</li>
                        </ul>
                        <input type="hidden" name="grand_total" value="<?php echo $total_amount ?>" id="">
                    </li>
                    <li class="list-group-item text-center">





                   <button type="submit" class="btn theme-btn--dark1 btn--md"
                   onclick="return select_payment_method();">Place Order</button>




                </li>


                </ul>



            </form>


            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
<script>

    function razor()
    {
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                                <script>
                                var options = {
                                    "key": env("razor_key_id"), // Enter the Key ID generated from the Dashboard
                                    "amount": "50000 *100", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                    "currency": "INR",
                                    "name": "Armaan Banoriya",
                                    "description": "Test Transaction",
                                    "image": "https://example.com/your_logo",
                                    "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                                    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
                                    "prefill": {
                                        "name": "Gaurav Kumar",
                                        "email": "gaurav.kumar@example.com",
                                        "contact": "9999999999"
                                    },
                                    "notes": {
                                        "address": "Razorpay Corporate Office"
                                    },
                                    "theme": {
                                        "color": "#3399cc"
                                    }
                                };
                                var rzp1 = new Razorpay(options);
                                document.getElementById('rzp-button1').onclick = function(e){
                                    rzp1.open();
                                    e.preventDefault();
                                }
                                </script>
    }
</script>




@endsection



