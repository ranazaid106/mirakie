@extends('layouts.main')
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
@can('View Coupen')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">coupen</h3>
        @if(session()->get('success'))
        <div id="success-alert" style="left:25%;width:35%" class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Success</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ session()->get('success') }}
        </div>
        @endif
        <div class="table-data__tool">
            <div class="table-data__tool-left">
            </div>
              @can('Create Coupen')
            <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <a href="{{route('coupen_create')}}" style="color:white"> <i style="color:white;" class="zmdi zmdi-plus"></i>add coupen</a></button>
            </div>
               @endcan
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Coupen</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1 ?>
                    @foreach($items as $item)
                    <tr class="tr-shadow">
                        <td>{{$num++}}</td>
                        <td>
                            <span class="block-email">{{$item->name}}</span>
                        </td>
                        <td class="desc">{{$item->price}}</td>
                        <td>
                            <span class="block-email">{{$item->type}}</span>
                        </td>
                        <td class="desc">{{$item->created_at->format('F jS Y')}}</td>
                        <td>
                            <div class="table-data-feature">
                                 @can('Update Coupen')
                                <a href="{{route('coupen_edit',$item->id)}}" style="right:45%" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                      @endcan
                                @can('Delete Coupen')
                                <a href="{{route('coupen_delete',$item->id)}}" style="right:45%" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                                   @endcan
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
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
    You do not have permission to view coupens.
</div>
@endcan

<script>
    setTimeout(function() {
        document.getElementById("success-alert").style.display = "none";
    }, 5000);
</script>
@endsection