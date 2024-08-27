<!doctype html>
<html class="fixed">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="baseUrl" content="{{env('APP_URL')}}">

    <title>Admin Login</title>
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.js')}}"></script>

    <!-- jQuery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <section class="body-sign">
        <div class="center-sign">
            <a href="/admin/login" class="logo pull-left">
                <img src="{{ asset('assets/images/ClearRisk_BlackLOGO.png') }}" height="108" alt="Porto Admin" class="padding-3"/>
            </a>

            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
                </div>
                <div class="panel-body">
                    
                    <form data-action="/admin/check" method="post" class="adminFrm">
                        @csrf
                        <div class="form-group mb-lg">
                            <label for="Email">Email</label>
                            <div class="input-group input-group-icon">
                                <input name="Email" id="Email" type="text" class="form-control input-lg" required />
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                <label for="password" class="pull-left">Password</label>
                                <a href="pages-recover-password.html" class="pull-right">Lost Password?</a>
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="password" id="password" type="password" class="form-control input-lg" required />
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="rememberme" type="checkbox" />
                                    <label for="RememberMe">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
                                <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
                            </div>
                        </div>

                        <p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a></p>
                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2024. All Rights Reserved by TRPGLOBAL.</p>
        </div>
    </section>
        <script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets/javascripts/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('assets/javascripts/theme.custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets/javascripts/theme.init.js')}}"></script>

        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
    <!-- Custom JS -->
         <script src="{{ asset('assets/custom/common.js') }}"></script>
</body>

</html> 
