@extends('layouts.backoffice.admin.app')
@section('title', 'Category\'s List')
@section('page_title', 'Categories')
@section('content')

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
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

    <div class="ppt-add-listing-error"></div>
    
    <div id="ppt-invalid-fields" style="display:none;">
            <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
                <strong><i class="fa fa-exclamation-triangle mr-2"></i>  {{ __("Register")}}  : </strong> <span id="ppt-invalid-fields-text"></span>
            </div>
    </div>

 <section class="ps-dashboard ps-items-listing">
                
                <div class="ps-section__left">
                    @if(count($categories))
                    <div class="table-responsive">
                        <table class="table ps-table">
                            <thead>
                                <tr>
                                    <th>Category name</th>
                                    <th>State</th>
                                    <th>Number of products</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td><strong>{{ $category['name']}}</strong></td>
                                    <td> @if ($category['state'] == 1)
                                            <span class="ps-badge success">Publish</span>
                                        @else
                                            <span class="ps-badge gray">Unpublish</span>
                                        @endif
                                    </td>
                                    <td>0</td>
                                    <td>
                                        <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="{{ route('category.edit',['id' => $category['id']]) }}">Edit</a>
                                            <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#deleteModal{{ $category['id'] }}">Delete</a>
                                        </div>
                                        </div>
                                          <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $category['id'] }}" tabindex="-1" 
                                                    role="dialog" aria-labelledby="exampleModalLabel{{ $category['id'] }}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Deletion</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="get" action="{{ route('category.delete',['id' => $category['id']]) }}" id="delete-form{{$category['id']}}">
                                                            @csrf
                                                            <p>{{ __('Do you really want to delete this item') }}</p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                     No categories
                    @endif
                    <div class="ps-section__footer">
                        <p>Show 5 in 30 items.</p>
                        <ul class="pagination">
                            <li><a href="#"><i class="icon icon-chevron-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="icon-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="ps-section__right">
                    <form class="ps-form ps-form--new" action="{{route('category.store')}}" method="post" id="create_category">
                        @csrf
                         <input type="hidden" id="api-url" value="{{config('services.api-url.key')}}">
                         <input type="hidden" id="site-url" value="{{config('services.site-url.key')}}">
                        <div class="ps-form__content">
                            <div class="form-group">
                                <label>Name<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" name='name' value="{{ old('name') }}" id="category_name" placeholder="Enter category name" required/>
                            </div>
                            <div class="form-group">
                              
                            </div>
                            <div class="form-group form-group--select">
                                <label>Status
                                </label>
                                <div class="form-group__content">
                                    <select class="ps-select" name='state' title="Status">
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-group--select">
                                <label>Parent
                                </label>
                                <div class="form-group__content">
                                    <select class="ps-select" title="parent" name="parent">
                                        @forelse ($categories as $category)
                                             <option value="{{ $category['id'] }}">{{ $category['name']}}</option>
                                        @empty
                                            
                                        @endforelse
                                       
                                    </select>
                                </div>
                            </div>
                          
                          <input type="hidden" name="file_id_1" id="file_id_1" value="">
                        </div>
                        
                    </form>
                     <label>{{ __("Logo")}}<sup>*</sup> (.png, .jpg, .jpeg) </label>

                                <div class="cardbox closed" onclick="jQuery('#ratesbox, #ratesbit').toggle();">
                                    <i class="fa fa-cloud-upload" style="color:red"></i>
                                    <div class="small">
                                        <form  class="dropzone" action="{{ route('category.image')}}" id="category-dropzone" name="file" files="true" enctype="multipart/form-data" method="POST">
                                            <div class="dz-message" data-dz-message><span>Drop files here to upload</span></div>
                                        @csrf
                                            <input type="hidden" name="file_id" id="file_id" value="{{ time()."_".rand(10000, 100000)}}">

                                        </form>
                                    </div>
                                    </div>
                                    <br>
                    <div class="ps-form__bottom">
                            <button class="ps-btn ps-btn--gray" id="reset-btn" type='button'>Reset</button>
                            <button class="ps-btn ps-btn--sumbit success">Add new</button>
                        </div>
                                    
                </div>
            </section>
            
         <script>
            Dropzone.options.categoryDropzone = { // camelized version of the `id`
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 1, // MB
                maxFiles : 1,
                addRemoveLinks: true,
                removedfile: function(file) {
                    console.log('Call deleting');
                    var name = file.name;
                    var file_id = document.getElementById('file_id').value;
                    const apiURL = jQuery('#api-url').val();
                    const siteURL = jQuery('#site-url').val();
                    // console.log(user_id);
                    // DELETING IMAGE
                    jQuery.ajax({
                        type: "GET",
                        dataType: 'json',
                        url: 'http://'+siteURL+'/category/deleteImage',
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
                    if(this.files.length > 1){
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
            document.querySelector('#reset-btn').addEventListener('click', function(){
                console.log('resting');
                document.querySelector('#category_name').value = '';
            });

            document.querySelector('.ps-btn--sumbit').addEventListener('click', function(){
                processSubmitForm();
            });

        function processSubmitForm(){
    
            console.log('process');
            canContinue = true;

            jQuery('#ppt-invalid-fields').hide();

            jQuery(".form-control").removeClass('required-active');
            jQuery(".ppt-add-listing-error").html('');

            if(!canContinue){
            return;
            }

            
            if(jQuery('#category_name').val() === "" || jQuery('#category_name').val() === undefined){
                    // steps('5','this');
                    jQuery('#category_name').addClass('required-active');
                    jQuery('#ppt-invalid-fields').show();
                    jQuery('#ppt-invalid-fields-text').html("category name is required");
                    return false;
            }

             //Checking if at least one image has been successfully uploaded
            let categoryDropzone = document.getElementById("category-dropzone");
            let children = categoryDropzone.children;
            var numberUpload = 0;
            for (let i = 0; i < children.length; i++) {

                if (Array.from(children[i].classList).includes('dz-success')){
                    numberUpload++;
                }
            }

            if(numberUpload < 1){
                jQuery('#ppt-invalid-fields').show();
                jQuery('#ppt-invalid-fields-text').html("Please upload a logo");
                return false;
            }

            // Submit form
            if(canContinue){

                // SAVE THE DATA
                document.getElementById('file_id_1').value = document.getElementById('file_id').value;
                document.getElementById('create_category').submit();

            }

        }

           
        </script>
      
@endsection

