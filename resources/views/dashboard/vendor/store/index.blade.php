@extends('layouts.frontoffice.master')
@section('title', 'Store\'s Info')
@section('page_title', 'Stores')
@section('content')
@include('layouts.backoffice.vendor.header')
 @if($errors->any())
        <div class="alert alert-danger" role="alert">
          
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach

        </div>
@endif

@if(Session::get("success"))
                       
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
@endif
   <div id="ppt-add-listing-save-success" style="display:none;">  
        <div class="alert alert-success p-3  alert-dismissible fade show" role="alert">
            <strong><i class="fa fa-check mr-3"></i>  {{ __("Great")}}</strong> - {{ __("Your account has been created, have fun")}}.
        </div>
    </div>

    <div class="ppt-add-listing-error"></div>
    
    <div id="ppt-invalid-fields" style="display:none;">
            <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
                <strong><i class="fa fa-exclamation-triangle mr-2"></i>  {{ __("Register")}}  : </strong> <span id="ppt-invalid-fields-text"></span>
            </div>
    </div>
     <main class="ps-page--my-account">
      
        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ps-section__left">
                            <aside class="ps-widget--account-dashboard">
                                <div class="ps-widget__header"><img src="{{ asset('assets/img/users/3.jpg')}}" alt="" />
                                    <figure>
                                        <figcaption>{{ $store['name']}}</figcaption>
                                        <p><a href="#">username@gmail.com</a></p>
                                    </figure>
                                </div>
                                <div class="ps-widget__content">
                                    <ul>
                                        <li class="active"><a href="#"><i class="icon-user"></i> Store Information</a></li>
                                        <li><a href="#"><i class="icon-alarm-ringing"></i> Images</a></li>
                                        <li><a href="#"><i class="icon-papers"></i> Hours</a></li>
                                        <li><a href="#"><i class="icon-map-marker"></i> Address</a></li>
                                      
                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                        <li><a href="#"><i class="icon-power-switch"></i>Delete</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right">
                            <form class="ps-form--account-setting" action="index.html" method="get">
                                <div class="ps-form__header">
                                    <h3> Store Information</h3>
                                </div>
                                <div class="ps-form__content">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" placeholder="Please enter your name..." value="{{ $store['name']}}">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input class="form-control" type="text" placeholder="Please enter phone number..." value="{{ $store['phone_number']}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" placeholder="Please enter your email..." value="{{ $store['email']}}">
                                            </div>
                                        </div>

                                    </div>
                                     <div class="form-group">
                                            <label>Description</label>
                                            <textarea  id="description" name="description" cols="30" rows="3" class="form-control" >{{ $store['description']}}</textarea>
                                        </div>
                                </div>
                                <div class="form-group submit">
                                    <button class="ps-btn">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
    </main>
  @include('layouts.backoffice.vendor.footer') 
@endsection

