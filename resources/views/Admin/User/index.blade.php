@extends('layouts.main')
@section('yield', 'Users')
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
</style>

<style>
#userTable_info{
    margin-top: 20px;
}

#userTable_paginate{
    margin-top:20px;
}

#userTable_length{
    margin-top: 28px;
margin-left: 36px;
}

/*.pagination{*/
/*    display:none;*/
/*}*/
</style>
@can('View User')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">User</h3>
        @if(session('status'))

        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show" id="success-alert" style="left: 25%;width:40%">
            <span class="badge badge-pill badge-success">Success</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ session('status') }}

        </div>
        <script>
            setTimeout(function() {
                $('#success-alert').fadeOut('slow');
            }, 8000); // 10 seconds
        </script>
        @endif
        <div class="table-data__tool">
            <div class="table-data__tool-left">


                <div class="col-md-8 responsive_buttom_done ">

                    <div class="btn-group" role="group" aria-label="Basic example" >
                        <button type="button" class="btn btn-info mr-2 checkbox_hidden_btn" style="display: none" id="users_checkedbox_get_id">Delete</button>
                        {{-- <button type="button" class="btn btn-danger mr-2 checkbox_hidden_btn" style="display: none" id="multiple_generate_pdf">Generate Pdf</button>
                        <button type="button" class="btn btn-secondary checkbox_hidden_btn" style="display: none" id="multiple_generate_excel">Generate EXCEL</button> --}}
                    </div>
                    
                    
                </div> 





            </div>
                  @can('Create User')
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" style="color:white" href="{{route('createuser')}}">
                    <i class="zmdi zmdi-plus"></i>add user</a>

            </div>
              @endcan
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2" id="userTable">
                <thead>
                    <tr>
                        <th ><input type="checkbox" name="check[]"   style="width: 17px;height:17px;" id="master" class="sub_chk_1"></th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1 ?>
                    @foreach($items as $item)

                  

                    <?php 
                        // dd($item);
                              
                    $user_status = App\Models\UserStatus::where('user_id',@$item->id)->first();

                    $user_role = App\Models\Role::find(@$user_status->status);
            //    dd($user_role);
                    ?>  


                    <tr class="tr-shadow  select_{{$item->id}}">
                        <td><input type="checkbox" style="margin-top: 15px;" value="" name="check[]" class="sub_chk" data-id="{{$item->id}}" ></td>
                        <td>{{$num++}}</td>
                        <td>
                            <span class="status--process">{{$item->name ?? 'not found'}}</span>
                        </td>
                        <td>
                            <span class="block-email">{{$item->email ?? 'not found'}}</span>
                        </td>
                        <td>
                            <span class="block-email">{{ $user_role->name ?? 'not found'}}</span>
                        </td>
                        <td class="desc">{{$item->created_at ?? 'not found'}}</td>
                        <td>
                            <div class="table-data-feature">
                                @can('Update User')
                                <a class="item" data-toggle="tooltip" style="right:75%" data-placement="top" title="Edit" href="{{route('edituser',$item->id)}}">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                        @endcan
                                @can('Delete User')
                                <a class="item" data-toggle="tooltip" style="right:75%" data-placement="top" title="Delete" href="{{route('destroyuser',$item->id)}}">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                                    @endcan
                            </div>
                        </td>
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
    You do not have permission to view users.
</div>
@endcan
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
          //Checkbox  select multiples Products with images  deleted
          $(document).on('click', '#users_checkedbox_get_id', function(e) {
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
                                text: " You want to Delete these Users!",
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
                                        url: "/usersDeleteAll",
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
    
    
                    //Checkbox  select multiples Products iwith images  deleted
      
    






    </script>