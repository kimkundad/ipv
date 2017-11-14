@extends('layouts.template-main')

@section('stylesheet')

<link href="{{url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/croppie/croppie.css')}}" rel="stylesheet" type="text/css">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                            <h1>User Profile | Account
                                <small>user account page</small>
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
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet bordered">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">


                            @if(Auth::user()->avatar == null)

                                @if(Auth::user()->sex == 1)
                                  <img alt="" class="img-responsive" src="{{url('assets/avatar/image/1483537975.png')}}">
                                @else
                                  <img alt="" class="img-responsive" src="{{url('assets/avatar/image/1483556517.png')}}">
                                @endif

                            @else
                              <img alt="" class="img-responsive" src="{{url('assets/avatar/image/'.Auth::user()->avatar)}}">
                            @endif

                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {{Auth::user()->name}} </div>

                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-circle green btn-sm">{{Auth::user()->position}}</button>

                        </div>

                        @if (count($errors) > 0)
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">
                                        <i class="icon-home"></i> Personal Info </a>
                                </li>
                                <li >
                                    <a href="#tab_1_2" data-toggle="tab">
                                        <i class="icon-picture"></i> Change Avatar </a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab">
                                        <i class="icon-lock"></i> Change Password </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                    <!-- END PORTLET MAIN -->




                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                          <form  method="POST" action="{{ url('user_profile/'.Auth::user()->id) }}">
                                              {{ method_field($method) }}
                                              {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="hidden" name="id" class="form-control" value="{{Auth::user()->id}}" />
                                                    <input type="text" placeholder="John" name="name" class="form-control" value="{{Auth::user()->name}}" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" placeholder="Doe" name="email" class="form-control" value="{{Auth::user()->email}}"/> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Mobile Number</label>
                                                    <input type="text" placeholder="+1 646 580 DEMO (6284)" name="phone" class="form-control" value="{{Auth::user()->phone}}"/> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Position</label>
                                                    <input type="text" placeholder="Design, Web etc." name="position" class="form-control" value="{{Auth::user()->position}}"/> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Sex</label>
                                                    <label class="checkbox-inline">
                                                      <input type="radio" name="sex" id="inlineCheckbox1" value="1" {{ Auth::user()->sex == 1 ? 'checked' : '' }}> Male
                                                    </label>
                                                    <label class="checkbox-inline">
                                                      <input type="radio" name="sex" id="inlineCheckbox2" value="2" {{ Auth::user()->sex == 2 ? 'checked' : '' }}> Female
                                                    </label>
                                                    </div>
                                                    <br><br>
                                                <div class="margiv-top-10">
                                                  <button type="submit" class="btn green">
                                                      Save Changes
                                                  </button>

                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- END PERSONAL INFO TAB -->
                                        <!-- CHANGE AVATAR TAB -->
                                        <div class="tab-pane" id="tab_1_2">
                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. </p>


                                          <!--    <form  method="POST" action="{{ url('update_pic/') }}" enctype="multipart/form-data">
                                              <input type="hidden" name="_method" value="post">
                                              {{ csrf_field() }}
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="hidden" name="id" class="form-control" value="{{Auth::user()->id}}" />
                                                                <input type="file" name="image" accept="image/*"> </span>
                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix margin-top-10">
                                                        <span class="label label-danger">NOTE! </span>
                                                        <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                    </div>
                                                </div>
                                                <div class="margin-top-10">
                                                  <button type="submit" class="btn green">
                                                      Save Changes
                                                  </button>
                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                </div>
                                            </form>  -->








                                                  <div class="form-group">
                                                      <div class="fileinput fileinput-new" data-provides="fileinput">
                                                          <div id="upload-demo" style="max-width: 280px;"></div>

                                                          <div>
                                                              <span class="btn default btn-file">
                                                                  <span class="fileinput-new"> Select image </span>
                                                                  <span class="fileinput-exists"> Change </span>
                                                                  <input type="hidden" name="id" class="form-control" value="{{Auth::user()->id}}" />
                                                                  <input type="file" id="upload" name="image" accept="image/*" > </span>
                                                              <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                          </div>

                                                      </div>
                                                      <div class="clearfix margin-top-10">
                                                          <span class="label label-danger">NOTE! </span>
                                                          <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                      </div>
                                                  </div>
                                                  <div class="margin-top-10">
                                                    <button type="submit" class="btn green upload-result">
                                                        Save Changes
                                                    </button>
                                                      <a href="javascript:;" class="btn default"> Cancel </a>
                                                  </div>




                                        </div>
                                        <!-- END CHANGE AVATAR TAB -->
                                        <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane" id="tab_1_3">
                                          <form  method="POST" action="{{ url('update_pass/') }}">
                                              {{ csrf_field() }}
                                              <input type="hidden" name="id" class="form-control" value="{{Auth::user()->id}}" />
                                              <input type="hidden" name="_method" value="post">
                                                <div class="form-group">
                                                    <label class="control-label">Current Password</label>
                                                    <input type="password" class="form-control" name="current-password" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">New Password</label>
                                                    <input type="password" class="form-control" name="password"/> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Re-type New Password</label>
                                                    <input type="password" class="form-control" name="password_confirmation" /> </div>
                                                <div class="margin-top-10">
                                                  <button type="submit" class="btn green">
                                                      Change Password
                                                  </button>

                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- END CHANGE PASSWORD TAB -->
                                        <!-- PRIVACY SETTINGS TAB -->



                                        <!-- END PRIVACY SETTINGS TAB -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
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
<script src="{{url('assets/croppie/croppie.js')}}" type="text/javascript"></script>


<script type="text/javascript">

$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});

$('#upload').on('change', function () {

	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});
    }
    reader.readAsDataURL(this.files[0]);
});

$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		$.ajax({
			url: "{{url('image-crop')}}",
			type: "POST",
			data: {"image":resp},
			success: function (data) {
				swal("Success!", "Change avatar image success!", "success");

        var delayMillis = 3000; //1 second

        setTimeout(function() {
          window.location = "{{url('user_profile')}}";
        }, delayMillis);
			}
		});
	});
});

</script>

@if ($message = Session::get('success_user'))
<script type="text/javascript">
  swal("Success!", "You edit profile Success!", "success");
</script>
@endif


@if ($message = Session::get('error_pass'))
<script type="text/javascript">
  swal("Error!", "Please enter password!", "error");
</script>
@endif

@if ($message = Session::get('success_pass'))
<script type="text/javascript">
  swal("Success!", "Change your password Success!", "success");
</script>
@endif

@if ($message = Session::get('error_correct_pass'))
<script type="text/javascript">
  swal("Error!", "Please enter correct current password!", "error");
</script>
@endif

@if ($message = Session::get('success_user_pic'))
<script type="text/javascript">
  swal("Success!", "Change avatar image success!", "success");
</script>
@endif


@stop('scripts')
