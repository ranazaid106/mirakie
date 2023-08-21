@extends('layouts.main')
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
        width: 150px;
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
    /* .bed_remove{
        background-color: #435df7!important;
    }  */


    @media only screen and (max-width: 400px) {

.order_taking_form{
   font-size: 25px;
}


.fill_all_from_field{

    font-size: 13px;
}



    }

</style>
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
   
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-8 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 style="font-size: 24px;" class="order_taking_form"><strong>Edit Order Taking Form</strong></h2>
                <p style="color:#f9466d" class="fill_all_from_field">Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0 ">
                        <form id="msform" method="post" onsubmit="submit_universal_form('msform');" >
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar"  >
                                <li style="margin-left: 46px;" class="active" id="account"><strong>Order Details</strong></li>
                                <li  id="payment"><strong>Payment</strong></li>
                                {{-- <li   id="personal"><strong>Customer Info</strong></li> --}}
                               
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <input type="hidden" name="hide_val" value="{{ $detailOrder->order_id }}" >
                            <fieldset>
                                <div class="form-card" id="original-div">
                                    <button onclick="cloneDiv(event)" style="float:right;height:20px"><i class="fa fa-plus-circle" aria-hidden="true" style="font-size: 20px;color:#686B6D;display:none" title="add more products"></i></button>
                                    <button onclick="cloneDivMinus(event)" style="float:right;height:20px;margin-right:10px;display:none" id="minu-button"><i class="fa fa-minus-circle" aria-hidden="true" style="font-size: 20px;color:#686B6D" title="remove this product section"></i></button>
                                
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Country <span style="color:red">*</span>
                                    </label>
                                </br>
                                <?php
                                // dd($country);
                                ?>
                                    <select class="form-control changecountry" name="country" style="color:#686B6D" id="topField" onchange="enableFields(this.value)" required>

                                        <option value="" style="color:#686B6D">select country</option>
                                        @foreach($allCountries as $country)
                                        <option value="{{$country}}" {{$detailOrder->select_country == $country ? 'selected': '' }} style="color:#686B6D">{{$country}}</option>
                                        @endforeach
                                       
                                    </select>
                                </br>
                                    <div class="main_divs">
                                  <div class="cover_products"  >  
                                    <div class="products">
                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Product <span style="color:red">*</span></label></br>
                                    <select class="form-control changeproduct" name="product" style="color:#686B6D" id="productField" onchange="enableVariations(this.value)"  required>
                                        <option value="" style="color:#686B6D">select product</option>
                                        @if(!empty($item->product_id))
                                            <option selected value="{{$item->product_id}}" style="color:#686B6D">{{$item->product_name}}</option>
                                        @endif
                                        
                                    </select></br>
                                   </div>
                                   {{-- Three Button show start  --}}

                                   {{-- <div class="show_button" >
                                    <input type="hidden" class="hidden_bed" name="hidden_bed" value="">
                                  <input type="button" name="Mattress" class="mattress_button commando_button" value="Mattress" />
                                  <input type="button" name="Bed" class="bed_button commando_button" value="Bed" />
                                  <input type="button" name="Ottoman" class="ottoman_button commando_button" value="Ottoman" />                              
                                   </div> --}}
                                   {{-- Three Button show end  --}}

                                   {{-- Mattress form show start  --}}
                                   
                                   <div class="main_mattrees_div" style="display: @if(isset($detailOrder->mattress_size)== '')  none;  @endif" >
                                    {{-- <div class="main_mattrees_div"  style="display: @if($detailOrder->mattress_size === '' &&  $detailOrder->select_mattress === '' ) 'none;' @else '' @endif "> --}}
                                   <div class="mattrees_size">
                                    <div style="text-align: center;color:red;font-weight:bold;">Mattress Form </div>
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                    <select class="form-control" name="mattress_size" style="color:#686B6D" id=""  >

                                        <option value="" style="color:#686B6D">select Size</option>
                                        <option value="3ft" {{$detailOrder->mattress_size == '3ft' ? 'selected': '' }} style="color:#686B6D">3ft</option>
                                        <option value="4ft" {{$detailOrder->mattress_size == '4ft' ? 'selected': '' }} style="color:#686B6D">4ft</option>
                                        <option value="4ft6 inch" {{$detailOrder->mattress_size == '4ft6 inch' ? 'selected': '' }} style="color:#686B6D">4ft6 inch</option>
                                        <option value="5ft" {{$detailOrder->mattress_size == '5ft' ? 'selected': '' }} style="color:#686B6D">5ft</option>
                                        <option value="6ft" {{$detailOrder->mattress_size == '6ft' ? 'selected': '' }} style="color:#686B6D">6ft</option>
                                      
                                    </select></br>
                                    </div>
                                    <div class="mattrees_color">

                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress </label></br>
                                    <select class="form-control" name="mattress_design" style="color:#686B6D" id="designField"   >
                                        <option value="" style="color:#686B6D">select Mattress </option>
                                        <option value="No" {{$detailOrder->select_mattress == 'No' ? 'selected': '' }} style="color:#686B6D">No</option>
                                        <option value="simple - Semi ortho 8 inch" {{$detailOrder->select_mattress == 'simple - Semi ortho 8 inch' ? 'selected': '' }} style="color:#686B6D">simple - Semi ortho  8 inch</option>
                                        <option value="Orthopadic sprung 10 inch" {{$detailOrder->select_mattress == 'Orthopadic sprung 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic sprung  10"</option>
                                        <option value="Orthopadic Memory foam 10 inch" {{$detailOrder->select_mattress == 'Orthopadic Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                        <option value="Memory foam 10 inch" {{$detailOrder->select_mattress == 'delivered' ? 'selected': '' }} style="color:#686B6D">Memory foam  10 inch</option>
                                        <option value="Full memory foam 12 inch" {{$detailOrder->select_mattress == 'Full memory foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full memory foam  12 inch</option>
                                        <option value="Full Foam 12 inch" {{$detailOrder->select_mattress == 'Full Foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full Foam  12 inch</option>
                                        <option value="pillow top 12 inch" {{$detailOrder->select_mattress == 'pillow top 12 inch' ? 'selected': '' }} style="color:#686B6D">pillow top 12 inch</option>
                                        <option value="pillow top 14 inch" {{$detailOrder->select_mattress == 'pillow top 14 inch' ? 'selected': '' }} style="color:#686B6D">pillow top 14 inch</option>
                                        <option value="Memory Gel 12 inch" {{$detailOrder->select_mattress == 'Memory Gel 12 inch' ? 'selected': '' }} style="color:#686B6D">Memory Gel 12 inch </option>
                                        <option value="Black 3D 12 inch" {{$detailOrder->select_mattress == 'Black 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Black 3D 12 inch</option>
                                        <option value="Grey 3D 12 inch" {{$detailOrder->select_mattress == 'Grey 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Grey 3D  12 inch</option>
                                        <option value="Silver 3D 12 inch" {{$detailOrder->select_mattress == 'Silver 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Silver 3D 12 inch</option>
                                        <option value="Cream 3D 12 inch" {{$detailOrder->select_mattress == 'Cream 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Cream 3D  12 inch</option>
                                        <option value="Suede 3D 12 inch" {{$detailOrder->select_mattress == 'Suede 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Suede 3D  12 inch</option>
                                        <option value="Mayfair 3D  12 inch" {{$detailOrder->select_mattress == 'Mayfair 3D  12 inch' ? 'selected': '' }} style="color:#686B6D">Mayfair 3D 12 inch</option>
                                        <option value="Richmond 3D  12 inch" {{$detailOrder->select_mattress == 'Richmond 3D  12 inch' ? 'selected': '' }} style="color:#686B6D">Richmond 3D 12 inch</option>
                                        <option value="1000 pocket 12 inch" {{$detailOrder->select_mattress == '1000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">1000 pocket  12 inch</option>
                                        <option value="2000 pocket  12 inch" {{$detailOrder->select_mattress == '2000 pocket  12 inch' ? 'selected': '' }} style="color:#686B6D">2000 pocket  12 inch</option>

                                    </select></br>
                                    </div>
                                   </div>
                                   {{-- Mattress form show end  --}}


                                    {{-- ottoman form show start  --}}
                                    <div class="main_ottoman_div" style="display: @if(isset($detailOrder->ottoman_design)== '')  none;  @endif">
                                        <div class="ottoman_design">
                                    <div style="text-align: center;color:red;font-weight:bold;">Ottoman Form </div>

                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="ottoman_design" style="color:#686B6D" id="designField"   >
                                                <option value="" style="color:#686B6D">select Design</option>
                                                <option value="Monaco-Diamond" {{$detailOrder->ottoman_design == 'Monaco-Diamond' ? 'selected': '' }} style="color:#686B6D">Monaco - Diamond</option>
                                                <option value="Monaco-Button" {{$detailOrder->ottoman_design == 'Monaco-Button' ? 'selected': '' }} style="color:#686B6D">Monaco - Button </option>
                                                <option value="Panel" {{$detailOrder->ottoman_design == 'Panel' ? 'selected': '' }} style="color:#686B6D">Panel</option>
                                                <option value="Plain" {{$detailOrder->ottoman_design == 'Plain' ? 'selected': '' }} style="color:#686B6D">Plain</option>
        
                                            </select></br>
                                            </div>
                                            <div class="ottoman_color">
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="ottoman_color" style="color:#686B6D" id="designField"  >
                                                <option value="" style="color:#686B6D">select Color</option>
                                                <option value="Grey" {{$detailOrder->ottoman_color == 'Grey' ? 'selected': '' }} style="color:#686B6D">Grey</option>
                                                <option value="silver" {{$detailOrder->ottoman_color == 'silver' ? 'selected': '' }} style="color:#686B6D">silver</option>
                                                <option value="black" {{$detailOrder->ottoman_color == 'black' ? 'selected': '' }} style="color:#686B6D">black</option>
                                                <option value="cream" {{$detailOrder->ottoman_color == 'cream' ? 'selected': '' }} style="color:#686B6D">cream</option>
                                                <option value="steel" {{$detailOrder->ottoman_color == 'steel' ? 'selected': '' }} style="color:#686B6D">steel</option>
                                                <option value="teal" {{$detailOrder->ottoman_color == 'teal' ? 'selected': '' }} style="color:#686B6D">teal</option>
                                                <option value="Beige" {{$detailOrder->ottoman_color == 'Beige' ? 'selected': '' }} style="color:#686B6D">Beige</option>
                                                <option value="red" {{$detailOrder->ottoman_color == 'red' ? 'selected': '' }} style="color:#686B6D">red</option>
                                                <option value="blue" {{$detailOrder->ottoman_color == 'blue' ? 'selected': '' }} style="color:#686B6D">blue</option>
                                                <option value="purple" {{$detailOrder->ottoman_color == 'purple' ? 'selected': '' }} style="color:#686B6D">purple</option>
                                                <option value="charcoal" {{$detailOrder->ottoman_color == 'charcoal' ? 'selected': '' }} style="color:#686B6D">charcoal</option>
                                                <option value="Brown" {{$detailOrder->ottoman_color == 'Brown' ? 'selected': '' }} style="color:#686B6D">Brown</option>
                                                <option value="White" {{$detailOrder->ottoman_color == 'White' ? 'selected': '' }} style="color:#686B6D">White</option>
                                                <option value="Duck Egg" {{$detailOrder->ottoman_color == 'Duck Egg' ? 'selected': '' }} style="color:#686B6D">Duck Egg</option>
                                                <option value="Maroon" {{$detailOrder->ottoman_color == 'Maroon' ? 'selected': '' }} style="color:#686B6D">Maroon</option>
                                                <option value="pink" {{$detailOrder->ottoman_color == 'pink' ? 'selected': '' }} style="color:#686B6D">pink</option>
                                                <option value="Mink" {{$detailOrder->ottoman_color == 'Mink' ? 'selected': '' }} style="color:#686B6D">Mink</option>
                                                <option value="Gold" {{$detailOrder->ottoman_color == 'Gold' ? 'selected': '' }} style="color:#686B6D">Gold</option>
                                                <option value="Mustard Gold" {{$detailOrder->ottoman_color == 'Mustard Gold' ? 'selected': '' }} style="color:#686B6D">Mustard Gold</option>
                                                <option value="Sapphire" {{$detailOrder->ottoman_color == 'Sapphire' ? 'selected': '' }} style="color:#686B6D">Sapphire</option>
                                                <option value="Aubergine" {{$detailOrder->ottoman_color == 'Aubergine' ? 'selected': '' }} style="color:#686B6D">Aubergine</option>
                                                <option value="Plum" {{$detailOrder->ottoman_color == 'Plum' ? 'selected': '' }} style="color:#686B6D">Plum</option>
                                                <option value="Slate" {{$detailOrder->ottoman_color == 'Slate' ? 'selected': '' }} style="color:#686B6D">Slate</option>
                                                <option value="sand" {{$detailOrder->ottoman_color == 'sand' ? 'selected': '' }} style="color:#686B6D">sand</option>
                                            
                                            </select></br>  
                                            </div>
                                            <div class="ottoman_fabric">
                                            
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric  <span style="color:red">*</span></label></br>
                                            <select class="form-control" name="ottoman_fabric" style="color:#686B6D" id="designField"  >
                                                <option value="" style="color:#686B6D">select Fabric</option>
                                                <option value="Plush Velvet" {{$detailOrder->ottoman_fabric == 'Plush Velvet' ? 'selected': '' }} style="color:#686B6D">Plush Velvet </option>
                                                <option value="Crush velvet" {{$detailOrder->ottoman_fabric == 'delivered' ? 'Crush velvet': '' }} style="color:#686B6D">Crush velvet </option>
                                                <option value="Naples" {{$detailOrder->ottoman_fabric == 'Naples' ? 'selected': '' }} style="color:#686B6D">Naples </option>
                                                <option value="Chenille" {{$detailOrder->ottoman_fabric == 'Chenille' ? 'selected': '' }} style="color:#686B6D">Chenille</option>
                                                <option value="Leather" {{$detailOrder->ottoman_fabric == 'Leather' ? 'selected': '' }} style="color:#686B6D">Leather</option>
                                                <option value="Suede" {{$detailOrder->ottoman_fabric == 'Suede' ? 'selected': '' }} style="color:#686B6D">Suede </option>
                                            
                                              
                                            
                                            </select></br> 
                                            </div>
                                            
                                    </div>

                                   {{-- ottoman form show end  --}}


                                    {{--second  Three Button show start  --}}

                                    {{-- <input type="hidden" name="hidden_design" class="hidden_design">
                                    <div class="second_button">
                                        <input type="button" name="gaslift" class="commando_button gaslift_button" value="Gaslift" />
                                        <input type="button" name="design " class="commando_button design_button" value="Design" />
                                        <input type="button" name="headboard" class="commando_button headboard_button" value="Headboard" />                              
                                           </div> --}}
                                           {{-- second Three Button show end  --}}
                                 
                                             {{-- gaslift form show start  --}}
                                             <div class="main_gaslift_div" style="display: @if(isset($detailOrder->gaslift_size)== '')  none;  @endif">

                                                <div class="gaslift_size">
                                                      <div style="text-align: center;color:red;font-weight:bold;">Gaslift Form </div>

                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="gaslift_size" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Size</option>
                                                        <option value="3ft" {{$detailOrder->gaslift_size == '3ft' ? 'selected': '' }} style="color:#686B6D">3ft</option>
                                                        <option value="4ft" {{$detailOrder->gaslift_size == '4ft' ? 'selected': '' }} style="color:#686B6D">4ft</option>
                                                        <option value="4ft6 inch" {{$detailOrder->gaslift_size == '4ft6 inch' ? 'selected': '' }} style="color:#686B6D">4ft6 inch</option>
                                                        <option value="5ft" {{$detailOrder->gaslift_size == '5ft' ? 'selected': '' }} style="color:#686B6D">5ft</option>
                                                        <option value="6ft"  {{$detailOrder->gaslift_size == '6ft' ? 'selected': '' }} style="color:#686B6D">6ft</option>
                                                      
                                                    </select></br>
                                                    </div>
                                                    <div class="gaslift_design">
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="gaslift_design" style="color:#686B6D" id="designField"   >
                                                        <option value="select Design" style="color:#686B6D">select Design</option>
                                                        <option value="Metal Gaslift" {{$detailOrder->gaslift_design == 'Metal Gaslift' ? 'selected': '' }} style="color:#686B6D">Metal Gaslift </option>
                                                       
                
                                                    </select></br>
                                                    </div>

                                             </div>

                                               {{-- gaslift form show end  --}}

                                                {{-- Headboard form show start  --}}

                                                <div class="main_headboard_div" style="display: @if(isset($detailOrder->headboard_size)== '')  none;  @endif">
                                                    <div class="headboard_size">
                                                        <div style="text-align: center;color:red;font-weight:bold;">Headboard Form </div>
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="headboard_size" style="color:#686B6D" id=""  >
                    
                                                            <option value="" style="color:#686B6D">select Size</option>
                                                            <option value="3ft" {{$detailOrder->headboard_size == '3ft' ? 'selected': '' }} style="color:#686B6D">3ft</option>
                                                            <option value="4ft" {{$detailOrder->headboard_size == '4ft' ? 'selected': '' }} style="color:#686B6D">4ft</option>
                                                            <option value="6ft inch" {{$detailOrder->headboard_size == '6ft inch' ? 'selected': '' }} style="color:#686B6D">6ft inch</option>
                                                            <option value="5ft" {{$detailOrder->headboard_size == '5ft' ? 'selected': '' }} style="color:#686B6D">5ft</option>
                                                            <option value="6ft" {{$detailOrder->headboard_size == '6ft' ? 'selected': '' }} style="color:#686B6D">6ft</option>
                                                          
                                                        </select></br>
                                                        </div>
                                                        <div class="headboard_design">
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="headboard_design" style="color:#686B6D" id="designField"   >
                                                            <option value="" style="color:#686B6D">select Design</option>
                                                            <option value="Split-Cube Diamond" {{$detailOrder->headboard_design == 'Split-Cube Diamond' ? 'selected': '' }} style="color:#686B6D">Split-Cube Diamond</option>
                                                            <option value="Split-Cube button" {{$detailOrder->headboard_design == 'Split-Cube button' ? 'selected': '' }} style="color:#686B6D">Split-Cube button</option>
                                                            <option value="Split-Panel" {{$detailOrder->headboard_design == 'Split-Panel' ? 'selected': '' }} style="color:#686B6D">Split-Panel</option>
                                                            <option value="Split-Plain" {{$detailOrder->headboard_design == 'Split-Plain' ? 'selected': '' }} style="color:#686B6D">Split-Plain </option>
                                                            <option value="Split-Florida Diamond" {{$detailOrder->headboard_design == 'Split-Florida Diamond' ? 'selected': '' }} style="color:#686B6D">Split-Florida Diamond </option>
                                                            <option value="Split-Florida Button" {{$detailOrder->headboard_design == 'Split-Florida Button' ? 'selected': '' }} style="color:#686B6D">Split-Florida Button</option>
                                                            <option value="Floor Standing-Florida Diamond" {{$detailOrder->headboard_design == 'Floor Standing-Florida Diamond' ? 'selected': '' }} style="color:#686B6D">Floor Standing-Florida Diamond </option>
                                                            <option value="Floor Standing-Florida Button" {{$detailOrder->headboard_design == 'Floor Standing-Florida Button' ? 'selected': '' }} style="color:#686B6D">Floor Standing-Florida Button </option>
                                                            <option value="Floor Standing Panel" {{$detailOrder->headboard_design == 'Floor Standing Panel' ? 'selected': '' }} style="color:#686B6D">Floor Standing Panel </option>
                    
                                                        </select></br>
                                                        </div>
                                                        <div class="headboard_color">
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="headboard_color" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Color</option>
                                                            <option value="Grey" {{$detailOrder->headboard_color == 'Grey' ? 'selected': '' }} style="color:#686B6D">Grey</option>
                                                            <option value="silver" {{$detailOrder->headboard_color == 'silver' ? 'selected': '' }} style="color:#686B6D">silver</option>
                                                            <option value="black" {{$detailOrder->headboard_color == 'black' ? 'selected': '' }} style="color:#686B6D">black</option>
                                                            <option value="cream" {{$detailOrder->headboard_color == 'cream' ? 'selected': '' }} style="color:#686B6D">cream</option>
                                                            <option value="steel" {{$detailOrder->headboard_color == 'steel' ? 'selected': '' }} style="color:#686B6D">steel</option>
                                                            <option value="teal" {{$detailOrder->headboard_color == 'teal' ? 'selected': '' }} style="color:#686B6D">teal</option>
                                                            <option value="Beige" {{$detailOrder->headboard_color == 'Beige' ? 'selected': '' }} style="color:#686B6D">Beige</option>
                                                            <option value="red" {{$detailOrder->headboard_color == 'red' ? 'selected': '' }} style="color:#686B6D">red</option>
                                                            <option value="blue" {{$detailOrder->headboard_color == 'blue' ? 'selected': '' }} style="color:#686B6D">blue</option>
                                                            <option value="purple" {{$detailOrder->headboard_color == 'purple' ? 'selected': '' }} style="color:#686B6D">purple</option>
                                                            <option value="charcoal" {{$detailOrder->headboard_color == 'charcoal' ? 'selected': '' }} style="color:#686B6D">charcoal</option>
                                                            <option value="Brown" {{$detailOrder->headboard_color == 'Brown' ? 'selected': '' }} style="color:#686B6D">Brown</option>
                                                            <option value="White" {{$detailOrder->headboard_color == 'White' ? 'selected': '' }} style="color:#686B6D">White</option>
                                                            <option value="Duck Egg" {{$detailOrder->headboard_color == 'Duck Egg' ? 'selected': '' }} style="color:#686B6D">Duck Egg</option>
                                                            <option value="Maroon" {{$detailOrder->headboard_color == 'Maroon' ? 'selected': '' }} style="color:#686B6D">Maroon</option>
                                                            <option value="pink" {{$detailOrder->headboard_color == 'pink' ? 'selected': '' }} style="color:#686B6D">pink</option>
                                                            <option value="Mink" {{$detailOrder->headboard_color == 'Mink' ? 'selected': '' }} style="color:#686B6D">Mink</option>
                                                            <option value="Gold" {{$detailOrder->headboard_color == 'Gold' ? 'selected': '' }} style="color:#686B6D">Gold</option>
                                                            <option value="Mustard Gold" {{$detailOrder->headboard_color == 'Mustard Gold' ? 'selected': '' }} style="color:#686B6D">Mustard Gold</option>
                                                            <option value="Sapphire" {{$detailOrder->headboard_color == 'Sapphire' ? 'selected': '' }} style="color:#686B6D">Sapphire</option>
                                                            <option value="Aubergine" {{$detailOrder->headboard_color == 'Aubergine' ? 'selected': '' }} style="color:#686B6D">Aubergine</option>
                                                            <option value="Plum" {{$detailOrder->headboard_color == 'Plum' ? 'selected': '' }} style="color:#686B6D">Plum</option>
                                                            <option value="Slate" {{$detailOrder->headboard_color == 'Slate' ? 'selected': '' }} style="color:#686B6D">Slate</option>
                                                            <option value="sand" {{$detailOrder->headboard_color == 'sand' ? 'selected': '' }} style="color:#686B6D">sand</option>
                                                        
                                                        </select></br>  
                                                        </div>
                                                        <div class="headboard_febric">
                                                        
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric  <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="headboard_fabric" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Fabric</option>
                                                            <option value="Plush Velvet" {{$detailOrder->headboard_fabric == 'Plush Velvet' ? 'selected': '' }} style="color:#686B6D">Plush Velvet </option>
                                                            <option value="Crush velvet" {{$detailOrder->headboard_fabric == 'Crush velvet' ? 'selected': '' }} style="color:#686B6D">Crush velvet </option>
                                                            <option value="Naples" {{$detailOrder->headboard_fabric == 'Naples' ? 'selected': '' }} style="color:#686B6D">Naples </option>
                                                            <option value="Chenille" {{$detailOrder->headboard_fabric == 'Chenille' ? 'selected': '' }} style="color:#686B6D">Chenille</option>
                                                            <option value="Leather" {{$detailOrder->headboard_fabric == 'Leather' ? 'selected': '' }} style="color:#686B6D">Leather</option>
                                                            <option value="Suede" {{$detailOrder->headboard_fabric == 'Suede' ? 'selected': '' }} style="color:#686B6D">Suede </option>
                                                        
                                                        </select></br> 
                    
                                                        </div>
                                                </div>

                                               {{-- Headboard form show end  --}}

                                               {{--  Three Button show start  --}}

                                               {{-- <input type="hidden" class="hidden_divan" name="hidden_divan">
                                    <div class="third_button">
                                        <input type="button" name="divan" class="commando_button divan_button" value="Divan" />
                                        <input type="button" name="without_diamond " class="commando_button without_diamond_button" value="without diamond" />
                                        <input type="button" name="with_diamond" class="commando_button with_diamond_button" value="with diamond" />                              
                                           </div> --}}
                                           {{--  Three Button show end  --}}
                                         

                                               {{-- Without Diamond form show start  --}}

                                               <div class="main_without_diamond_div" style="display: @if(isset($detailOrder->without_diamond_size)== '')  none;  @endif">

                                                <div class="without_diamond_size">
                                                    <div style="text-align: center;color:red;font-weight:bold;">Without Diamond Form </div>
                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_size" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Size</option>
                                                        <option value="3ft" {{$detailOrder->without_diamond_size == '3ft' ? 'selected': '' }} style="color:#686B6D">3ft</option>
                                                        <option value="4ft" {{$detailOrder->without_diamond_size == '4ft' ? 'selected': '' }} style="color:#686B6D">4ft</option>
                                                        <option value="4ft6 inch" {{$detailOrder->without_diamond_size == '4ft6 inch' ? 'selected': '' }} style="color:#686B6D">4ft6 inch</option>
                                                        <option value="5ft" {{$detailOrder->without_diamond_size == '5ft' ? 'selected': '' }} style="color:#686B6D">5ft</option>
                                                        <option value="6ft" {{$detailOrder->without_diamond_size == '6ft' ? 'selected': '' }} style="color:#686B6D">6ft</option>
                                                      
                                                    </select></br>
                                                    </div>
                                                    <div class="without_diamond_color">
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_color" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Color</option>
                                                        <option value="Grey" {{$detailOrder->without_diamond_color == 'Grey' ? 'selected': '' }} style="color:#686B6D">Grey</option>
                                                        <option value="silver" {{$detailOrder->without_diamond_color == 'silver' ? 'selected': '' }} style="color:#686B6D">silver</option>
                                                        <option value="black" {{$detailOrder->without_diamond_color == 'black' ? 'selected': '' }} style="color:#686B6D">black</option>
                                                        <option value="cream" {{$detailOrder->without_diamond_color == 'cream' ? 'selected': '' }} style="color:#686B6D">cream</option>
                                                        <option value="steel" {{$detailOrder->without_diamond_color == 'steel' ? 'selected': '' }} style="color:#686B6D">steel</option>
                                                        <option value="teal" {{$detailOrder->without_diamond_color == 'teal' ? 'selected': '' }} style="color:#686B6D">teal</option>
                                                        <option value="Beige" {{$detailOrder->without_diamond_color == 'Beige' ? 'selected': '' }} style="color:#686B6D">Beige</option>
                                                        <option value="red" {{$detailOrder->without_diamond_color == 'red' ? 'selected': '' }} style="color:#686B6D">red</option>
                                                        <option value="blue" {{$detailOrder->without_diamond_color == 'blue' ? 'selected': '' }} style="color:#686B6D">blue</option>
                                                        <option value="purple" {{$detailOrder->without_diamond_color == 'purple' ? 'selected': '' }} style="color:#686B6D">purple</option>
                                                        <option value="charcoal" {{$detailOrder->without_diamond_color == 'charcoal' ? 'selected': '' }} style="color:#686B6D">charcoal</option>
                                                        <option value="Brown" {{$detailOrder->without_diamond_color == 'Brown' ? 'selected': '' }} style="color:#686B6D">Brown</option>
                                                        <option value="White"{{$detailOrder->without_diamond_color == 'White' ? 'selected': '' }} style="color:#686B6D">White</option>
                                                        <option value="Duck Egg" {{$detailOrder->without_diamond_color == 'Duck Egg' ? 'selected': '' }} style="color:#686B6D">Duck Egg</option>
                                                        <option value="Maroon" {{$detailOrder->without_diamond_color == 'Maroon' ? 'selected': '' }} style="color:#686B6D">Maroon</option>
                                                        <option value="pink" {{$detailOrder->without_diamond_color == 'pink' ? 'selected': '' }} style="color:#686B6D">pink</option>
                                                        <option value="Mink" {{$detailOrder->without_diamond_color == 'Mink' ? 'selected': '' }} style="color:#686B6D">Mink</option>
                                                        <option value="Gold" {{$detailOrder->without_diamond_color == 'Gold' ? 'selected': '' }} style="color:#686B6D">Gold</option>
                                                        <option value="Mustard Gold" {{$detailOrder->without_diamond_color == 'Mustard Gold' ? 'selected': '' }} style="color:#686B6D">Mustard Gold</option>
                                                        <option value="Sapphire" {{$detailOrder->without_diamond_color == 'Sapphire' ? 'selected': '' }} style="color:#686B6D">Sapphire</option>
                                                        <option value="Aubergine" {{$detailOrder->without_diamond_color == 'Aubergine' ? 'selected': '' }} style="color:#686B6D">Aubergine</option>
                                                        <option value="Plum" {{$detailOrder->without_diamond_color == 'Plum' ? 'selected': '' }} style="color:#686B6D">Plum</option>
                                                        <option value="Slate" {{$detailOrder->without_diamond_color == 'Slate' ? 'selected': '' }} style="color:#686B6D">Slate</option>
                                                        <option value="sand" {{$detailOrder->without_diamond_color == 'sand' ? 'selected': '' }} style="color:#686B6D">sand</option>
                                                    
                                                    </select></br>  
                                                    </div>
                                                    <div class="without_diamond_fabric">
                                                    
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_fabric" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Fabric</option>
                                                        <option value="Plush Velvet" {{$detailOrder->without_diamond_fabric == 'Plush Velvet' ? 'selected': '' }} style="color:#686B6D">Plush Velvet </option>
                                                        <option value="Crush velvet" {{$detailOrder->without_diamond_fabric == 'Crush velvet' ? 'selected': '' }} style="color:#686B6D">Crush velvet </option>
                                                        <option value="Naples" {{$detailOrder->without_diamond_fabric == 'Naples' ? 'selected': '' }} style="color:#686B6D">Naples </option>
                                                        <option value="Chenille" {{$detailOrder->without_diamond_fabric == 'Chenille' ? 'selected': '' }} style="color:#686B6D">Chenille</option>
                                                        <option value="Leather" {{$detailOrder->without_diamond_fabric == 'Leather' ? 'selected': '' }} style="color:#686B6D">Leather</option>
                                                        <option value="Suede" {{$detailOrder->without_diamond_fabric == 'Suede' ? 'selected': '' }} style="color:#686B6D">Suede </option>
                                                    
                                                      
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="without_diamond_storage">
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Storage  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_storage" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Storage</option>
                                                        <option value="Metal Gaslift" {{$detailOrder->without_diamond_storage == 'Metal Gaslift' ? 'selected': '' }} style="color:#686B6D">Metal Gaslift </option>
                                                        <option value="Board Gaslift" {{$detailOrder->without_diamond_storage == 'Board Gaslift' ? 'selected': '' }} style="color:#686B6D">Board Gaslift </option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="without_diamond_base">
                                                  
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Base  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_base" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Base </option>
                                                        <option value="Wooden Slates" {{$detailOrder->without_diamond_base == 'Wooden Slates' ? 'selected': '' }} style="color:#686B6D">Wooden Slates</option>
                                                        <option value="Solid base" {{$detailOrder->without_diamond_base == 'Solid base' ? 'selected': '' }} style="color:#686B6D">Solid base</option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="without_diamond_mattrees">
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress   <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="without_diamond_mattress" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Mattress  </option>
                                                        <option value="No" style="color:#686B6D">No</option>
                                                        <option value="simple - Semi ortho 8 inch" {{$detailOrder->without_diamond_mattress == 'simple - Semi ortho 8 inch' ? 'selected': '' }} style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                        <option value="Orthopadic sprung 10 inch" {{$detailOrder->without_diamond_mattress == 'Orthopadic sprung 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                        <option value="Orthopadic Memory foam 10 inch" {{$detailOrder->without_diamond_mattress == 'Orthopadic Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                        <option value="Memory foam 10 inch" {{$detailOrder->without_diamond_mattress == 'Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Memory foam 10 inch</option>
                                                        <option value="Full memory foam 12 inch" {{$detailOrder->without_diamond_mattress == 'Full memory foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full memory foam 12 inch</option>
                                                        <option value="Full Foam 12 inch" {{$detailOrder->without_diamond_mattress == 'Full Foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full Foam 12 inch</option>
                                                        <option value="Black 3D 12 inch" {{$detailOrder->without_diamond_mattress == 'Black 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Black 3D 12 inch</option>
                                                        <option value="Grey 3D 12 inch" {{$detailOrder->without_diamond_mattress == 'Grey 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Grey 3D  12 inch</option>
                                                        <option value="Silver 3D 12 inch" {{$detailOrder->without_diamond_mattress == 'Silver 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Silver 3D 12 inch</option>
                                                        <option value="Cream 3D 12 inch" {{$detailOrder->without_diamond_mattress == 'Cream 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Cream 3D 12 inch</option>
                                                        <option value="Suede 3D 12 inch" {{$detailOrder->without_diamond_mattress == 'Suede 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Suede 3D 12 inch</option>
                                                        <option value="Mayfair 3D 12 inch" {{$detailOrder->without_diamond_mattress == 'Mayfair 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                        <option value="Richmond 3D 12 inch" {{$detailOrder->without_diamond_mattress == 'Richmond 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Richmond 3D 12 inch</option>
                                                        <option value="1000 pocket 12 inch" {{$detailOrder->without_diamond_mattress == '1000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">1000 pocket 12 inch</option>
                                                        <option value="2000 pocket 12 inch" {{$detailOrder->without_diamond_mattress == '2000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">2000 pocket 12 inch</option>
                                                    
                                                    </select></br> 
                                                    </div>

                                               </div>

                                               {{-- Without Diamond form show end  --}}
                                               {{-- With Diamond form show start  --}}

                                               <div class="main_with_diamond_div" style="display: @if(isset($detailOrder->with_diamond_size)== '')  none;  @endif">


                                                <div class="with_diamond_size">
                                                    <div style="text-align: center;color:red;font-weight:bold;">With Diamond Form </div>
                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_sizes" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Size</option>
                                                        <option value="3ft" {{$detailOrder->with_diamond_size == '3ft' ? 'selected': '' }} style="color:#686B6D">3ft</option>
                                                        <option value="4ft" {{$detailOrder->with_diamond_size == '4ft' ? 'selected': '' }} style="color:#686B6D">4ft</option>
                                                        <option value="4ft6 inch" {{$detailOrder->with_diamond_size == '4ft6 inch' ? 'selected': '' }} style="color:#686B6D">4ft6 inch</option>
                                                        <option value="5ft" {{$detailOrder->with_diamond_size == '5ft' ? 'selected': '' }} style="color:#686B6D">5ft</option>
                                                        <option value="6ft" {{$detailOrder->with_diamond_size == '6ft' ? 'selected': '' }} style="color:#686B6D">6ft</option>
                                                      
                                                    </select></br>
                                                    </div>
                                                    <div class="with_diamond_design">
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_design" style="color:#686B6D" id="designField"   >
                                                        <option value="" style="color:#686B6D">select Design</option>
                                                        <option value="Split-Cube Diamond" {{$detailOrder->with_diamond_design == 'Split-Cube Diamond' ? 'selected': '' }} style="color:#686B6D">Split-Cube Diamond</option>
                                                        <option value="Split-Cube button" {{$detailOrder->with_diamond_design == 'Split-Cube button' ? 'selected': '' }} style="color:#686B6D">Split-Cube button</option>
                                                        <option value="Split-Panel" {{$detailOrder->with_diamond_design == 'Split-Panel' ? 'selected': '' }} style="color:#686B6D">Split-Panel</option>
                                                        <option value="Split-Plain" {{$detailOrder->with_diamond_design == 'Split-Plain' ? 'selected': '' }} style="color:#686B6D">Split-Plain </option>
                                                        <option value="Split-Florida Diamond" {{$detailOrder->with_diamond_design == 'Split-Florida Diamond' ? 'selected': '' }} style="color:#686B6D">Split-Florida Diamond </option>
                                                        <option value="Split-Florida Button" {{$detailOrder->with_diamond_design == 'Split-Florida Button' ? 'selected': '' }} style="color:#686B6D">Split-Florida Button</option>
                                                        <option value="Floor Standing-Florida Diamond" {{$detailOrder->with_diamond_design == 'Floor Standing-Florida Diamond' ? 'selected': '' }} style="color:#686B6D">Floor Standing-Florida Diamond </option>
                                                        <option value="Floor Standing-Florida Button" {{$detailOrder->with_diamond_design == 'Floor Standing-Florida Button' ? 'selected': '' }} style="color:#686B6D">Floor Standing-Florida Button </option>
                                                        <option value="Floor Standing Panel" {{$detailOrder->with_diamond_design == 'Floor Standing Panel' ? 'selected': '' }} style="color:#686B6D">Floor Standing Panel </option>
                
                                                    </select></br>
                                                    </div>
                                                    <div class="with_diamond_color">
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_color" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Color</option>
                                                        <option value="Grey" {{$detailOrder->with_diamond_color == 'Grey' ? 'selected': '' }} style="color:#686B6D">Grey</option>
                                                        <option value="silver" {{$detailOrder->with_diamond_color == 'silver' ? 'selected': '' }} style="color:#686B6D">silver</option>
                                                        <option value="black" {{$detailOrder->with_diamond_color == 'black' ? 'selected': '' }} style="color:#686B6D">black</option>
                                                        <option value="cream" {{$detailOrder->with_diamond_color == 'cream' ? 'selected': '' }} style="color:#686B6D">cream</option>
                                                        <option value="steel" {{$detailOrder->with_diamond_color == 'steel' ? 'selected': '' }} style="color:#686B6D">steel</option>
                                                        <option value="teal" {{$detailOrder->with_diamond_color == 'teal' ? 'selected': '' }} style="color:#686B6D">teal</option>
                                                        <option value="Beige" {{$detailOrder->with_diamond_color == 'Beige' ? 'selected': '' }} style="color:#686B6D">Beige</option>
                                                        <option value="red" {{$detailOrder->with_diamond_color == 'red' ? 'selected': '' }} style="color:#686B6D">red</option>
                                                        <option value="blue" {{$detailOrder->with_diamond_color == 'blue' ? 'selected': '' }} style="color:#686B6D">blue</option>
                                                        <option value="purple" {{$detailOrder->with_diamond_color == 'purple' ? 'selected': '' }} style="color:#686B6D">purple</option>
                                                        <option value="charcoal" {{$detailOrder->with_diamond_color == 'charcoal' ? 'selected': '' }} style="color:#686B6D">charcoal</option>
                                                        <option value="Brown" {{$detailOrder->with_diamond_color == 'Brown' ? 'selected': '' }} style="color:#686B6D">Brown</option>
                                                        <option value="White" {{$detailOrder->with_diamond_color == 'White' ? 'selected': '' }} style="color:#686B6D">White</option>
                                                        <option value="Duck Egg" {{$detailOrder->with_diamond_color == 'Duck Egg' ? 'selected': '' }} style="color:#686B6D">Duck Egg</option>
                                                        <option value="Maroon" {{$detailOrder->with_diamond_color == 'Maroon' ? 'selected': '' }} style="color:#686B6D">Maroon</option>
                                                        <option value="pink" {{$detailOrder->with_diamond_color == 'pink' ? 'selected': '' }} style="color:#686B6D">pink</option>
                                                        <option value="Mink" {{$detailOrder->with_diamond_color == 'Mink' ? 'selected': '' }} style="color:#686B6D">Mink</option>
                                                        <option value="Gold" {{$detailOrder->with_diamond_color == 'Gold' ? 'selected': '' }} style="color:#686B6D">Gold</option>
                                                        <option value="Mustard Gold" {{$detailOrder->with_diamond_color == 'Mustard' ? 'selected': '' }} style="color:#686B6D">Mustard Gold</option>
                                                        <option value="Sapphire" {{$detailOrder->with_diamond_color == 'Sapphire' ? 'selected': '' }} style="color:#686B6D">Sapphire</option>
                                                        <option value="Aubergine" {{$detailOrder->with_diamond_color == 'Aubergine' ? 'selected': '' }} style="color:#686B6D">Aubergine</option>
                                                        <option value="Plum" {{$detailOrder->with_diamond_color == 'Plum' ? 'selected': '' }} style="color:#686B6D">Plum</option>
                                                        <option value="Slate" {{$detailOrder->with_diamond_color == 'Slate' ? 'selected': '' }} style="color:#686B6D">Slate</option>
                                                        <option value="sand" {{$detailOrder->with_diamond_color == 'sand' ? 'selected': '' }} style="color:#686B6D">sand</option>
                                                    
                                                    </select></br>  
                                                    </div>
                                                    <div class="with_diamond_fabric">
                
                                                    
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_fabric" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Fabric</option>
                                                        <option value="Plush Velvet" {{$detailOrder->with_diamond_fabric == 'Plush Velvet' ? 'selected': '' }} style="color:#686B6D">Plush Velvet </option>
                                                        <option value="Crush velvet" {{$detailOrder->with_diamond_fabric == 'Crush velvet' ? 'selected': '' }} style="color:#686B6D">Crush velvet </option>
                                                        <option value="Naples" {{$detailOrder->with_diamond_fabric == 'Naples' ? 'selected': '' }} style="color:#686B6D">Naples </option>
                                                        <option value="Chenille" {{$detailOrder->with_diamond_fabric == 'Chenille' ? 'selected': '' }} style="color:#686B6D">Chenille</option>
                                                        <option value="Leather" {{$detailOrder->with_diamond_fabric == 'Leather' ? 'selected': '' }} style="color:#686B6D">Leather</option>
                                                        <option value="Suede" {{$detailOrder->with_diamond_fabric == 'Suede' ? 'selected': '' }} style="color:#686B6D">Suede </option>
                                                    
                                                      
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="with_diamond_diamond_and_button">
                
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Diamond&button  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_diamond_button" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Diamond&button</option>
                                                        <option value="Diamond" {{$detailOrder->with_diamond_button_diamond == 'Diamond' ? 'selected': '' }} style="color:#686B6D">Diamond</option>
                                                        <option value="Button" {{$detailOrder->with_diamond_button_diamond == 'Button' ? 'selected': '' }} style="color:#686B6D">Button</option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="with_diamond_storage">
                
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Storage  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_storage" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Storage</option>
                                                        <option value="Metal Gaslift" {{$detailOrder->with_diamond_storage == 'Metal Gaslift' ? 'selected': '' }} style="color:#686B6D">Metal Gaslift </option>
                                                        <option value="Board Gaslift" {{$detailOrder->with_diamond_storage == 'Board Gaslift' ? 'selected': '' }} style="color:#686B6D">Board Gaslift </option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="with_diamond_base">
                
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Base  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_base" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Base </option>
                                                        <option value="Wooden Slates" {{$detailOrder->with_diamond_base == 'Wooden Slates' ? 'selected': '' }} style="color:#686B6D">Wooden Slates</option>
                                                        <option value="Solid base" {{$detailOrder->with_diamond_base == 'Solid base' ? 'selected': '' }} style="color:#686B6D">Solid base</option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="with_diamond_mattrees>
                
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress   <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="with_diamond_mattress" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Mattress  </option>
                                                        <option value="No" {{$detailOrder->with_diamond_mattress == 'No' ? 'selected': '' }} style="color:#686B6D">No</option>
                                                        <option value="simple - Semi ortho 8 inch" {{$detailOrder->with_diamond_mattress == 'simple - Semi ortho 8 inch' ? 'selected': '' }} style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                        <option value="Orthopadic sprung 10 inch" {{$detailOrder->with_diamond_mattress == 'Orthopadic sprung 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                        <option value="Orthopadic Memory foam 10 inch" {{$detailOrder->with_diamond_mattress == 'Orthopadic Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                        <option value="Memory foam  10 inch" {{$detailOrder->with_diamond_mattress == 'Memory foam  10 inch' ? 'selected': '' }} style="color:#686B6D">Memory foam 10 inch</option>
                                                        <option value="Full memory foam 12 inch" {{$detailOrder->with_diamond_mattress == 'Full memory foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full memory foam 12 inch</option>
                                                        <option value="Full Foam 12 inch" {{$detailOrder->with_diamond_mattress == 'Full Foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full Foam 12 inch</option>
                                                        <option value="Black 3D 12 inch" {{$detailOrder->with_diamond_mattress == 'Black 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Black 3D 12 inch</option>
                                                        <option value="Grey 3D 12 inch" {{$detailOrder->with_diamond_mattress == 'Grey 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Grey 3D  12 inch</option>
                                                        <option value="Silver 3D 12 inch" {{$detailOrder->with_diamond_mattress == 'Silver 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Silver 3D 12 inch</option>
                                                        <option value="Cream 3D 12 inch" {{$detailOrder->with_diamond_mattress == 'Cream 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Cream 3D 12 inch</option>
                                                        <option value="Suede 3D 12 inch" {{$detailOrder->with_diamond_mattress == 'Suede 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Suede 3D 12 inch</option>
                                                        <option value="Mayfair 3D 12 inch" {{$detailOrder->with_diamond_mattress == 'Mayfair 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                        <option value="Richmond 3D 12 inch" {{$detailOrder->with_diamond_mattress == 'Richmond 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Richmond 3D 12 inch</option>
                                                        <option value="1000 pocket 12 inch" {{$detailOrder->with_diamond_mattress == '1000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">1000 pocket 12 inch</option>
                                                        <option value="2000 pocket 12 inch" {{$detailOrder->with_diamond_mattress == '2000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">2000 pocket 12 inch</option>
                                                    
                                                    </select></br> 
                                                    </div>

                                               </div>

                                               {{-- With Diamond form show end  --}}

                                                  {{--  Three Button show start  --}}

                                    {{-- <div class="fourth_button" >
                                        <input type="button" name="ottoman_Divan" class="commando_button Ottoman_Divan_button" value="Ottoman Divan" />
                                        <input type="button" name="divan " class="commando_button divan_button_form" value="Divan" />
                                        <input type="button" name="Monaco_divan" class="commando_button Monaco_divan_button" value="Monaco Divan" />                              
                                           </div> --}}
                                           {{--  Three Button show end  --}}

                                             {{-- Diven  form show end  --}}
                                             <div class="main_diven_div" style="display: @if(isset($detailOrder->divan_size)== '')  none;  @endif">


                                                <div class="divan_size">
                                                    <div style="text-align: center;color:red;font-weight:bold;">Diven Form </div>
                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_size" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Size</option>
                                                        <option value="2ft6 inch" {{$detailOrder->divan_size == '2ft6 inch' ? 'selected': '' }} style="color:#686B6D">2ft6 inch</option>
                                                        <option value="3ft" {{$detailOrder->divan_size == '3ft' ? 'selected': '' }} style="color:#686B6D">3ft</option>
                                                        <option value="4ft" {{$detailOrder->divan_size == '4ft' ? 'selected': '' }} style="color:#686B6D">4ft</option>
                                                        <option value="4ft6 inch" {{$detailOrder->divan_size == '4ft6 inch' ? 'selected': '' }} style="color:#686B6D">4ft6 inch</option>
                                                        <option value="5ft" {{$detailOrder->divan_size == '5ft' ? 'selected': '' }} style="color:#686B6D">5ft</option>
                                                        <option value="6ft" {{$detailOrder->divan_size == '6ft' ? 'selected': '' }} style="color:#686B6D">6ft</option>
                                                      
                                                    </select></br>
                                                    </div>
                                                    <div class="divan_size">
                
                                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Headboard  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_headboard" style="color:#686B6D" id=""  >
                
                                                        <option value="" style="color:#686B6D">select Headboard </option>
                                                        <option value="No" {{$detailOrder->divan_headboard == 'No' ? 'selected': '' }} style="color:#686B6D">No </option>
                                                        <option value="Cube Diamond" {{$detailOrder->divan_headboard == 'Cube Diamond' ? 'selected': '' }} style="color:#686B6D">Cube Diamond </option>
                                                        <option value="Cube Button" {{$detailOrder->divan_headboard == 'Cube Button' ? 'selected': '' }} style="color:#686B6D">Cube Button </option>
                                                        <option value="plain" {{$detailOrder->divan_headboard == 'plain' ? 'selected': '' }} style="color:#686B6D">plain </option>
                                                        <option value="panel" {{$detailOrder->divan_headboard == 'panel' ? 'selected': '' }} style="color:#686B6D">panel </option>
                                                        <option value="horizontal line" {{$detailOrder->divan_headboard == 'horizontal line' ? 'selected': '' }} style="color:#686B6D">horizontal line</option>
                                                        <option value="Florida Diamond" {{$detailOrder->divan_headboard == 'Florida Diamond' ? 'selected': '' }} style="color:#686B6D">Florida Diamond </option>
                                                        <option value="Florida Button" {{$detailOrder->divan_headboard == 'Florida Button' ? 'selected': '' }} style="color:#686B6D">Florida Button  </option>
                                                        <option value="Hilton Diamond" {{$detailOrder->divan_headboard == 'Hilton Diamond' ? 'selected': '' }} style="color:#686B6D">Hilton Diamond </option>
                                                        <option value="Hilton Button" {{$detailOrder->divan_headboard == 'Hilton Button' ? 'selected': '' }} style="color:#686B6D">Hilton Button </option>
                                                      
                                                    </select></br>
                                                    </div>
                                                    <div class="divan_color">
                                                 
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_color" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Color</option>
                                                        <option value="Grey" {{$detailOrder->divan_color == 'Grey' ? 'selected': '' }} style="color:#686B6D">Grey</option>
                                                        <option value="silver" {{$detailOrder->divan_color == 'silver' ? 'selected': '' }} style="color:#686B6D">silver</option>
                                                        <option value="black" {{$detailOrder->divan_color == 'black' ? 'selected': '' }} style="color:#686B6D">black</option>
                                                        <option value="cream" {{$detailOrder->divan_color == 'cream' ? 'selected': '' }} style="color:#686B6D">cream</option>
                                                        <option value="steel" {{$detailOrder->divan_color == 'steel' ? 'selected': '' }} style="color:#686B6D">steel</option>
                                                        <option value="teal" {{$detailOrder->divan_color == 'teal' ? 'selected': '' }} style="color:#686B6D">teal</option>
                                                        <option value="Beige" {{$detailOrder->divan_color == 'Beige' ? 'selected': '' }} style="color:#686B6D">Beige</option>
                                                        <option value="red" {{$detailOrder->divan_color == 'red' ? 'selected': '' }} style="color:#686B6D">red</option>
                                                        <option value="blue" {{$detailOrder->divan_color == 'blue' ? 'selected': '' }} style="color:#686B6D">blue</option>
                                                        <option value="purple" {{$detailOrder->divan_color == 'purple' ? 'selected': '' }} style="color:#686B6D">purple</option>
                                                        <option value="charcoal" {{$detailOrder->divan_color == 'charcoal' ? 'selected': '' }} style="color:#686B6D">charcoal</option>
                                                        <option value="Brown" {{$detailOrder->divan_color == 'Brown' ? 'selected': '' }} style="color:#686B6D">Brown</option>
                                                        <option value="White" {{$detailOrder->divan_color == 'White' ? 'selected': '' }} style="color:#686B6D">White</option>
                                                        <option value="Duck Egg" {{$detailOrder->divan_color == 'Duck Egg' ? 'selected': '' }} style="color:#686B6D">Duck Egg</option>
                                                        <option value="Maroon" {{$detailOrder->divan_color == 'Maroon' ? 'selected': '' }} style="color:#686B6D">Maroon</option>
                                                        <option value="pink" {{$detailOrder->divan_color == 'pink' ? 'selected': '' }} style="color:#686B6D">pink</option>
                                                        <option value="Mink" {{$detailOrder->divan_color == 'Mink' ? 'selected': '' }} style="color:#686B6D">Mink</option>
                                                        <option value="Gold" {{$detailOrder->divan_color == 'Gold' ? 'selected': '' }} style="color:#686B6D">Gold</option>
                                                        <option value="Mustard Gold" {{$detailOrder->divan_color == 'Mustard Gold' ? 'selected': '' }} style="color:#686B6D">Mustard Gold</option>
                                                        <option value="Sapphire" {{$detailOrder->divan_color == 'Sapphire' ? 'selected': '' }} style="color:#686B6D">Sapphire</option>
                                                        <option value="Aubergine" {{$detailOrder->divan_color == 'Aubergine' ? 'selected': '' }} style="color:#686B6D">Aubergine</option>
                                                        <option value="Plum" {{$detailOrder->divan_color == 'Plum' ? 'selected': '' }} style="color:#686B6D">Plum</option>
                                                        <option value="Slate" {{$detailOrder->divan_color == 'Slate' ? 'selected': '' }} style="color:#686B6D">Slate</option>
                                                        <option value="sand" {{$detailOrder->divan_color == 'sand' ? 'selected': '' }} style="color:#686B6D">sand</option>
                                                    
                                                    </select></br>  
                                                    </div>
                                                    <div class="divan_fabric">
                                                    
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_fabric" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Fabric</option>
                                                        <option value="Plush Velvet" {{$detailOrder->divan_fabric == 'Plush Velvet' ? 'selected': '' }} style="color:#686B6D">Plush Velvet </option>
                                                        <option value="Crush velvet" {{$detailOrder->divan_fabric == 'Crush velvet' ? 'selected': '' }} style="color:#686B6D">Crush velvet </option>
                                                        <option value="Naples" {{$detailOrder->divan_fabric == 'Naples' ? 'selected': '' }} style="color:#686B6D">Naples </option>
                                                        <option value="Chenille" {{$detailOrder->divan_fabric == 'Chenille' ? 'selected': '' }} style="color:#686B6D">Chenille</option>
                                                        <option value="Leather" {{$detailOrder->divan_fabric == 'Leather' ? 'selected': '' }} style="color:#686B6D">Leather</option>
                                                        <option value="Suede" {{$detailOrder->divan_fabric == 'Suede' ? 'selected': '' }} style="color:#686B6D">Suede </option>
                                                    
                                                      
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="divan_storage">
                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Storage  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_storage" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Storage</option>
                                                        <option value="No Drawers" {{$detailOrder->divan_storage == 'No Drawers' ? 'selected': '' }} style="color:#686B6D">No Drawers </option>
                                                        <option value="1 Drawer-Jumbo Drawer" {{$detailOrder->divan_storage == '1 Drawer-Jumbo Drawer' ? 'selected': '' }} style="color:#686B6D">1 Drawer-Jumbo Drawer </option>
                                                        <option value="1 Drawer-Side" {{$detailOrder->divan_storage == '1 Drawer-Side' ? 'selected': '' }} style="color:#686B6D">1 Drawer-Side </option>
                                                        <option value="2 Drawers-Right side" {{$detailOrder->divan_storage == '2 Drawers-Right side' ? 'selected': '' }} style="color:#686B6D">2 Drawers-Right side </option>
                                                        <option value="2 Drawers-Left side" {{$detailOrder->divan_storage == '2 Drawers-Left side' ? 'selected': '' }} style="color:#686B6D">2 Drawers-Left side </option>
                                                        <option value="2 Drawers-1 each side Top piece" {{$detailOrder->divan_storage == '2 Drawers-1 each side Top piece' ? 'selected': '' }} style="color:#686B6D">2 Drawers-1 each side Top piece </option>
                                                        <option value="2 Drawers-1 each side Bottom piece" {{$detailOrder->divan_storage == '2 Drawers-1 each side Bottom piece' ? 'selected': '' }} style="color:#686B6D">2 Drawers-1 each side Bottom piece </option>
                                                        <option value="3 Drawers-Side" {{$detailOrder->divan_storage == '3 Drawers-Side' ? 'selected': '' }} style="color:#686B6D">3 Drawers-Side </option>
                                                        <option value="3 Drawers-1 each side Top piece and Jumbo"  {{$detailOrder->divan_storage == '3 Drawers-1 each side Top piece and Jumbo' ? 'selected': '' }} style="color:#686B6D">3 Drawers-1 each side Top piece and Jumbo</option>
                                                        <option value="4 Drawers" {{$detailOrder->divan_storage == '4 Drawers' ? 'selected': '' }} style="color:#686B6D">4 Drawers </option>
                                                    
                                                    </select></br> 
                                                    </div>
                                                    <div class="divan_mattress">
                
                                                  
                
                                                
                                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress  <span style="color:red">*</span></label></br>
                                                    <select class="form-control" name="diven_mattress" style="color:#686B6D" id="designField"  >
                                                        <option value="" style="color:#686B6D">select Mattress  </option>
                                                        <option value="No" {{$detailOrder->divan_mattress == 'No' ? 'selected': '' }} style="color:#686B6D">No</option>
                                                        <option value="simple - Semi ortho 8 inch" {{$detailOrder->divan_mattress == 'simple - Semi ortho 8 inch' ? 'selected': '' }} style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                        <option value="Orthopadic sprung 10 inch" {{$detailOrder->divan_mattress == 'Orthopadic sprung 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                        <option value="Orthopadic Memory foam 10 inch" {{$detailOrder->divan_mattress == 'Orthopadic Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                        <option value="Memory foam 10 inch" {{$detailOrder->divan_mattress == 'Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Memory foam 10 inch</option>
                                                        <option value="Full memory foam 12 inch" {{$detailOrder->divan_mattress == 'Full memory foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full memory foam 12 inch</option>
                                                        <option value="Full Foam 12 inch" {{$detailOrder->divan_mattress == 'Full Foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full Foam 12 inch</option>
                                                        <option value="Black 3D 12 inch" {{$detailOrder->divan_mattress == 'Black 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Black 3D 12 inch</option>
                                                        <option value="Grey 3D 12 inch" {{$detailOrder->divan_mattress == 'Grey 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Grey 3D  12 inch</option>
                                                        <option value="Silver 3D 12 inch" {{$detailOrder->divan_mattress == 'Silver 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Silver 3D 12 inch</option>
                                                        <option value="Cream 3D 12 inch" {{$detailOrder->divan_mattress == 'Cream 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Cream 3D 12 inch</option>
                                                        <option value="Suede 3D 12 inch" {{$detailOrder->divan_mattress == 'Suede 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Suede 3D 12 inch</option>
                                                        <option value="Mayfair 3D 12 inch" {{$detailOrder->divan_mattress == 'Mayfair 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                        <option value="Richmond 3D 12 inch" {{$detailOrder->divan_mattress == 'Richmond 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Richmond 3D 12 inch</option>
                                                        <option value="1000 pocket 12 inch"  {{$detailOrder->divan_mattress == '1000 pocket 12 inch' ? 'selected': '' }}style="color:#686B6D">1000 pocket 12 inch</option>
                                                        <option value="2000 pocket 12 inch" {{$detailOrder->divan_mattress == '2000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">2000 pocket 12 inch</option>
                                                    
                                                    </select></br> 
                                                    </div>



                                             </div>

                                               {{-- Diven form show end  --}}


                                                {{-- Monaco Diven form show start  --}}

                                                <div class="main_monaco_diven_div" style="display: @if(isset($detailOrder->monaco_divan_size)== '')  none;  @endif">
                                                

                                                    <div class="diven_divan_size">
                                                        <div style="text-align: center;color:red;font-weight:bold;">Monaco Diven Form </div>
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_size" style="color:#686B6D" id=""  >
                    
                                                            <option value="" style="color:#686B6D">select Size</option>
                                                            <option value="3ft" {{$detailOrder->monaco_divan_size == '3ft' ? 'selected': '' }} style="color:#686B6D">3ft</option>
                                                            <option value="4ft" {{$detailOrder->monaco_divan_size == '4ft' ? 'selected': '' }} style="color:#686B6D">4ft</option>
                                                            <option value="4ft6 inch" {{$detailOrder->monaco_divan_size == '4ft6 inch' ? 'selected': '' }} style="color:#686B6D">4ft6 inch</option>
                                                            <option value="5ft" {{$detailOrder->monaco_divan_size == '5ft' ? 'selected': '' }} style="color:#686B6D">5ft</option>
                                                            <option value="6ft" {{$detailOrder->monaco_divan_size == '6ft' ? 'selected': '' }} style="color:#686B6D">6ft</option>
                                                          
                                                        </select></br>
                                                        </div>
                                                        <div class="diven_divan_headboard">
                    
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Headboard  <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_headboard" style="color:#686B6D" id=""  >
                    
                                                            <option value="" style="color:#686B6D">select Headboard </option>
                                                            <option value="Diamond" {{$detailOrder->monaco_divan_headboard == 'Diamond' ? 'selected': '' }} style="color:#686B6D">Diamond </option>
                                                            <option value="Button" {{$detailOrder->monaco_divan_headboard == 'Button' ? 'selected': '' }} style="color:#686B6D">Button </option>
                                                        </select></br>
                                                        </div>
                                                        <div class="diven_divan_color">
                                                     
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_color" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Color</option>
                                                            <option value="Grey" {{$detailOrder->monaco_divan_color == 'Grey' ? 'selected': '' }} style="color:#686B6D">Grey</option>
                                                            <option value="silver" {{$detailOrder->monaco_divan_color == 'silver' ? 'selected': '' }} style="color:#686B6D">silver</option>
                                                            <option value="black" {{$detailOrder->monaco_divan_color == 'black' ? 'selected': '' }} style="color:#686B6D">black</option>
                                                            <option value="cream" {{$detailOrder->monaco_divan_color == 'cream' ? 'selected': '' }} style="color:#686B6D">cream</option>
                                                            <option value="steel" {{$detailOrder->monaco_divan_color == 'steel' ? 'selected': '' }} style="color:#686B6D">steel</option>
                                                            <option value="teal" {{$detailOrder->monaco_divan_color == 'teal' ? 'selected': '' }} style="color:#686B6D">teal</option>
                                                            <option value="Beige" {{$detailOrder->monaco_divan_color == 'Beige' ? 'selected': '' }} style="color:#686B6D">Beige</option>
                                                            <option value="red" {{$detailOrder->monaco_divan_color == 'red' ? 'selected': '' }} style="color:#686B6D">red</option>
                                                            <option value="blue" {{$detailOrder->monaco_divan_color == 'blue' ? 'selected': '' }} style="color:#686B6D">blue</option>
                                                            <option value="purple" {{$detailOrder->monaco_divan_color == 'purple' ? 'selected': '' }} style="color:#686B6D">purple</option>
                                                            <option value="charcoal" {{$detailOrder->monaco_divan_color == 'charcoal' ? 'selected': '' }} style="color:#686B6D">charcoal</option>
                                                            <option value="Brown" {{$detailOrder->monaco_divan_color == 'Brown' ? 'selected': '' }} style="color:#686B6D">Brown</option>
                                                            <option value="White" {{$detailOrder->monaco_divan_color == 'White' ? 'selected': '' }} style="color:#686B6D">White</option>
                                                            <option value="Duck Egg" {{$detailOrder->monaco_divan_color == 'Duck Egg' ? 'selected': '' }} style="color:#686B6D">Duck Egg</option>
                                                            <option value="Maroon" {{$detailOrder->monaco_divan_color == 'Maroon' ? 'selected': '' }} style="color:#686B6D">Maroon</option>
                                                            <option value="pink" {{$detailOrder->monaco_divan_color == 'pink' ? 'selected': '' }} style="color:#686B6D">pink</option>
                                                            <option value="Mink" {{$detailOrder->monaco_divan_color == 'Mink' ? 'selected': '' }} style="color:#686B6D">Mink</option>
                                                            <option value="Gold" {{$detailOrder->monaco_divan_color == 'Gold' ? 'selected': '' }} style="color:#686B6D">Gold</option>
                                                            <option value="Mustard Gold" {{$detailOrder->monaco_divan_color == 'Mustard Gold' ? 'selected': '' }} style="color:#686B6D">Mustard Gold</option>
                                                            <option value="Sapphire" {{$detailOrder->monaco_divan_color == 'Sapphire' ? 'selected': '' }} style="color:#686B6D">Sapphire</option>
                                                            <option value="Aubergine" {{$detailOrder->monaco_divan_color == 'Aubergine' ? 'selected': '' }} style="color:#686B6D">Aubergine</option>
                                                            <option value="Plum" {{$detailOrder->monaco_divan_color == 'Plum' ? 'selected': '' }} style="color:#686B6D">Plum</option>
                                                            <option value="Slate" {{$detailOrder->monaco_divan_color == 'Slate' ? 'selected': '' }} style="color:#686B6D">Slate</option>
                                                            <option value="sand" {{$detailOrder->monaco_divan_color == 'sand' ? 'selected': '' }} style="color:#686B6D">sand</option>
                                                        
                                                        </select></br>  
                                                        </div>
                                                        <div class="diven_divan_febric">
                                                        
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric  <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_fabric" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Fabric</option>
                                                            <option value="Plush Velvet" {{$detailOrder->monaco_divan_fabric == 'Plush Velvet' ? 'selected': '' }} style="color:#686B6D">Plush Velvet </option>
                                                            <option value="Crush velvet" {{$detailOrder->monaco_divan_fabric == 'Crush velvet' ? 'selected': '' }} style="color:#686B6D">Crush velvet</option>
                                                            <option value="Naples" {{$detailOrder->monaco_divan_fabric == 'Naples' ? 'selected': '' }} style="color:#686B6D">Naples  </option>
                                                            <option value="Chenille" {{$detailOrder->monaco_divan_fabric == 'Chenille' ? 'selected': '' }} style="color:#686B6D">Chenille </option>
                                                            <option value="Leather" {{$detailOrder->monaco_divan_fabric == 'Leather' ? 'selected': '' }} style="color:#686B6D">Leather </option>
                                                            <option value="Suede" {{$detailOrder->monaco_divan_fabric == 'Suede' ? 'selected': '' }} style="color:#686B6D">Suede </option>
                                                        
                                                          
                                                        
                                                        </select></br> 
                                                        </div>
                                                        <div class="diven_divan_storage">
                    
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Storage  <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_storage" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Storage</option>
                                                            <option value="No Drawers" {{$detailOrder->monaco_divan_storage == 'No Drawers' ? 'selected': '' }} style="color:#686B6D">No Drawers  </option>
                                                            <option value="1 Drawer-Jumbo Drawer" {{$detailOrder->monaco_divan_storage == '1 Drawer-Jumbo Drawer' ? 'selected': '' }} style="color:#686B6D">1 Drawer-Jumbo Drawer</option>
                                                            <option value="1 Drawer-Side" {{$detailOrder->monaco_divan_storage == '1 Drawer-Side' ? 'selected': '' }} style="color:#686B6D">1 Drawer-Side  </option>
                                                            <option value="2 Drawers-Right side" {{$detailOrder->monaco_divan_storage == '2 Drawers-Right side' ? 'selected': '' }} style="color:#686B6D">2 Drawers-Right side </option>
                                                            <option value="2 Drawers-Left side" {{$detailOrder->monaco_divan_storage == '2 Drawers-Left side' ? 'selected': '' }} style="color:#686B6D">2 Drawers-Left side </option>
                                                            <option value="2 Drawers-1 each side Top piece" {{$detailOrder->monaco_divan_storage == '2 Drawers-1 each side Top piece' ? 'selected': '' }} style="color:#686B6D">2 Drawers-1 each side Top piece </option>
                                                            <option value="2 Drawers-1 each side Bottom piece" {{$detailOrder->monaco_divan_storage == '2 Drawers-1 each side Bottom piece' ? 'selected': '' }} style="color:#686B6D">2 Drawers-1 each side Bottom piece </option>
                                                            <option value="3 Drawers-Side" {{$detailOrder->monaco_divan_storage == '3 Drawers-Side' ? 'selected': '' }} style="color:#686B6D">3 Drawers-Side</option>
                                                            <option value="3 Drawers-1 each side Top piece and Jumbo" {{$detailOrder->monaco_divan_storage == '3 Drawers-1 each side Top piece and Jumbo' ? 'selected': '' }} style="color:#686B6D">3 Drawers-1 each side Top piece and Jumbo </option>
                                                        
                                                            <option value="4 Drawers" {{$detailOrder->monaco_divan_storage == '4 Drawers' ? 'selected': '' }} style="color:#686B6D">4 Drawers </option>
                                                          
                                                        
                                                        </select></br> 
                                                        </div>
                                                        <div class="diven_divan_mattress">
                    
                                
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress  <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="monaco_diven_mattress" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Mattress  </option>
                                                            <option value="No" {{$detailOrder->monaco_divan_mattress == 'No' ? 'selected': '' }} style="color:#686B6D">No</option>
                                                            <option value="simple - Semi ortho 8 inch"  {{$detailOrder->monaco_divan_mattress == 'simple - Semi ortho 8 inch' ? 'selected': '' }} style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                            <option value="Orthopadic sprung 10 inch" {{$detailOrder->monaco_divan_mattress == 'Orthopadic sprung 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                            <option value="Orthopadic Memory foam 10 inch" {{$detailOrder->monaco_divan_mattress == 'Orthopadic Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                            <option value="Memory foam 10 inch" {{$detailOrder->monaco_divan_mattress == 'Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Memory foam 10 inch</option>
                                                            <option value="Full memory foam 12 inch" {{$detailOrder->monaco_divan_mattress == 'Full memory foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full memory foam 12 inch</option>
                                                            <option value="Full Foam 12 inch" {{$detailOrder->monaco_divan_mattress == 'Full Foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full Foam 12 inch</option>
                                                            <option value="Black 3D 12 inch" {{$detailOrder->monaco_divan_mattress == 'Black 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Black 3D 12 inch</option>
                                                            <option value="Grey 3D 12 inch" {{$detailOrder->monaco_divan_mattress == 'Grey 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Grey 3D  12 inch</option>
                                                            <option value="Silver 3D 12 inch" {{$detailOrder->monaco_divan_mattress == 'Silver 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Silver 3D 12 inch</option>
                                                            <option value="Cream 3D 12 inch" {{$detailOrder->monaco_divan_mattress == 'Cream 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Cream 3D 12 inch</option>
                                                            <option value="Suede 3D 12 inch" {{$detailOrder->monaco_divan_mattress == 'Suede 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Suede 3D 12 inch</option>
                                                            <option value="Mayfair 3D 12 inch" {{$detailOrder->monaco_divan_mattress == 'Mayfair 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                            <option value="Richmond 3D 12 inch" {{$detailOrder->monaco_divan_mattress == 'Richmond 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Richmond 3D 12 inch</option>
                                                            <option value="1000 pocket 12 inch" {{$detailOrder->monaco_divan_mattress == '1000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">1000 pocket 12 inch</option>
                                                            <option value="2000 pocket 12 inch" {{$detailOrder->monaco_divan_mattress == '2000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">2000 pocket 12 inch</option>
                                                        
                                                        </select></br> 
                                                        </div>

                                                </div>

                                                 {{--Monaco Diven form show end  --}}

                                                  {{--Ottoman Diven form show end  --}}
                                                              
                                                

                                                  <div class="main_ottoman_diven_div" style="display: @if(isset($detailOrder->ottoman_divan_size)== '')  none;  @endif"  >
                                                   
                                                    <div class="ottoman_diven_size">
                                                        <div style="text-align: center;color:red;font-weight:bold;">Ottoman Diven Form </div>
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Size <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_size" style="color:#686B6D" id="
                                                        
                                                        " >
                    
                                                            <option value="" style="color:#686B6D">select Size</option>
                                                            <option value="3ft" {{$detailOrder->ottoman_divan_size == '3ft' ? 'selected': '' }} style="color:#686B6D">3ft</option>
                                                            <option value="4ft" {{$detailOrder->ottoman_divan_size == '4ft' ? 'selected': '' }} style="color:#686B6D">4ft</option>
                                                            <option value="4ft6 inch" {{$detailOrder->ottoman_divan_size == '4ft6 inch' ? 'selected': '' }} style="color:#686B6D">4ft6 inch</option>
                                                            <option value="5ft" {{$detailOrder->ottoman_divan_size == '5ft' ? 'selected': '' }} style="color:#686B6D">5ft</option>
                                                            <option value="6ft" {{$detailOrder->ottoman_divan_size == '6ft' ? 'selected': '' }} style="color:#686B6D">6ft</option>
                                                          
                                                        </select></br>
                                                        </div>
                                                        <div class="ottoman_diven_headboard">
                    
                                                        <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Headboard  <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_headboard" style="color:#686B6D" id=""  >
                    
                                                            <option value="" style="color:#686B6D">select Headboard </option>
                                                            <option value="Florida Diamond" {{$detailOrder->ottoman_divan_headboad == 'Florida Diamond' ? 'selected': '' }} style="color:#686B6D">Florida Diamond  </option>
                                                            <option value="Florida Button" {{$detailOrder->ottoman_divan_headboad == 'Florida Button' ? 'selected': '' }} style="color:#686B6D">Florida Button </option>
                                                            <option value="plain" {{$detailOrder->ottoman_divan_headboad == 'plain' ? 'selected': '' }} style="color:#686B6D">plain </option>
                                                            <option value="panel" {{$detailOrder->ottoman_divan_headboad == 'panel' ? 'selected': '' }} style="color:#686B6D">panel  </option>
                                                            <option value="Cube Diamond" {{$detailOrder->ottoman_divan_headboad == 'Cube Diamond' ? 'selected': '' }} style="color:#686B6D">Cube Diamond  </option>
                                                            <option value="Cube Button" {{$detailOrder->ottoman_divan_headboad == 'Cube Button' ? 'selected': '' }} style="color:#686B6D">Cube Button </option>
                                                         
                                                        </select></br>
                                                        </div>
                                                        <div class="ottoman_diven_color">
                    
                                                     
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_color" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Color</option>
                                                            <option value="Grey" {{$detailOrder->ottoman_divan_color == 'Grey' ? 'selected': '' }} style="color:#686B6D">Grey</option>
                                                            <option value="silver" {{$detailOrder->ottoman_divan_color == 'silver' ? 'selected': '' }} style="color:#686B6D">silver</option>
                                                            <option value="black" {{$detailOrder->ottoman_divan_color == 'black' ? 'selected': '' }} style="color:#686B6D">black</option>
                                                            <option value="cream" {{$detailOrder->ottoman_divan_color == 'cream' ? 'selected': '' }} style="color:#686B6D">cream</option>
                                                            <option value="steel" {{$detailOrder->ottoman_divan_color == 'steel' ? 'selected': '' }} style="color:#686B6D">steel</option>
                                                            <option value="teal" {{$detailOrder->ottoman_divan_color == 'teal' ? 'selected': '' }} style="color:#686B6D">teal</option>
                                                            <option value="Beige" {{$detailOrder->ottoman_divan_color == 'Beige' ? 'selected': '' }} style="color:#686B6D">Beige</option>
                                                            <option value="red" {{$detailOrder->ottoman_divan_color == 'red' ? 'selected': '' }} style="color:#686B6D">red</option>
                                                            <option value="blue" {{$detailOrder->ottoman_divan_color == 'blue' ? 'selected': '' }} style="color:#686B6D">blue</option>
                                                            <option value="purple" {{$detailOrder->ottoman_divan_color == 'purple' ? 'selected': '' }} style="color:#686B6D">purple</option>
                                                            <option value="charcoal" {{$detailOrder->ottoman_divan_color == 'charcoal' ? 'selected': '' }} style="color:#686B6D">charcoal</option>
                                                            <option value="Brown" {{$detailOrder->ottoman_divan_color == 'Brown' ? 'selected': '' }} style="color:#686B6D">Brown</option>
                                                            <option value="White" {{$detailOrder->ottoman_divan_color == 'White' ? 'selected': '' }} style="color:#686B6D">White</option>
                                                            <option value="Duck Egg" {{$detailOrder->ottoman_divan_color == 'Duck Egg' ? 'selected': '' }} style="color:#686B6D">Duck Egg</option>
                                                            <option value="Maroon" {{$detailOrder->ottoman_divan_color == 'Maroon' ? 'selected': '' }} style="color:#686B6D">Maroon</option>
                                                            <option value="pink" {{$detailOrder->ottoman_divan_color == 'pink' ? 'selected': '' }} style="color:#686B6D">pink</option>
                                                            <option value="Mink" {{$detailOrder->ottoman_divan_color == 'Mink' ? 'selected': '' }} style="color:#686B6D">Mink</option>
                                                            <option value="Gold" {{$detailOrder->ottoman_divan_color == 'Gold' ? 'selected': '' }} style="color:#686B6D">Gold</option>
                                                            <option value="Mustard Gold" {{$detailOrder->ottoman_divan_color == 'Mustard Gold' ? 'selected': '' }} style="color:#686B6D">Mustard Gold</option>
                                                            <option value="Sapphire" {{$detailOrder->ottoman_divan_color == 'Sapphire' ? 'selected': '' }} style="color:#686B6D">Sapphire</option>
                                                            <option value="Aubergine" {{$detailOrder->ottoman_divan_color == 'Aubergine' ? 'selected': '' }} style="color:#686B6D">Aubergine</option>
                                                            <option value="Plum" {{$detailOrder->ottoman_divan_color == 'Plum' ? 'selected': '' }} style="color:#686B6D">Plum</option>
                                                            <option value="Slate" {{$detailOrder->ottoman_divan_color == 'Slate' ? 'selected': '' }} style="color:#686B6D">Slate</option>
                                                            <option value="sand" {{$detailOrder->ottoman_divan_color == 'sand' ? 'selected': '' }} style="color:#686B6D">sand</option>
                                                        
                                                        </select></br>  
                                                        </div>
                                                        <div class="ottoman_diven_febric">
                    
                                                        
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric  <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_fabric" style="color:#686B6D" id="designField"  >
                                                            <option value="" style="color:#686B6D">select Fabric</option>
                                                            <option value="Plush Velvet"{{$detailOrder->ottoman_divan_fabric == 'Plush Velvet' ? 'selected': '' }} style="color:#686B6D">Plush Velvet </option>
                                                            <option value="Crush velvet" {{$detailOrder->ottoman_divan_fabric == 'Crush velvet' ? 'selected': '' }} style="color:#686B6D">Crush velvet</option>
                                                            <option value="Naples" {{$detailOrder->ottoman_divan_fabric == 'Naples' ? 'selected': '' }} style="color:#686B6D">Naples  </option>
                                                            <option value="Chenille" {{$detailOrder->ottoman_divan_fabric == 'Chenille' ? 'selected': '' }} style="color:#686B6D">Chenille </option>
                                                            <option value="Leather" {{$detailOrder->ottoman_divan_fabric == 'Leather' ? 'selected': '' }} style="color:#686B6D">Leather </option>
                                                            <option value="Suede" {{$detailOrder->ottoman_divan_fabric == 'Suede' ? 'selected': '' }} style="color:#686B6D">Suede </option>
                                                        
                                                          
                                                        
                                                        </select></br> 
                                                        </div>
                                                        <div class="ottoman_diven_mattress">
                    
                    
                                
                                                        <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Mattress  <span style="color:red">*</span></label></br>
                                                        <select class="form-control" name="ottoman_diven_mattress" style="color:#686B6D" id="designField" >
                                                            <option value="" style="color:#686B6D">select Mattress  </option>
                                                            <option value="No" {{$detailOrder->ottoman_divan_mattress == 'No' ? 'selected': '' }}  style="color:#686B6D">No</option>
                                                            <option value="simple - Semi ortho 8 inch" {{$detailOrder->ottoman_divan_mattress == 'simple - Semi ortho 8 inch' ? 'selected': '' }} style="color:#686B6D">simple-Semi ortho 8 inch</option>
                                                            <option value="Orthopadic sprung 10 inch" {{$detailOrder->ottoman_divan_mattress == 'Orthopadic sprung 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic sprung  10 inch</option>
                                                            <option value="Orthopadic Memory foam 10 inch" {{$detailOrder->ottoman_divan_mattress == 'Orthopadic Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Orthopadic Memory foam  10 inch</option>
                                                            <option value="Memory foam 10 inch" {{$detailOrder->ottoman_divan_mattress == 'Memory foam 10 inch' ? 'selected': '' }} style="color:#686B6D">Memory foam 10 inch</option>
                                                            <option value="Full memory foam 12 inch" {{$detailOrder->ottoman_divan_mattress == 'Full memory foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full memory foam 12 inch</option>
                                                            <option value="Full Foam 12 inch" {{$detailOrder->ottoman_divan_mattress == 'Full Foam 12 inch' ? 'selected': '' }} style="color:#686B6D">Full Foam 12 inch</option>
                                                            <option value="Black 3D 12 inch" {{$detailOrder->ottoman_divan_mattress == 'Black 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Black 3D 12 inch</option>
                                                            <option value="Grey 3D 12 inch" {{$detailOrder->ottoman_divan_mattress == 'Grey 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Grey 3D  12 inch</option>
                                                            <option value="Silver 3D 12 inch" {{$detailOrder->ottoman_divan_mattress == 'Silver 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Silver 3D 12 inch</option>
                                                            <option value="Cream 3D 12 inch" {{$detailOrder->ottoman_divan_mattress == 'Cream 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Cream 3D 12 inch</option>
                                                            <option value="Suede 3D 12 inch" {{$detailOrder->ottoman_divan_mattress == 'Suede 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Suede 3D 12 inch</option>
                                                            <option value="Mayfair 3D 12 inch" {{$detailOrder->ottoman_divan_mattress == 'Mayfair 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Mayfair 3D 12 inch</option>
                                                            <option value="Richmond 3D 12 inch" {{$detailOrder->ottoman_divan_mattress == 'Richmond 3D 12 inch' ? 'selected': '' }} style="color:#686B6D">Richmond 3D 12 inch</option>
                                                            <option value="1000 pocket 12 inch" {{$detailOrder->ottoman_divan_mattress == '1000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">1000 pocket 12 inch</option>
                                                            <option value="2000 pocket 12 inch" {{$detailOrder->ottoman_divan_mattress == '2000 pocket 12 inch' ? 'selected': '' }} style="color:#686B6D">2000 pocket 12 inch</option>
                                                        
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
                                        
                                   <div class="row" style="display: none;">
                                        <div class="col-12 quantity" style="margin-top: 10px;">
                                            <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Quantity</label>
                                            <input type="number" name="qty" placeholder="" id="qtyField" disabled />
                                        </div> 
                                    </div>
                                  </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>


                                <div class="form-card">
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Price <span style="color:red">*</span></label></br>
                                    <input type="number" name="price" id="orderprice" placeholder="Price" value="{{ $item->price }}" />
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Note  ( optional )</label></br>
                                    {{-- <input type="text" name="note" placeholder="Note" /> --}}
                                    <textarea rows="3" id="ordernote" name="note" placeholder="Note" cols="10">{{ $item->note }}</textarea>
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Quantity ( optional )</label></br>

                                    <input type="number" name="qty" id="orderqty" placeholder="qty" value="{{ $item->qty }}" />
                                    
{{-- Delivery status --}}
<style>
    .disaplayInput{
    display: none;
    }
    
    </style>
    {{-- Delivery status --}}





                          

                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Delivery status ( optional )</label></br>

                                    <div id="textSelectdiv">
                                        @if($item->delivery_status == 'complete' || $item->delivery_status == 'inprocess' || $item->delivery_status == 'cancel' )
                                        <select   id="orderdelivery" name="delivery_status"  class="select form-control" style="display: inline;color:#686B6D">
                                            <option value="" style="color:#686B6D">Delivery status</option> </br>
                                            <option value="complete"   {{$item->delivery_status == 'complete' ? 'selected': '' }} style="color:#686B6D">Complete</option>
                                            <option value="inprocess"   {{$item->delivery_status == 'inprocess' ? 'selected': '' }} style="color:#686B6D">Inprocess</option>
                                            <option value="cancel"   {{$item->delivery_status == 'cancel' ? 'selected': '' }} style="color:#686B6D">Canceled</option>
                                            <option value="customOption">Enter your custom option here</option>
                                        </select>
                                    </div>
                                    <div id="inputDiv" class="form-outline disaplayInput">
                                        <input type="text" id="form12" name="delivery_status" class="form-control" style="display: none;" onblur="hideInput()" disabled />
                                        <label id="inputLabel" class="form-label disaplayInput" for="form12">Select Option</label>
                                      </div>
                                    </br>
                                        @else

                            <div id="textSelectdiv_hide" style="display: none">
                                <select  id="orderdelivery" name="delivery_status_select"  class="select form-control" style="display: inline;color:#686B6D">
                                <option value="" style="color:#686B6D">Delivery status</option>
                                <option value="complete" style="color:#686B6D">Complete</option>
                                <option value="inprocess" style="color:#686B6D">Inprocess</option>
                                <option value="cancel" style="color:#686B6D">Canceled</option>
                                <option onclick="delivery_status_option_hide()" >Enter your custom option here</option>
                                </select>

                            </div>
                                        
                             <div id="inputDiv_hide" class="form-outline ">
                                <input type="text" id="form12" name="delivery_status"   class="form-control " value="{{ $item->delivery_status }}"  />

                                <input type="hidden" name="" id="hidden_vali_1" value="{{ $item->delivery_status }}" >
                                <label onclick="delivery_status_input_hide()" id="inputLabel_1" class="form-label " for="form12" style="cursor: pointer"><b>Select Option</b></label>
                                </div>

                                @endif
                            {{-- <label class="form-label select-label">Example label</label> --}}
                           

                                      
                                      {{-- <div id="inputDiv" class="form-outline disaplayInput">
                                        <input type="text" id="form12" class="form-control" style="display: none;" onblur="hideInput()" disabled />
                                        <label id="inputLabel" class="form-label disaplayInput" for="form12" style="cursor: pointer"><b>Select Option</b></label>
                                      </div> --}}

                                      <br>






                                    {{-- <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Delivery status   ( optional )</label></br> --}}

                                    {{-- <select class="form-control" id="orderpayment" name="delivery_status" style="color:#686B6D">
                                        <option value="" style="color:#686B6D">Delivery status</option> --}}

                                     
{{-- 
                        <option value="complete"   {{$item->delivery_status == 'complete' ? 'selected': '' }} style="color:#686B6D">Complete</option>
                        <option value="inprocess"   {{$item->delivery_status == 'inprocess' ? 'selected': '' }} style="color:#686B6D">Inprocess</option>
                        <option value="cancel"   {{$item->delivery_status == 'cancel' ? 'selected': '' }} style="color:#686B6D">Canceled</option>
                        <option value="any_other"   {{$item->delivery_status == 'any_other' ? 'selected': '' }} style="color:#686B6D">Any Other</option> --}}

                                    {{-- </select> --}}
















                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Delivery Date <span style="color:red">*</span></label>
                                    <input type="date" name="date_status" id="ordershipment" value="{{ $item->delivery_date }}" />
                               
                                  
                                    

                                    {{-- <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">payment status*</label></br>


                                    <select class="form-control" id="orderpayment" name="payment_status" style="color:#686B6D">
                                        <option value="default"  style="color:#686B6D">payment status</option>
                                        <option value="paid" {{$item->payment_status == 'paid' ? 'selected': '' }} style="color:#686B6D">Paid</option>
                                        <option value="unpaid" {{$item->payment_status == 'unpaid' ? 'selected': '' }} style="color:#686B6D">Unpaid</option>
                                        <option value="partially_paid" {{$item->payment_status == 'partially_paid' ? 'selected': '' }} style="color:#686B6D">Partially Paid</option>
                                    </select>
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">shipment status*</label>
                                    <select class="form-control" id="ordershipment" name="shipment_status" style="color:#686B6D;margin-top:20px">
                                        <option value="default" style="color:#686B6D">shipment status</option>
                                        <option value="in_que" {{$item->shipment_status == 'in_que' ? 'selected': '' }} style="color:#686B6D">In Que</option>
                                        <option value="shipped" {{$item->shipment_status == 'shipped' ? 'selected': '' }} style="color:#686B6D">Shipped</option>
                                        <option value="delivered" {{$item->shipment_status == 'delivered' ? 'selected': '' }} style="color:#686B6D">Delivered</option>
                                    </select>  --}}






                                    <!-- <div class="row">
                                        <div class="col-6">
                                            <label class="pay">size</label>
                                            <input type="text" name="cardno" placeholder=""/>
                                        </div>
                                        <div class="col-6">
                                            <label class="pay">HeadBoard</label>
                                            <input type="password" name="cvcpwd" placeholder=""/>
                                        </div>
                                    </div> -->

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                {{-- <input type="button" name="next" class="next action-button" value="Next Step" /> --}}
                                <input id="confirms" type="submit" name="make_payment" class="next9 action-button" value="Confirm" />

                                
                                
                            </fieldset>
         
                            {{-- <fieldset>
                                <div class="form-card">
                                    <input type="text" name="first_name" placeholder="First Name" />
                                    <input type="text" name="last_name" placeholder="Last Name" />
                                    <input type="email" name="email" placeholder="Email Id" />
                                    <input type="text" name="phone" placeholder="Phone Number" />
                                    <input type="text" name="post_code" placeholder="Post Code" />
                                  
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input id="confirms" type="submit" name="make_payment" class="next action-button" value="Confirm" />

                            </fieldset> --}}


                          
                            <fieldset>
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
                                            <h5>You Have Successfully Updated Order</h5>
                                         
                                        </div>
                            

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


<script>

function delivery_status_input_hide()
{
   
    $('#textSelectdiv_hide').show();
    $('#inputDiv_hide').css('display', 'none');

    var hide_values = $('#hidden_vali_1').val();
    $('#form12').val(hide_values);
}


function delivery_status_option_hide()
{
   
    $('#textSelectdiv_hide').css('display', 'none');
    $('#inputDiv_hide').show(); 
}


</script>



{{-- Delivery status --}}




<script>
    const mySelect = document.getElementById("orderdelivery");
    const inputOther = document.getElementById("form12");
    const labelInput = document.getElementById("inputLabel");
    const divInput = document.getElementById("inputDiv");
    const selectDiv = document.getElementById("textSelectdiv");

    mySelect.addEventListener('change', function(e) {
      const selectedValue = mySelect.value;
      if (selectedValue === 'customOption') {
        inputOther.style.display = 'inline';
        inputOther.removeAttribute('disabled');
        labelInput.classList.remove('disaplayInput');
        divInput.classList.remove('disaplayInput');
        selectDiv.style.display = 'none';
        inputOther.focus();
        mySelect.disabled = true;
      } else {
        inputOther.style.display = 'none';
      }
    });

    function hideInput() {
      if (inputOther.value === "") {
        inputOther.style.display = 'none';
        inputOther.setAttribute('disabled', '');
        selectDiv.style.display = 'inline';
        mySelect.removeAttribute('disabled');
        labelInput.classList.add('disaplayInput');
        divInput.classList.add('disaplayInput');
      }
    }
  </script>


{{-- Delivery status --}}

<script>   



    $(document).ready(function() {

        $('.changecountry').on('change', function() { 
       
        $('.cover_products').slideDown();

        // $("#divid").hide();
      
    });
    $('.changeproduct').on('change', function() { 
        // $(".show_button").show();
        $('.show_button').slideDown();

        // $("#divid").hide();
      
    });
    $(".mattress_button").click(function() {
        $('.main_mattrees_div').slideToggle();
        
        $(this).css('background-color','#6c6e6b');
        $(this).css('border','none');
        // $(".main_mattrees_div").show();
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


        $(".next9").click(function() {
          


            var orderpriceField = document.getElementById("orderprice");
            var ordernoteField = document.getElementById("ordernote");
            var orderqtyField = document.getElementById("orderqty");
            var orderpaymentField = document.getElementById("orderpayment");
            var ordershipmentField = document.getElementById("ordershipment");


            if (orderpriceField.value === "") {
        // alert("Please select an option.");
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
    //   if (ordernoteField.value === "") {
    //     // alert("Please select an option.");
    //            Swal.fire(
    //             'Errors',
    //             'Please select the Note',
    //             'error'
    //             ).then(function() {
    //                 $("html, body").animate({ scrollTop: "-=100px" }, "slow");
    //                  });
    //             ordernoteField.classList.add("country_error");
    //             ordernoteField.focus();
    //      return false;
    //   }else{
    //     $("#ordernote").removeClass("country_error");
    //   }
    //   if (orderqtyField.value === "") {
    //     // alert("Please select an option.");
    //            Swal.fire(
    //             'Errors',
    //             'Please select the Quantity',
    //             'error'
    //             ).then(function() {
    //                 $("html, body").animate({ scrollTop: "-=100px" }, "slow");
    //                  });
    //             orderqtyField.classList.add("country_error");
    //             orderqtyField.focus();
    //      return false;
    //   }else{
    //     $("#orderqty").removeClass("country_error");
    //   }
    //   if (orderpaymentField.value === "") {
    //     // alert("Please select an option.");
    //            Swal.fire(
    //             'Errors',
    //             'Please select the Payment Status',
    //             'error'
    //             ).then(function() {
    //                 $("html, body").animate({ scrollTop: "-=100px" }, "slow");
    //                  });
    //             orderpaymentField.classList.add("country_error");
    //             orderpaymentField.focus();
    //      return false;
    //   }else{
    //     $("#orderpayment").removeClass("country_error");
    //   }
      if (ordershipmentField.value === "") {
        // alert("Please select an option.");
               Swal.fire(
                'Errors',
                'Please select the Delivery Date ',
                'error'
                ).then(function() {
                    $("html, body").animate({ scrollTop: "-=100px" }, "slow");
                     });
                ordershipmentField.classList.add("country_error");
                ordershipmentField.focus();
         return false;
      }else{
        $("#ordershipment").removeClass("country_error");
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
       // alert(val);
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
                    value: 'default',
                    text: 'Select a product',
                    selected: true
                }));

                $.each(data, function(key, value) {
                    ele.append("<option value='" + value.id + "' style='color:#686B6D'>" + value.name + "</option>");
                });
            },
        });
    }

    function enableVariations(val) {
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
</script>
<script>
    function submit_universal_form(id){
        event.preventDefault();
        var formElem = $("#"+id);
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
            url: "{{ url('order_edit')}}" ,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status == 200) {
                  //  alert(response.current_id);
               
                 
                    Swal.fire(
                        'Good job!',
                        'Order Edit Successfuly',
                        'success'
   
                        ).then(function() {
                            if (response.redirectUrl) {
                               window.location.href = response.redirectUrl;
                             }
                     });

                     
                              
                }
            }
        });
    }
</script>


@endsection
