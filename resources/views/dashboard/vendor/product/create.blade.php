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

                   <section class="ps-new-item">
                <form class="ps-form ps-form--new-product" action="index.html" method="get">
                    <div class="ps-form__content">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <figure class="ps-block--form-box">
                                    <figcaption class="display-4">General</figcaption>
                                    <br>
                                    <div class="ps-block__content">
                                        <div class="form-group">
                                            <label>Product Name<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" placeholder="Enter product name..." />
                                        </div>
                                        <div class="form-group">
                                            <label>Reference<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" placeholder="Enter product Reference..." />
                                        </div>
                                        <div class="form-group">
                                            <label>Product Summary<sup>*</sup>
                                            </label>
                                            <textarea class="form-control" rows="6" placeholder="Enter product description..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Regular Price<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Sale Price<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Sale Quantity<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Sold Items<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" placeholder="" />
                                        </div>
                                     
                                    </div>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <figure class="ps-block--form-box">
                                    <figcaption class="display-4">Product Images</figcaption>
                                    <br>
                                    
                                    <div class="ps-block__content">
                                      
                                        <div  onclick="jQuery('#ratesbox, #ratesbit').toggle();">
                                            <div class="form-group">
                                                <label>{{ __("Product's Images here, 4 max")}}<sup>*</sup> (.png, .jpg, .jpeg) </label>
                                            </div>
                                    
                                            <div class="small">
                                                <form  class="dropzone" action="{{ route('store.image')}}" id="store-dropzone" name="file" files="true" enctype="multipart/form-data" method="POST">
                                                    <div class="dz-message" data-dz-message><span>Drop files here to upload</span></div>
                                                @csrf
                                                    <input type="hidden" name="file_id" id="file_id" value="{{ time()."_".rand(10000, 100000)}}">

                                                </form>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Video (optional)
                                            </label>
                                            <input class="form-control" type="text" placeholder="Enter video URL" />
                                        </div>
                                    </div>
                                </figure>
                                <figure class="ps-block--form-box">
                                    <figcaption>Inventory</figcaption>
                                    <div class="ps-block__content">
                                        <div class="form-group">
                                            <label>SKU<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" placeholder="" />
                                        </div>
                                        <div class="form-group form-group--select">
                                            <label>Status
                                            </label>
                                            <div class="form-group__content">
                                                <select class="ps-select" title="Status">
                                                    <option value="1">Status 1</option>
                                                    <option value="2">Status 2</option>
                                                    <option value="3">Status 3</option>
                                                    <option value="4">Status 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <figure class="ps-block--form-box">
                                    <figcaption>Meta</figcaption>
                                    <div class="ps-block__content">
                                        <div class="form-group form-group--select">
                                            <label>Brand
                                            </label>
                                            <div class="form-group__content">
                                                <select class="ps-select" title="Brand">
                                                    <option value="1">Brand 1</option>
                                                    <option value="2">Brand 2</option>
                                                    <option value="3">Brand 3</option>
                                                    <option value="4">Brand 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tags
                                            </label>
                                            <input class="form-control" type="text" />
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__bottom"><a class="ps-btn ps-btn--black" href="products.html">Back</a>
                        <button class="ps-btn ps-btn--gray">Cancel</button>
                        <button class="ps-btn">Submit</button>
                    </div>
                </form>
            </section>
          
                    
               
             
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