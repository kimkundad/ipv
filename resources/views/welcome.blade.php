@extends('layouts.template-main')

@section('stylesheet')
<link href="{{url('assets/pages/css/about.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<style>
.portlet.light {
    border-radius: 4px!important;
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

        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->

        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->




        <div class="row margin-bottom-20">

          <div class="portlet light bordered">

                                  <div class="portlet-body">
                                      <div class="tiles">


                                          <div class="tile bg-blue-hoki">
                                              <div class="tile-body">
                                                  <i class="fa fa-bell-o"></i>
                                              </div>
                                              <div class="tile-object">
                                                  <div class="name"> Notifications </div>
                                                  <div class="number"> 6 </div>
                                              </div>
                                          </div>

                                          <a href="{{url('add_patient')}}">
                                          <div class="tile bg-red-sunglo">
                                              <div class="tile-body">
                                                  <i class="fa fa-user-plus"></i>
                                              </div>
                                              <div class="tile-object">
                                                  <div class="name"> Add Patient </div>

                                              </div>
                                          </div>
                                        </a>

                                        <a href="{{url('patient')}}">
                                          <div class="tile double bg-blue-madison">
                                              <div class="tile-body">
                                                @if(Auth::user()->avatar == null)

                                                    @if(Auth::user()->sex == 1)
                                                      <img alt=""  src="{{url('assets/avatar/image/1483537975.png')}}" style="height:65px;">
                                                    @else
                                                      <img alt=""  src="{{url('assets/avatar/image/1483556517.png')}}" style="height:65px;">
                                                    @endif

                                                @else
                                                  <img alt="" src="{{url('assets/avatar/image/'.Auth::user()->avatar)}}" style="height:65px;">
                                                @endif



                                                  <h4> Patient List</h4>
                                                  <p> Easily style icon color, size, shadow, and anything that's possible with CSS. </p>
                                              </div>
                                              <div class="tile-object">
                                                  <div class="name"> {{Auth::user()->name}} </div>
                                                  <div class="number"> {{date('d M Y', strtotime(Auth::user()->created_at))}} </div>
                                              </div>
                                          </div>
                                          </a>


                                          <a href="{{url('user_profile')}}">
                                          <div class="tile selected bg-yellow-saffron">
                                              <div class="corner"> </div>
                                              <div class="tile-body">
                                                  <i class="fa fa-user"></i>
                                              </div>
                                              <div class="tile-object">
                                                  <div class="name"> Profile </div>

                                              </div>
                                          </div>
                                          </a>

                                          <a href="{{url('blog_detail')}}">
                                          <div class="tile double bg-grey-cascade">
                                              <div class="tile-body">
                                                  <img src="{{url('assets/blog/photo2.jpg')}}" alt="" class="pull-right">
                                                  <h3>@lisa_wong</h3>
                                                  <p> I really love this theme. I look forward to check the next release! </p>
                                              </div>
                                              <div class="tile-object">
                                                  <div class="name">
                                                      <i class="fa fa-twitter"></i>
                                                  </div>
                                                  <div class="number"> 10:45PM, 23 Jan </div>
                                              </div>
                                          </div>
                                          </a>


                            <a href="{{url('news')}}">
                              <div class="tile bg-green-meadow">
                                    <div class="tile-body">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name"> News </div>
                                        <div class="number"> 12 </div>
                                    </div>
                                </div>
                                </a>

                                <a href="{{url('logout')}}">
                                <div class="tile bg-red-sunglo">
                                    <div class="tile-body">
                                        <i class="fa fa-unlock-alt"></i>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name"> Sign out </div>

                                    </div>
                                </div>
                                </a>


                                      </div>
                                  </div>
                              </div>

                    </div>







        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
@endsection

@section('scripts')

@stop('scripts')
