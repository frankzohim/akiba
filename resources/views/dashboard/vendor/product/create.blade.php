@extends('layouts.frontoffice.master')
@section('title', 'Add Product')
@section('content')

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    @include('layouts.backoffice.vendor.header')
    
         <div class="ps-order-tracking" style="margin-top : -150px;">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Adding Product</h3>
                    <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to youon your receipt and in the confirmation email you should have received.</p>
                </div>
                 <div id="ppt-invalid-fields" style="display:none;" >
                    <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
                                <strong><i class="fa fa-exclamation-triangle mr-2"></i>  {{ __("Adding Product")}}  : </strong> <span id="ppt-invalid-fields-text"></span>
                    </div>
                </div>
                 @if($errors->any())
                        <div class="alert alert-danger " role="alert" >
                        
                            @foreach ($errors->all() as $error)
                                <div>{{ $error[0] }}</div>
                            @endforeach

                        </div>
                @endif

                @if(Session::get("success"))
                                    
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                @endif

            <section class="ps-new-item">
                <form class="" action="{{route('product.store')}}" method="post" id="create_product">
                      @csrf
                         <input type="hidden" id="api-url" value="{{config('services.api-url.key')}}">
                         <input type="hidden" id="site-url" value="{{config('services.site-url.key')}}">
                    <div class="ps-form__content">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <figure class="ps-block--form-box">
                                    <figcaption class="display-4">General</figcaption>
                                   
                                    <div class="ps-block__content">
                                        <div class="form-group">
                                            <label>Product Name<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" name="name" id="name" placeholder="Enter product name..." />
                                        </div>
                                        <div class="form-group">
                                            <label>Reference<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" id="reference" name="reference" placeholder="Enter product Reference..." />
                                        </div>
                                        <div class="form-group">
                                            <label>Product Summary<sup>*</sup>
                                            </label>
                                            <textarea class="form-control" id="summary" name="summary" rows="6" placeholder="Enter product description..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Description<sup>*</sup>
                                            </label>
                                            <textarea class="form-control" id="description" name="description" rows="7.5" placeholder="Enter product description..."></textarea>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Sale Price<sup>*</sup>
                                            </label>
                                            <input class="form-control" id="price" name="price" type="number" min=0 placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Sale Quantity<sup>*</sup>
                                            </label>
                                            <input class="form-control" id="sale_quantity" name="sale_quantity" type="number" value=1 min=0 placeholder="" />
                                        </div>
                                       
                                     
                                    </div>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                               
                                <figure class="ps-block--form-box">
                                    <figcaption class="display-4">Inventory</figcaption>
                                    
                                    <div class="ps-block__content">
                                        <div class="form-group">
                                            <label>SKU<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" id="sku" name="sku" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Stock Quantity<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="number" min=0  
                                            id="stock" name="stock" placeholder="" />
                                        </div>
                                        <div class="form-group form-group--select">
                                            <label>Category
                                            </label>
                                            <div class="form-group__content">
                                                <select class="ps-select" id="category" name="category" title="category" style="width: 100%">
                                                    <option>Select category</option>
                                                    @forelse ($allCategories as $category)
                                                        <option value="{{ $category['id'] }}">{{ $category['name']}}</option>
                                                    @empty
                                                        
                                                    @endforelse
                                                    
                                                 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-group--select">
                                            <label>Brand
                                            </label>
                                            <div class="form-group__content">
                                                <select class="ps-select" id="brand" name="brand" title="Brand" style="width: 100%">
                                                 
                                                   <option>Select brand</option>
                                                    @forelse ($brands as $brand)
                                                        <option value="{{ $brand['id'] }}">{{ $brand['name']}}</option>
                                                    @empty
                                                        
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-group--select">
                                            <label>State
                                            </label>
                                            <div class="form-group__content">
                                                <select class="ps-select" title="state" id="state" name="state" style="width: 100%">
                                                    <option value="1">Published</option>
                                                    <option value="0">UnPublished</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </figure>
                               
                                </form>
                                 <figure class="ps-block--form-box">
                                    <figcaption class="display-4">Product Media</figcaption>
                                    <br>
                                    
                                    <div class="ps-block__content">
                                      
                                        <div  onclick="jQuery('#ratesbox, #ratesbit').toggle();">
                                            <div class="form-group">
                                                <label>{{ __("Product's Images here, 4 max")}}<sup>*</sup> (.png, .jpg, .jpeg) </label>
                                            </div>
                                    
                                            <div class="small">
                                                <form  class="dropzone" action="{{route('product.image')}}" id="product-dropzone" name="file" files="true" enctype="multipart/form-data" method="POST">
                                                    <div class="dz-message" data-dz-message><span>Drop files here to upload</span></div>
                                                @csrf
                                                    <input type="hidden" name="file_id" id="file_id" value="{{ time()."_".rand(10000, 100000)}}">

                                                </form>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Video (optional)
                                            </label>
                                            <input class="form-control" type="text" id="video" name="video" placeholder="Enter video URL" />
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__bottom">
                     
                        <button class="ps-btn ps-btn--gray">Cancel</button>
                        <button class="ps-btn" id='submit-btn'>Submit</button>
                    </div>
                
                 
            </section>
          
                    
               
             
            </div>
        </div>
        
     @include('layouts.backoffice.vendor.footer')
       <script>
            Dropzone.options.productDropzone = { // camelized version of the `id`
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
                        url: 'http://'+siteURL+'/vendor/product/deleteImage',
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

            document.getElementById('submit-btn').addEventListener('click', function(){
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
                    jQuery('#ppt-invalid-fields-text').html("Product name is required");
                    scrollTop();
                    return false;
            }
            if(jQuery('#reference').val() === "" || jQuery('#reference').val() === undefined){
                    // steps('5','this');
                    jQuery('#reference').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Product reference is required");
                    scrollTop();
                    return false;
            }
            if(jQuery('#summary').val() === "" || jQuery('#summary').val() === undefined){
                    // steps('5','this');
                    jQuery('#summary').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Product summary is required");
                    scrollTop();
                    return false;
            }

            if(jQuery('#description').val() === "" || jQuery('#description').val() === undefined){
                    // steps('5','this');
                    jQuery('#description').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Product description is required");
                    scrollTop();
                    return false;
            }

            if(jQuery('#price').val() === "" || jQuery('#price').val() === undefined){
                    // steps('5','this');
                    jQuery('#price').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Product price is required");
                    scrollTop();
                    return false;
            }
            if(jQuery('#sale_quantity').val() === "" || jQuery('#sale_quantity').val() === undefined){
                    // steps('5','this');
                    jQuery('#sale_quantity').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Product sale quantity is required");
                    scrollTop();
                    return false;
            }
            if(jQuery('#sku').val() === "" || jQuery('#sku').val() === undefined){
                    // steps('5','this');
                    jQuery('#sku').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Product sku is required");
                    scrollTop();
                    return false;
            }
            if(jQuery('#stock').val() === "" || jQuery('#stock').val() === undefined){
                    // steps('5','this');
                    jQuery('#stock').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Product stock is required");
                    scrollTop();
                    return false;
            }
            if(jQuery('#category').val() === "" || jQuery('#category').val() === undefined){
                    // steps('5','this');
                    jQuery('#category').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Product category is required");
                    scrollTop();
                    return false;
            }
            if(jQuery('#brand').val() === "" || jQuery('#brand').val() === undefined){
                    // steps('5','this');
                    jQuery('#brand').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("Product brand is required");
                    scrollTop();
                    return false;
            }
          
           
           

             //Checking if at least one image has been successfully uploaded
            let productDropzone = document.getElementById("product-dropzone");
            let children = productDropzone.children;
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
                document.getElementById('create_product').submit();

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