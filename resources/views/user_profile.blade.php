@extends('layouts.template-main')

@section('stylesheet')

<link href="{{url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css">
<style>
.portlet.light {
    border-radius: 4px!important;
}
.profile-userpic img {

    height: auto;

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
                <a href="{{url('welcome')}}"><i class="icon-home"></i> Home</a>
                <i class="fa fa-circle"></i>
            </li>

            <li>
                <span class="active"><i class="icon-user-following"></i> User Profile</span>
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
                            <img src="{{url('assets/pages/media/profile/profile_user.jpg')}}" class="img-responsive" alt=""> </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> Marcus Doe </div>

                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-circle green btn-sm">Developer</button>

                        </div>
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
                                            <form role="form" action="#">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" placeholder="John" class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" placeholder="Doe" class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Mobile Number</label>
                                                    <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Interests</label>
                                                    <input type="text" placeholder="Design, Web etc." class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Occupation</label>
                                                    <input type="text" placeholder="Web Developer" class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">About</label>
                                                    <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Website Url</label>
                                                    <input type="text" placeholder="http://www.mywebsite.com" class="form-control" /> </div>
                                                <div class="margiv-top-10">
                                                    <a href="javascript:;" class="btn green"> Save Changes </a>
                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- END PERSONAL INFO TAB -->
                                        <!-- CHANGE AVATAR TAB -->
                                        <div class="tab-pane" id="tab_1_2">
                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. </p>
                                            <form action="#" role="form">
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="..."> </span>
                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix margin-top-10">
                                                        <span class="label label-danger">NOTE! </span>
                                                        <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                    </div>
                                                </div>
                                                <div class="margin-top-10">
                                                    <a href="javascript:;" class="btn green"> Submit </a>
                                                    <a href="javascript:;" class="btn default"> Cancel </a>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- END CHANGE AVATAR TAB -->
                                        <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane" id="tab_1_3">
                                            <form action="#">
                                                <div class="form-group">
                                                    <label class="control-label">Current Password</label>
                                                    <input type="password" class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">New Password</label>
                                                    <input type="password" class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Re-type New Password</label>
                                                    <input type="password" class="form-control" /> </div>
                                                <div class="margin-top-10">
                                                    <a href="javascript:;" class="btn green"> Change Password </a>
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

@stop('scripts')
