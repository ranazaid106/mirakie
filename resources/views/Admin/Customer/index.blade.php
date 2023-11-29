@extends('layouts.main')
@section('yield', 'Customers')
@section('content')

<style>
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination li a {
        color: #555;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .pagination li.active a {
        color: #fff;
        background-color: #007bff;
    }

    .pagination li.disabled a {
        color: #999;
        pointer-events: none;
        cursor: default;
    }
    .alert {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .alert i {
        margin-right: 10px;
        font-size: 24px;
    }
  

  .dt-buttons{
    margin-left:22px;
    
    
  }

  #orderTable_filter{
    position: inherit;

margin-top: -58px!important;

  }


.dataTables_filter{
    margin-top: -58px!important;
}

  .dataTables_wrapper .dataTables_filter input{
    border: 1px solid #aaa;
border-radius: 3px;
padding: 5px;
background-color: white!important;
margin-left: 3px;

width:270px;

  }

   
    div.dt-buttons {
      float: right;
   
    }

    .pagination{
        display: none;
    }
    #customerTabel_length{
        padding: 7px;
    }

.customer_date_from{
    text-align: left;
}
.customer_date_min{
    padding-left:10px;height: 37px; width: 220px;border: 1px solid #aaa;
}
.customer_date_max{
    padding-left:10px;height: 37px; width: 220px;border: 1px solid #aaa;
}


    @media (max-width: 1290px) {

        .dataTables_filter {
  margin-top: -0px !important;
}


.customer_date_max {
  margin-left: 15px;
}
}

@media (max-width: 1290px) {

    .header-button {
  margin-top: 0px;
 
 
}
.header-desktop {

  height: 80px;
}


}


    </style>

 
@can('View Customer')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">customer</h3>
        @if(session()->get('success'))
        <div id="success-alert" style="left:25%;width:35%" class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Success</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ session()->get('success') }}
        </div>
        @endif


</div>

<div class="table-data__tool  checkbox_hidden_btn" style="display: none"> 
    <div class="col-md-12 mb-1" style="margin-bottom: -28px" >
        <button type="button"  class="btn btn-info"
        id="product_checkedbox_get_id"> Delete</button>
    </div>

</div>
        <div class="table-responsive table-responsive-data2">

            <div class="container m-3">
                <div class="row">
                   

                    <div class="col-lg-4 col-md-6 col-sm-6 customer_date_from" >
                        <label class="customer_date_label_from"> From</label>&nbsp;&nbsp;
                          <input type="text" id="min" name="min" class="customer_date_min" placeholder="From" >
                      </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 customer_date_to" >
                        <label class="customer_date_label_from"> To</label>&nbsp;&nbsp;
                        <input type="text" id="max" name="max" class="customer_date_max"  placeholder="To"  >
                    </div> 
                </div>
            </div>

            <table class="table table-data2 customers"  id="customerTabel" style=" margin-bottom: 20px;">
                <thead>
                    <tr>
                        <th ><input type="checkbox" name="check[]"   style="width: 17px;height:17px;" id="master" class="sub_chk_1"></th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone #</th>
                        <th>Email</th>
                        <th>Post Code</th>
                        <th>Total Orders</th>
                        <th>Created At</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1 ?>
                    @foreach($items as $item)


                    <?php 
                     $total = App\Models\Order::where('customer_id', $item->id)->count();
                    //  dd($total);
                    ?>

                    <tr class="tr-shadow select_{{$item->id}}">
                        <td><input type="checkbox" style="margin-top: 15px;" name="check[]" class="sub_chk" data-id="{{$item->id}}" id="master"></td>

                        <td>{{$num++}}</td>
                        <td>
                            <span class="block-email">{{$item->first_name}} {{$item->last_name}}</span>
                        </td>
                        <td class="desc">{{$item->phone_number}}</td>
                        <td>
                            <span class="block-email">{{$item->email}}</span>
                        </td>
                        <td class="desc">{{$item->post_code}}</td>
                        <td>
                           
                            <span class="status--process"><a href="{{ url('SerachOrder') }}/{{$item->id}}">{{ $total }}</a></span>
                          
                        </td>
                        {{-- <td class="desc">{{$item->created_at->format('F jS Y')}}</td> --}}
                        <td class="desc">{{$item->created_at->format('Y-m-d')}}</td>
                        {{-- <td>
                            <div class="table-data-feature">
                                 @can('Update Customer')
                                <a href="{{route('customer_edit',$item->id)}}" style="right:45%" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                     @endcan
                                @can('Delete Customer')
                                <a  data-id="{{ $item->id }}"  style="right:45%; cursor: pointer;" class="item single_customer_delete" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                                  @endcan
                            </div>
                        </td> --}}
                    </tr>
                 
                    @endforeach
                </tbody>
               
            </table>
            <div style="float:right; margin-top:-1%">
                {{ $items->links('vendor.pagination.default')  }}
            </div>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@else
<div class="alert alert-warning" role="alert" style="text-transform: uppercase;">
    <i class="fas fa-exclamation-triangle"></i>
    You do not have permission to view customers.
