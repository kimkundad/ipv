@extends('layouts.template-main')

@section('stylesheet')
<link href="{{url('assets/global/css/components.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css">
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
                            <h1><i class="icon-book-open font-green-haze theme-font"></i> ID : {{$objs->patient_code}}

                            </h1>
                        </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>

                <a href="{{url('patient')}}" class="btn btn-sm green"><i class="icon-arrow-left" style="font-size:16px;"></i> Patient list

                                                                    </a>
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
                                      <i class="icon-share font-dark"></i>
                                      <span class="caption-subject font-dark bold uppercase">{{$objs->patient_code}}</span>
                                  </div>
                                  <div class="actions">

                                    @if($objs->sex == 1)
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
                              <div class="portlet-body">

                                  <div class="alert alert-success">
                                      <strong>Hospital No.</strong> {{$objs->hospital_code}} </div>
                                  <div class="alert alert-info">
                                      <strong>Age. </strong> {{$objs->age}} </div>


                              </div>
                          </div>
                          <!-- END PORTLET-->



                      </div>














                      <div class="col-lg-6 col-xs-12 col-sm-12">

                        <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-settings font-dark"></i>
                                    <span class="caption-subject font-dark sbold uppercase">Interactive Chart</span>
                                </div>

                            </div>
                            <div class="portlet-body">
                                <div id="flot-placeholder" class="chart"> </div>
                            </div>
                        </div>


                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-globe font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Product</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" class="active" data-toggle="tab" aria-expanded="true"> TAC-BID </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab_1_2" data-toggle="tab" aria-expanded="false"> TAC-OD </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <!--BEGIN TABS-->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1_1">

                                          <div class="table-scrollable table-scrollable-borderless">
                                        <table class="table table-hover table-light">
                                            <thead>
                                                <tr class="uppercase">
                                                    <th> # </th>
                                                    <th> Trough(CO) </th>
                                                    <th> Dose(mg/day) </th>
                                                    <th> CO/D </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody><tr>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">Brain</a>
                                                </td>
                                                <td> $345 </td>
                                                <td> 45 </td>
                                                <td> 124 </td>
                                                <td>
                                                  <div class="btn-group btn-group-circle">
                                                                  <button type="button" class="btn btn-outline green btn-sm">Edit</button>
                                                                  <button type="button" class="btn btn-outline red btn-sm">Del</button>
                                                              </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">Nick</a>
                                                </td>
                                                <td> $560 </td>
                                                <td> 12 </td>
                                                <td> 24 </td>
                                                <td>
                                                  <div class="btn-group btn-group-circle">
                                                                  <button type="button" class="btn btn-outline green btn-sm">Edit</button>
                                                                  <button type="button" class="btn btn-outline red btn-sm">Del</button>
                                                              </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">Tim</a>
                                                </td>
                                                <td> $1,345 </td>
                                                <td> 450 </td>
                                                <td> 46 </td>
                                                <td>
                                                  <div class="btn-group btn-group-circle">
                                                                  <button type="button" class="btn btn-outline green btn-sm">Edit</button>
                                                                  <button type="button" class="btn btn-outline red btn-sm">Del</button>
                                                              </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">Tom</a>
                                                </td>
                                                <td> $645 </td>
                                                <td> 50 </td>
                                                <td> 89 </td>
                                                <td>
                                                  <div class="btn-group btn-group-circle">
                                                                  <button type="button" class="btn btn-outline green btn-sm">Edit</button>
                                                                  <button type="button" class="btn btn-outline red btn-sm">Del</button>
                                                              </div>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>

                                          </div>
                                        <div class="tab-pane" id="tab_1_2">

                                          <div class="table-scrollable table-scrollable-borderless">
                                        <table class="table table-hover table-light">
                                            <thead>
                                              <tr class="uppercase">
                                                  <th> # </th>
                                                  <th> Trough(CO) </th>
                                                  <th> Dose(mg/day) </th>
                                                  <th> CO/D </th>
                                                  <th>  </th>
                                              </tr>
                                            </thead>
                                            <tbody><tr>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">Brain</a>
                                                </td>
                                                <td> $345 </td>
                                                <td> 45 </td>
                                                <td> 124 </td>
                                                <td>
                                                    <span class="bold theme-font">80%</span>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">Nick</a>
                                                </td>
                                                <td> $560 </td>
                                                <td> 12 </td>
                                                <td> 24 </td>
                                                <td>
                                                    <span class="bold theme-font">67%</span>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">Tim</a>
                                                </td>
                                                <td> $1,345 </td>
                                                <td> 450 </td>
                                                <td> 46 </td>
                                                <td>
                                                    <span class="bold theme-font">98%</span>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">Tom</a>
                                                </td>
                                                <td> $645 </td>
                                                <td> 50 </td>
                                                <td> 89 </td>
                                                <td>
                                                    <span class="bold theme-font">58%</span>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>

                                            </div>
                                    </div>
                                    <!--END TABS-->
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
<script src="{{url('assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">
        var data = [[1, 130], [2, 40], [3, 80], [4, 160], [5, 159], [6, 370], [7, 330], [8, 350], [9, 370], [10, 400], [11, 330], [12, 350]];
        var data2 = [[1, 100], [2, 140], [3, 180], [4, 60], [5, 59]];

        var dataset = [{label: "TAC-BID",data: data},{label: "TAC-OD",data: data2}];

        var options = {
            series: {
                lines: { show: true },
                points: {
                    radius: 3,
                    show: true
                }
            }
        };

        $(document).ready(function () {
            $.plot($("#flot-placeholder"), dataset, options);
        });
    </script>

@if ($message = Session::get('success_user'))
<script type="text/javascript">
  swal("Success!", "You edit profile Success!", "success");
</script>
@endif


@stop('scripts')
