@extends('layouts.main')
@section('yield', 'PaymentInvoices')
@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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
    .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
    }
</style>
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Payments | Invoices</h3>
        @if(session('success'))

        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show" id="success-alert" style="left: 25%;width:40%">
            <span class="badge badge-pill badge-success">Success</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ session('success') }}

        </div>
        <script>
            setTimeout(function() {
                $('#success-alert').fadeOut('slow');
            }, 8000); // 10 seconds
        </script>
        @endif

        @if(session('error'))

        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" id="error-alert" style="left: 25%;width:40%">
            <span class="badge badge-pill badge-error">error</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ session('error') }}

        </div>
        <script>
            setTimeout(function() {
                $('#error-alert').fadeOut('slow');
            }, 8000); // 10 seconds
        </script>
        @endif
        <div class="table-data__tool">
            <div class="table-data__tool-left"></div>
            <?php 
                $users = App\Models\UserStatus::where('user_id', Illuminate\Support\Facades\Auth::user()->id)->first();
                // dd($users);

                if (@$users->status == '2') {
            ?>
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" style="color:white" href="{{route('createPaymentsInvoices')}}">
                    <i class="zmdi zmdi-plus"></i>add Payments Invoices</a>
            </div>
            <?php
                }else {

                }
            ?>
            
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Links</th>
                        <th>Note</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1 ?>
                    @foreach($items as $item)

                    <?php 
                    // dd($item);
                              
                    // $user_status = App\Models\DataDetails::where('links',$item->id)->first();

                    $user_role = App\Models\Role::where('id',$item->role_id)->first();

                    //    dd($user_status);

                    ?> 
                         
                    <tr class="tr-shadow">
                        <td>{{$num++}}</td>
                        <td>
                            <span class="block-email">{{ $user_role->name }}</span>
                        </td>
                        <?php $users = App\Models\User::where('id', $item->user_id)->first(); ?>
                        <td>
                            <span class="block-email">{{ $users->name ??'Not Found' }}</span>
                        </td>
                        
                        <td>
                            <a href="{{ $item->links }}" target="_blank">{!! $item->links !!}</a>
                        </td>
                        <td>
                            <p class="description" style="cursor: pointer;">
                                <span>{{ $item->note }}</span>
                            </p>   
                        </td>

                       
                        <td class="desc">{{$item->created_at}}</td>
                        <td>
                            <div class="table-data-feature">
                                
                                <?php 
                                $users = App\Models\UserStatus::where('user_id', Illuminate\Support\Facades\Auth::user()->id)->first();
                                // dd($users);

                                if ($users->status == '2') {
                                 ?>
                                <a class="item" data-toggle="tooltip" style="right:75%" data-placement="top" title="Edit" href="{{route('PaymentsInvoices_edit',$item->id)}}">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>

                                <a class="item" data-toggle="tooltip" style="right:75%" data-placement="top" title="Delete" href="{{route('destroyPaymentsInvoices',$item->id)}}">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>

                                <?php
                                    }else {
                                        echo"Not Permission <span class='material-symbols-outlined'>
                                        sentiment_satisfied
                                        </span>";
                                    }
                                ?>
                                @method('DELETE')
                                
                                    
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="float:right; margin-top:-1%">
                {{ $items->links('vendor.pagination.default') }}
            </div>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>

@endsection