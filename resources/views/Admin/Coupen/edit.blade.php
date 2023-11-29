@extends('layouts.main')
@section('yield', 'Coupen Edit')
@section('content')


<div class="card">
    <div class="card-header">Update </div>
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-center title-2">Coupen</h3>
        </div>
        <hr>
        <form method="post" action="{{route('coupen_update',$item->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="name" class="control-label mb-2">Coupen</label>
                        <input id="name" name="name" type="tel" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}" data-val="true" autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="price" class="control-label mb-2">Price</label>
                        <input id="price" name="price" type="text" class="form-control @error('price') is-invalid @enderror" value="{{$item->price}}" data-val="true" autocomplete="price">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label" style="margin-top:40px">Type</label>
                        </div>
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="type" value="plain" class="form-check-input" style="height:15px;width:43px;margin-top:47px" @if(old('type', $item->type) == 'plain') checked @endif>Plain
                                </label> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="inline-radio2" class="form-check-label ">
                                    <input type="radio" id="inline-radio2" name="type" value="percentage" class="form-check-input" style="height:15px;width:43px;margin-top:48px" @if(old('type', $item->type) == 'percentage') checked @endif>Percentage
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <center>
                    <button type="submit" class="btn btn-info btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
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