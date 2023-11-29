<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>@yield('yield')</title>

  <style>
    .country_error {
        border: 1px solid red!important;
      }
  
      .pro_error {
        border: 1px solid red!important;
      }
      @media screen and (max-width:1250px){
        #orderTable_filter{
         position: inherit;
         margin-top: -2px!important;
  }
  div.dt-buttons {
  float: center!important;

}
            }
            
            
            
            @media screen and (max-width:991px){


  #userDataContainer{
      margin-left: 65px!important;
    }

              .header-button {
  margin-top: 5px!important;

}


.header-desktop {
  margin-bottom: 15px!important;
  height: 76px!important;
}


.main-content {
  padding-top: 8px!important;
  padding-bottom: 0px!important;
}

            }
            
            
            
            @media only screen and (max-width: 400px) {



.header-button {
  margin-top: 5px!important;

}


.header-desktop {
  margin-bottom: 15px!important;
  height: 76px!important;
}


.main-content {
  padding-top: 8px!important;
  padding-bottom: 0px!important;
}




}
    </style>
  <!-- Fontfaces CSS-->
  <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!--<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>-->
  <!-- Vendor CSS-->
  <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
  <!-- Main CSS-->
  
{{-- database yajra table css --}}
<link href="{{ asset('online_links_css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('online_links_css/buttons.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('online_links_css/dataTables.dateTime.min.css') }}" rel="stylesheet">
<link  href="{{ asset('online_links_css/daterangepicker.css') }}" rel="stylesheet" type="text/css"/>


  <!--<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">-->
  <!--<link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet">-->
  <!--<link href="https://cdn.datatables.net/datetime/1.4.1/css/dataTables.dateTime.min.css" rel="stylesheet">-->
  <!--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />-->
  
  
{{-- database yajra table css --}}
   
  <!-- font pdf CSS-->
  <link rel="stylesheet" href="{{ asset('online_links_css/font.css') }}">
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />-->

  <!-- Main CSS-->
</head>

<body>
  <script src="../assets/js/preloader.js"></script>

  <body class="animsition">
    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      @include('layouts.header')
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      @include('layouts.sidebar')
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        @include('layouts.header2')
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              @yield('content')
              @include('layouts.footer')
            </div>
          </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
      </div>

    </div>
    
    
<script type="text/javascript" src="{{asset('js_all_files/jquery.min.js')}}"></script>

    <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"> </script>
       <!-- Main JS-->
    <script src="{{asset('js/main.js')}}"></script>
  <!-- /sweetalert-->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      
    