</div>
@endcan
<script>
    setTimeout(function() {
        document.getElementById("success-alert").style.display = "none";
    }, 5000);
</script>




<script>
    $(document).ready(function() {
            //on page load uncheck any ticked checkboxes
            $("input:checkbox:checked").prop('checked', false);
        });
    
    
        $(document).ready(function() {
            
            $('#master').on('click', function(e) {
                if ($(this).is(':checked', true)) {
                    $(".sub_chk").prop('checked', true);
                    $('.checkbox_hidden_btn').show('slow');
                  
                } else {
                    $(".sub_chk").prop('checked', false);
                    $('.checkbox_hidden_btn').hide('slow');
                   
                }
            });
    
            $('.sub_chk').on('click', function(e) {
                
                if($('.sub_chk:checked').length > 0){
                    $('.checkbox_hidden_btn').show('slow');
                }else{
                    $('.checkbox_hidden_btn').hide('slow');
                }
    
            });
    
    
            
           
            
        });
    </script>



<script>


    $(document).on('click', '.single_customer_delete', function(e) {
                        e.preventDefault();
            var dataId = $(this).attr("data-id");
            Swal.fire({
                                title: 'Are you sure?',
                                text: "You want to Delete this order!",
                                imageUrl: '{{asset("popup_images/popup.png")}}',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
    
                                    var v_token = "{{csrf_token()}}";
                                       var params = {dataId:dataId, _token: v_token};
    
                                    $.ajax({
                                        type: 'DELETE',
                                        data: params,
                                        url: "/customer_delete",
                                        success: function(data) {
    
                                            if(data.status == 200){
                                                Swal.fire(
                                                'Deleted!',
                                                'Your file has been deleted.',
                                                'success'
                                            )
                                                
                                            $('.select_'+dataId).hide('slow');
                                            $('.checkbox_hidden_btn').hide('slow');
                                         
                                            }else{
                                                Swal.fire(
                                                'Something Error!',
                                                'Your file has Not been deleted.',
                                                'danger'
                                            )
                                            }
                                        },
                                        // error: function(data) {
                                        //     alert(data.responseText);
                                        // }
                                    });
    
                                }
    });
    });
    
    
    



     //Checkbox  select multiples Products with images  deleted
     $(document).on('click', '#product_checkedbox_get_id', function(e) {
                    e.preventDefault();
                    var allVals = [];
                    $(".sub_chk:checked").each(function() {
                        allVals.push($(this).attr('data-id'));
                        var v_token = "{{csrf_token()}}";

                    });
                    if (allVals.length <= 0) {

                        Swal.fire(
                            'Alert?',
                            'Please Select the Checkbox?',
                            '???????'
                        )
                    } else {
                        // var check = confirm("Are you sure you want to delete this row?");
                        Swal.fire({
                            title: 'Are you sure?',
                            text: " You want to Delete these orders!",
                            imageUrl: '{{asset("popup_images/popup.png")}}',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                var join_selected_values = allVals.join(",");
                                // alert(join_selected_values);
                               
                                var v_token = "{{csrf_token()}}";
                                   var params = {join_selected_values:join_selected_values, _token: v_token};

                                $.ajax({
                                    type: 'DELETE',
                                    data: params,
                                    url: "/customerDeleteAll",
                                    success: function(data) {

                                        if(data.status == 200){
                                            Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        )
                                            
                                        // $('.load_datatable').dataTable().api().ajax.reload();
                                        var getvalues =join_selected_values.split(",");
                                            $.each(getvalues , function(index, val) { 
                                                $('.select_'+val).hide('slow');
                                            });

                                            $(".sub_chk_1").prop('checked', false);
                                            $('.checkbox_hidden_btn').hide('slow');
                                    
                                        }else{
                                            Swal.fire(
                                            'Something Error!',
                                            'Your file has Not been deleted.',
                                            'danger'
                                        )
                                        }
                                    },
                                    // error: function(data) {
                                    //     alert(data.responseText);
                                    // }
                                });
                                $.each(allVals, function(index, value) {
                                    $('table tr').filter("[data-row-id='" + value + "']")
                                        .remove();
                                });
                                //}
                            }
                        })
                    }
                });

                $('[data-toggle=confirmation]').confirmation({
                    rootSelector: '[data-toggle=confirmation]',
                    onConfirm: function(event, element) {
                        element.trigger('confirm');
                    }
                });



    
    
    </script>
    


@endsection


@section('js_files')




<script>
    var minDate, maxDate;
  // Custom filtering function which will search data in column four between two values
  $.fn.dataTable.ext.search.push(
      function( settings, data, dataIndex ) {
          var min = minDate.val();
          var max = maxDate.val();
          var date = new Date( data[7] );
   
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
    
       var table = $('#customerTabel').DataTable( {
        ordering: false,
    
        dom: 'frBtipl',
       "lengthMenu": [5,10, 25, 50, 100,150,200,250,300,350,400,450,500],
        language: {
        searchPlaceholder: "Search Customer "
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

@endsection