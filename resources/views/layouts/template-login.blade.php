<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>IPV</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />


        <!-- Mobile Metas -->
    		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />

    		<!-- Set Up the App Icon -->
    		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('./assets/img/ios/h/touch-icon-ipad-retina.png')}}" />
    		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('./assets/img/ios/h/apple-touch-icon.png')}}">
    		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('./assets/img/ios/m/apple-touch-icon.png')}}">
    		<link rel="apple-touch-icon-precomposed" href="{{url('./assets/img/ios/l/apple-touch-icon-precomposed.png')}}">
    		<link rel="icon" href="{{url('./assets/img/ico/icon.png')}}" type="image/gif" sizes="48x48">

    		<!-- Load It Like A Native App -->

    		<meta name="apple-touch-fullscreen" content="yes">
    		<meta name="apple-mobile-web-app-capable" content="yes">
    		<meta name="apple-mobile-web-app-status-bar-style" content="black">


    		<!-- Customize the Startup Screen -->
    		<link rel="apple-touch-startup-image" href="{{url('./assets/img/ios/l/apple-touch-startup-image-320x460.png')}}"media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)">
    		<link rel="apple-touch-startup-image" href="{{url('./assets/img/ios/h/apple-touch-startup-image-640x920.png')}}" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)">
    		<link rel="apple-touch-startup-image" href="{{url('./assets/img/ios/h/apple-touch-startup-image-640x1096.png')}}" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
    		<link rel="apple-touch-startup-image" href="{{url('./assets/img/ios/l/apple-touch-startup-image-768x1004.png')}}" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)">
    		<link rel="apple-touch-startup-image" href="{{url('./assets/img/ios/l/apple-touch-startup-image-748x1024.png')}}" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)">
    		<link rel="apple-touch-startup-image" href="{{url('./assets/img/ios/h/apple-touch-startup-image-1536x2008.png')}}" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)">
    		<link rel="apple-touch-startup-image" href="{{url('./assets/img/ios/h/apple-touch-startup-image-1496x2048.png')}}" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)">





        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"  type="text/css" />
        <link rel="stylesheet" href="{{url('./assets/global/plugins/font-awesome/css/font-awesome.min.css')}}"  type="text/css" />
        <link rel="stylesheet" href="{{url('./assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}"  type="text/css" />
        <link rel="stylesheet" href="{{url('./assets/global/plugins/bootstrap/css/bootstrap.min.css')}}"  type="text/css" />
        <link href="{{url('./assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{url('./assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('./assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{url('./assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{url('./assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{url('./assets/pages/css/login-4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
      <style>
      .login {
    background-color: #efefef;
}
.login .content {

    margin-top: 00px;
}
@media (max-width: 480px)
{.login .content {
    padding: 30px;
    width: 280px;
}}
.login .logo {
    margin: 30px auto 0px;
    padding: 15px;
    text-align: center;
}
      </style>

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-2 -->



        <div class="logo">
          <img src="{{url('assets/img/AW_app_ipv_calculator_top.png')}}" style="height: 40px;" alt="">
          <a href="#">
            <br>
              <img src="{{url('assets/img/AW_app_ipv_calculator_2.png')}}" style="height: 40px; margin-top: 20px;" alt=""> </a>
        </div>

                    @yield('content')


        <!-- END : LOGIN PAGE 5-2 -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('./assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('./assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('./assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <script src="{{asset('./assets/pages/scripts/form-validation2.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('./assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <!-- BEGIN PAGE LEVEL SCRIPTS <script src="{{asset('./assets/pages/scripts/login-4.js')}}" type="text/javascript"></script> -->

        <script src="{{asset('./assets/pages/scripts/login-4.js?12')}}" type="text/javascript"></script>

    </body>

</html>
