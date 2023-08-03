
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
                <h2><strong>Only Ottoman Box  </strong></h2>
               
                <div class="row align-items-center justify-content-center" >
                    <div class="col-md-6 mx-0">
                        <form id="msform" method="post" action="#">
                           
                            <fieldset>
                                <div class="form-card" id="original-div">
                                    
                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Design*</label></br>
                                    <select class="form-control" name="design" style="color:#686B6D" id="designField"   required>
                                        <option value="select Design<" style="color:#686B6D">select Design</option>
                                        <option value="Monaco-Diamond" style="color:#686B6D">Monaco - Diamond</option>
                                        <option value="Monaco-Button " style="color:#686B6D">Monaco - Button </option>
                                        <option value="Panel" style="color:#686B6D">Panel</option>
                                        <option value="Plain" style="color:#686B6D">Plain</option>

                                    </select></br>
                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Color*</label></br>
                                    <select class="form-control" name="design" style="color:#686B6D" id="designField"  required>
                                        <option value="select Design<" style="color:#686B6D">select Color</option>
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
                                    
                                    <span></span><label class="pay" style="margin-top: 5px; font-size:16px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Select Fabric *</label></br>
                                    <select class="form-control" name="design" style="color:#686B6D" id="designField"  required>
                                        <option value="select Design<" style="color:#686B6D">select Fabric</option>
                                        <option value="Grey" style="color:#686B6D">Plush Velvet </option>
                                        <option value="Grey" style="color:#686B6D">Crush velvet </option>
                                        <option value="Grey" style="color:#686B6D">Naples </option>
                                        <option value="Chenille" style="color:#686B6D">Chenille</option>
                                        <option value="Leather" style="color:#686B6D">Leather</option>
                                        <option value="Suede" style="color:#686B6D">Suede </option>
                                    
                                      
                                    
                                    </select></br> 
                                </div>




                                <input type="button" name="next" class="next action-button" value="Submit" />
                            </fieldset>

                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

