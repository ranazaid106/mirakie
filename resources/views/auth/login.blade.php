<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    
    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('public/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
  

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('popup_images/popup.png') }}" alt="CoolAdmin">
                            </a>
                        </div>
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

                        @if ($errors->any())
                        <div class="alert alert-danger" style="height:40px;width:100%" id="error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li >{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <script>
                            setTimeout(function() {
                                $('#error').fadeOut('slow');
                            }, 5000); // 10 seconds
                        </script>
                        @endif

                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input class="au-input au-input--full @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- show password --}}

                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="myInput" class="au-input au-input--full @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                    <label for="pass_show" style="padding-top:5px"> Show Password 
                                     <input type="checkbox" onclick="myFunction()" id="pass_show"> 
                                    </label> 
                               
                                </div>
                             {{-- show password --}}

                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                                    </label>
                                    <label>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgotten Password?</a>
                                        @endif
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>

                            </form>


                         {{-- show password  js--}}
                            
                            <script>
                            function myFunction() {
                              var x = document.getElementById("myInput");
                              if (x.type === "password") {
                                x.type = "text";
                              } else {
                                x.type = "password";
                              }
                            }
                            </script>

                         {{-- show password  js--}}


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<script
    

    <!-- Jquery JS-->
    <script src="{{asset('public/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('public/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('public/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('public/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('public/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('public/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('public/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('public/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('public/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('public/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('public/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->