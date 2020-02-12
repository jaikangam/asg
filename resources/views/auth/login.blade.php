<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ASG Hostel | Login  </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/img/home/favicon.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->


    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/core/app.js') }} "></script>
    <!-- /theme JS files -->

</head>

<body class="login-container">

    

    <!-- Page container -->
    <div class="page-container" >

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper" style="padding-top:100px">

                <!-- Content area -->
                <div class="content">

                    <!-- Simple login form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5 class="content-group">Login to ASG Portal <small class="display-block">Enter your credentials below</small></h5>
                            </div>

                            <!-- Open Username Input -->
                            <div class="form-group has-feedback has-feedback-left">

                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"   name="email" value="{{ old('email') }}" required autofocus placeholder="Username">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>
                            <!-- Close Username Input -->


                            <!-- Open Password input -->
                            <div class="form-group has-feedback has-feedback-left">
                                <input  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required  placeholder="Password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <!-- Close Password input -->


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
                            </div>

                            <div class="text-center">
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                            </div>
                        </div>
                    </form>
                    <!-- /simple login form -->


                    <!-- Footer -->
                    <div class="footer text-muted text-center">
                         Copyright &copy; 2015 - <?php echo  date("Y");  ?>. <a href="/"> ASG Hostel | All Rights Reserved, </a> Made with love by <a href="#" target="_blank"> Khamlou InfoTech </a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>
