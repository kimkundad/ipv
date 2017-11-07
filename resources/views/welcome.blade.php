@extends('layouts.template-main')

@section('stylesheet')
<link href="{{url('assets/pages/css/about.min.css')}}" rel="stylesheet" type="text/css">
<style>
.portlet.light {
    border-radius: 4px!important;
}
</style>
@stop('stylesheet')

@section('content')

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
        
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->




        <br>
        <div class="row margin-bottom-20">
                        <div class="col-md-3">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <i class="icon-user-follow font-red-sunglo theme-font"></i>
                                </div>
                                <div class="card-title">
                                    <span> Add Patient </span>
                                </div>
                                <div class="card-desc">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <i class="icon-book-open font-green-haze theme-font"></i>
                                </div>
                                <div class="card-title">
                                    <span> Patient List </span>
                                </div>
                                <div class="card-desc">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <a href="{{url('user_profile')}}">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <i class="icon-note font-purple-wisteria theme-font"></i>
                                </div>
                                <div class="card-title">
                                    <span> Edit Profile </span>
                                </div>
                                <div class="card-desc">

                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-3">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <i class="icon-logout font-blue theme-font"></i>
                                </div>
                                <div class="card-title">
                                    <span> Sign out </span>
                                </div>
                                <div class="card-desc">

                                </div>
                            </div>
                        </div>
                    </div>







        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
@endsection

@section('scripts')

@stop('scripts')
