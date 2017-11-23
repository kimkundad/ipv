@extends('layouts.template-main')

@section('stylesheet')
<link href="{{url('assets/global/css/components.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
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
.mt-comment{
  border-bottom: 1px solid #eef1f5;
}
.alert {
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.portlet.light {
    padding: 15px 20px 10px;
    background-color: #fff;
}
a:hover { text-decoration: none}
.alert, .thumbnail {
    margin-bottom: 0px;
}
.portlet.light .portlet-body {
    padding-top: 0px;
}
.portlet-body{
  color:#999;
}
.portlet>.portlet-title>.actions .btn-icon-only.btn-default.fullscreen:before {
    content: "\f065";
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
        <!--    <div class="page-title">
                            <h1><i class="icon-book-open font-green-haze theme-font"></i> Patient list

                            </h1>
                        </div> -->
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>

                <a href="{{url('welcome')}}" class="btn btn-sm green"><i class="icon-arrow-left" style="font-size:16px;"></i> Home</a>

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
                                  <div class="caption">
                                      <span class="caption-subject bold uppercase font-dark">Patient list</span>
                                      <span class="caption-helper">distance stats...</span>
                                  </div>
                                  <div class="actions">

                                      <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="" title=""> </a>
                                  </div>
                              </div>

                  <div class="portlet-body">


                    <div class="tab-pane active" id="portlet_comments_1">

                      @if(isset($objs))
                              @foreach($objs as $obj)
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">
                                              <a href="{{('patient/'.$obj->id)}}">
                                                <div class="mt-comment">
                                                    <div class="mt-comment-img">

                                                      @if($obj->sex == 2)
                                                      <img src="{{url('assets/avatar/image/1483556517.png')}}" style="height:45px;">
                                                      @else
                                                      <img src="{{url('assets/avatar/image/1483537975.png')}}" style="height:45px;">
                                                      @endif



                                                    </div>

                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">{{$obj->patient_code}}</span>
                                                            <span class="mt-comment-date">{{$obj->created_at}}</span>
                                                        </div>
                                                        <div class="mt-comment-text"> <strong>Hospital No.</strong> {{$obj->hospital_code}}, <strong>Age. </strong> {{$obj->age}}</div>

                                                    </div>
                                                </div>
                                              </a>
                                            </div>
                                            <!-- END: Comments -->

                                            @endforeach
                                                    @endif

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
@endsection

@section('scripts')

@if ($message = Session::get('success_user'))
<script type="text/javascript">
  swal("Success!", "You edit profile Success!", "success");
</script>
@endif


@stop('scripts')
