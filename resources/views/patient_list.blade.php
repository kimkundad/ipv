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
.portlet.light.bordered>.portlet-title {
    border: none;
}
.alert {
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.portlet.light {
    padding: 15px 20px 1px;
    background-color: #fff;
}
a:hover { text-decoration: none}
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
                            <h1><i class="icon-book-open font-green-haze theme-font"></i> Patient list

                            </h1>
                        </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>

                <a href="{{url('welcome')}}" class="btn btn-sm green"><i class="icon-arrow-left" style="font-size:16px;"></i> Home</a>
                <i class="fa fa-circle"></i>
            </li>

        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->




        <br>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">


              @if(isset($objs))
                      @foreach($objs as $obj)


                      <div class="col-md-6">
                                      <!-- BEGIN PORTLET-->
                                      <div class="portlet light bordered">
                                          <div class="portlet-title" style="margin-bottom: 0px;">
                                              <div class="caption">
                                                  <a href="{{('patient/'.$obj->id)}}"><i class="icon-share font-dark"></i>
                                                  <span class="caption-subject font-dark bold uppercase">{{$obj->patient_code}}</span></a>
                                              </div>
                                              <div class="actions">

                                                @if($obj->sex == 1)
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

                                          <a href="{{('patient/'.$obj->id)}}">
                                          <div class="portlet-body">

                                              <div class="alert alert-success">
                                                  <strong>Hospital No.</strong> {{$obj->hospital_code}} </div>
                                              <div class="alert alert-info">
                                                  <strong>Age. </strong> {{$obj->age}} </div>

                                          </div>
                                        </a>

                                      </div>
                                      <!-- END PORTLET-->



                                  </div>



              @endforeach
                      @endif





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
