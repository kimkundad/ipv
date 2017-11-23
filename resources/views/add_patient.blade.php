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
                            <h1>Add Patient
                                <small>to your process</small>
                            </h1>
                        </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{url('welcome')}}" class="btn btn-sm default "><i class="icon-arrow-left" style="font-size:16px;"></i> Home</a>
            </li>


        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->




        <br>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-6">

              <div class="portlet light bordered">
                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-user-follow font-red-sunglo theme-font"></i>
                                        <span class="caption-subject bold uppercase"> Add Patient</span>
                                    </div>
                                </div>


                <div class="portlet-body form">
                  <form  method="POST" action="{{ url('patient') }}">
                      {{ method_field($method) }}
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label">Patient ID</label>
                            <input type="text" name="patient_code" class="form-control" value="PATIENT-{{$set_num}}" readonly/> </div>
                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <input type="text" name="set_datel" class="form-control" value="{{$set_date}}"/> </div>

                        <div class="form-group{{ $errors->has('hospital_code') ? ' has-error' : '' }}">
                            <label class="control-label">Hospital Number</label>
                            <input type="text" placeholder="+1 646 580 DEMO (6284)" name="hospital_code" class="form-control" value="{{ old('hospital_code') }}"/>

                                  @if ($errors->has('hospital_code'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('hospital_code') }}</strong>
                                      </span>
                                  @endif

                                </div>

                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label class="control-label">Sex</label>
                            <label class="checkbox-inline">
                              <input type="radio" name="sex" id="inlineCheckbox1" value="1" > Male
                            </label>
                            <label class="checkbox-inline">
                              <input type="radio" name="sex" id="inlineCheckbox2" value="2" > Female
                            </label>

                            @if ($errors->has('sex'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sex') }}</strong>
                                </span>
                            @endif

                            </div>
                            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                <label class="control-label">Age</label>
                                <input type="number" name="age" class="form-control" value="{{ old('age') }}"/>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                              </div>
                            <br><br>
                        <div class="margiv-top-10">
                          <button type="submit" class="btn green">
                              Submit
                          </button>

                            <a href="javascript:;" class="btn default"> Cancel </a>
                        </div>
                    </form>
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
