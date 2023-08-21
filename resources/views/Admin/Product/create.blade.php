@extends('layouts.main')
@section('content')


<div class="card">
    <div class="card-header">Create </div>
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-center title-2">Product</h3>
        </div>
        <hr>
        <form method="post" action="{{route('product_store')}}" enctype="multipart/form-data" novalidate="novalidate">
            @csrf

            <div class="row">
                <div class="col-md-6 col-sm-12 mb-2">
                    <div class="form-group">
                        <label for="name" class="control-label mb-2">Name</label>
                        <input id="name" name="name" type="tel" class="form-control @error('name') is-invalid @enderror" value="" data-val="true" autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label for="price" class="control-label mb-2">Price</label>
                    <div class="input-group">
                        <input id="price" name="price" type="text" class="form-control @error('price') is-invalid @enderror" value="" data-val="true" autocomplete="price">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-3">
                    <div class="form-group">
                        <label for="country" class="control-label mb-2">Country</label>
                        <input id="country" name="country" type="tel" class="form-control @error('country') is-invalid @enderror" value="" data-val="true" autocomplete="country">
                        <span style="font-size: 15px;" class="input-description mt-3">Can add multiple with comma ( , )</span>
                        @error('country')
                        <span class="invalid-feedback" role="alert">
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

                    <a href="{{route('product_index')}}" type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </center>
            </div>
        </form>
    </div>
</div>
@endsection