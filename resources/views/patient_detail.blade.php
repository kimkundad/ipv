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
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                            <h1><i class="icon-book-open font-green-haze theme-font"></i> ID : {{$objs->patient_code}}

                            </h1>
                        </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>

                <a href="{{url('patient')}}" class="btn btn-sm green"><i class="icon-arrow-left" style="font-size:16px;"></i> Patient list

                                                                    </a>
                <i class="fa fa-circle"></i>
            </li>

        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->




        <br>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
          <div class="col-md-6">
                          <!-- BEGIN PORTLET-->
                          <div class="portlet light bordered">
                              <div class="portlet-title" style="margin-bottom: 0px;">
                                  <div class="caption">
                                      <i class="icon-share font-dark"></i>
                                      <span class="caption-subject font-dark bold uppercase">{{$objs->patient_code}}</span>
                                  </div>
                                  <div class="actions">

                                    @if($objs->sex == 1)
                                    <a class="btn btn-circle btn-icon-only btn-danger" href="javascript:;">
                                        <i class="icon-symbol-male"></i>
                                    </a>
                                    @else
                                    <a class="btn btn-circle btn-icon-only btn-success" href="javascript:;">
                                        <i class="icon-symbol-female"></i>
                                    </a>
                                    @endif



                                      <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                          <i class="icon-wrench"></i>
                                      </a>


                                  </div>
                              </div>
                              <div class="portlet-body">

                                  <div class="alert alert-success">
                                      <strong>Hospital No.</strong> {{$objs->hospital_code}} </div>
                                  <div class="alert alert-info">
                                      <strong>Age. </strong> {{$objs->age}} </div>


                              </div>
                          </div>
                          <!-- END PORTLET-->



                      </div>














                      <div class="col-lg-6 col-xs-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-globe font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Product</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" class="active" data-toggle="tab" aria-expanded="true"> TAC-BID </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab_1_2" data-toggle="tab" aria-expanded="false"> TAC-OD </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <!--BEGIN TABS-->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1_1">

                                          111111111111111111111

                                          </div>
                                        <div class="tab-pane" id="tab_1_2">

                                          2222222222222222222222222222

                                            </div>
                                    </div>
                                    <!--END TABS-->
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>

        </div>
        <!-- END PAGE BASE CONTENT -->







        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
@endsection

@section('scripts')

@if ($message = Session::get('success_user'))
<script type="text/javascript">
  swal("Success!", "You edit profile Success!", "success");
</script>
@endif


@stop('scripts')
