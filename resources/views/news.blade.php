@extends('layouts.template-main')

@section('stylesheet')
<link href="{{url('assets/global/css/components.min.css')}}" rel="stylesheet" type="text/css">

<style>
.portlet.light {
    border-radius: 4px!important;
}
.profile-userpic img {

    height: auto;

}
.croppie-container {
    padding: 30px 0px 30px 0px;
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





        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-6">

              <div class="portlet light bordered">



                <div class="portlet-body form">

                </div>

              </div>


            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->







        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->






<nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
              <li>
                  <a href="{{url('welcome')}}" target="_blank">
                      <span>Home</span>
                      <i class="icon-home"></i>
                  </a>
              </li>
                <li>
                    <a href="{{url('/patient')}}" target="_blank" class="active">
                        <span>Patient</span>
                        <i class="icon-notebook"></i>
                    </a>
                </li>

                <li>
                    <a href="{{url('user_profile')}}" target="_blank">
                        <span>User_profile</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="{{url('report_item')}}" target="_blank">
                        <span>Report</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>



@endsection

@section('scripts')

@if ($message = Session::get('success_user'))
<script type="text/javascript">
  swal("Success!", "You edit profile Success!", "success");
</script>
@endif


@stop('scripts')
