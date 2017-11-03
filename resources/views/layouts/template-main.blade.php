<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Metronic Admin Theme #4 | Blank Page Layout</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Preview page of Metronic Admin Theme #4 for blank page layout" name="description">
        <meta content="" name="author">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        @include('layouts.inc-stylesheet')
        @yield('stylesheet')


<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->






        @include('layouts.inc-header')









        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->

            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" style="min-height: 79px;">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Blank Page Layout
                                <small>blank page layout</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->

                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="#">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">Blank Page</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Page Layouts</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="note note-info">
                        <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
                    </div>



                    @yield('content')







                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->


        </div>











        @include('layouts.inc-script')
        @yield('scripts')




</body>
</html>
