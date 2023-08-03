@extends('layouts.main')
@section('content')


<div class="card">
    <div class="card-header">Create </div>
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-center title-2">Coupen</h3>
        </div>
        <hr>
        <form method="post" action="{{route('coupen_store')}}" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name" class="control-label mb-1">Coupen</label>
                        <input id="name" name="name" type="tel" class="form-control @error('name') is-invalid @enderror" value="" data-val="true" autocomplete="name">
                        @error('name')
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
                        <label for="price" class="control-label mb-1">Price</label>
                        <input id="price" name="price" type="text" class="form-control @error('price') is-invalid @enderror" value="" data-val="true" autocomplete="price">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label" style="margin-top:40px">Type</label>
                        </div>
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="type" value="plain" class="form-check-input" style="height:15px;width:43px;margin-top:47px">Plain
                                </label> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="inline-radio2" class="form-check-label ">
                                    <input type="radio" id="inline-radio2" name="type" value="percentage" class="form-check-input" style="height:15px;width:43px;margin-top:48px">Percentage
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <center>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>&nbsp;&nbsp;

                    <a href="{{route('coupen_index')}}" type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </center>
            </div>
        </form>
    </div>
</div>
@endsection