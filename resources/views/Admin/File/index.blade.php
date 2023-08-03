@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.js"></script>

<style>
    .swal2-custom {
        width: 500px;
        /* left: 20%; */
        transform: translate(20%, 5%);
        position: fixed !important;
    }
    .fileDropZone {
        width: 200px;
	    height: 200px;
	    border: 1px dashed #999;
	    border-radius: 6px;
        position: relative;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .upload-file-icon {
        position: absolute;
        z-index: 1;
        width: 80px;
        height: 80px;
    }
    .upload-file-input{
        position: absolute;
	    z-index: 2;
	    width: 100%;
	    height: 100%;
	    opacity: 0;
    }
</style>

<div class="card">
    <div class="card-header">File </div>
    <div class="card-body">
        @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success')}}',
                showConfirmButton: false,
                showCloseButton: true,
                closeButtonText: 'OK',
                timer: 15000,
                customClass: 'swal2-custom'
            });
        </script>
        @endif
        <div class="card-title">
            <h3 class="text-center title-2">Upload</h3>
        </div>
        <hr>
        <form method="post" action="{{route('file_Upload')}}" enctype="multipart/form-data">
            @csrf

            <div class="container" style="display: flex;justify-content: center;align-items: center;">
                <div class="col-6">
                    <div class="form-group text-center">
                        <small id="file-name" style="margin:auto"></small>
                       <div class="fileDropZone">
                           <img src="http://100dayscss.com/codepen/upload.svg" class="upload-file-icon" />
                           <input id="file" name="file" accept=".pdf,.csv,.xlsx" type="file" class="form-control @error('file') is-invalid @enderror upload-file-input" value="" data-val="true" autocomplete="file">
                       </div> 
                        @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <center>
                    <button type="submit" class="btn btn-info btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Upload
                    </button>
                </center>
            </div>
        </form>
    </div>
</div>

<script>
    const fileInput = document.getElementById('file');
    const fileName = document.getElementById('file-name');

    fileInput.addEventListener('change',function(){
        const file = this.files[0];
        if(file){
            fileName.innerText = file.name;
        }
    });
</script>

@endsection