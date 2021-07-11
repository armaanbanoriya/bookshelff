<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 8 - Razorpay Payment Gateway Integration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif
                        <div class="card card-default">
                            <div class="card-header">
                                Laravel 8 - Razorpay Payment Gateway Integration
                            </div>

                            <div class="card-body text-center">
                                <button id="rzp-button1" onclick="razorpay()">Pay</button>


                                {{-- Read more: Learn abou --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function razorpay()
    {

        // var name=jQuery('#name').val();
        // var grand_total=jQuery('#total').val();
        var options = {
                            "key": "rzp_test_c7KwXgs6F1xyZD", // Enter the Key ID generated from the Dashboard
                            "amount": "100*grand_total", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                            "currency": "INR",
                            "name": "Bookshelf Ecommerce",
                            "description": "Complete Your Order",
                            "image": "https://example.com/your_logo",

                            "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",

                            "theme": {
                                "color": "#3399cc"
                            }
                             "handler": function(response){
                                 jQuery.ajax({
                                     type:'post',
                                     url:'',
                                     data: "payment_id"+response.razorpay_pament_id+"&amount"+amount+"&name"+name,
                                     success:function(result){
                                         window.location.href={{url('thanks')}};
                                     }
                                 })
                             }

                        };
                        var rzp1 = new Razorpay(options);
                        document.getElementById('rzp-button1').onclick = function(e){
                            rzp1.open();
                            e.preventDefault();
                        }

    }
</script>
