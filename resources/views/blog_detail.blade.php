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
.portlet.light {
    padding: 20px 20px 15px;

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
            <div class="col-md-8 col-md-offset-2">

              <div class="portlet light bordered">



                <div class="portlet-body form">


                  <div class="events-content">

                    <div class="mt-content border-grey-steel">
                      <img src="{{url('assets/blog/masonry6-768x500.jpg')}}" class="img-responsive">
                      <h4><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b></h4>
                      <span style="font-size:12px;color: #9E9E9E; ">BYANNA SWINDEL21 SEPTEMBER, 2016RELAX3 COMMENTS</span>
                      <br><br>
                      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the too charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound are  ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as sayngthrough shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able to do what we like righteous indignation and dislike men who are so blinded by desire, that they cannot.  Our being able to do what we like righteous indignation and dislike men who are so blinded by desire, that they cannot.</p>

                      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the too charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound are  ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as sayngthrough shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power.</p>

                      <p><b>of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound are ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the distinguish. In a free hour, when our power.</b></p>
                      <p>of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound are  ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as sayngthrough shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able to do what we like righteous indignation and dislike men  cannot.  Our being able to do what we like righteous indignation and dislike men who are so blinded by desire, that they cannot.</p>
                    </div>

                  </div>





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
                  <a href="{{url('welcome')}}" class="active">
                      <span>Home</span>
                      <i class="icon-home"></i>
                  </a>
              </li>
                <li>
                    <a href="{{url('/patient')}}" >
                        <span>Patient</span>
                        <i class="icon-notebook"></i>
                    </a>
                </li>

                <li>
                    <a href="{{url('user_profile')}}" >
                        <span>User_profile</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="{{url('report_item')}}" >
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
