@extends('layouts.template-main')

@section('stylesheet')
<link href="{{url('assets/global/css/components.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{url('assets/date/css/bootstrap-datepicker.standalone.css')}}">
<link href="{{url('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/text/dist/summernote.css')}}" rel="stylesheet">
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
                            <h1><i class="icon-book-open font-green-haze theme-font"></i> {{$objs->patient_code}}

                            </h1>
                        </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>

                <a href="{{url('patient/'.$objs->id)}}" class="btn btn-sm green"><i class="icon-arrow-left" style="font-size:16px;"></i> Back</a>
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
                                                  <i class="icon-pencil font-dark"></i>
                                                  <span class="caption-subject font-dark bold uppercase">
                                                    Add @if($num_product == 1)
                                                    TAC-BID
                                                    @else
                                                    TAC-OD
                                                    @endif
                                                  </span>
                                              </div>

                                          </div>


                                          <div class="portlet-body">

                                            <form  method="POST" action="{{ url('patient_item') }}">
                                                {{ method_field($method) }}
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label class="control-label">Date</label>
                                                  <!--  <input type="text" name="set_datel" class="form-control" value="{{$set_date}}"/> -->

                                                  <div class="input-group">
                                                      <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </span>
                                                      <input type="text" readonly data-plugin-datepicker name="set_date" value="{{$set_date}}" class="form-control datepicker" required="">
                                                    </div>

                                                  </div>
                                                    <input type="hidden" name="set_comment" class="form-control" value="{{$num_product}}" readonly/>
                                                    <input type="hidden" name="cat_id" class="form-control" value="{{$objs->id}}" readonly/>



                                                  <div class="form-group{{ $errors->has('trough') ? ' has-error' : '' }}">
                                                      <label class="control-label">Trough(CO)</label>
                                                      <input type="number" step="0.01" name="trough" class="form-control" value="{{ old('trough') }}"/>

                                                            @if ($errors->has('trough'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('trough') }}</strong>
                                                                </span>
                                                            @endif

                                                          </div>

                                                  <div class="form-group{{ $errors->has('dose_1') ? ' has-error' : '' }}">
                                                      <label class="control-label">Dose(mg/day)</label>
                                                      <input type="number" step="0.01" name="dose_1" class="form-control" value="{{ old('dose_1') }}"/>

                                                            @if ($errors->has('dose_1'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('dose_1') }}</strong>
                                                                </span>
                                                            @endif

                                                          </div>





                                                      <div class="form-group">
                                                          <label class="control-label">comment</label>
                                                          <textarea class="form-control" name="comment" id="summernote" rows="4">@if($num_product == 1){{$objs->comment_1}}@else{{$objs->comment_2}}@endif</textarea>
                                                        </div>
                                                      
                                                  <div class="margiv-top-10">
                                                    <button type="submit" class="btn green">
                                                        Submit
                                                    </button>

                                                      <a href="{{url('patient/'.$objs->id)}}" class="btn default"> Cancel </a>
                                                  </div>
                                              </form>


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
<script src="{{url('assets/date/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/text/dist/summernote.js')}}"></script>

<script type="text/javascript">
$(document).ready(function() {
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $('#summernote').summernote({

    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
    toolbar: [
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']]
  ],
    disableDragAndDrop: true,
    height: 200,
    minHeight: null,
    maxHeight: null,
    focus: true

  });
});

var postForm = function() {
var content = $('textarea[name="comment"]').html($('#summernote').code());
}
</script>

<script>
$.fn.datepicker.defaults.format = "dd-mm-yyyy";
$('.datepicker').datepicker({
});
</script>

@if ($message = Session::get('success_user'))
<script type="text/javascript">
  swal("Success!", "You edit profile Success!", "success");
</script>
@endif


@stop('scripts')
