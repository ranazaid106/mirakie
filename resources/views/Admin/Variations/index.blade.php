@extends('layouts.main')
@section('yield', 'Variations')
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
@can('View Product Variation')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Product Variation</h3>
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
            </div>
             @can('Create Product Variation')
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" style="color:white" href="{{route('createproductvariation')}}">
                    <i class="zmdi zmdi-plus"></i>add variation</a>
            </div>
             @endcan
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Design</th>
                        <th>Size</th>
                        <th>Headboard</th>
                        <th>Color & Fabric</th>
                        <th>Matteres</th>
                        <th>Storage</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1 ?>
                    @foreach($items as $item)
                    <tr class="tr-shadow">
                        <td style="margin-top: 10px;">{{$num++}}</td>
                        @if(!empty($item->product))
                        <td>{{$item->product->name}}</td>
                        @else
                        <td>Null</td>
                        @endif
                        <td>
                            <span class="block-email">{{ implode(', ', json_decode($item->design)) }}</span>
                        </td>
                        <td class="desc">{{ implode(', ', json_decode($item->size)) }}</td>
                        <td>{{ implode(', ', json_decode($item->headboard)) }}</td>
                        <td>
                            <span class="status--process"> {{ implode(', ', json_decode($item->color_or_fabric)) }}</span>
                        </td>
                        <td>{{ implode(', ', json_decode($item->matteres)) }}</td>
                        <td>{{ implode(', ', json_decode($item->storage)) }}</td>
                        <td class="desc">{{$item->created_at->format('F jS Y')}}</td>
                        <td>
                            <div class="table-data-feature">
                                    @can('Update Product Variation')
                                <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{route('editproductvariation',$item->id)}}">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                              @endcan
                                @can('Delete Product Variation')
                                <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{route('deleteproductvariation',$item->id)}}">
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
    You do not have permission to view product variations.
</div>
@endcan
@endsection