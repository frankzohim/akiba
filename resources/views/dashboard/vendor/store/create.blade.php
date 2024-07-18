@extends('layouts.frontoffice.master')
@section('title', 'Add Store')
@section('content')

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    @include('layouts.backoffice.vendor.header')
    
         <div class="ps-order-tracking" style="margin-top : -150px;">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Adding Store</h3>
                    <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to youon your receipt and in the confirmation email you should have received.</p>
                </div>
                 <div id="ppt-invalid-fields" style="display:none;" class="ps-form--order-tracking">
                    <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
                                <strong><i class="fa fa-exclamation-triangle mr-2"></i>  {{ __("Adding Store")}}  : </strong> <span id="ppt-invalid-fields-text"></span>
                    </div>
                </div>
                 @if($errors->any())
                        <div class="alert alert-danger ps-form--order-tracking" role="alert" >
                        
                            @foreach ($errors->all() as $error)
                                <div>{{ $error[0] }}</div>
                            @endforeach

                        </div>
                @endif

                @if(Session::get("success"))
                                    
                        <div class="alert alert-success ps-form--order-tracking" role="alert">
                            {{ Session::get('success') }}
                        </div>
                @endif

                <div class="ppt-add-listing-error ps-form--order-tracking"></div>
                    
               
                <div class="ps-section__content">
                    <form class="ps-form--order-tracking" action="{{route('store.store')}}" method="post" id="create_store">
                        @csrf
                          <input type="hidden" id="api-url" value="{{config('services.api-url.key')}}">
                         <input type="hidden" id="site-url" value="{{config('services.site-url.key')}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" id='name' placeholder="Store name">
                        </div>
                        <div class='row'>
                            <div class='col'>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" id='email' name="email" placeholder="info@yourdomain.com">
                                </div>
                            </div>
                            <div class='col'>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" type="text" id="phone" name="phone" placeholder="Store Phone">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label>Description</label>
                          
                                <textarea  id="description" name="description" cols="30" rows="10" class="form-control" ></textarea>
                        </div>
                      
                    </form>
                     

                                <div class="ps-form--order-tracking" onclick="jQuery('#ratesbox, #ratesbit').toggle();">
                                    <div class="form-group">
                                        <label>{{ __("Store's Images here, 3 max")}}<sup>*</sup> (.png, .jpg, .jpeg) </label>
                                    </div>
                              
                                    <div class="small">
                                        <form  class="dropzone" action="{{ route('store.image')}}" id="store-dropzone" name="file" files="true" enctype="multipart/form-data" method="POST">
                                            <div class="dz-message" data-dz-message><span>Drop files here to upload</span></div>
                                        @csrf
                                            <input type="hidden" name="file_id" id="file_id" value="{{ time()."_".rand(10000, 100000)}}">

                                        </form>
                                    </div>
                                </div>
                        <br>
                          <div class="form-group ps-form--order-tracking">
                            <button class="ps-btn ps-btn--fullwidth">Add Store Now</button>
                        </div>
                </div>
            </div>
        </div>
        
     @include('layouts.backoffice.vendor.footer')
       <script>
            Dropzone.options.storeDropzone = { // camelized version of the `id`
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 1, // MB
                maxFiles : 3,
                addRemoveLinks: true,
                removedfile: function(file) {
                    console.log('Call deleting');
                    var name = file.name;
                    var file_id = document.getElementById('file_id').value;
                    const apiURL = jQuery('#api-url').val();
                    const siteURL = jQuery('#site-url').val();
                    console.log(name);
                    // DELETING IMAGE
                    jQuery.ajax({
                        type: "GET",
                        dataType: 'json',
                        url: 'http://'+siteURL+'/vendor/store/deleteImage',
                        timeout: 15000,
                        data: {
                            filename: name,
                            file_id: file_id,
                        },
                        success: function(response, statusCode) {
                            console.log('success: ' + response);
                            //console.log(response.);

                        },
                        error: function(response, statusCode) {

                            //console.log(statusCode);
                            console.log(response);

                        },


                    });
                            var _ref;
                            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                },
                acceptedFiles: ".jpeg,.jpg,.png",
                init: function() {
                this.on("addedfile", file => {
                    //Check number of added photos
                    if(this.files.length > 3){
                        this.removeFile(file);
                        return;
                    }
                if (this.files.length) {
                    var _i, _len;
                    for (_i = 0, _len = this.files.length; _i < _len - 1; _i++) // -1 to exclude current file
                    {
                        if(this.files[_i].name === file.name && this.files[_i].size === file.size && this.files[_i].lastModified.toString() === file.lastModified.toString())
                        {
                            this.removeFile(file);
                        }
                    }
                }
                });
            }
            };
        </script>
         <script>

            document.querySelector('.ps-btn--fullwidth').addEventListener('click', function(){
                processSubmitForm();
            });

        function processSubmitForm(){
            
            canContinue = true;

            jQuery('#ppt-invalid-fields').hide();

            jQuery(".form-control").removeClass('required-active');
            jQuery(".ppt-add-listing-error").html('');

            if(!canContinue){
            return;
            }

            
            if(jQuery('#name').val() === "" || jQuery('#name').val() === undefined){
                    // steps('5','this');
                    jQuery('#name').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Store name is required");
                    scrollTop();
                    return false;
            }
            if(jQuery('#email').val() === "" || jQuery('#email').val() === undefined){
                    // steps('5','this');
                    jQuery('#email').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Store email is required");
                    scrollTop();
                    return false;
            }
            if(jQuery('#phone').val() === "" || jQuery('#phone').val() === undefined){
                    // steps('5','this');
                    jQuery('#phone').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Store phone is required");
                    scrollTop();
                    return false;
            }
           
            if(jQuery('#description').val() === "" || jQuery('#description').val() === undefined){
                    // steps('5','this');
                    jQuery('#description').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Store description is required");
                    scrollTop();
                    return false;
            }

             //Checking if at least one image has been successfully uploaded
            let storeDropzone = document.getElementById("store-dropzone");
            let children = storeDropzone.children;
            var numberUpload = 0;
            for (let i = 0; i < children.length; i++) {

                if (Array.from(children[i].classList).includes('dz-success')){
                    numberUpload++;
                }
            }

            if(numberUpload < 3){
                jQuery('#ppt-invalid-fields').show();
                jQuery('#ppt-invalid-fields-text').html("Please upload at least 3 images");
                scrollTop();
                return false;
            }

            // Submit form
            if(canContinue){

                // SAVE THE DATA
                //document.getElementById('file_id_1').value = document.getElementById('file_id').value;
                document.getElementById('create_store').submit();

            }

        }

        function scrollTop(){
            // jQuery('body,html').animate({
            //             scrollTop: 200
            //         }, 100);

            const errorZone = document.getElementById('ppt-invalid-fields');
            errorZone.scrollIntoView(true);
        }
           
        </script>
@endsection