@extends('layouts.frontoffice.master')
@section('title', 'Register')
@section('content')
    <div class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>My account</li>
                </ul>
            </div>
        </div>
        <div class="ps-my-account">
            <div class="container">
                <form class="ps-form--account ps-tab-root" action="{{ route('store')}}" method="post">
                   @csrf
                    <ul class="ps-tab-list">
                        <li class="active"><a href="#register">Register</a></li>
                    </ul>
                    @if(Session::get("error"))
                        <div class="alert alert-danger" role="alert">
                           {{ Session::get('error') }}
                        </div>
                    @endif

                    @if(Session::get("success"))
                       
                        <div class="alert alert-success" role="alert">
                           {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="sign-in">
                            <div class="ps-form__content" >
                                <h5>Register An Account</h5>
                               
                                <div class="form-group">
                                    <input class="form-control" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="phone_number" type="tel" placeholder="Phone number">
                                </div>
                              
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="role_id">
                                        <option value="vendor">I am a vendor</option>
                                        <option value="vendor">I am a customer</option>
                                        <option value="vendor">I am a shipper</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Password">
                                </div>

                                 <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Confirm Password">
                                </div>

                                <div class="form-group">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="remember-me" name="remember-me" checked/>
                                        <label for="remember-me">I agree terms & conditions</label>
                                    </div>
                                </div>
                                <div class="form-group submtit">
                                    <button class="ps-btn ps-btn--fullwidth">Register</button>
                                </div>
                            </div>
                            <div class="ps-form__footer">
                                <p>Connect with:</p>
                                <ul class="ps-list--social">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    
                      
                    </div>
                
            </div>
        </div>
    </div>
    <script>
    document.getElementById("myAnchor").addEventListener("click", function(event){
      event.preventDefault()
    });

    function TogglePass() {
      var x = document.getElementById("passwordLogin");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
@endsection