
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
</style>
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-8 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Order Taking Form</strong></h2>
                <p style="color:#f9466d">Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" method="post" action="{{route('order_store')}}">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Order Details</strong></li>
                                <li id="personal"><strong>Customer Info</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>

                            <fieldset>
                                <div class="form-card" id="original-div">
                                    <button onclick="cloneDiv(event)" style="float:right;height:20px"><i class="fa fa-plus-circle" aria-hidden="true" style="font-size: 20px;color:#686B6D;display:none" title="add more products"></i></button>
                                    <button onclick="cloneDivMinus(event)" style="float:right;height:20px;margin-right:10px;display:none" id="minu-button"><i class="fa fa-minus-circle" aria-hidden="true" style="font-size: 20px;color:#686B6D" title="remove this product section"></i></button>
                                    <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Country*</label></br>
                                    <select class="form-control" name="country" style="color:#686B6D" id="topField" onchange="enableFields(this.value)" required>
                                        <option value="default" style="color:#686B6D">select country</option>
                                        @foreach($allCountries as $country)
                                        <option value="{{$country}}" style="color:#686B6D">{{$country}}</option>
                                        @endforeach
                                    </select></br>
                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Product*</label></br>
                                    <select class="form-control" name="product" style="color:#686B6D" id="productField" onchange="enableVariations(this.value)" disabled required>
                                        <option value="default" style="color:#686B6D">select product</option>
                                    </select></br>
                                    <!-- <label class="pay" style="margin-top: 12px;">Design</label>
                                    <input type="text" name="holdername" placeholder=""/> -->
                                   
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design*</label></br>
                                            <select class="form-control" name="design[]" style="color:#686B6D" id="deisgnField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select design</option>
                                            </select></br>
                                        
                                            <span></span><label class="pay" style="margin-top: 10px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Headboard*</label></br>
                                            <select class="form-control" name="headboard[]" style="color:#686B6D" id="boardField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select headboard</option>
                                            </select></br>
                                       

                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Size*</label></br>
                                            <select class="form-control" name="size[]" style="color:#686B6D" id="sizeField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select size</option>
                                            </select></br>
                                        
                                            <span></span><label class="pay" style="margin-top: 10px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Mattress*</label></br>
                                            <select class="form-control" name="matteres[]" style="color:#686B6D" id="matteresField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select matteres</option>
                                            </select></br>
                                      
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Storage*</label></br>
                                            <select class="form-control" name="storage[]" style="color:#686B6D" id="storageField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select storage</option>
                                            </select></br>
                                       
                                        <div style="margin-top: 10px;">
                                            <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Color | Fabric*</label></br>
                                            <select class="form-control" name="color_or_fabric[]" style="color:#686B6D" id="color_or_fabricField" disabled required multiple>
                                                <option value="default" style="color:#686B6D">select color</option>
                                            </select></br>
                                        </div>

                                    <div class="row">
                                        <div class="col-12" style="margin-top: 10px;">
                                            <label class="pay" style="font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Quantity</label>
                                            <input type="number" name="qty" placeholder="" id="qtyField" disabled />
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <input type="text" name="first_name" placeholder="First Name" />
                                    <input type="text" name="last_name" placeholder="Last Name" />
                                    <input type="email" name="email" placeholder="Email Id" />
                                    <input type="text" name="phone" placeholder="Phone Number" />
                                    <input type="text" name="post_code" placeholder="Post Code" />
                                    <input type="text" name="social_account" placeholder="Social Account" />
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <input type="text" name="price" placeholder="Price" />
                                    <input type="text" name="note" placeholder="Note" />
                                    <select class="form-control" name="payment_status" style="color:#686B6D">
                                        <option value="default" style="color:#686B6D">payment status</option>
                                        <option value="paid" style="color:#686B6D">Paid</option>
                                        <option value="unpaid" style="color:#686B6D">Unpaid</option>
                                        <option value="partially_paid" style="color:#686B6D">Partially Paid</option>
                                    </select>
                                    <select class="form-control" name="shipment_status" style="color:#686B6D;margin-top:20px">
                                        <option value="default" style="color:#686B6D">shipment status</option>
                                        <option value="in_que" style="color:#686B6D">In Que</option>
                                        <option value="shipped" style="color:#686B6D">Shipped</option>
                                        <option value="delivered" style="color:#686B6D">Delivered</option>
                                    </select>

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
                                <input type="submit" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
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
                                            <h5>You Have Successfully Created Order</h5>
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
    $(document).ready(function() {

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