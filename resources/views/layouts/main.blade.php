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
  <title>Dashboard</title>
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





  {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
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
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/datetime/1.4.1/css/dataTables.dateTime.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
{{-- database yajra table css --}}

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


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
    
  
    <!-- Bootstrap JS-->
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
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/main.js')}}"></script>
     <!-- sweetalert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


{{-- database yajra table --}}
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.4.1/js/dataTables.dateTime.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

  {{-- database yajra table --}}

 {{-- database yajra table PDF PRINT ECT --}}
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
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
    
       var table = $('#orderTable').DataTable( {
        ordering: false,
      //  searching: false,
        dom: 'frtipl',
        // dom: 'frBtipl',
        // dom: '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>',
       "lengthMenu": [5,10, 25, 50, 100,150,200,250,300,350,400,450,500 ],
      //  lengthMenu: [
      //       [10, 25, 50, -1],
      //       [10, 25, 50, 'All'],
      //   ],
        language: {
        searchPlaceholder: "Customer,Order Id,Country, Code"
                   },
        "bPaginate": true,
	      "pagingType": 'full_numbers',

         buttons: [
         'csv', 'excel', 'pdf'
                   ],
    } );

   
      // Refilter the table
      $('#min, #max').on('change', function () {
          table.draw();
          console.log('Table Drawn');
      });



  });  
  </script>

    

<script>







function usersNotification(e){
  // alert(data);
  var dataId = $(e).attr("data-id");
  var dataname = $(e).attr("data-name");

  var v_token = "{{csrf_token()}}";



  var params = {dataId:dataId, _token: v_token , dataname:dataname }
      
  var url = 'http://127.0.0.1:8000';
  // var url = 'https://www.mirakie.com';

  

  $.ajax({
        type: 'post',
        data: params,
        url: "/notificationupdate",
        success: function(data) {

       

          if(data.user == 'user'){
            window.location = url+'/user';
// 
          }else if(data.customer == 'customer'){
            window.location = url+'/customer_index' ;


          }if(data.product == 'product'){

            window.location = url+'/product_index';

          }else if(data.order == 'order'){
            window.location = url+'/order_index';

          }

              
        }
                    
                 

   
});





}



setInterval(ajaxCall, 3000); //300000 MS == 5 minutes
ajaxCall()
   // {{-- Show Data  drop down images --}}
   function ajaxCall() {
    // alert('hellsado')

    $.ajax({
        type: "GET",
        url: "/notification",
        dataType: "json",
        success: function(response) {
            // console.log(response)

            $("#userDataContainer").html("");
            $(".user_countt").html("");

              
            if(response.Users_count > '100'){
              $(".user_countt").append('100+'); 
            }else{
              $(".user_countt").append(response.Users_count); 
            }


           




            $("#userDataContainer").append(response.success);
            $("#userDataContainer").append(response.notificationCustomer);
            $("#userDataContainer").append(response.notificationOrders);
            $("#userDataContainer").append(response.notificationproduct);
            // alert(response);
            // $.each(response.product, function(key, item) {

            //     $("#sub_category_name").append('<option value="' + item.id +
            //         '"  id="onchange_data" >' + item.product_name + '</option>');
            // });
        }
    });
};

// {{-- Show Data  drop down images --}}

</script>



















  </body>

</html>