@extends('layouts.main')
@section('yield', 'Order Create')
@section('content')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" media="all">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" media="all">





<style>
    * {
        margin: 0;
        padding: 0;
    }

    html {
        height: 100%;
    }
    

    /*form styles*/
    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
    }

    #msform fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 10px;
        box-shadow: 2px 2px 30px 1px rgba(0, 0, 0, 0.3);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    /* #msform fieldset:not(:first-of-type) {
        display: none;
    } */

    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E;
    }

    #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: #2C3E50;
        font-size: 16px;
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        border-bottom: 2px solid skyblue;
        outline-width: 0;
    }

    select[multiple]{
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	overflow: hidden;
	box-shadow: none;
}

    /*Blue Buttons*/
    #msform .action-button {
        width: 150px;
        background: #435df7;
        color: white;
        border-radius: 20px;
        cursor: pointer;
        padding: 10px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #435df7;
    }

    /*Previous Buttons*/
    #msform .action-button-previous {
        width: 150px;
        background: #f9466d;
        color: white;
        border-radius: 20px;
        cursor: pointer;
        padding: 10px;
        margin: 10px 5px;
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #f9466d;
    }

    /*Dropdown List Exp Date*/
    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px;
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue;
    }

    /*The background card*/
    .card {
        z-index: 0;
        border: none;
        border-radius: 0.5rem;
        position: relative;
    }

    /*FieldSet headings*/
    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
        color: #000000;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative;
    }

    /*Icons in the ProgressBar*/
    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f023";
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007";
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f09d";
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c";
    }

    /*ProgressBar before any progress*/
    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
    }

    /*ProgressBar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1;
    }

    /*Color number of the step and the connector before it*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background-image: linear-gradient(#f9466d , #435df7);
    }

    /*Imaged Radio Buttons*/
    .radio-group {
        position: relative;
        margin-bottom: 25px;
    }

    .radio {
        display: inline-block;
        width: 204;
        height: 104;
        border-radius: 0;
        background: lightblue;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        cursor: pointer;
        margin: 8px 2px;
    }

    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
    }

    /*Fit image in bootstrap div*/
    .fit-image {
        width: 100%;
        object-fit: cover;
    }


        /*Blue Buttons*/
        #msform .commando_button {
        /* width: 150px; */
        background: #435df7;
        color: white;
        border-radius: 20px;
        cursor: pointer;
        padding: 10px;
        margin: 10px 5px;
    }

    #msform .commando_button:hover,
    #msform .commando_button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #435df7;
    }



     .bed_add{
        background-color: #6c6e6b!important;
    }
    .hide {
        display: none;
    }
    #valid-msg {
        color: #00c900;
    }






</style>

{{-- Delivery status --}}
<style>
    .disaplayInput{
    display: none;
    }
    
    </style>
    {{-- Delivery status --}}
  
   <!-- Country code Dropdown css -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

   <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
   <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!-- Country code Dropdown css -->

    <style>
        .iti {
      display: block;
      }
      .iti__country-list {
      position: absolute;
      z-index: 2;
      list-style: none;
      text-align: left;
      padding: 0;
      margin: 0 0 0 -1px;
      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
      
      border: 1px solid #CCC;
      white-space: nowrap;
      max-height: 200px;
      overflow-y: scroll;
      -webkit-overflow-scrolling: touch;
      }










     @media only screen and (max-width: 400px) {

.order_taking_form{
   font-size: 25px;
}


.fill_all_from_field{

    font-size: 13px;
}

#progressbar{
    max-width: 241px;
margin-left: 30px;
}


.mattress_button{
    font-size: 10px!important;
}

.ottoman_button {
    font-size: 10px!important;
}

.bed_button {
    font-size: 10px!important;
}

.gaslift_button {
    font-size: 10px!important;
}


.design_button {
    font-size: 10px!important;
}

.headboard_button {
    font-size: 10px!important;
}

.Ottoman_Divan_button{
    font-size: 8px!important;
}

.divan_button_form{
    font-size: 8px!important;
}
.Monaco_divan_button{
    font-size: 8px!important;
}

.divan_button{
    font-size: 12px!important;
padding: 10px 34px!important;
}

.with_diamond_button{
    font-size: 12px!important;
padding: 10px 20px!important;
}

.you_have_successfully{
font-size: 14!important;
}
.you_have_the_option{
    font-size: 14!important;
}

.header-button {
  margin-top: 5px!important;
}


.header-desktop {

  height: 76px!important;
}


.main-content {
  padding-top: 8px!important;
}

}
 </style>
   



<!-- MultiStep Form -->

