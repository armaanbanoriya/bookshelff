@extends('front.master')

@section('title','Login')

@section('content')
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">login</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Log in to your account </li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="my-account pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25"> Log in to your account</h3>
              {{-- Display message Start --}}
              @if (session()->has('message'))
              <div class="alert alert-success ">{{session()->get('message')}}</div>
              @elseif (session()->has('error'))
              <div class="alert alert-danger ">{{session()->get('error')}}</div>
              @endif
              {{-- Display message end --}}
                <form id="loginForm" method="POST" action="{{url('front/login')}}" >
                    @csrf


                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" id="email">
                            <input type="hidden" name="role" value="1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-6">
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="password" name="password" class="form-control" id="password">
                                <div class="input-group-prepend">
                                    <button type="button" onclick="showpwsd()"
                                        class="input-group-text theme-btn--dark1 btn--md show-password">show</button>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="form-group row pb-3 text-center">
                        <div class="col-md-6 offset-md-3">
                            <div class="login-form-links">
                                {{-- @if (Route::has('password.request'))
                                    <a class="for-get" href="{{url('reset')}}">
                                        Forgot your password?
                                    </a>
                                @endif --}}
                                <a href="{{url('forgot-password')}}" class="for-get">Forgot your password?</a>
                                <div class="sign-btn">


                                    <button type="submit" class="btn theme-btn--dark1 btn--md" >
                                        Sign In
                                    </button>
                                    <hr>
                                    <div class="">
                                       <a href="login/google" class="btn btn-danger social">Login with Google</a>
                                       <a href="login/facebook" class="btn btn-primary social">Login with Facebook</a>
                                       </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row text-center mb-0">
                        <div class="col-12">
                            <div class="border-top">
                                <a href="{{url('login-register')}}" class="no-account">No account? Create one here</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->

<script>
    function showpwsd() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>

@endsection
