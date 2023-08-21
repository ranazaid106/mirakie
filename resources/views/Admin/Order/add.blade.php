@extends('layouts.main')
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" media="all">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

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
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

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


  
   <!-- Country code Dropdown css -->

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
                <h2 class="order_taking_form"><strong>Order Taking Form</strong></h2>
                <p style="color:#f9466d" class="fill_all_from_field">Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" class="reset_form_click" method="post" onsubmit="submit_universal_form('msform');" >
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Order Details</strong></li>
                                <li  id="payment"><strong>Payment</strong></li>
                                <li class="cus_info"  id="personal"><strong>Customer Info</strong></li>
                               
                                <li class="cus_finis" id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <fieldset>
                                <div class="form-card" id="original-div">
                                    <button onclick="cloneDiv(event)" style="float:right;height:20px"><i class="fa fa-plus-circle" aria-hidden="true" style="font-size: 20px;color:#686B6D;display:none" title="add more products"></i></button>
                                    <button onclick="cloneDivMinus(event)" style="float:right;height:20px;margin-right:10px;display:none" id="minu-button"><i class="fa fa-minus-circle" aria-hidden="true" style="font-size: 20px;color:#686B6D" title="remove this product section"></i></button>
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Country <span style="color:red">*</span></label></br>
                                    <select class="form-control changecountry" name="country" style="color:#686B6D" id="topField" onchange="enableFields(this.value)" required>
                                        <option value="" style="color:#686B6D">select country</option>
                                        @foreach($allCountries as $country)
                                        <option value="{{$country}}" style="color:#686B6D">{{$country}}</option>
                                        @endforeach
                                    </select></br>
                                    <div class="main_divs">
                                  <div class="cover_products" style="display: none;" >  
                                    <div class="products">
                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Product <span style="color:red">*</span></label></br>
                                    <select class="form-control changeproduct" name="product" style="color:#686B6D" id="productField" onchange="enableVariations(this.value)"  required>
                                        <option value="" style="color:#686B6D">select product</option>
                                    </select></br>
                                   </div>


                                   <!-- {{-- Three Button show start  step one  --}} -->

                                   <div class="show_button" style="display: none;" >
                                    <div style="justify-content: center; display:flex">
                                    <input type="hidden" class="hidden_bed" name="hidden_bed" value="">
                                  <input type="button" name="Mattress" class="mattress_button commando_button" value="Only Mattress" />
                                  <input type="button" name="Bed" class="bed_button commando_button" value="Bed" />
                                  <input type="button" name="Ottoman" class="ottoman_button commando_button" value="Only Ottoman Box" />         
                                    </div>
                                    <hr>                     
                                   </div>
                                   <!-- {{-- Three Button show end  step one  --}} -->
                                    

                                   <!-- {{-- Mattress form show start  --}} -->

                                   <div class="main_mattrees_div" style="display: none;">
                                   <div class="mattrees_size">
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                    <select class="form-control" name="mattress_size" style="color:#686B6D" id=""  >

                                        <option value="" style="color:#686B6D">select Size</option>
                                        <option value="3ft" style="color:#686B6D">3ft</option>
                                        <option value="4ft" style="color:#686B6D">4ft</option>
                                        <option value="4ft6 inch" style="color:#686B6D">4ft6 inch</option>
                                        <option value="5ft" style="color:#686B6D">5ft</option>
                                        <option value="6ft" style="color:#686B6D">6ft</option>
                                      
                                    </select></br>
                                    </div>
                                    <div class="mattrees_color">

                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress <span style="color:red">*</span></label></br>
                                    <select class="form-control" name="mattress_design" style="color:#686B6D" id="designField"   >
                                        <option value="" style="color:#686B6D">select Mattress </option>
                                        <option value="No" style="color:#686B6D">No</option>
                                        <option value="simple - Semi ortho 8 inch" style="color:#686B6D">simple - Semi ortho  8 inch</option>
                                        <option value="Orthopadic sprung 10 inch" style="color:#686B6D">Orthopadic sprung  10"</option>
                                        <option value="Orthopadic Memory foam 10 inch" style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                        <option value="Memory foam 10 inch " style="color:#686B6D">Memory foam  10 inch</option>
                                        <option value="Full memory foam 12 inch" style="color:#686B6D">Full memory foam  12 inch</option>
                                        <option value="Full Foam 12 inch" style="color:#686B6D">Full Foam  12 inch</option>
                                        <option value="pillow top 12 inch " style="color:#686B6D">pillow top 12 inch</option>
                                        <option value="pillow top 14 inch" style="color:#686B6D">pillow top 14 inch</option>
                                        <option value="Memory Gel 12 inch" style="color:#686B6D">Memory Gel 12 inch </option>
                                        <option value="Black 3D 12 inch" style="color:#686B6D">Black 3D 12 inch</option>
                                        <option value="Grey 3D 12 inch" style="color:#686B6D">Grey 3D  12 inch</option>
                                        <option value="Silver 3D 12 inch" style="color:#686B6D">Silver 3D 12 inch</option>
                                        <option value="Cream 3D 12 inch" style="color:#686B6D">Cream 3D  12 inch</option>
                                        <option value="Suede 3D 12 inch" style="color:#686B6D">Suede 3D  12 inch</option>
                                        <option value="Mayfair 3D 12 inch" style="color:#686B6D">Mayfair 3D 12 inch</option>
                                        <option value="Richmond 3D 12 inch" style="color:#686B6D">Richmond 3D 12 inch</option>
                                        <option value="1000 pocket 12 inch" style="color:#686B6D">1000 pocket  12 inch</option>
                                        <option value="2000 pocket 12 inch" style="color:#686B6D">2000 pocket  12 inch</option>

                                    </select></br>
                                    </div>
                                   </div>
                                   <!-- {{-- Mattress form show end  --}} -->


                                    <!-- {{-- ottoman form show start  --}} -->
                                    <div class="main_ottoman_div" style="display: none;">
                                        <div class="ottoman_design">
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="ottoman_design" style="color:#686B6D" id="designField"   >
                                                <option value="" style="color:#686B6D">select Design</option>
                                                <option value="Monaco-Diamond" style="color:#686B6D">Monaco - Diamond</option>
                                                <option value="Monaco-Button" style="color:#686B6D">Monaco - Button </option>
                                                <option value="Panel" style="color:#686B6D">Panel</option>
                                                <option value="Plain" style="color:#686B6D">Plain</option>
        
                                            </select></br>
                                        </div>
                                        <div class="ottoman_color">
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="ottoman_color" style="color:#686B6D" id="designField"  >
                                                <option value="" style="color:#686B6D">select Color</option>
                                                <option value="Grey" style="color:#686B6D">Grey</option>
                                                <option value="silver" style="color:#686B6D">silver</option>
                                                <option value="black" style="color:#686B6D">black</option>
                                                <option value="cream" style="color:#686B6D">cream</option>
                                                <option value="steel" style="color:#686B6D">steel</option>
                                                <option value="teal" style="color:#686B6D">teal</option>
                                                <option value="Beige" style="color:#686B6D">Beige</option>
                                                <option value="red" style="color:#686B6D">red</option>
                                                <option value="blue" style="color:#686B6D">blue</option>
                                                <option value="purple" style="color:#686B6D">purple</option>
                                                <option value="charcoal" style="color:#686B6D">charcoal</option>
                                                <option value="Brown" style="color:#686B6D">Brown</option>
                                                <option value="White" style="color:#686B6D">White</option>
                                                <option value="Duck Egg" style="color:#686B6D">Duck Egg</option>
                                                <option value="Maroon" style="color:#686B6D">Maroon</option>
                                                <option value="pink" style="color:#686B6D">pink</option>
                                                <option value="Mink" style="color:#686B6D">Mink</option>
                                                <option value="Gold" style="color:#686B6D">Gold</option>
                                                <option value="Mustard Gold" style="color:#686B6D">Mustard Gold</option>
                                                <option value="Sapphire" style="color:#686B6D">Sapphire</option>
                                                <option value="Aubergine" style="color:#686B6D">Aubergine</option>
                                                <option value="Plum" style="color:#686B6D">Plum</option>
                                                <option value="Slate" style="color:#686B6D">Slate</option>
                                                <option value="sand" style="color:#686B6D">sand</option>
                                            
                                            </select></br>  
                                        </div>
                                        <div class="ottoman_fabric">
                                            
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="ottoman_fabric" style="color:#686B6D" id="designField"  >
                                                <option value="" style="color:#686B6D">select Fabric</option>
                                                <option value="Plush Velvet" style="color:#686B6D">Plush Velvet </option>
                                                <option value="Crush velvet" style="color:#686B6D">Crush velvet </option>
                                                <option value="Naples" style="color:#686B6D">Naples </option>
                                                <option value="Chenille" style="color:#686B6D">Chenille</option>
                                                <option value="Leather" style="color:#686B6D">Leather</option>
                                                <option value="Suede" style="color:#686B6D">Suede </option>
                                            
                                              
                                            
                                            </select></br> 
                                        </div>
                                            
                                    </div>

                                   <!-- {{-- ottoman form show end  --}} -->


                                    <!-- {{--second  Three Button show start  --}} -->

                                    <input type="hidden" name="hidden_design" class="hidden_design">
                                    <div class="second_button" style="display: none;" >
                                        <div style="justify-content: center; display:flex">
                                        <input type="button" name="gaslift" class="commando_button gaslift_button" value="Only Gaslift" />
                                        <input type="button" name="design " class="commando_button design_button" value="Design" />
                                        <input type="button" name="headboard" class="commando_button headboard_button" value="Only Headboard" />          
                                        </div>
                                        <hr>                    
                                           </div>
                                           <!-- {{-- second Three Button show end  --}} -->
                                 
                                             <!-- {{-- gaslift form show start  --}} -->
                                             <div class="main_gaslift_div" style="display: none;" >

                                                <div class="gaslift_size">
                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="gaslift_size" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Size</option>
                                                        <option value="3ft" style="color:#686B6D">3ft</option>
                                                        <option value="4ft" style="color:#686B6D">4ft</option>
                                                        <option value="4ft6 inch" style="color:#686B6D">4ft6 inch</option>
                                                        <option value="5ft" style="color:#686B6D">5ft</option>
                                                        <option value="6ft" style="color:#686B6D">6ft</option>
                                                      
                                                    </select></br>
                                                    </div>
                                                    <div class="gaslift_design">
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design<span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="gaslift_design" style="color:#686B6D" id="designField"   >
                                                        <option value="" style="color:#686B6D">select Design</option>
                                                        <option value="Metal Gaslift" style="color:#686B6D">Metal Gaslift </option>
                                                       
                
                                                    </select></br>
                                                    </div>

                                             </div>

                                               <!-- {{-- gaslift form show end  --}} -->

                                                <!-- {{-- Headboard form show start  --}} -->

                                                <div class="main_headboard_div" style="display: none;">
                                                    <div class="headboard_size">
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="headboard_size" style="color:#686B6D" id=""  >
                    
                                                            <option value="" style="color:#686B6D">select Size</option>
                                                            <option value="3ft" style="color:#686B6D">3ft</option>
                                                            <option value="4ft" style="color:#686B6D">4ft</option>
                                                            <option value="6ft inch" style="color:#686B6D">6ft inch</option>
                                                            <option value="5ft" style="color:#686B6D">5ft</option>
                                                            <option value="6ft" style="color:#686B6D">6ft</option>
                                                          
                                                        </select></br>
                                                        </div>
                                                        <div class="headboard_design">
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="headboard_design" style="color:#686B6D" id="designField"   >
                                                            <option value="" style="color:#686B6D">select Design</option>
                                                            <option value="Split-Cube Diamond" style="color:#686B6D">Split-Cube Diamond</option>
                                                            <option value="Split-Cube button" style="color:#686B6D">Split-Cube button</option>
                                                            <option value="Split-Panel" style="color:#686B6D">Split-Panel</option>
                                                            <option value="Split-Plain" style="color:#686B6D">Split-Plain </option>
                                                            <option value="Split-Florida Diamond" style="color:#686B6D">Split-Florida Diamond </option>
                                                            <option value="Split-Florida Button" style="color:#686B6D">Split-Florida Button</option>
                                                            <option value="Floor Standing-Florida Diamond" style="color:#686B6D">Floor Standing-Florida Diamond </option>
                                                            <option value="Floor Standing-Florida Button" style="color:#686B6D">Floor Standing-Florida Button </option>
                                                            <option value="Floor Standing Panel" style="color:#686B6D">Floor Standing Panel </option>
                    
                                                        </select></br>
                                                        </div>
                                                        <div class="headboard_color">
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="headboard_color" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Color</option>
                                                            <option value="Grey" style="color:#686B6D">Grey</option>
                                                            <option value="silver" style="color:#686B6D">silver</option>
                                                            <option value="black" style="color:#686B6D">black</option>
                                                            <option value="cream" style="color:#686B6D">cream</option>
                                                            <option value="steel" style="color:#686B6D">steel</option>
                                                            <option value="teal" style="color:#686B6D">teal</option>
                                                            <option value="Beige" style="color:#686B6D">Beige</option>
                                                            <option value="red" style="color:#686B6D">red</option>
                                                            <option value="blue" style="color:#686B6D">blue</option>
                                                            <option value="purple" style="color:#686B6D">purple</option>
                                                            <option value="charcoal" style="color:#686B6D">charcoal</option>
                                                            <option value="Brown" style="color:#686B6D">Brown</option>
                                                            <option value="White" style="color:#686B6D">White</option>
                                                            <option value="Duck Egg" style="color:#686B6D">Duck Egg</option>
                                                            <option value="Maroon" style="color:#686B6D">Maroon</option>
                                                            <option value="pink" style="color:#686B6D">pink</option>
                                                            <option value="Mink" style="color:#686B6D">Mink</option>
                                                            <option value="Gold" style="color:#686B6D">Gold</option>
                                                            <option value="Mustard Gold" style="color:#686B6D">Mustard Gold</option>
                                                            <option value="Sapphire" style="color:#686B6D">Sapphire</option>
                                                            <option value="Aubergine" style="color:#686B6D">Aubergine</option>
                                                            <option value="Plum" style="color:#686B6D">Plum</option>
                                                            <option value="Slate" style="color:#686B6D">Slate</option>
                                                            <option value="sand" style="color:#686B6D">sand</option>
                                                        
                                                        </select></br>  
                                                        </div>
                                                        <div class="headboard_febric">
                                                        
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="headboard_fabric" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Fabric</option>
                                                            <option value="select Fabric" style="color:#686B6D">Plush Velvet </option>
                                                            <option value="Crush velvet" style="color:#686B6D">Crush velvet </option>
                                                            <option value="Naples" style="color:#686B6D">Naples </option>
                                                            <option value="Chenille" style="color:#686B6D">Chenille</option>
                                                            <option value="Leather" style="color:#686B6D">Leather</option>
                                                            <option value="Suede" style="color:#686B6D">Suede </option>
                                                        
                                                          
                                                        
                                                        </select></br> 
                    
                                                        </div>
                                                </div>

                                               {{-- Headboard form show end  --}}

                                               {{--  Three Button show start  --}}

                                               <input type="hidden" class="hidden_divan" name="hidden_divan">
                                    <div class="third_button" style="display: none;" >
                                        <div style="justify-content: center; display:flex"> 
                                        <input type="button" name="divan" class="commando_button divan_button" value="Divan" />
                                        {{-- <input type="button" name="without_diamond " class="commando_button without_diamond_button" value="Without Diamond & Button" /> --}}
                                        <input type="button" name="with_diamond" class="commando_button with_diamond_button" value="luxury beds" /> 
                                        </div>
                                        <div>
                                          
                                            </div>
                                        <hr>                             
                                           </div>
                                           {{--  Three Button show end  --}}
                                         

                                               {{-- Without Diamond form show start  --}}

                                               <div class="main_without_diamond_div" style="display: none;" >

                                                <div class="without_diamond_size">
                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_size" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Size</option>
                                                        <option value="3ft" style="color:#686B6D">3ft</option>
                                                        <option value="4ft" style="color:#686B6D">4ft</option>
                                                        <option value="4ft6 inch" style="color:#686B6D">4ft6 inch</option>
                                                        <option value="5ft" style="color:#686B6D">5ft</option>
                                                        <option value="6ft" style="color:#686B6D">6ft</option>
                                                      
                                                    </select></br>
                                                    </div>

                                                    

                                                    <div class="without_diamond_design">
                    
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design <span style="color:red">*</span></label></br>

                                                        <select class="form-control" name="without_diamond_design" style="color:#686B6D" id="designField"   >
                                                            <option value="" style="color:#686B6D">select Design</option>
                                                            <option value="Split-Cube Diamond" style="color:#686B6D">Split-Cube Diamond</option>
                                                            <option value="Split-Cube button" style="color:#686B6D">Split-Cube button</option>
                                                            <option value="Split-Panel" style="color:#686B6D">Split-Panel</option>
                                                            <option value="Split-Plain" style="color:#686B6D">Split-Plain </option>
                                                            <option value="Split-Florida Diamond" style="color:#686B6D">Split-Florida Diamond </option>
                                                            <option value="Split-Florida Button" style="color:#686B6D">Split-Florida Button</option>
                                                            <option value="Floor Standing-Florida Diamond" style="color:#686B6D">Floor Standing-Florida Diamond </option>
                                                            <option value="Floor Standing-Florida Button" style="color:#686B6D">Floor Standing-Florida Button </option>
                                                            <option value="Floor Standing Panel" style="color:#686B6D">Floor Standing Panel </option>

                                                            <option value="Panel" style="color:#686B6D">Panel</option>
                                                            <option value="Arizona and vivinne panel" style="color:#686B6D">Arizona and vivinne panel</option>
                                                            
                                                        
                    
                                                        </select></br>
                                                    </div>
                                                  

                                                    <br>
                                                    <div class="without_diamond_color">
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_color" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Color</option>
                                                        <option value="Grey" style="color:#686B6D">Grey</option>
                                                        <option value="silver" style="color:#686B6D">silver</option>
                                                        <option value="black" style="color:#686B6D">black</option>
                                                        <option value="cream" style="color:#686B6D">cream</option>
                                                        <option value="steel" style="color:#686B6D">steel</option>
                                                        <option value="teal" style="color:#686B6D">teal</option>
                                                        <option value="Beige" style="color:#686B6D">Beige</option>
                                                        <option value="red" style="color:#686B6D">red</option>
                                                        <option value="blue" style="color:#686B6D">blue</option>
                                                        <option value="purple" style="color:#686B6D">purple</option>
                                                        <option value="charcoal" style="color:#686B6D">charcoal</option>
                                                        <option value="Brown" style="color:#686B6D">Brown</option>
                                                        <option value="White" style="color:#686B6D">White</option>
                                                        <option value="Duck Egg" style="color:#686B6D">Duck Egg</option>
                                                        <option value="Maroon" style="color:#686B6D">Maroon</option>
                                                        <option value="pink" style="color:#686B6D">pink</option>
                                                        <option value="Mink" style="color:#686B6D">Mink</option>
                                                        <option value="Gold" style="color:#686B6D">Gold</option>
                                                        <option value="Mustard Gold" style="color:#686B6D">Mustard Gold</option>
                                                        <option value="Sapphire" style="color:#686B6D">Sapphire</option>
                                                        <option value="Aubergine" style="color:#686B6D">Aubergine</option>
                                                        <option value="Plum" style="color:#686B6D">Plum</option>
                                                        <option value="Slate" style="color:#686B6D">Slate</option>
                                                        <option value="sand" style="color:#686B6D">sand</option>
                                                    
                                                    </select></br>  
                                                    </div>
                                                    <div class="without_diamond_fabric">
                                                    
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_fabric" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Fabric</option>
                                                        <option value="Plush Velvet" style="color:#686B6D">Plush Velvet </option>
                                                        <option value="Crush velvet" style="color:#686B6D">Crush velvet </option>
                                                        <option value="Naples" style="color:#686B6D">Naples </option>
                                                        <option value="Chenille" style="color:#686B6D">Chenille</option>
                                                        <option value="Leather" style="color:#686B6D">Leather</option>
                                                        <option value="Suede" style="color:#686B6D">Suede </option>
                                                    
                                                      
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="without_diamond_storage">
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Storage <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_storage" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Storage</option>
                                                        <option value="Metal Gaslift" style="color:#686B6D">Metal Gaslift </option>
                                                        <option value="Board Gaslift" style="color:#686B6D">Board Gaslift </option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="without_diamond_base">
                                                  
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Base <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_base" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Base </option>
                                                        <option value="Wooden Slates" style="color:#686B6D">Wooden Slates</option>
                                                        <option value="Solid base" style="color:#686B6D">Solid base</option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="without_diamond_mattrees">
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_mattress" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Mattress  </option>
                                                        <option value="No" style="color:#686B6D">No</option>
                                                        <option value="simple - Semi ortho 8 inch" style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                        <option value="Orthopadic sprung 10 inch" style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                        <option value="Orthopadic Memory foam 10 inch" style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                        <option value="Memory foam 10 inch" style="color:#686B6D">Memory foam 10 inch</option>
                                                        <option value="Full memory foam 12 inch" style="color:#686B6D">Full memory foam 12 inch</option>
                                                        <option value="Full Foam 12 inch" style="color:#686B6D">Full Foam 12 inch</option>
                                                        <option value="Black 3D 12 inch" style="color:#686B6D">Black 3D 12 inch</option>
                                                        <option value="Grey 3D 12 inch" style="color:#686B6D">Grey 3D  12 inch</option>
                                                        <option value="Silver 3D 12 inch" style="color:#686B6D">Silver 3D 12 inch</option>
                                                        <option value="Cream 3D 12 inch" style="color:#686B6D">Cream 3D 12 inch</option>
                                                        <option value="Suede 3D 12 inch" style="color:#686B6D">Suede 3D 12 inch</option>
                                                        <option value="Mayfair 3D 12 inch" style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                        <option value="Richmond 3D 12 inch" style="color:#686B6D">Richmond 3D 12 inch</option>
                                                        <option value="1000 pocket 12 inch" style="color:#686B6D">1000 pocket 12 inch</option>
                                                        <option value="2000 pocket 12 inch" style="color:#686B6D">2000 pocket 12 inch</option>
                                                    
                                                    </select></br> 
                                                    </div>

                                               </div>

                                               {{-- Without Diamond form show end  --}}

                                               {{-- With Diamond form show start  --}}

                                               <div class="main_with_diamond_div" style="display: none;">


                                                <div class="with_diamond_size">
                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_sizes" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Size</option>
                                                        <option value="3ft" style="color:#686B6D">3ft</option>
                                                        <option value="4ft" style="color:#686B6D">4ft</option>
                                                        <option value="4ft6 inch" style="color:#686B6D">4ft6 inch</option>
                                                        <option value="5ft" style="color:#686B6D">5ft</option>
                                                        <option value="6ft" style="color:#686B6D">6ft</option>
                                                      
                                                    </select></br>
                                                    </div>

                                                    <div class="with_diamond_design">
                    
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="with_diamond_design" style="color:#686B6D" id="designField"   >
                                        <option value="" style="color:#686B6D">select Design</option>
                                        {{-- <option value="Split-Cube Diamond" style="color:#686B6D">Split-Cube Diamond</option>
                                        <option value="Split-Cube button" style="color:#686B6D">Split-Cube button</option>
                                        <option value="Split-Panel" style="color:#686B6D">Split-Panel</option>
                                        <option value="Split-Plain" style="color:#686B6D">Split-Plain </option>
                                        <option value="Split-Florida Diamond" style="color:#686B6D">Split-Florida Diamond </option>
                                        <option value="Split-Florida Button" style="color:#686B6D">Split-Florida Button</option>
                                        <option value="Floor Standing-Florida Diamond" style="color:#686B6D">Floor Standing-Florida Diamond </option>
                                        <option value="Floor Standing-Florida Button" style="color:#686B6D">Floor Standing-Florida Button </option>
                                        <option value="Floor Standing Panel" style="color:#686B6D">Floor Standing Panel </option> --}}
                                        <option value="Florida" style="color:#686B6D">Florida</option>
                                        <option value="Hilton" style="color:#686B6D">Hilton</option>
                                        <option value="Cube" style="color:#686B6D">Cube</option>
                                        <option value="Vivinne Panel" style="color:#686B6D">Vivinne Panel</option>
                                        <option value="panel" style="color:#686B6D">panel</option>
                                        <option value="Sleigh" style="color:#686B6D">Sleigh</option>
                                        <option value="Arizona" style="color:#686B6D">Arizona</option>
                                        <option value="Oxford" style="color:#686B6D">Oxford</option>
                                        <option value="Ammbassdor" style="color:#686B6D">Ammbassdor</option>
                                        <option value="Mini ammbassdor" style="color:#686B6D">Mini ammbassdor</option>
                                        <option value="Mini Arizona" style="color:#686B6D">Mini Arizona</option>
                                    
                                                          
                                                        </select></br>
                                                    </div>


                                                   
                                                    <div class="with_diamond_color">
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_color" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Color</option>
                                                        <option value="Grey" style="color:#686B6D">Grey</option>
                                                        <option value="silver" style="color:#686B6D">silver</option>
                                                        <option value="black" style="color:#686B6D">black</option>
                                                        <option value="cream" style="color:#686B6D">cream</option>
                                                        <option value="steel" style="color:#686B6D">steel</option>
                                                        <option value="teal" style="color:#686B6D">teal</option>
                                                        <option value="Beige" style="color:#686B6D">Beige</option>
                                                        <option value="red" style="color:#686B6D">red</option>
                                                        <option value="blue" style="color:#686B6D">blue</option>
                                                        <option value="purple" style="color:#686B6D">purple</option>
                                                        <option value="charcoal" style="color:#686B6D">charcoal</option>
                                                        <option value="Brown" style="color:#686B6D">Brown</option>
                                                        <option value="White" style="color:#686B6D">White</option>
                                                        <option value="Duck Egg" style="color:#686B6D">Duck Egg</option>
                                                        <option value="Maroon" style="color:#686B6D">Maroon</option>
                                                        <option value="pink" style="color:#686B6D">pink</option>
                                                        <option value="Mink" style="color:#686B6D">Mink</option>
                                                        <option value="Gold" style="color:#686B6D">Gold</option>
                                                        <option value="Mustard Gold" style="color:#686B6D">Mustard Gold</option>
                                                        <option value="Sapphire" style="color:#686B6D">Sapphire</option>
                                                        <option value="Aubergine" style="color:#686B6D">Aubergine</option>
                                                        <option value="Plum" style="color:#686B6D">Plum</option>
                                                        <option value="Slate" style="color:#686B6D">Slate</option>
                                                        <option value="sand" style="color:#686B6D">sand</option>
                                                    
                                                    </select></br>  
                                                    </div>
                                                    <div class="with_diamond_fabric">
                
                                                    
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_fabric" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Fabric</option>
                                                        <option value="Plush Velvet" style="color:#686B6D">Plush Velvet </option>
                                                        <option value="Crush velvet" style="color:#686B6D">Crush velvet </option>
                                                        <option value="Naples" style="color:#686B6D">Naples </option>
                                                        <option value="Chenille" style="color:#686B6D">Chenille</option>
                                                        <option value="Leather" style="color:#686B6D">Leather</option>
                                                        <option value="Suede" style="color:#686B6D">Suede </option>
                                                    
                                                      
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="with_diamond_diamond_and_button">
                
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Diamond&button <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_diamond_button" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Diamond&button</option>
                                                        <option value="Diamond" style="color:#686B6D">Diamond</option>
                                                        <option value="Button" style="color:#686B6D">Button</option>
                                                        <option value="N/A" style="color:#686B6D">N/A</option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="with_diamond_storage">
                
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Storage <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_storage" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Storage</option>
                                                        <option value="Metal Gaslift" style="color:#686B6D">Metal Gaslift </option>
                                                        <option value="Board Gaslift" style="color:#686B6D">Board Gaslift </option>
                                                        <option value="No " style="color:#686B6D">No </option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="with_diamond_base">
                
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Base <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_base" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Base </option>
                                                        <option value="Wooden Slates" style="color:#686B6D">Wooden Slates</option>
                                                        <option value="Solid base" style="color:#686B6D">Solid base</option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="with_diamond_mattrees>
                
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_mattress" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Mattress  </option>
                                                        <option value="No" style="color:#686B6D">No</option>
                                                        <option value="simple - Semi ortho 8 inch" style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                        <option value="Orthopadic sprung 10 inch" style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                        <option value="Orthopadic Memory foam 10 inch" style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                        <option value="Memory foam 10 inch" style="color:#686B6D">Memory foam 10 inch</option>
                                                        <option value="Full memory foam 12 inch" style="color:#686B6D">Full memory foam 12 inch</option>
                                                        <option value="Full Foam 12 inch" style="color:#686B6D">Full Foam 12 inch</option>
                                                        <option value="Black 3D 12 inch" style="color:#686B6D">Black 3D 12 inch</option>
                                                        <option value="Grey 3D 12 inch" style="color:#686B6D">Grey 3D  12 inch</option>
                                                        <option value="Silver 3D 12 inch" style="color:#686B6D">Silver 3D 12 inch</option>
                                                        <option value="Cream 3D 12 inch" style="color:#686B6D">Cream 3D 12 inch</option>
                                                        <option value="Suede 3D 12 inch" style="color:#686B6D">Suede 3D 12 inch</option>
                                                        <option value="Mayfair 3D 12 inch" style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                        <option value="Richmond 3D 12 inch" style="color:#686B6D">Richmond 3D 12 inch</option>
                                                        <option value="1000 pocket 12 inch" style="color:#686B6D">1000 pocket 12 inch</option>
                                                        <option value="2000 pocket 12 inch" style="color:#686B6D">2000 pocket 12 inch</option>
                                                    
                                                    </select></br> 
                                                    </div>

                                               </div>

                                               {{-- With Diamond form show end  --}}

                                                  {{--  Three Button show start  --}}

                                    <div class="fourth_button" style="display: none;" >
                                        <div style="justify-content: center; display:flex"> 
                                        <input type="button" name="ottoman_Divan" class="commando_button Ottoman_Divan_button" value="Ottoman Divan" />
                                        <input type="button" name="divan " class="commando_button divan_button_form" value="Simple Divan" />
                                        <input type="button" name="Monaco_divan" class="commando_button Monaco_divan_button" value="Monaco Divan" />
                                        </div>
                                        <hr>                              
                                           </div>
                                           {{--  Three Button show end  --}}

                                             {{-- Diven  form show end  --}}
                                             <div class="main_diven_div" style="display: none;" >


                                                <div class="divan_size">
                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_size" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Size</option>
                                                        <option value="2ft6 inch" style="color:#686B6D">2ft6 inch</option>
                                                        <option value="3ft" style="color:#686B6D">3ft</option>
                                                        <option value="4ft" style="color:#686B6D">4ft</option>
                                                        <option value="4ft6 inch" style="color:#686B6D">4ft6 inch</option>
                                                        <option value="5ft" style="color:#686B6D">5ft</option>
                                                        <option value="6ft" style="color:#686B6D">6ft</option>
                                                      
                                                    </select></br>
                                                    </div>
                                                    <div class="divan_size">
                
                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Headboard <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_headboard" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Headboard </option>
                                                        <option value="No" style="color:#686B6D">No </option>
                                                        <option value="Cube Diamond" style="color:#686B6D">Cube Diamond </option>
                                                        <option value="Cube Button" style="color:#686B6D">Cube Button </option>
                                                        <option value="plain" style="color:#686B6D">plain </option>
                                                        <option value="panel" style="color:#686B6D">panel </option>
                                                        <option value="horizontal line" style="color:#686B6D">horizontal line</option>
                                                        <option value="Florida Diamond" style="color:#686B6D">Florida Diamond </option>
                                                        <option value="Florida Button" style="color:#686B6D">Florida Button  </option>
                                                        <option value="Hilton Diamond" style="color:#686B6D">Hilton Diamond </option>
                                                        <option value="Hilton Button" style="color:#686B6D">Hilton Button </option>
                                                        <option value="Floor Standing-Florida Diamond" style="color:#686B6D">Floor Standing-Florida Diamond </option>
                                                        <option value="Floor Standing-Florida Button" style="color:#686B6D">Floor Standing-Florida Button </option>
                                                        <option value="Floor Standing Panel" style="color:#686B6D">Floor Standing Panel </option>
                                                    </select></br>
                                                    </div>
                                                    <div class="divan_color">
                                                 
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_color" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Color</option>
                                                        <option value="Grey" style="color:#686B6D">Grey</option>
                                                        <option value="silver" style="color:#686B6D">silver</option>
                                                        <option value="black" style="color:#686B6D">black</option>
                                                        <option value="cream" style="color:#686B6D">cream</option>
                                                        <option value="steel" style="color:#686B6D">steel</option>
                                                        <option value="teal" style="color:#686B6D">teal</option>
                                                        <option value="Beige" style="color:#686B6D">Beige</option>
                                                        <option value="red" style="color:#686B6D">red</option>
                                                        <option value="blue" style="color:#686B6D">blue</option>
                                                        <option value="purple" style="color:#686B6D">purple</option>
                                                        <option value="charcoal" style="color:#686B6D">charcoal</option>
                                                        <option value="Brown" style="color:#686B6D">Brown</option>
                                                        <option value="White" style="color:#686B6D">White</option>
                                                        <option value="Duck Egg" style="color:#686B6D">Duck Egg</option>
                                                        <option value="Maroon" style="color:#686B6D">Maroon</option>
                                                        <option value="pink" style="color:#686B6D">pink</option>
                                                        <option value="Mink" style="color:#686B6D">Mink</option>
                                                        <option value="Gold" style="color:#686B6D">Gold</option>
                                                        <option value="Mustard Gold" style="color:#686B6D">Mustard Gold</option>
                                                        <option value="Sapphire" style="color:#686B6D">Sapphire</option>
                                                        <option value="Aubergine" style="color:#686B6D">Aubergine</option>
                                                        <option value="Plum" style="color:#686B6D">Plum</option>
                                                        <option value="Slate" style="color:#686B6D">Slate</option>
                                                        <option value="sand" style="color:#686B6D">sand</option>
                                                    
                                                    </select></br>  
                                                    </div>
                                                    <div class="divan_fabric">
                                                    
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_fabric" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Fabric</option>
                                                        <option value="Plush Velvet" style="color:#686B6D">Plush Velvet </option>
                                                        <option value="Crush velvet" style="color:#686B6D">Crush velvet </option>
                                                        <option value="Naples" style="color:#686B6D">Naples </option>
                                                        <option value="Chenille" style="color:#686B6D">Chenille</option>
                                                        <option value="Leather" style="color:#686B6D">Leather</option>
                                                        <option value="Suede" style="color:#686B6D">Suede </option>
                                                    
                                                      
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="divan_storage">
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Storage <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_storage" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Storage</option>
                                                        <option value="No Drawers" style="color:#686B6D">No Drawers </option>
                                                        <option value="1 Drawer-Jumbo Drawer" style="color:#686B6D">1 Drawer-Jumbo Drawer </option>
                                                        <option value="1 Drawer-Side" style="color:#686B6D">1 Drawer-Side </option>
                                                        <option value="2 Drawers-Right side" style="color:#686B6D">2 Drawers-Right side </option>
                                                        <option value="2 Drawers-Left side" style="color:#686B6D">2 Drawers-Left side </option>
                                                        <option value="2 Drawers-1 each side Top piece" style="color:#686B6D">2 Drawers-1 each side Top piece </option>
                                                        <option value="2 Drawers-1 each side Bottom piece" style="color:#686B6D">2 Drawers-1 each side Bottom piece </option>
                                                        <option value="3 Drawers-Side" style="color:#686B6D">3 Drawers-Side </option>
                                                        <option value="3 Drawers-1 each side Top piece and Jumbo" style="color:#686B6D">3 Drawers-1 each side Top piece and Jumbo</option>
                                                        <option value="4 Drawers" style="color:#686B6D">4 Drawers </option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="divan_mattress">
                
                                                  
                
                                                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_mattress" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Mattress  </option>
                                                        <option value="No" style="color:#686B6D">No</option>
                                                        <option value="simple - Semi ortho 8 inch" style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                        <option value="Orthopadic sprung 10 inch" style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                        <option value="Orthopadic Memory foam 10 inch" style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                        <option value="Memory foam 10 inch" style="color:#686B6D">Memory foam 10 inch</option>
                                                        <option value="Full memory foam 12 inch" style="color:#686B6D">Full memory foam 12 inch</option>
                                                        <option value="Full Foam 12 inch" style="color:#686B6D">Full Foam 12 inch</option>
                                                        <option value="Black 3D 12 inch" style="color:#686B6D">Black 3D 12 inch</option>
                                                        <option value="Grey 3D 12 inch" style="color:#686B6D">Grey 3D  12 inch</option>
                                                        <option value="Silver 3D 12 inch" style="color:#686B6D">Silver 3D 12 inch</option>
                                                        <option value="Cream 3D 12 inch" style="color:#686B6D">Cream 3D 12 inch</option>
                                                        <option value="Suede 3D 12 inch" style="color:#686B6D">Suede 3D 12 inch</option>
                                                        <option value="Mayfair 3D 12 inch" style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                        <option value="Richmond 3D 12 inch" style="color:#686B6D">Richmond 3D 12 inch</option>
                                                        <option value="1000 pocket 12 inch" style="color:#686B6D">1000 pocket 12 inch</option>
                                                        <option value="2000 pocket 12 inch" style="color:#686B6D">2000 pocket 12 inch</option>
                                                    
                                                        
                                                    </select></br> 
                                                    </div>



                                             </div>

                                               {{-- Diven form show end  --}}


                                                {{-- Monaco Diven form show start  --}}

                                                <div class="main_monaco_diven_div" style="display: none;" >
                                                    <div class="text-center fw-bold"> Diven Form</div>

                                                    <div class="diven_divan_size">
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_size" style="color:#686B6D" id=""  >
                    
                                                            <option value="" style="color:#686B6D">select Size</option>
                                                            <option value="3ft" style="color:#686B6D">3ft</option>
                                                            <option value="4ft" style="color:#686B6D">4ft</option>
                                                            <option value="4ft6 inch" style="color:#686B6D">4ft6 inch</option>
                                                            <option value="5ft" style="color:#686B6D">5ft</option>
                                                            <option value="6ft" style="color:#686B6D">6ft</option>
                                                          
                                                        </select></br>
                                                        </div>
                                                        <div class="diven_divan_headboard">
                    
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Headboard <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_headboard" style="color:#686B6D" id=""  >
                    
                                                            <option value="" style="color:#686B6D">select Headboard </option>
                                                            <option value="Diamond" style="color:#686B6D">Diamond </option>
                                                            <option value="Button" style="color:#686B6D">Button </option>
                                                        </select></br>
                                                        </div>
                                                        <div class="diven_divan_color">
                                                     
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_color" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Color</option>
                                                            <option value="Grey" style="color:#686B6D">Grey</option>
                                                            <option value="silver" style="color:#686B6D">silver</option>
                                                            <option value="black" style="color:#686B6D">black</option>
                                                            <option value="cream" style="color:#686B6D">cream</option>
                                                            <option value="steel" style="color:#686B6D">steel</option>
                                                            <option value="teal" style="color:#686B6D">teal</option>
                                                            <option value="Beige" style="color:#686B6D">Beige</option>
                                                            <option value="red" style="color:#686B6D">red</option>
                                                            <option value="blue" style="color:#686B6D">blue</option>
                                                            <option value="purple" style="color:#686B6D">purple</option>
                                                            <option value="charcoal" style="color:#686B6D">charcoal</option>
                                                            <option value="Brown" style="color:#686B6D">Brown</option>
                                                            <option value="White" style="color:#686B6D">White</option>
                                                            <option value="Duck Egg" style="color:#686B6D">Duck Egg</option>
                                                            <option value="Maroon" style="color:#686B6D">Maroon</option>
                                                            <option value="pink" style="color:#686B6D">pink</option>
                                                            <option value="Mink" style="color:#686B6D">Mink</option>
                                                            <option value="Gold" style="color:#686B6D">Gold</option>
                                                            <option value="Mustard Gold" style="color:#686B6D">Mustard Gold</option>
                                                            <option value="Sapphire" style="color:#686B6D">Sapphire</option>
                                                            <option value="Aubergine" style="color:#686B6D">Aubergine</option>
                                                            <option value="Plum" style="color:#686B6D">Plum</option>
                                                            <option value="Slate" style="color:#686B6D">Slate</option>
                                                            <option value="sand" style="color:#686B6D">sand</option>
                                                        
                                                        </select></br>  
                                                        </div>
                                                        <div class="diven_divan_febric">
                                                        
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_fabric" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Fabric</option>
                                                            <option value="Plush Velvet" style="color:#686B6D">Plush Velvet </option>
                                                            <option value="Crush velvet" style="color:#686B6D">Crush velvet</option>
                                                            <option value="Naples" style="color:#686B6D">Naples  </option>
                                                            <option value="Chenille" style="color:#686B6D">Chenille </option>
                                                            <option value="Leather" style="color:#686B6D">Leather </option>
                                                            <option value="Suede" style="color:#686B6D">Suede </option>
                                                        
                                                          
                                                        
                                                        </select></br> 
                                                        </div>
                                                        <div class="diven_divan_storage">
                    
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Storage <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_storage" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Storage</option>
                                                            <option value="No Drawers" style="color:#686B6D">No Drawers  </option>
                                                            <option value="1 Drawer-Jumbo Drawer" style="color:#686B6D">1 Drawer-Jumbo Drawer</option>
                                                            <option value="1 Drawer-Side" style="color:#686B6D">1 Drawer-Side  </option>
                                                            <option value="2 Drawers-Right side" style="color:#686B6D">2 Drawers-Right side </option>
                                                            <option value="2 Drawers-Left side" style="color:#686B6D">2 Drawers-Left side </option>
                                                            <option value="2 Drawers-1 each side Top piece" style="color:#686B6D">2 Drawers-1 each side Top piece </option>
                                                            <option value="2 Drawers-1 each side Bottom piece" style="color:#686B6D">2 Drawers-1 each side Bottom piece </option>
                                                            <option value="3 Drawers-Side" style="color:#686B6D">3 Drawers-Side</option>
                                                            <option value="3 Drawers-1 each side Top piece and Jumbo" style="color:#686B6D">3 Drawers-1 each side Top piece and Jumbo </option>
                                                        
                                                            <option value="4 Drawers" style="color:#686B6D">4 Drawers </option>
                                                          
                                                        
                                                        </select></br> 
                                                        </div>
                                                        <div class="diven_divan_mattress">
                    
                                
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_mattress" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Mattress  </option>
                                                            <option value="No" style="color:#686B6D">No</option>
                                                            <option value="simple - Semi ortho 8 inch" style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                            <option value="Orthopadic sprung 10 inch" style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                            <option value="Orthopadic Memory foam 10 inch" style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                            <option value="Memory foam 10 inch" style="color:#686B6D">Memory foam 10 inch</option>
                                                            <option value="Full memory foam 12 inch" style="color:#686B6D">Full memory foam 12 inch</option>
                                                            <option value="Full Foam 12 inch" style="color:#686B6D">Full Foam 12 inch</option>
                                                            <option value="Black 3D 12 inch" style="color:#686B6D">Black 3D 12 inch</option>
                                                            <option value="Grey 3D 12 inch" style="color:#686B6D">Grey 3D  12 inch</option>
                                                            <option value="Silver 3D 12 inch" style="color:#686B6D">Silver 3D 12 inch</option>
                                                            <option value="Cream 3D 12 inch" style="color:#686B6D">Cream 3D 12 inch</option>
                                                            <option value="Suede 3D 12 inch" style="color:#686B6D">Suede 3D 12 inch</option>
                                                            <option value="Mayfair 3D 12 inch" style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                            <option value="Richmond 3D 12 inch" style="color:#686B6D">Richmond 3D 12 inch</option>
                                                            <option value="1000 pocket 12 inch" style="color:#686B6D">1000 pocket 12 inch</option>
                                                            <option value="2000 pocket 12 inch" style="color:#686B6D">2000 pocket 12 inch</option>
                                                        
                                                        </select></br> 
                                                        </div>

                                                </div>

                                                 {{--Monaco Diven form show end  --}}

                                                  {{--Ottoman Diven form show end  --}}

                                                  <div class="main_ottoman_diven_div" style="display:none;">
                                                    <div class="text-center">Ottoman Diven Form</div>
                                                    <div class="ottoman_diven_size">
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_size" style="color:#686B6D" id="
                                                        
                                                        " >
                    
                                                            <option value="" style="color:#686B6D">select Size</option>
                                                            <option value="3ft" style="color:#686B6D">3ft</option>
                                                            <option value="4ft" style="color:#686B6D">4ft</option>
                                                            <option value="4ft6 inch" style="color:#686B6D">4ft6 inch</option>
                                                            <option value="5ft" style="color:#686B6D">5ft</option>
                                                            <option value="6ft" style="color:#686B6D">6ft</option>
                                                          
                                                        </select></br>
                                                        </div>
                                                        <div class="ottoman_diven_headboard">
                    
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Headboard <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_headboard" style="color:#686B6D" id=""  >
                    
                                                            <option value="" style="color:#686B6D">select Headboard </option>
                                                            <option value="Florida Diamond" style="color:#686B6D">Florida Diamond  </option>
                                                            <option value="Florida Button" style="color:#686B6D">Florida Button </option>
                                                            <option value="plain" style="color:#686B6D">plain </option>
                                                            <option value="panel" style="color:#686B6D">panel  </option>
                                                            <option value="Cube Diamond" style="color:#686B6D">Cube Diamond  </option>
                                                            <option value="Cube Button" style="color:#686B6D">Cube Button </option>
                                                         
                                                        </select></br>
                                                        </div>
                                                        <div class="ottoman_diven_color">
                    
                                                     
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_color" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Color</option>
                                                            <option value="Grey" style="color:#686B6D">Grey</option>
                                                            <option value="silver" style="color:#686B6D">silver</option>
                                                            <option value="black" style="color:#686B6D">black</option>
                                                            <option value="cream" style="color:#686B6D">cream</option>
                                                            <option value="steel" style="color:#686B6D">steel</option>
                                                            <option value="teal" style="color:#686B6D">teal</option>
                                                            <option value="Beige" style="color:#686B6D">Beige</option>
                                                            <option value="red" style="color:#686B6D">red</option>
                                                            <option value="blue" style="color:#686B6D">blue</option>
                                                            <option value="purple" style="color:#686B6D">purple</option>
                                                            <option value="charcoal" style="color:#686B6D">charcoal</option>
                                                            <option value="Brown" style="color:#686B6D">Brown</option>
                                                            <option value="White" style="color:#686B6D">White</option>
                                                            <option value="Duck Egg" style="color:#686B6D">Duck Egg</option>
                                                            <option value="Maroon" style="color:#686B6D">Maroon</option>
                                                            <option value="pink" style="color:#686B6D">pink</option>
                                                            <option value="Mink" style="color:#686B6D">Mink</option>
                                                            <option value="Gold" style="color:#686B6D">Gold</option>
                                                            <option value="Mustard Gold" style="color:#686B6D">Mustard Gold</option>
                                                            <option value="Sapphire" style="color:#686B6D">Sapphire</option>
                                                            <option value="Aubergine" style="color:#686B6D">Aubergine</option>
                                                            <option value="Plum" style="color:#686B6D">Plum</option>
                                                            <option value="Slate" style="color:#686B6D">Slate</option>
                                                            <option value="sand" style="color:#686B6D">sand</option>
                                                        
                                                        </select></br>  
                                                        </div>
                                                        <div class="ottoman_diven_febric">
                    
                                                        
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_fabric" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Fabric</option>
                                                            <option value="Plush Velvet" style="color:#686B6D">Plush Velvet </option>
                                                            <option value="Crush velvet" style="color:#686B6D">Crush velvet</option>
                                                            <option value="Naples" style="color:#686B6D">Naples  </option>
                                                            <option value="Chenille" style="color:#686B6D">Chenille </option>
                                                            <option value="Leather" style="color:#686B6D">Leather </option>
                                                            <option value="Suede" style="color:#686B6D">Suede </option>
                                                        
                                                          
                                                        
                                                        </select></br> 
                                                        </div>
                                                        <div class="ottoman_diven_mattress">
                    
                    
                                
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_mattress" style="color:#686B6D" id="designField" >
                                                            <option value="" style="color:#686B6D">select Mattress  </option>
                                                            <option value="No" style="color:#686B6D">No</option>
                                                            <option value="simple - Semi ortho 8 inch" style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                            <option value="Orthopadic sprung 10 inch" style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                            <option value="Orthopadic Memory foam 10 inch" style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                            <option value="Memory foam 10 inch" style="color:#686B6D">Memory foam 10 inch</option>
                                                            <option value="Full memory foam 12 inch" style="color:#686B6D">Full memory foam 12 inch</option>
                                                            <option value="Full Foam 12 inch" style="color:#686B6D">Full Foam 12 inch</option>
                                                            <option value="Black 3D 12 inch" style="color:#686B6D">Black 3D 12 inch</option>
                                                            <option value="Grey 3D 12 inch" style="color:#686B6D">Grey 3D  12 inch</option>
                                                            <option value="Silver 3D 12 inch" style="color:#686B6D">Silver 3D 12 inch</option>
                                                            <option value="Cream 3D 12 inch" style="color:#686B6D">Cream 3D 12 inch</option>
                                                            <option value="Suede 3D 12 inch" style="color:#686B6D">Suede 3D 12 inch</option>
                                                            <option value="Mayfair 3D 12 inch" style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                            <option value="Richmond 3D 12 inch" style="color:#686B6D">Richmond 3D 12 inch</option>
                                                            <option value="1000 pocket 12 inch" style="color:#686B6D">1000 pocket 12 inch</option>
                                                            <option value="2000 pocket 12 inch" style="color:#686B6D">2000 pocket 12 inch</option>
                                                        
                                                        </select></br> 
                                                        </div>
                                                    
                                                  </div>


                                                   {{--Ottoman Diven form show end  --}}


                                    <!-- <label class="pay" style="margin-top: 12px;">Design</label>
                                    <input type="text" name="holdername" placeholder=""/> -->
                                    <div class="design" style="display: none;">
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="design[]" style="color:#686B6D" id="deisgnField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select design</option>
                                            </select></br>
                                        </div>

                                            <div class="headboard" style="display: none;">
                                            <span></span><label class="pay" style="margin-top: 10px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Headboard <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="headboard[]" style="color:#686B6D" id="boardField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select headboard</option>
                                            </select></br>
                                             </div>

                                       
                                            <div class="size" style="display: none;">
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Size <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="size[]" style="color:#686B6D" id="sizeField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select size</option>
                                            </select></br>
                                              </div>

                                            <div class="matteress" style="display: none;">
                                            <span></span><label class="pay" style="margin-top: 10px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Mattress <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="matteres[]" style="color:#686B6D" id="matteresField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select matteres</option>
                                            </select></br>
                                            </div>

                                            <div class="storages" style="display: none;">
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Storage <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="storage[]" style="color:#686B6D" id="storageField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select storage</option>
                                            </select></br>
                                             </div>
                                        <div class="colors" style="margin-top: 10px;display: none;">
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Color | Fabric <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="color_or_fabric[]" style="color:#686B6D" id="color_or_fabricField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select color</option>
                                            </select></br>
                                            </div>
                                  </div>
{{-- Delivery status --}}
 <style>