{{-- database yajra table --}}


 <script src="{{asset('online_database_yajra_table_js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('online_database_yajra_table_js/dataTables.dateTime.min.js')}}"></script>
    <script  src="{{asset('online_database_yajra_table_js/moment.min.js')}}" type="text/javascript"></script>
    <script  src="{{asset('online_database_yajra_table_js/daterangepicker.min.js')}}" type="text/javascript"></script>



    <!--<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/datetime/1.4.1/js/dataTables.dateTime.min.js"></script>-->
    <!--<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>-->
    <!--<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>-->

  {{-- database yajra table --}}


 {{-- database yajra table PDF PRINT ECT --}}
 
 <script src="{{ asset('online_new_database_yajra_table_js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('online_new_database_yajra_table_js/dataTables.buttons.min.js') }}"></script>
{{-- <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.flash.min.js"></script> --}}
<script src="{{ asset('online_new_database_yajra_table_js/pdfmake.min.js') }}"></script>
<script src="{{ asset('online_new_database_yajra_table_js/jszip.min.js') }}"></script>
<script src="{{ asset('online_new_database_yajra_table_js/vfs_fonts.js') }}"></script>
<script src="{{ asset('online_new_database_yajra_table_js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('online_new_database_yajra_table_js/buttons.print.min.js') }}"></script>
 
 
 
 
<!--<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.flash.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>-->
 {{-- database yajra table PDF PRINT ECT --}}


@yield('js_files')






  <script>
    var minDate, maxDate;
  // Custom filtering function which will search data in column four between two values
  $.fn.dataTable.ext.search.push(
      function( settings, data, dataIndex ) {
          var min = minDate.val();
          var max = maxDate.val();
          var date = new Date( data[9] );
   
          if (
              ( min === null && max === null ) ||
              ( min === null && date <= max ) ||
              ( min <= date   && max === null ) ||
              ( min <= date   && date <= max )
          ) {
              return true;
          }
          return false;
      }
  );
   
  $(document).ready(function() {
      // Create date inputs
      minDate = new DateTime($('#min'), {
          format: 'MMMM Do YYYY'
      });
      maxDate = new DateTime($('#max'), {
          format: 'MMMM Do YYYY'
      });
   
      // DataTables initialisation
    
       var table = $('#userTable').DataTable( {
        ordering: false,
      //  searching: false,
        dom: 'frtipl',
       "lengthMenu": [5,10, 25, 50, 100,150,200,250,300,350,400,450,500],
        language: {
        searchPlaceholder: "Search Users,"
                   },
        "bPaginate": true,
	      "pagingType": 'full_numbers',
        //  buttons: [
        //  'csv', 'excel', 'pdf'
        //           ],
    } );
   
      // Refilter the table
      $('#min, #max').on('change', function () {
          table.draw();
          console.log('Table Drawn');
      });
  });  
  </script>



















<?php
$user = Auth::user(); // Get the currently logged in user
$users_id = Auth::id(); // Get the currently logged in user
$UserStat = App\Models\UserStatus::where('user_id', $users_id)->first();

$order_role = App\Models\Role::where('id', $UserStat->status)->first();

?>


@php
$allowedRoles = ['Super Admin', 'Vender'];
@endphp




@if (in_array($order_role->name, $allowedRoles))


<script>
  var minDate, maxDate;
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[9] );
        // alert(date);
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);
 



$(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });
 
    // DataTables initialisation
  
     var table = $('#orderTable').DataTable( {
      ordering: false,
    //  searching: false,
      dom: 'frtipl',
     "lengthMenu": [5,10, 25, 50, 100,150,200,250,300,350,400,450,500],
      language: {
      searchPlaceholder: "Customer,Order Id,Country, Code"
                 },
      "bPaginate": true,
      "pagingType": 'full_numbers',
      //  buttons: [
      //  'csv', 'excel', 'pdf'
      //           ],
  } );
 
    // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
        // console.log('Table Drawn');
    });
});  
</script>





@else


<script>
  var minDate, maxDate;
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[8] );
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);
 



$(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });
 
    // DataTables initialisation
  
     var table = $('#orderTable').DataTable( {
      ordering: false,
    //  searching: false,
      dom: 'frtipl',
     "lengthMenu": [5,10, 25, 50, 100,150,200,250,300,350,400,450,500],
      language: {
      searchPlaceholder: "Customer,Order Id,Country, Code"
                 },
      "bPaginate": true,
      "pagingType": 'full_numbers',
      //  buttons: [
      //  'csv', 'excel', 'pdf'
      //           ],
  } );
 
    // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
        // console.log('Table Drawn');
    });
});  
</script>




@endif







<script>










function usersNotification(e){
  // alert(data);
  var dataId = $(e).attr("data-id");
  var dataname = $(e).attr("data-name");

  var v_token = "{{csrf_token()}}";



  var params = {dataId:dataId, _token: v_token , dataname:dataname }
      
  var url = 'http://localhost:8000';
  // var url = 'https://www.mirakie.com';

  

  $.ajax({
        type: 'post',
        data: params,
        url: "/notificationupdate",
        success: function(data) {



          if(data.user == 'user'){
            window.location = url+'/user/'+dataId;
// 
          }else if(data.customer == 'customer'){
            window.location = url+'/customer_index/'+dataId;


          }if(data.product == 'product'){

            window.location = url+'/product_index/'+dataId;

          }else if(data.order == 'order'){
            window.location = url+'/order_index/'+dataId;

          }

              
        }
                    
                 
});


}



