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

                <a href="{{url('welcome')}}" class="btn btn-sm green"><i class="icon-arrow-left" style="font-size:16px;"></i> Patient list

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
            <div class="col-md-12">

              <div class="portlet light bordered">
                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">



                                        <a href="javascript:;" class="btn  default">
                                            <b><i class="icon-graduation"></i> H No. {{$objs->hospital_code}}</b>
                                        </a>


                                        <a href="javascript:;" class="btn  blue">
                                            <b><i class="icon-ghost"></i> Age. {{$objs->age}}</b>
                                        </a>


                                        <a href="javascript:;" class="btn btn-icon-only yellow">
                                            <i class="icon-symbol-male"></i>
                                        </a>

                                    </div>

                                    <div class="actions">

                                      <a href="javascript:;" class="btn btn-icon-only red">
                                                                      <i class="icon-wrench"></i>
                                                                  </a>

                                    </div>


                                </div>


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
@endsection

@section('scripts')

@if ($message = Session::get('success_user'))
<script type="text/javascript">
  swal("Success!", "You edit profile Success!", "success");
</script>
@endif


@stop('scripts')