.disaplayInput{
display: none;
}

</style>
{{-- Delivery status --}}
                                        
                                   <div class="row" style="display: none;">
                                        <div class="col-12 quantity" style="margin-top: 10px;">
                                            <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Quantity</label>
                                            <input type="number" name="qty" placeholder="" id="qtyField" disabled />
                                        </div> 
                                    </div>
                                  </div>
                                </div>
                                <input type="button" name="next"  class="next action-button validations_form" value="Next Step" />
                            </fieldset>
                            <fieldset class="last_hide">
                                <div class="form-card">
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Price <span style="color:red">*</span></label></br>
                                    <input type="number" name="price" id="orderprice" placeholder="Price" />
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Note ( optional )</label></br>
                                    <!-- {{-- <input type="text" name="note" placeholder="Note" /> --}} -->
                                    <textarea rows="3" id="ordernote" name="note" placeholder="Note" cols="10"></textarea>
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Quantity ( optional )</label></br>
                                    <input type="number" id="orderqty" name="qty" placeholder="qty" />
                                    


                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Delivery status ( optional )</label></br>

                                    <div id="textSelectdiv">
                                        <select  id="orderdelivery" name="delivery_status"  class="select form-control" style="display: inline;color:#686B6D">
                                            <option value="" style="color:#686B6D">Delivery status</option>
                                            <option value="complete" style="color:#686B6D">Complete</option>
                                            <option value="inprocess" style="color:#686B6D">Inprocess</option>
                                            <option value="cancel" style="color:#686B6D">Canceled</option>
                                          <option value="customOption">Enter your custom option here</option>
                                        </select>
                                        {{-- <label class="form-label select-label">Example label</label> --}}
                                      </div>
                                      <div id="inputDiv" class="form-outline disaplayInput">
                                        <input type="text" id="form12" class="form-control" style="display: none;" onblur="hideInput()" disabled />
                                        <label id="inputLabel" class="form-label disaplayInput" for="form12" style="cursor: pointer"><b>Select Option</b></label>
                                      </div>

                                      <br>

                                 



                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Delivery Date <span style="color:red">*</span></label>
                                    <input type="date" name="delivery_date" id="orderdate" />

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next2 action-button" value="Next Step" />

                                
                                
                            </fieldset>
         
                            <fieldset class="first_hide">
                                <div class="form-card">
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">First Name <span style="color:red">*</span></label></br>
                                    <input type="text" name="first_name" id="orderfirstname" placeholder="First Name" />
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Last Name ( optional )</label></br>
                                    <input type="text" name="last_name" id="orderlastname" placeholder="Last Name" />
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Email ( optional )</label></br>
                                    <input type="email" name="email" id="orderemail" placeholder="Email Id" />

                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Phone Number <span style="color:red">*</span></label></br>
                                    <input type="hidden" value="" name="mobile_code"  id="mobile_code">

                                                                                            
                                    <input type="text" name="phone" id="orderphone" class="form-control phone_call"  />

                                    <input type="hidden" name="number_code" id="pro_mobile_code">
                                    
                            

                                    {{-- <input type="text" name="phone" id="orderphone" style="padding-left: 80px;" placeholder="Phone Number" /> --}}


                                    <span id="valid-msg" class="hide">✓ Valid</span>
					                <span id="error-msg" class="hide"></span><br/>
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Address <span style="color:red">*</span></label></br>
                                
                                    <textarea rows="2" id="orderaddress" name="address" placeholder="Address" cols="10"></textarea>
                                    
                                    <!-- <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Oder Deliverd AT*</label></br>
                                    <input type="date" name="orderdeliverd" id="orderdeliverd" placeholder="*" /> -->
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Post Code <span style="color:red">*</span></label></br>
                                    <input type="text" name="post_code" id="orderpostcode" placeholder="Post Code" />
                                  
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous pakistani" value="Previous" />
                                <input id="confirms"  type="submit" name="make_payment" class="next3 action-button phone_no_get" value="Confirm" />

                            </fieldset>


                          
                            <fieldset class="last_hide">
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
                                            <h5 class="you_have_the_option">You Have the option to Re Order Again</h5>
                                        </div>
                            

                                    </div>
                                    <div style="text-align: center;">
                                        
                                        <a id="myAnchor" href="javascript:void(0)" ><input type="button" style="width: 100%;padding-left: 30px;padding-right: 30px;" name="re_order" class="action-button" value="Re-Order" /></a>
                                        <a href="{{ '/order_index'}}" ><input type="button" style="width: 100%;padding-left: 30px;padding-right: 30px;" name="re_order" class="action-button" value="Go to Order Page" /></a>
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