$(document).ready(function() {

  setInterval(ajaxCall, 30000); //300000 MS == 5 minutes
ajaxCall()

  // {{-- Show Data  drop down images --}}
  function ajaxCall() {

$.ajax({
    type: "GET",
    url: "/notification",
    dataType: "json",
    success: function(response) {
        $("#userDataContainer").html("");
        $(".user_countt").html("");
     if(response.Users_count > '100'){
          $(".user_countt").append('99+'); 
        }else{
          $(".user_countt").append(response.Users_count); 
        }

        $("#userDataContainer").append(response.success);
        $("#userDataContainer").append(response.notificationCustomer);
        $("#userDataContainer").append(response.notificationOrders);
        $("#userDataContainer").append(response.notificationproduct);
    
    }
});
};

// {{-- Show Data  drop down images --}}



});






</script>


   
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    $(document).ready(function () {
        $('.search').keyup(function () {
            var query = $(this).val();


            
          
            if(query == ""){
              $('#suggestion-list').html('');
              $('.searching_agent_bar').hide();
            }
            $.ajax({
                url: '/get-suggestions',
                method: 'GET',
                data: { query: query },
                dataType: 'json',
                success: function (data) {
                  $('.searching_agent_bar').show();

                  if(data == ""){
                    $('#suggestion-list').html('');
              $('.searching_agent_bar').hide();

                  }

                    var suggestions = '';
                    $.each(data, function (index, suggestion) {
                        suggestions += '<div class="suggestion-item" style="cursor: pointer;">' + suggestion.user_name + '</div>';
                    });
                    $('#suggestion-list').html(suggestions);
                }
            });
        });

        $(document).on('click', '.suggestion-item', function () {
            var selectedValue = $(this).text();
            $('.search').val(selectedValue);
            $('#suggestion-list').html('');
            $('.search').focus();
            $('.searching_agent_bar').hide();
        });

        $('.search').blur(function () {
            if ($(this).val() === '') {
                $('#suggestion-list').html('');
            }
        });



    });
</script>



<script>
  $(document).ready(function () {
      $('.search-product').keyup(function () {
          var querys = $(this).val();
          
          

          if(querys == ""){
            $('#suggestion-list-product').html('');
            $('.searching_product_bar').hide();
          }
          $.ajax({
              url: '/get-suggestions-product',
              method: 'GET',
              data: { querys: querys },
              dataType: 'json',
              success: function (data) {

                $('.searching_product_bar').show();

                if(data == ""){
                    $('#suggestion-list-product').html('');
              $('.searching_product_bar').hide();

                  }

                  var suggestions = '';
                  $.each(data, function (index, suggestion) {
                      suggestions += '<div class="suggestion-item-product" style="cursor: pointer;">' + suggestion.name + '</div>';
                  });
                  $('#suggestion-list-product').html(suggestions);
              }
          });
      });


      

      $(document).on('click', '.suggestion-item-product', function () {
          var selectedValue = $(this).text();
          $('.search-product').val(selectedValue);
          $('#suggestion-list-product').html('');
          $('.search-product').focus();
          $('.searching_product_bar').hide();
      });

      $('.search-product').blur(function () {
          if ($(this).val() === '') {
              $('#suggestion-list-product').html('');
          }
      });



  });
</script>


<script>
  $(document).ready(function () {

    $(".logo_img1").animate({width: '170px'}).slow();
    
  });
</script>

<script>
  $(document).ready(function () {

    // $(".logo_img1").animate({width: '170px'}).slow();
    $(".logo_img2").animate({width: '140px'}).slow();
    
  });
</script>
 
  </body>

</html>