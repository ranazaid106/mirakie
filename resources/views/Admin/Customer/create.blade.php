@extends('layouts.main')
@section('yield', 'Customer Create')
@section('content')


<div class="card">
    <div class="card-header">Create </div>
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-center title-2">Customer</h3>
        </div>
        <hr>
        <form method="post" action="{{route('customer_store')}}" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="first_name" class="control-label mb-1">First Name</label>
                        <input id="first_name" name="first_name" type="tel" class="form-control @error('first_name') is-invalid @enderror" value="" data-val="true" autocomplete="first_name">
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <label for="last_name" class="control-label mb-1">Last Name</label>
                    <div class="input-group">
                        <input id="last_name" name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" value="" data-val="true" autocomplete="last_name">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="phone_number" class="control-label mb-1">Phone #</label>
                        <input id="phone_number" name="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" value="" data-val="true" autocomplete="phone_number">
                        @error('phone_number')
                        <span class="phone_number" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <label for="email" class="control-label mb-1">Email</label>
                    <div class="input-group">
                        <input id="email" name="email" type="tel" class="form-control @error('email') is-invalid @enderror" value="" data-val="true" autocomplete="off">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for="post_code" class="control-label mb-1">Post Code</label>
                    <div class="input-group">
                        <input id="post_code" name="post_code" type="number" class="form-control @error('post_code') is-invalid @enderror" value="" data-val="true" autocomplete="off">
                        @error('post_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="social_account" class="control-label mb-1">Social Account</label>
                        <input id="social_account" name="social_account" type="text" class="form-control @error('social_account') is-invalid @enderror" value="" data-val="true" autocomplete="social_account">
                        @error('social_account')
                        <span class="social_account" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <center>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>&nbsp;&nbsp;

                    <a href="{{route('customer_index')}}" type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </center>
            </div>
        </form>
    </div>
</div>
@endsection