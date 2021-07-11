@extends('front.master')

@section('title','Order Confirmation')

@section('content')
<hr>
    <div class="container mt-3 mb-5" >
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div style="height: 200px;" >
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_yom6uvgj.json"  background="transparent"  speed="1"     autoplay></lottie-player>
                </div>
                <br>
                <h1>Hey <span>{{Auth::user()->name}},</span></h1>
                <br>
                <h3><b>Your Order is Confirmed!</b></h3><b> <br>
                    <p>Click Below to view Orders</p> <br>
                    <a type="button" class="btn btn-info" href="{{url('myaccount')}}">View Orders</a>
            </div>
    </b>    </div>
    </div>

@endsection
