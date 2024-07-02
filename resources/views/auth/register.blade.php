@extends('layouts.frontoffice.master')
@section('title', 'Register')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/intl-tel-input-master/build/css/intlTelInput.css') }}">
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
                <form class="ps-form--account ps-tab-root" action="{{ route('store')}}" method="post"
                >
                 <div id="ppt-add-listing-save" style="display:none;">
                       
                            <div class="alert alert-primary p-3 alert-dismissible fade show" role="alert">
                                <strong><i class="fa fa-spinner fa-spin fa-sync mr-3"></i> {{ __("Registration")}} </strong> - {{ __("This may take a few minutes")}}
                            </div>
                      
                  </div>
                  <div id ="ppt-add-listing-form">

                  
                   @csrf
                    <ul class="ps-tab-list">
                        <li class="active"><a href="#register">Register</a></li>
                    </ul>
                   

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
                                    <input class="form-control" type="text" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="phone_number" id="phone" type="tel" placeholder="Phone number">
                                    <span id="valid-msg" style="display:none">✓ {{ __("Valid")}}</span>
		                            <span id="error-msg" class="hide"></span>
                                </div>
                              
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="role_id" id="role_id">
                                        <option value="2">I am a vendor</option>
                                        <option value="3">I am a customer</option>
                                        <option value="4">I am a shipper</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password"
                                    name="password" id="mypass" placeholder="Password">
                                </div>

                                 <div class="form-group">
                                    <input class="form-control" name="passwordconfirm" id="mypass1" type="password" placeholder="Confirm Password">
                                </div>

                                <input type="hidden" id="api-url" value="{{config('services.api-url.key')}}">
                                <input type="hidden" id="site-url" value="{{config('services.site-url.key')}}">
                                <div class="form-group">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="cgu" name="cgu" checked/>
                                        <label for="cgu">I agree terms & conditions</label>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <button class="ps-btn ps-btn--fullwidth" type='button' id="register-btn"
                                    onclick="processSubmitForm()">Register</button>
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

    function processSubmitForm(){
    
        console.log('process');
        canContinue = true;
        //console.log(iti.isValidNumber());

        jQuery('#ppt-invalid-fields').hide();

        jQuery(".form-control").removeClass('required-active');
        jQuery(".ppt-add-listing-error").html('');

        if(!canContinue){
        return;
        }

        
        if(jQuery('#username').val() === "" || jQuery('#username').val() === undefined){
                // steps('5','this');
                jQuery('#username').addClass('required-active');
                jQuery('#ppt-invalid-fields').show();
                jQuery('#ppt-invalid-fields-text').html("Le nom d'utilisateur est requis");
                return false;
        }

        //Validating phone number
        //console.log("in process "+jQuery('#valide-phone-number').val());
        if(jQuery('#phone').val() === "" || jQuery('#phone').val() === undefined || !iti.isValidNumber()){
                // steps('5','this');
                jQuery('#phone').addClass('required-active');
                jQuery('#ppt-invalid-fields').show();
                jQuery('#ppt-invalid-fields-text').html("Le numéro de téléphone est incorrect");
                return false;
        }

        if(!document.querySelector('#cgu').checked){
            jQuery('#cgu').addClass('required-active');
                jQuery('#ppt-invalid-fields').show();
                jQuery('#ppt-invalid-fields-text').html("vous n'aviez pas accepté la politique de confidentialité.");
                return false;
        }
       

        if(jQuery('#mypass').length > 0){
            if(jQuery('#mypass').val() == "" || jQuery('#mypass1').val() == ""
            || ( jQuery('#mypass').val() != jQuery('#mypass1').val()) ||
            jQuery('#mypass').val().length < 6){
                jQuery('#mypass').addClass('required-active');
                jQuery('#mypass1').addClass('required-active');
                jQuery('#ppt-invalid-fields').show();
                jQuery('#ppt-invalid-fields-text').html("Le mot de passe est de 6 caractères mninimum et ça doit correspondrent");
                ;
                return false;
            }
        }

        // if(jQuery('#g-recaptcha-response').val() === "" || jQuery('#g-recaptcha-response').val() === undefined){

        // 		jQuery('[data-key="g-recaptcha-response"]').addClass('required-active');
        // 		jQuery('#ppt-invalid-fields').show();
        // 		jQuery('#ppt-invalid-fields-text').html("Veuillez compléter le captcha");
        // 		;
        // 		return false;
        // }



            // GOOGLE RECAPTURE

            // MOVE ALL FORM DATA INTO PLACE
        jQuery('#SUBMISSION_FORM').html('');
        jQuery('.form-control').each(function(){

            var attr = jQuery(this).attr('name');
            if (typeof attr !== 'undefined' && attr !== false) {

                var type = jQuery(this).attr('type');

                if(  ( type == "checkbox" || type == "radio"  ) && !jQuery(this).prop("checked") ){

                //console.log(type+' skipped '+attr);

                }else{

                jQuery('#SUBMISSION_FORM').append('<textarea type="text" name="'+jQuery(this).attr('name')+'">'+jQuery(this).val()+'</textarea>');

                }
            }

            //jQuery(this).html().clone().appendTo(jQuery('#SUBMISSION_FORM'));

        });

        // SHOW SPINNER
        if(canContinue){

            jQuery('#ppt-add-listing-form').hide();
            jQuery('#ppt-add-listing-save').show();


            const username = jQuery("#username").val();
            const role = jQuery("#role_id").val();
            const email = jQuery("#email").val();
            var phoneNumber = jQuery("#phone").val();
            var password = jQuery("#mypass").val();
            // //var cgu=document.querySelector('.#cgu:checked').value;
            // console.log(cgu)
            //const recaptcha = jQuery('#g-recaptcha-response').val();
            const apiURL = jQuery('#api-url').val();
            const siteURL = jQuery('#site-url').val();
            console.log("hello");
            console.log(siteURL);
            // SAVE THE DATA
            jQuery.ajax({
                type: "POST",
                dataType: 'json',
                url: 'http://'+apiURL+'/api/user',
                timeout: 15000,
                data: {
                    username: username,
                    role_id: role,
                    email: email,
                    phone_number: phoneNumber,
                    password: password,
                    //recaptcha : recaptcha,
                    formdata: jQuery('#SUBMISSION_FORM').serialize(),

                },
                success: function(response, statusCode) {

                    //console.log(response.);
                    if(statusCode === "success"){

                        jQuery('#ppt-add-listing-save').hide();
                        jQuery('#ppt-add-listing-save-success').show();
                        jQuery('#ppt-add-listing-form').hide();

                        setTimeout(()=>{
                            window.location.replace("http://"+siteURL+"/loginAuto?phone_number="+phoneNumber+"&password="+password);
                        }, 3000)



                        // if(response.type == "email" || response.type == "username" ){
                        // steps('5','this');
                        // }


                    }

                },
                error: function(response, statusCode) {

                    console.log(statusCode);
                    console.log(response.status);
                    console.log(response.responseText);
                    var obj = JSON.parse(response.responseText);
                    console.log(obj);
                    console.log(obj.username);

                    if(response.status == '400'){

                        jQuery('#ppt-add-listing-save').hide();
                        jQuery('#ppt-add-listing-form').show();

                        let errors = Object.keys(obj);
                        console.log(errors);
                        var textToPrint = "";

                        errors.forEach((error)=>{
                            console.log();
                            obj[error].forEach((e) =>{
                                textToPrint = textToPrint + e + "<br>"
                            })

                        })

                        jQuery(".ppt-add-listing-error").html('<div>'+textToPrint+"</div>");
                        ;
                        // if(response.type == "email" || response.type == "username" ){
                        // steps('5','this');
                        // }


                    }

                    else if(response.status == '0'){

                        jQuery('#ppt-add-listing-save').hide();
                        jQuery('#ppt-add-listing-form').show();
                        jQuery(".ppt-add-listing-error").html("<div>Request timeout, Serveur indisponible</div>");
                        ;
                        // if(response.type == "email" || response.type == "username" ){
                        // steps('5','this');
                        // }


                    }
                    else{

                        jQuery('#ppt-add-listing-save').hide();
                        jQuery('#ppt-add-listing-form').show();
                        jQuery(".ppt-add-listing-error").html(`Une erreur inconnue s'est produite`);
                    }

                },


            });

        }

}
    </script>
     <script src="{{ asset('assets/intl-tel-input-master/build/js/intlTelInput.js') }}"></script>
    <script>

        const input = document.querySelector("#phone");
        const button = document.querySelector("#register-btn");
        const errorMsg = document.querySelector("#error-msg");
        const validMsg = document.querySelector("#valid-msg");

        // here, the index maps to the error code returned from getValidationError - see readme
        const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        // initialise plugin
        const iti = window.intlTelInput(input, {
        onlyCountries: ["cm"],
        utilsScript: "{{ asset('assets/intl-tel-input-master/build/js/utils.js') }} "
        });

        const reset = () => {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        jQuery('#valid-msg').hide();
        };

        // on click button: validate
        button.addEventListener('click', () => {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {

            jQuery('#valid-msg').show();
            } else {

            input.classList.add("error");
            const errorCode = iti.getValidationError();
            errorMsg.innerHTML = errorMap[errorCode];
            errorMsg.classList.remove("hide");
            }
        }
        });

        // on keyup / change flag: reset
        // input.addEventListener('change', reset);
        // input.addEventListener('keyup', reset);

    </script>
@endsection