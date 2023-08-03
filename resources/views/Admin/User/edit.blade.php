@extends('layouts.main')
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
@can('Update User')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Update User</div>
        <div class="card-body">
            <!--<div class="card-title">-->
            <!--    <h3 class="text-center title-2">User</h3>-->
            <!--</div>-->
            <hr>
            <form action="{{route('updateuser',$item->id)}}" method="post" class="form-horizontal">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <label for="name" class=" form-control-label">Name</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}" data-val="true" autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="email" class="control-label mb-1">Email</label>
                        <div class="input-group">
                            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{$item->email}}" data-val="true" autocomplete="off">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px;">

                    {{-- show password --}}
                    <div class="col-6">
                        <label for="password" class="control-label mb-1">Password</label>
                        <div class="input-group">
                            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="" data-val="true" autocomplete="off">
                            <br><br>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                          

                        </div>
                        <label for="user_edit" style="padding-top:5px"> Show Password 
                            <input type="checkbox" onclick="myFunction()" id="user_edit"> 
                           </label> 
                    </div>
                    {{-- show password --}}


                    <div class="col col-md-1"style="margin-top: 30px;">
                        <label for="role" class=" form-control-label">Select Role</label>
                    </div>
                    <div class="col-12 col-md-5" style="margin-top: 20px;">
                        <select name="role[]" id="select" class="form-control">
                            <option value="" selected disabled>Please select</option>
                            @foreach($roles as $item)
                            @if(isset($role))
                            <option value="{{$item->id}}" {{ $item->id == $role->id ? 'selected' : '' }}>{{$item->name}}</option>
                            @else
                             <option value="{{$item->id}}" >{{$item->name}}</option>
                            @endif
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
    You do not have permission to update user.
</div>
@endcan
@endsection

   {{-- show password  js--}}
                            
   <script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>

 {{-- show password  js--}}