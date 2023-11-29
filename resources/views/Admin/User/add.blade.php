@extends('layouts.main')
@section('yield', 'User Create')
@section('content')

<style>
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
@can('Create User')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Create User</div>
        <div class="card-body">
              @if($errors->any())

                <div class="alert alert-warning">
                    @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif
            <!--<div class="card-title">-->
            <!--    <h3 class="text-center title-2">User</h3>-->
            <!--</div>-->
            <hr>
            <form action="{{route('storeuser')}}" method="post" class="form-horizontal">
                @csrf

                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <label for="name" class=" form-control-label">Name</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="" data-val="true" autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <label for="email" class="control-label mb-1">Email</label>
                        <div class="input-group">
                            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="" data-val="true" autocomplete="off">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" >
                    <div class="col-md-6 col-sm-12 mb-3" >
                        <label for="password" class="control-label mb-1">Password</label>
                        <div class="input-group">
                            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="" data-val="true" autocomplete="off">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12  mb-3">
                        <label for="password-confirm" class="control-label mb-1">Confirm Password</label>
                        <div class="input-group">
                            <input id="password-confirm" name="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" value="" data-val="true" autocomplete="off">
                            @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row form-group" style="margin-top: 20px;">
                    <div class="col col-md-3">
                        <label for="role" class=" form-control-label">Select Role</label>
                    </div>
                
                    <div class="col-12 col-md-3">
                        <select name="role[]" id="select" class="form-control">
                            <option value="" selected disabled>Please select</option>
                            @foreach($roles as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <center>
                        <div class="card-footer" style="margin-top: 50px;">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <a type="reset" class="btn btn-danger btn-sm" style="margin-left: 20px;" href="{{route('user')}}">
                            <i class="fa fa-ban"> </i> Cancel
                            </a>
                        </div>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div class="alert alert-warning" role="alert" style="text-transform: uppercase;">
    <i class="fas fa-exclamation-triangle"></i>
    You do not have permission to create user.
</div>
@endcan
@endsection