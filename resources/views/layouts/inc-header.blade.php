<style>
@media (max-width: 767px){
.page-header.navbar .top-menu .navbar-nav>li.dropdown-language .dropdown-toggle .langname,
.page-header.navbar .top-menu .navbar-nav>li.dropdown-user .dropdown-toggle .username.username-hide-on-mobile,
.page-header.navbar .top-menu .navbar-nav>li.separator {
     display: -webkit-inline-box;
}
}
.page-header.navbar .page-logo .logo-default {
    margin: 20px 10px 0;
    height: 35px;
}
.page-header.navbar .page-logo {
    float: left;
    display: block;
    height: 60px;
    padding-left: 0px;
    padding-right: 20px;
}
.slimScrollDiv{
  height: 220px;
}
@media (max-width: 767px){
  .page-header.navbar .top-menu .navbar-nav>li.dropdown-notification .dropdown-menu {
      margin-right: -150px;
  }
}

</style>
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="#">
                <img src="{{url('assets/img/AW_app_ipv_calculator_2.png')}}" alt="logo" class="img-responsive logo-default"> </a>

        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->

        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->

        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->

            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">


                  <li class="separator hide"> </li>
                  <!-- BEGIN NOTIFICATION DROPDOWN -->
                  <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                  <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                  <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                  <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                          <i class="icon-bell"></i>
                          <span class="badge badge-success"> 6 </span>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="external">
                              <h3>
                                  <span class="bold">6 pending</span> notifications</h3>
                              <a href="page_user_profile_1.html">view all</a>
                          </li>
                          <li>
                              <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                  <li>
                                      <a href="javascript:;">
                                          <span class="time">just now</span>
                                          <span class="details">
                                               New user registered. </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <span class="time">3 mins</span>
                                          <span class="details">
                                               Server #12 overloaded. </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <span class="time">10 mins</span>
                                          <span class="details">
                                               Server #2 not responding. </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <span class="time">14 hrs</span>
                                          <span class="details">
                                               Application error. </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <span class="time">2 days</span>
                                          <span class="details">
                                               Database overloaded 68%. </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <span class="time">3 days</span>
                                          <span class="details">
                                               A user IP blocked. </span>
                                      </a>
                                  </li>

                              </ul>
                          </li>
                      </ul>
                  </li>

                  <li class="separator hide"> </li>
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            @if(Auth::user()->avatar == null)

                                @if(Auth::user()->sex == 1)
                                  <img alt="" class="img-circle" src="{{url('assets/avatar/image/1483537975.png')}}">
                                @else
                                  <img alt="" class="img-circle" src="{{url('assets/avatar/image/1483556517.png')}}">
                                @endif

                            @else
                              <img alt="" class="img-circle" src="{{url('assets/avatar/image/'.Auth::user()->avatar)}}">
                            @endif


                          </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>

                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="{{url('logout')}}">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->

                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
