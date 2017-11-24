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
.portlet.light {
    padding: 20px 20px 15px;

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





        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

              <div class="portlet light bordered">



                <div class="portlet-body form">


                  <div class="events-content">

                    <div class="mt-content border-grey-steel">
                      <a href="{{url('blog_detail')}}">
                      <img src="{{url('assets/blog/masonry6-768x500.jpg')}}" class="img-responsive">
                      <h4><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b></h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, mi felis, aliquam at iaculis mi felis, aliquam
                        at iaculis finibus eu ex.</p>
                      <a href="{{url('blog_detail')}}" class="btn btn-circle red btn-outline pull-right">Read More</a>
                        <br><br>
                    </div>

                  </div>
                  <hr>


                  <div class="events-content">

                    <div class="mt-content border-grey-steel">
                      <a href="{{url('blog_detail')}}">
                      <img src="{{url('assets/blog/blog-home4-768x555.jpg')}}" class="img-responsive">
                      <h4><b>Essentials For Your Business</b></h4>
                      </a>
                      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the too charms of pleasure of the moment,</p>
                      <a href="{{url('blog_detail')}}" class="btn btn-circle red btn-outline pull-right">Read More</a>
                        <br><br>
                    </div>

                  </div>
                  <hr>


                  <div class="events-content">

                    <div class="mt-content border-grey-steel">
                      <a href="{{url('blog_detail')}}">
                      <img src="{{url('assets/blog/masonry5.jpg')}}" class="img-responsive">
                      <h4><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b></h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, mi felis, aliquam at iaculis mi felis, aliquam
                        at iaculis finibus eu ex.</p>
                      <a href="{{url('blog_detail')}}" class="btn btn-circle red btn-outline pull-right">Read More</a>
                        <br><br>
                    </div>

                  </div>
                  <hr>


                  <div class="events-content">

                    <div class="mt-content border-grey-steel">
                      <a href="{{url('blog_detail')}}">
                      <img src="{{url('assets/blog/masonry7-1024x666.jpg')}}" class="img-responsive">
                      <h4><b>Essentials For Your Business</b></h4>
                      </a>
                      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the too charms of pleasure of the moment,</p>
                      <a href="{{url('blog_detail')}}" class="btn btn-circle red btn-outline pull-right">Read More</a>
                        <br><br>
                    </div>

                  </div>
                  <hr>



                  <div class="events-content">

                    <div class="mt-content border-grey-steel">
                      <a href="{{url('blog_detail')}}">
                      <img src="{{url('assets/blog/masonry9-1024x672.jpg')}}" class="img-responsive">
                      <h4><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b></h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, mi felis, aliquam at iaculis mi felis, aliquam
                        at iaculis finibus eu ex.</p>
                      <a href="{{url('blog_detail')}}" class="btn btn-circle red btn-outline pull-right">Read More</a>
                        <br><br>
                    </div>

                  </div>
                  <hr>


                  <div class="events-content">

                    <div class="mt-content border-grey-steel">
                      <a href="{{url('blog_detail')}}">
                      <img src="{{url('assets/blog/masonry8.jpg')}}" class="img-responsive">
                      <h4><b>Essentials For Your Business</b></h4>
                      </a>
                      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the too charms of pleasure of the moment,</p>
                      <a href="{{url('blog_detail')}}" class="btn btn-circle red btn-outline pull-right">Read More</a>
                        <br><br>
                    </div>

                  </div>
                  <hr>




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






<nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
              <li>
                  <a href="{{url('welcome')}}" class="active">
                      <span>Home</span>
                      <i class="icon-home"></i>
                  </a>
              </li>
                <li>
                    <a href="{{url('/patient')}}" >
                        <span>Patient</span>
                        <i class="icon-notebook"></i>
                    </a>
                </li>

                <li>
                    <a href="{{url('user_profile')}}" >
                        <span>User_profile</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="{{url('report_item')}}" >
                        <span>Report</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>



@endsection

@section('scripts')

@if ($message = Session::get('success_user'))
<script type="text/javascript">
  swal("Success!", "You edit profile Success!", "success");
</script>
@endif


@stop('scripts')
