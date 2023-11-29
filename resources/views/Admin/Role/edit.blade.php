@extends('layouts.main')
@section('yield', 'Role Edit')
@section('content')

<style>
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 15px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Update</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Role</h3>
            </div>
            <hr>
            <form action="{{route('updaterole',$item->id)}}" method="post" class="form-horizontal">
                @csrf

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="name" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}" data-val="true" autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div style="margin-left:58px;">
                    <label class="container">Select All
                        <input id="checkAll" class="item-checkbox" type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <hr style="margin-right:40px">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 style="text-transform: uppercase;">User Permissions</h4>
                            <hr>
                            @foreach($allPermissions as $permission)
                            @if(strpos($permission->name, "User") != false)
                            <label class="container">{{$permission->name}}
                                {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->name, old('permissions', $permissions)), ['class' => 'item-checkbox']) }}
                                <span class="checkmark"></span>
                            </label>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            <h4 style="text-transform: uppercase;">Role Permissions</h4>
                            <hr>
                            @foreach($allPermissions as $permission)
                            @if(strpos($permission->name, "Role") != false)
                            <label class="container">{{$permission->name}}
                                {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->name, old('permissions', $permissions)), ['class' => 'item-checkbox']) }}
                                <span class="checkmark"></span>
                            </label>
                            @endif
                            @endforeach
                        </div>

                        <div class="col-md-4">
                            <h4 style="text-transform: uppercase;">Order Permissions</h4>
                            <hr style="margin-right:40px">
                            @foreach($allPermissions as $permission)
                            @if(strpos($permission->name, "Order") != false)
                            <label class="container">{{$permission->name}}
                                {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->name, old('permissions', $permissions)), ['class' => 'item-checkbox']) }}
                                <span class="checkmark"></span>
                            </label>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <hr style="margin-right:40px">

                    <div class="row">
                        <div class="col-md-4">
                            <h4 style="text-transform: uppercase;">Product Permissions</h4>
                            <hr>
                            @foreach($allPermissions as $permission)
                            @if((strpos($permission->name, "Product ") == false) && (strpos($permission->name, "Product") != false) )
                            <label class="container">{{$permission->name}}
                                {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->name, old('permissions', $permissions)), ['class' => 'item-checkbox']) }}
                                <span class="checkmark"></span>
                            </label>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            <h4 style="text-transform: uppercase;">Product Variation Permissions</h4>
                            <hr>
                            @foreach($allPermissions as $permission)
                            @if(strpos($permission->name, "Product Variation") != false)
                            <label class="container">{{$permission->name}}
                                {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->name, old('permissions', $permissions)), ['class' => 'item-checkbox']) }}
                                <span class="checkmark"></span>
                            </label>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            <h4 style="text-transform: uppercase;">Customer Permissions</h4>
                            <hr style="margin-right:40px">
                            @foreach($allPermissions as $permission)
                            @if(strpos($permission->name, "Customer") != false)
                            <label class="container">{{$permission->name}}
                                {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->name, old('permissions', $permissions)), ['class' => 'item-checkbox']) }}
                                <span class="checkmark"></span>
                            </label>
                            @endif
                            @endforeach
                        </div>
                    </div>

                    <hr style="margin-right:40px">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 style="text-transform: uppercase;">Coupen Permissions</h4>
                            <hr>
                            @foreach($allPermissions as $permission)
                            @if(strpos($permission->name, "Coupen") != false)
                            <label class="container">{{$permission->name}}
                                {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->name, old('permissions', $permissions)), ['class' => 'item-checkbox']) }}
                                <span class="checkmark"></span>
                            </label>
                            @endif
                            @endforeach
                        </div>

                        <div class="col-md-4">
                            <h4 style="text-transform: uppercase;">File Upload Permissions</h4>
                            <hr>
                            @foreach($allPermissions as $permission)
                            @if(strpos($permission->name, "File Upload") != false)
                            <label class="container">{{$permission->name}}
                                {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->name, old('permissions', $permissions)), ['class' => 'item-checkbox']) }}
                                <span class="checkmark"></span>
                            </label>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- <div class="row" style="margin-top: 20px;">
                    <div class="col col-md-3">
                        <label for="permissions" class=" form-control-label">Permissions</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="checkbox" id="checkAll">
                        <label for="checkAll">Select All</label>
                        @foreach($allPermissions as $permission)
                        <div class="form-check">
                            {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->name, old('permissions', $permissions)), ['class' => 'item-checkbox']) }}
                            <label class="form-check-label" for="flexCheckDefault">{{$permission->name}}</label>
                        </div>
                        @endforeach
                    </div>
                </div> -->

                <div>
                    <center>
                        <div class="card-footer" style="margin-top: 50px;">
                            <button type="submit" class="btn btn-info btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update
                            </button>
                            <a type="reset" class="btn btn-danger btn-sm" style="margin-left: 20px;" href="{{route('role')}}">
                                <i class="fa fa-ban"> </i> Cancel
                            </a>
                        </div>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // When the "checkAll" checkbox is clicked, check/uncheck all "item-checkbox" checkboxes
        $('#checkAll').click(function() {
            $('.item-checkbox').prop('checked', $(this).prop('checked'));
        });

        // When any "item-checkbox" checkbox is clicked, check if all checkboxes are checked and update the "checkAll" checkbox accordingly
        $('.item-checkbox').click(function() {
            if ($('.item-checkbox:checked').length == $('.item-checkbox').length) {
                $('#checkAll').prop('checked', true);
            } else {
                $('#checkAll').prop('checked', false);
            }
        });
    });
</script>
@endsection