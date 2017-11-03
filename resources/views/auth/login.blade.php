@extends('layouts.template-login')

@section('content')
<style>
.user-login-5 .login-container>.login-content {
    margin-top: 15%;
}
.mt-radio>span:after {
    left: 5px;
    top: 5px;
    height: 6px;
    width: 6px;
    border-radius: 100%!important;
    background: #fff;
}
</style>
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{url('/login')}}" method="post" novalidate="novalidate">
      {{ csrf_field() }}
        <div class="form-title">
            <span class="form-title">Welcome.</span>

        </div>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="email" name="email"> </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"> </div>
        <div class="form-actions">
            <button type="submit" class="btn red btn-block uppercase">Login</button>
        </div>
        <div class="form-actions">
            <div class="pull-left">
                <label class="rememberme mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" name="remember" value="1"> Remember me
                    <span></span>
                </label>
            </div>
            <div class="pull-right forget-password-block">
                <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
            </div>
        </div>
        <div style="border-top: 1px solid #69a0c4; margin-top: 30px;">

        </div>
        <div class="create-account">
            <p>
                <a href="javascript:;" class="btn-primary btn" id="register-btn">Create an account</a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="{{url('/password/reset')}}" method="post" novalidate="novalidate">
        <div class="form-title">
            <span class="form-title">Forget Password ?</span>
            <span class="form-subtitle">Enter your e-mail to reset it.</span>
        </div>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"> </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn btn-default">Back</button>
            <button type="submit" class="btn btn-primary uppercase pull-right">Submit</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="{{url('/register')}}" method="post" novalidate="novalidate">
      {{ csrf_field() }}
        <div class="form-title">
            <span class="form-title">Sign Up</span>
        </div>
        <p class="hint"> Enter your personal details below: </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Full Name</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="name" value="{{ old('name') }}"> </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Position</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Position" name="position" value="{{ old('position') }}"> </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Mobile</label>
            <input class="form-control placeholder-no-fix" type="number" placeholder="Mobile number" name="phone" value="{{ old('phone') }}"> </div>

            <div class="form-group margin-top-20 margin-bottom-20">
              <div class="mt-radio-list">
                <label class="mt-radio mt-radio-outline">
                    <input type="radio" name="sex" id="optionsRadios22" value="1"> Male
                    <span></span>
                </label>
                <label class="mt-radio mt-radio-outline">
                    <input type="radio" name="sex" id="optionsRadios23" value="2"> Female
                    <span></span>
                </label>
                </div>
                <div id="register_tnc_error"> </div>
            </div>



        <p class="hint"> Enter your account details below: </p>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" value="{{ old('email') }}"> </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"> </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation"> </div>
        <div class="form-group margin-top-20 margin-bottom-20">
            <label class="mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="tnc"> I agree to the
                <a href="javascript:;">Terms of Service </a> &amp;
                <a href="javascript:;">Privacy Policy </a>
                <span></span>
            </label>
            <div id="register_tnc_error"> </div>
        </div>
        <div class="form-actions">
            <button type="button" id="register-back-btn" class="btn btn-default">Back</button>
            <button type="submit" id="register-submit-btn" class="btn red uppercase pull-right">Submit</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<div class="copyright hide"> 2014 © Metronic. Admin Dashboard Template. </div>
@endsection
