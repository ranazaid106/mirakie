@extends('layouts.main')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Update</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Variation</h3>
            </div>
            <hr>
            <form method="post" action="{{route('updateproductvariation',$items->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="design" class="control-label mb-1">Design</label>
                            <input id="design" name="design" type="text" class="form-control @error('design') is-invalid @enderror" value="{{ implode(', ', $designArray ) }}" data-val="true" autocomplete="design">
                            <span style="font-size: 15px;" id="input-description-1" class="input-description">Can add multiple with comma ( , )</span>
                            @error('design')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="size" class="control-label mb-1">Size</label>
                        <div class="input-group">
                            <input id="size" name="size" type="tel" class="form-control @error('size') is-invalid @enderror" value="{{ implode(', ', $sizeArray ) }}" data-val="true" autocomplete="off">
                            @error('size')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <span style="font-size: 15px;" id="input-description-2" class="input-description">Can add multiple with comma ( , )</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="color_or_fabric" class="control-label mb-1">Color | Fabric</label>
                            <input id="color_or_fabric" name="color_or_fabric" type="tel" class="form-control @error('color_or_fabric') is-invalid @enderror" value="{{ implode(', ', $color_or_fabricArray ) }}" data-val="true" autocomplete="color_or_fabric">
                            <span style="font-size: 15px;" id="input-description-3" class="input-description">Can add multiple with comma ( , )</span>
                            @error('color_or_fabric')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="headboard" class="control-label mb-1">Headboad</label>
                        <div class="input-group">
                            <input id="headboard" name="headboard" type="tel" class="form-control @error('headboard') is-invalid @enderror" value="{{ implode(', ', $headboardArray ) }}" data-val="true" autocomplete="off">
                            @error('headboard')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <span style="font-size: 15px;" id="input-description-4" class="input-description">Can add multiple with comma ( , )</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="storage" class="control-label mb-1">Storage</label>
                            <input id="storage" name="storage" type="tel" class="form-control @error('storage') is-invalid @enderror" value="{{ implode(', ', $storageArray ) }}" data-val="true" autocomplete="cc-exp">
                            <span style="font-size: 15px;" id="input-description-5" class="input-description">Can add multiple with comma ( , )</span>
                            @error('storage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="matteres" class="control-label mb-1">Matteres</label>
                        <div class="input-group">
                            <input id="matteres" name="matteres" type="tel" class="form-control @error('matteres') is-invalid @enderror" value="{{ implode(', ', $matteresArray ) }}" data-val="true" autocomplete="off">
                            @error('matteres')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <span style="font-size: 15px;" id="input-description-6" class="input-description">Can add multiple with comma ( , )</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="product_id" class=" form-control-label">Select Products</label>
                    </div>
                    <div class="col-12 col-md-3">
                        <select name="product_id" id="select" class="form-control">
                            <option value="" selected disabled>Please select</option>
                            @foreach($products as $item)
                            <option value="{{$item->id}}"  {{ $item->id == $items->product_id ? 'selected' : '' }}>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <center>
                        <div class="card-footer" style="margin-top: 50px;">
                            <button type="submit" class="btn btn-info btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update
                            </button>
                            <a type="reset" class="btn btn-danger btn-sm" style="margin-left: 20px;" href="{{route('productvariation')}}">
                                <i class="fa fa-ban"></i> Cancel
                            </a>
                        </div>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function showHideInputDescriptions() {
  var inputDescriptions = document.querySelectorAll(".input-description");
  for (var i = 0; i < inputDescriptions.length; i++) {
    if (inputDescriptions[i].style.display == "none") {
      inputDescriptions[i].style.display = "block";
    } else {
      inputDescriptions[i].style.display = "none";
    }
  }
}

setInterval(showHideInputDescriptions, 10000); // Show/hide every 5 seconds (adjust as needed)
</script>
@endsection