<script src="{{ asset('admin/assets/js/jquery-3.5.1.min.js')}}"></script>



{{-- Delivery status --}}

<script>
    $(document).ready(function(){
      $(".phone_no_get").click(function(){
        var divContents = $('.iti__selected-dial-code').text();
         $('#pro_mobile_code').val(divContents);
        
      });
    });
</script>
    

<script>
$(document).ready(function(){
   
    var input = document.querySelector(".phone_call");
        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["pk", "ru", "jp", "no"]
        });

});
</script>




    


<script>   
    $(document).ready(function() {

        $('.changecountry').on('change', function() { 
            $('.cover_products').slideDown();
        });

        $('.changeproduct').on('change', function() { 
            $('.show_button').slideDown();
        });

        $(".mattress_button").click(function() {


       
            var form = document.getElementById('msform');

// Reset the form
form.reset();


            $('.main_mattrees_div').slideToggle();

            

            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            $('.ottoman_button').css('background-color','#435df7');
            $('.bed_button').css('background-color','#435df7');
            $(".main_ottoman_div").hide();
            $(".main_gaslift_div").hide();
            $(".main_headboard_div").hide();
            $(".main_without_diamond_div").hide();
            $(".main_with_diamond_div").hide();
            $(".fourth_button").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
            $(".second_button").hide();
            $(".third_button").hide();
        });

        $(".ottoman_button").click(function() {
            $('.main_ottoman_div').slideToggle();


            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
        //  $(".main_ottoman_div").show();
            $('.mattress_button').css('background-color','#435df7');
            $('.bed_button').css('background-color','#435df7');
            $(".main_mattrees_div").hide();
            $(".main_gaslift_div").hide();
            $(".main_headboard_div").hide();
            $(".main_without_diamond_div").hide();
            $(".main_with_diamond_div").hide();
            $(".fourth_button").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
            $(".second_button").hide();
            $(".third_button").hide();        
        });

        $(".bed_button").click(function() {
            var hiden = $(this).val();
            // alert(hiden);
            $('.hidden_bed').val(hiden);


            var form = document.getElementById('msform');

// Reset the form
form.reset();

            $('.second_button').slideToggle();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            $(this).css("opacity", "0.8");
            $('.mattress_button').css('background-color','#435df7');
            $('.ottoman_button').css('background-color','#435df7');
            $('.design_button').css('background-color','#435df7');
            $('.divan_button').css('background-color','#435df7');
            $('.gaslift_button').css('background-color','#435df7');
            $('.headboard_button').css('background-color','#435df7');
            $('.without_diamond_button').css('background-color','#435df7');
            $('.with_diamond_button').css('background-color','#435df7');
            $('.divan_button_form').css('background-color','#435df7');
            $('.Ottoman_Divan_button').css('background-color','#435df7');
            $('.Monaco_divan_button').css('background-color','#435df7');
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_without_diamond_div").hide();
            $(".third_button").hide();
            $(".main_with_diamond_div").hide();
            $(".fourth_button").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
            $(".main_gaslift_div").hide();
            $(".main_headboard_div").hide(); 
        });

        $(".gaslift_button").click(function() { 
            $('.main_gaslift_div').slideToggle();


            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            // $(".main_gaslift_div").show();
            $('.headboard_button').css('background-color','#435df7');
            $('.design_button').css('background-color','#435df7');
            $('.mattress_button').css('background-color','#435df7');
            $('.ottoman_button').css('background-color','#435df7');
            $('.bed_button').css('background-color','#6c6e6b');
            $(".main_headboard_div").hide();
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_without_diamond_div").hide();
            $(".main_with_diamond_div").hide();
            $(".fourth_button").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
            $(".third_button").hide();        
        });

        $(".headboard_button").click(function() {
            $('.main_headboard_div').slideToggle();


            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            // $(".main_headboard_div").show();
            $('.gaslift_button').css('background-color','#435df7');
            $('.design_button').css('background-color','#435df7');
            $('.mattress_button').css('background-color','#435df7');
            $('.ottoman_button').css('background-color','#435df7');
            $('.bed_button').css('background-color','#6c6e6b');
            $(".main_gaslift_div").hide();
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_without_diamond_div").hide();
            $(".main_with_diamond_div").hide();
            $(".fourth_button").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
            $(".third_button").hide();
        });

        $(".design_button").click(function() {

            var hiden_design = $(this).val();
            //  alert(hiden_design);
            $('.hidden_design').val(hiden_design);
            $('.third_button').slideToggle();


            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            //  $(".third_button").show();
            $('.gaslift_button').css('background-color','#435df7');
            $('.headboard_button').css('background-color','#435df7');
            $('.mattress_button').css('background-color','#435df7');
            $('.ottoman_button').css('background-color','#435df7');
            $('.bed_button').css('background-color','#6c6e6b');
            $('.headboard_button').css('background-color','#435df7');
            $('.without_diamond_button').css('background-color','#435df7');
            $('.with_diamond_button').css('background-color','#435df7');
            $('.divan_button_form').css('background-color','#435df7');
            $('.Ottoman_Divan_button').css('background-color','#435df7');
            $('.Monaco_divan_button').css('background-color','#435df7');
            $('.divan_button').css('background-color','#435df7');
            $(".main_gaslift_div").hide();
            $(".main_headboard_div").hide();
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_without_diamond_div").hide();
            $(".main_with_diamond_div").hide();
            $(".fourth_button").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
        });

        $(".without_diamond_button").click(function() {
        
            $('.main_without_diamond_div').slideToggle();
            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            // $(".main_without_diamond_div").show();
            $('.with_diamond_button').css('background-color','#435df7');
            $('.divan_button').css('background-color','#435df7');
            $(".main_gaslift_div").hide();
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_headboard_div").hide();
            $(".main_with_diamond_div").hide();
            $(".fourth_button").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();        
        });

        $(".with_diamond_button").click(function() {
            
            $('.main_with_diamond_div').slideToggle();

            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            // $(".main_with_diamond_div").show();
            $('.without_diamond_button').css('background-color','#435df7');
            $('.divan_button').css('background-color','#435df7');
            $(".main_gaslift_div").hide();
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_headboard_div").hide();
            $(".main_without_diamond_div").hide();
            $(".fourth_button").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
        });

        $(".divan_button").click(function() {

            var hiden_divan = $(this).val();
            // alert(hiden_divan);
            $('.hidden_divan').val(hiden_divan);
            $('.fourth_button').slideToggle();

            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            //   $(".fourth_button").show();
            $('.with_diamond_button').css('background-color','#435df7');
            $('.without_diamond_button').css('background-color','#435df7');
            $('.divan_button_form').css('background-color','#435df7');
            $('.Ottoman_Divan_button').css('background-color','#435df7');
            $('.Monaco_divan_button').css('background-color','#435df7');
            $(".main_gaslift_div").hide();
            $(".main_headboard_div").hide();
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_without_diamond_div").hide();
            $(".main_with_diamond_div").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
        });

        $(".divan_button_form").click(function() {
            
            // $(".main_diven_div").show();
            $('.main_diven_div').slideToggle();
            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            $('.Monaco_divan_button').css('background-color','#435df7');
            $('.Ottoman_Divan_button').css('background-color','#435df7');
            $(".main_gaslift_div").hide();
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_headboard_div").hide();
            $(".main_without_diamond_div").hide();
            $(".main_monaco_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
        });

        $(".Monaco_divan_button").click(function() {
            $('.main_monaco_diven_div').slideToggle();
            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            // $(".main_monaco_diven_div").show();
            $('.divan_button_form').css('background-color','#435df7');
            $('.Ottoman_Divan_button').css('background-color','#435df7');
            $(".main_gaslift_div").hide();
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_headboard_div").hide();
            $(".main_without_diamond_div").hide();
            $(".main_diven_div").hide();
            $(".main_ottoman_diven_div").hide();
        });

        $(".Ottoman_Divan_button").click(function() {
            $('.main_ottoman_diven_div').slideToggle();
            var form = document.getElementById('msform');

// Reset the form
form.reset();
            $(this).css('background-color','#6c6e6b');
            $(this).css('border','none');
            // $(".main_ottoman_diven_div").show();
            $('.Monaco_divan_button').css('background-color','#435df7');
            $('.divan_button_form').css('background-color','#435df7');
            $(".main_gaslift_div").hide();
            $(".main_mattrees_div").hide();
            $(".main_ottoman_div").hide();
            $(".main_headboard_div").hide();
            $(".main_without_diamond_div").hide();
            $(".main_diven_div").hide();
            $(".main_monaco_diven_div").hide();
 
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
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

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
        });

        $(".next2").click(function() {
                    
            var orderpriceField = document.getElementById("orderprice");
            // var ordernoteField = document.getElementById("ordernote");
            // var orderqtyField = document.getElementById("orderqty");
            // var orderdeliveryField = document.getElementById("orderdelivery");
            var orderdateField = document.getElementById("orderdate");
            
            if (orderpriceField.value === "") {
                Swal.fire(
                    'Errors',
                    'Please select the Price',
                    'error'
                ).then(function() {
                    orderpriceField.classList.add("country_error");
                    orderpriceField.focus();
                    $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                });
                return false;
            }else{
                $("#orderprice").removeClass("country_error");
            }
            // if (ordernoteField.value === "") {
            //     // alert("Please select an option.");
            //     Swal.fire(
            //         'Errors',
            //         'Please select the Note',
            //         'error'
            //     ).then(function() {
            //         $("html, body").animate({ scrollTop: "-=100px" }, "slow");
            //     });
            //     ordernoteField.classList.add("country_error");
            //     ordernoteField.focus();
            //     return false;
            // }else{
            //     $("#ordernote").removeClass("country_error");
            // }

            // if (orderqtyField.value === "") {
            //     // alert("Please select an option.");
            //     Swal.fire(
            //         'Errors',
            //         'Please select the Quantity',
            //         'error'
            //     ).then(function() {
            //         $("html, body").animate({ scrollTop: "-=100px" }, "slow");
            //     });
            //     orderqtyField.classList.add("country_error");
            //     orderqtyField.focus();
            //     return false;
            // }else{
            //     $("#orderqty").removeClass("country_error");
            // }
            // if (orderdeliveryField.value === "") {
            //     // alert("Please select an option.");
            //     Swal.fire(
            //         'Errors',
            //         'Please select the Delivery Status',
            //         'error'
            //     ).then(function() {
            //         $("html, body").animate({ scrollTop: "-=100px" }, "slow");
            //     });
            //     orderdeliveryField.classList.add("country_error");
            //     orderdeliveryField.focus();
            //     return false;
            // }else{
            //     $("#orderdelivery").removeClass("country_error");
            // }
            if (orderdateField.value === "") {
                // alert("Please select an option.");
                Swal.fire(
                    'Errors',
                    'Please select the Date status',
                    'error'
                ).then(function() {
                    $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                });
                orderdateField.classList.add("country_error");
                orderdateField.focus();
                return false;
            }else{
                $("#orderdate").removeClass("country_error");
            }

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
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

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
        });

        $(".next3").click(function() {
                    
            var orderfirstnameField = document.getElementById("orderfirstname");
            // var orderlastnameField = document.getElementById("orderlastname");
            var orderemailField = document.getElementById("orderemail");
            var orderdeliverdField = document.getElementById("orderdeliverd");
            var orderaddressField = document.getElementById("orderaddress");
            var orderphoneField = document.getElementById("orderphone");
            var orderpostcodeField = document.getElementById("orderpostcode");
                    
            if (orderfirstnameField.value === "") {
                // alert("Please select an option.");
                Swal.fire(
                    'Errors',
                    'Please select the First Name',
                    'error'
                ).then(function() {
                    orderfirstnameField.classList.add("country_error");
                    orderfirstnameField.focus();
                    $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                });
                return false;
            }else{
                $("#orderfirstname").removeClass("country_error");
            }

            // if (orderlastnameField.value === "") {
            //     // alert("Please select an option.");
            //     Swal.fire(
            //         'Errors',
            //         'Please select the Last Name',
            //         'error'
            //     ).then(function() {
            //         $("html, body").animate({ scrollTop: "-=100px" }, "slow");
            //     });
            //     orderlastnameField.classList.add("country_error");
            //     orderlastnameField.focus();
            //     return false;
            // }else{
            //     $("#orderlastname").removeClass("country_error");
            // }


            
        //  email work
        if (orderemailField.value.trim() !== "") { // Check if the email field is not empty
            var email = $("#orderemail").val();
                var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;
                if (!emailRegex.test(email)) {
                    $("#orderaddress").removeClass("country_error");
                    Swal.fire(
                        'Errors',
                        'Please enter a valid email address',
                        'error'
                    ).then(function() {
                        $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                        orderemailField.classList.add("country_error");
                        orderemailField.focus();
                    });
                    return false;
                }
                $("#orderemail").removeClass("country_error");




            } else {
                // Email field is empty, do nothing.
                $("#orderemail").removeClass("country_error");
            }


   //  email work

            // if (orderemailField.value === "") {
            //     // alert("Please select an option.");
            //     var email = $("#orderemail").val();
            //     var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;
            //     if (!emailRegex.test(email)) {
            //         Swal.fire(
            //             'Errors',
            //             'Please enter a valid email address',
            //             'error'
            //         ).then(function() {
            //             $("html, body").animate({ scrollTop: "-=100px" }, "slow");
            //             orderemailField.classList.add("country_error");
            //             orderemailField.focus();
            //         });
                        
            //         return false;
            //     }
            //     $("#orderemail").removeClass("country_error");
            // } else{

            //     Swal.fire(
            //         'Errors',
            //         'Please select the Email',
            //         'error'
            //     ).then(function() {
            //         $("html, body").animate({ scrollTop: "-=100px" }, "slow");
            //     });
            //     orderemailField.classList.add("country_error");
            //     orderemailField.focus();
            //     return false;
            // }

        if (orderphoneField.value === "") {
                // alert("Please select an option.");
                Swal.fire(
                    'Errors',
                    'Please select the Phone Number',
                    'error'
                ).then(function() {
                    $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                });
                orderphoneField.classList.add("country_error");
                orderphoneField.focus();
                return false;
            }else{

                if (!$.isNumeric(orderphoneField.value)) {
                    // alert("Please enter a valid number.");
                    Swal.fire(
                        'Errors',
                        'Please enter a valid Phone Number',
                        'error'
                    ).then(function() {
                        $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                        orderphoneField.classList.add("country_error");
                        orderphoneField.focus();
                    });      
                    return false;
                }
                
                $("#orderphone").removeClass("country_error");
            }




            if (orderaddressField.value === "") {
                // alert("Please select an option.");
                Swal.fire(
                    'Errors',
                    'Please select the Address',
                    'error'
                ).then(function() {
                    orderaddressField.classList.add("country_error");
                    orderaddressField.focus();
                    $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                }); 
                return false;
            }else{
                $("#orderaddress").removeClass("country_error");
            }


         

            if (orderpostcodeField.value === "") {
                // alert("Please select an option.");
                Swal.fire(
                    'Errors',
                    'Please select the Post Code',
                    'error'
                ).then(function() {
                    $("html, body").animate({ scrollTop: "-=30px" }, "slow");
                });
                orderpostcodeField.classList.add("country_error");
                orderpostcodeField.focus();
                return false;
            }else{
                // if (!$.isNumeric(orderpostcodeField.value)) {
                //     // alert("Please enter a valid number.");
                //     Swal.fire(
                //         'Errors',
                //         'Please enter a valid number',
                //         'error'
                //     ).then(function() {
                //         $("html, body").animate({ scrollTop: "-=50px" }, "slow");
                //         orderpostcodeField.classList.add("country_error");
                //         orderpostcodeField.focus();
                //     });
                            
                //     return false;
                // }
                $("#orderpostcode").removeClass("country_error");
            }
            
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
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

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
        });
        
        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

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

        var topField = document.getElementById("topField");
        var productField = document.getElementById("productField");
        var deisgnField = document.getElementById("deisgnField");
        var boardField = document.getElementById("boardField");
        var sizeField = document.getElementById("sizeField");
        var matteresField = document.getElementById("matteresField");
        var storageField = document.getElementById("storageField");
        var qtyField = document.getElementById("qtyField");
        var color_or_fabricField = document.getElementById("color_or_fabricField");

        if (topField.value !== "") {
            productField.disabled = false;
            deisgnField.disabled = false;
            boardField.disabled = false;
            sizeField.disabled = false;
            matteresField.disabled = false;
            storageField.disabled = false;
            qtyField.disabled = false;
            color_or_fabricField.disabled = false;
        }

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

                $.each(data, function(key, value) {
                    ele.append("<option value='" + value.id + "' style='color:#686B6D'>" + value.name + "</option>");
                });
            },
        });
    }










    function enableVariations(val) {
        $("#productField").removeClass("pro_error");
        var design = $('#deisgnField');
        var board = $('#boardField');
        var size = $('#sizeField');
        var matteres = $('#matteresField');
        var storage = $('#storageField');
        var color_or_fabric = $('#color_or_fabricField');

        $.ajax({
            type: "POST",
            url: '{{route("product_variation")}}',
            data: {
                product: val,
                _token: '{{csrf_token()}}'
            },
            dataType: "json",
            success: function(data) {
                console.log(data);
                design.empty();
                design.append($('<option>', {
                    value: 'default',
                    text: 'select design',
                    selected: true
                }));

                color_or_fabric.empty();
                color_or_fabric.append($('<option>', {
                    value: 'default',
                    text: 'select color_or_fabric',
                    selected: true
                }));

                board.empty();
                board.append($('<option>', {
                    value: 'default',
                    text: 'select headboard',
                    selected: true
                }));

                size.empty();
                size.append($('<option>', {
                    value: 'default',
                    text: 'select size',
                    selected: true
                }));

                matteres.empty();
                matteres.append($('<option>', {
                    value: 'default',
                    text: 'select matteres',
                    selected: true
                }));

                storage.empty();
                storage.append($('<option>', {
                    value: 'default',
                    text: 'select storage',
                    selected: true
                }));

                $.each(data, function(key, value) {
                    var subvalue = value.design;
                    designArr = JSON.parse(subvalue);
                    $.each(designArr, function(key, value) {
                        design.append("<option value='" + value + "' style='color:#686B6D'>" + value + "</option>");
                    });

                    var subvaluecolor_or_fabric = value.color_or_fabric;
                    color_or_fabricArr = JSON.parse(subvaluecolor_or_fabric);
                    $.each(color_or_fabricArr, function(key, value) {
                        color_or_fabric.append("<option value='" + value + "' style='color:#686B6D'>" + value + "</option>");
                    });

                    var subvalueheadboard = value.headboard;
                    boardArr = JSON.parse(subvalueheadboard);
                    $.each(boardArr, function(key, value) {
                        board.append("<option value='" + value + "' style='color:#686B6D'>" + value + "</option>");
                    });

                    var subvaluesize = value.size;
                    sizeArr = JSON.parse(subvaluesize);
                    $.each(sizeArr, function(key, value) {
                        size.append("<option value='" + value + "' style='color:#686B6D'>" + value + "</option>");
                    });

                    var subvaluematteres = value.matteres;
                    matteresArr = JSON.parse(subvaluematteres);
                    $.each(matteresArr, function(key, value) {
                        matteres.append("<option value='" + value + "' style='color:#686B6D'>" + value + "</option>");
                    });

                    var subvaluestorage = value.storage;
                    storageArr = JSON.parse(subvaluestorage);
                    $.each(storageArr, function(key, value) {
                        storage.append("<option value='" + value + "' style='color:#686B6D'>" + value + "</option>");
                    });

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
        console.log(formData);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            async: true,
            type: 'post',
            url: "{{ url('order_store')}}" ,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status == 200) {

                    // alert(response.current_id);

                    var queryParam = response.current_id;

                    // Update anchor tag href with the query parameter
                    var anchorTag = document.getElementById('myAnchor');
                    anchorTag.href = "{{url('/re-order')}}?get_val=" + queryParam;

                    Swal.fire(
                        'Good job!',
                        'Order Add Successfuly',
                        'success'
                    )
                    //     .then(function() {
                    //     window.location.reload(true);
                    // });
                }

                if (response.status == 100) {
                    var orderemailField = document.getElementById("orderemail");
                    $('.page-wrapper').css('opacity', '0');
                  
                    Swal.fire(
                        'Errors',
                        'This Email Already Exist Please Enter Another Email',
                        'error'
                    ).then(function() {

                        $(".last_hide").hide();
                        $(".first_hide").show();
                        $('.first_hide').css('opacity', '1');
                        $('.page-wrapper').css('opacity', '1');
                        $("#confirm").removeClass("active");
                        orderemailField.classList.add("country_error");
                        orderemailField.focus();
                        $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                           
                    });
                }
                
                if (response.status == 300) {
                    var orderfirstnameField = document.getElementById("orderfirstname");
                    $('.page-wrapper').css('opacity', '0');
                    Swal.fire(
                        'Errors',
                        'This First Name Already Exist Please Enter Another Name',
                        'error'
                    ).then(function() {
                        $(".last_hide").hide();
                        $(".first_hide").show();
                        $('.first_hide').css('opacity', '1');
                        $('.page-wrapper').css('opacity', '1');
                        $("#confirm").removeClass("active");
                        orderfirstnameField.classList.add("country_error");
                        orderfirstnameField.focus();
                        $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                    });
                }

            }
        });
    }

 
 


    // const input = document.querySelector("#orderphone");
    // const errorMsg = document.querySelector("#error-msg");
    // const validMsg = document.querySelector("#valid-msg");

    // // here, the index maps to the error code returned from getValidationError - see readme
    // const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // // initialise plugin
    // const iti = window.intlTelInput(input, {
    //     utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js"
    // });

    // const reset = () => {
    //     input.classList.remove("error");
    //     errorMsg.innerHTML = "";
    //     errorMsg.classList.add("hide");
    //     validMsg.classList.add("hide");
    // };

    // // on blur: validate
    // input.addEventListener('blur', () => {
    //     reset();
    //     if (input.value.trim()) {
    //         if (iti.isValidNumber()) {
    //             validMsg.classList.remove("hide");
    //         } else {
    //             // if (!$.isNumeric(orderphoneField.value)) {
    //             // alert("Please enter a valid number.");
    //             Swal.fire(
    //                 'Errors',
    //                 'Please enter a valid Phone Number',
    //                 'error'
    //             ).then(function() {
    //                 $("html, body").animate({ scrollTop: "-=100px" }, "slow");
    //                 orderphoneField.classList.add("country_error");
    //                 errorMsg.innerHTML = errorMap[errorCode];

    //                 orderphoneField.focus();
    //             });       
    //             return false;
    //                     // }
    //             // input.classList.add("error");
    //             // const errorCode = iti.getValidationError();
    //             // errorMsg.classList.remove("hide");
    //         }
    //     }
    // });

    // // on keyup / change flag: reset
    // input.addEventListener('change', reset);
    // input.addEventListener('keyup', reset);

</script>


@endsection