<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-8 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 class="order_taking_form"><strong>Order Taking Form </strong></h2>
                <p style="color:#f9466d" class="fill_all_from_field">Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" class="reset_form_click" method="post" onsubmit="submit_universal_form('msform');" >
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account" style="margin-left: 190px;"><strong>Order Details</strong></li>
                                <li class="cus_finis" id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <fieldset class="first_order_item">
                                <div class="form-card" id="original-div">

                             
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Country <span style="color:red">*</span></label></br>
                                    <select class="form-control changecountry country_code_select" name="country" style="color:#686B6D" id="topField" onchange="enableFields(this.value)" required>
                                        <option value="" style="color:#686B6D">select country</option>
                                        @foreach($allCountries as $country)
                                        <option value="{{$country}}" style="color:#686B6D">{{$country}}</option>
                                        @endforeach
                                    </select></br>
                                    <div class="main_divs">
                                  <div class="cover_products" style="display: none;" >  
                                    <div class="products">
                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Product <span style="color:red">*</span></label>
                                     <div style="display: none;width: 20px;
                                    height: 20px;" class="spinner-border text-dark  Loading_product_image_spinner" role="status">
                                        <span class="sr-only">Loading...</span>
                                      </div>
                                      </br>
                                    <select class="form-control changeproduct" name="product" style="color:#686B6D" id="productField" onchange="enableVariations(this.value)"  required>
                                        <option value="" style="color:#686B6D">select product</option>
                                    </select></br>
                                   </div>
                                   <!-- {{-- form --}} -->
                                   <div class="show_button" style="display: none;" >
                                    <div class="mattrees_size">

                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Put Order <span style="color:red">*</span></label></br>

                                        <textarea rows="15" cols="50" placeholder="Please Put Your Order Here" name="message_order" class="message_order_1" ></textarea>
                                      
                                        </div>
                                        <div class="mattrees_color"> 
    
                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Post Code <span style="color:red">*</span></label></br>
                                        <input types="text" name="post_codde" id="orderpostcode" class="post_code_1">
                                       </br>
                                        </div>  
                                        <div class="mattrees_color"> 
    
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Delivery Date <span style="color:red">*</span></label></br>
                                            <input type="date" name="delivery_date" class="delivery_date_1">
                                           </br>
                                            </div>                  
                                   </div>
                                   <!-- {{-- form --}} -->
                                  </div>
                                </div>
                                 <input type="submit" name="next" class="next action-button" value="Done Order" />
                            </fieldset>
                            <fieldset class="last_step" style="display:none">
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="you_have_successfully">You Have Successfully Created Order</h5>
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <a href="{{ '/orders_index'}}" ><input type="button" style="width: 100%;padding-left: 30px;padding-right: 30px;" name="re_order" class="action-button" value="Go to Order Page" /></a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('public/admin/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script> 

    $(document).ready(function() {

        $('.changecountry').on('change', function() { 
            $('.cover_products').slideDown();
        });

        $('.changeproduct').on('change', function() { 
            $('.show_button').slideDown();
        });


        var current_fs, next_fs, previous_fs;
        var opacity;

        $(".next").click(function() {
            var optionField = document.getElementById("topField");
            var productsField = document.getElementById("productField");
         
            if (optionField.value === "") {
                // alert("Please select an option.");
                Swal.fire(
                    'Errors',
                    'Please select the Country',
                    'error'
                )
                optionField.classList.add("country_error");
                optionField.focus();
                return false;
            }
            if (productsField.value === "") {
                // alert("Please select an option.");
                Swal.fire(
                    'Errors',
                    'Please select the product',
                    'error'
                )
                productsField.classList.add("country_error");
                productsField.focus();
                return false;
            }


        });

    });

    function cloneDiv(event) {
        var originalDiv = $('#original-div');
        $('#minu-button').show();
        var newDiv = originalDiv.clone();
        newDiv.attr('id', 'new-div');
        originalDiv.after(newDiv);
        event.preventDefault();
    }

    function cloneDivMinus(event) {
        $('#original-div').hide();
        event.preventDefault();
    }

    function enableFields(val) {

    
        $("#topField").removeClass("country_error");

      
        var productField = document.getElementById("productField");
       

        if (topField.value !== "") {
            productField.disabled = false;
    
        }

        $(".Loading_product_image_spinner").show();

        $.ajax({
            type: "POST",
            url: '{{route("country_product")}}',
            data: {
                country: val,
                _token: '{{csrf_token()}}'
            },
            dataType: "json",
            success: function(data) {
                var ele = $('#productField');
                ele.empty();
                ele.append($('<option>', {
                    value: '',
                    text: 'Select a product',
                    // selected: true
                }));

                $(".Loading_product_image_spinner").hide();

                $.each(data, function(key, value) {
                    ele.append("<option value='" + value.id + "' style='color:#686B6D'>" + value.name + "</option>");
                });
            },
        });
    }

    function submit_universal_form(id){
        event.preventDefault();
        var formElem = $("#"+id);
        var   checkfal = false;
        console.log(formElem);
        var formData = new FormData(formElem[0]);
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        var  post_code_1 =  $(".post_code_1").val();
            var  delivery_date_1 = $(".delivery_date_1").val();
            var  message_order_1 = $(".message_order_1").val();

        if(post_code_1 != ""  && delivery_date_1 != ""  && message_order_1 != ""  ){

            $.ajax({
            async: true,
            type: 'post',
            url: "{{ url('orders_store')}}" ,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status == 200) {

       

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style

                    current_fs.animate({
                    opacity: 0
                    }, {
                    step: function(now, fx) {
                    // for making fieldset appear animation
                    var opacity = 1 - now;
                    current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                    });
                    next_fs.css({
                    'opacity': opacity
                    });
                    },
                    duration: 600
                    });






                    $(".first_order_item").hide();
                    $(".last_step").show();
                    Swal.fire(
                        'Good job!',
                        'Order Add Successfuly',
                        'success'
                    )
                }

            }
        });



                }else{
                    Swal.fire(
                'Errors',
                'Please fill the Form   Required Field',
                'error'
                    )

                }





      




    }

 
 

</script>



{{-- #progressbar #confirm::before {
    font-family: FontAwesome;
    content: "\f00c";
    background-image: linear-gradient(#f9466d , #435df7);
  } --}}

@endsection
