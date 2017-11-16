@extends('layouts.template-main')

@section('stylesheet')
<link href="{{url('assets/global/css/components.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{url('assets/date/css/bootstrap-datepicker.standalone.css')}}">
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
.mt-action-buttons {
    vertical-align: top;
    display: table-cell;
    text-align: center;
    width: 160px;
    white-space: nowrap;
    padding-top: 10px;
}
.btn.blue:not(.btn-outline) {
    color: #FFF;
    background-color: #3598dc;
    border-color: #3598dc;
}
.table.table-light>thead>tr>th {
    font-weight: 600;
    font-size: 13px;
    color: #93a2a9;
    border: 0;
    border-bottom: 1px solid #F2F5F8;
}

.small-date{
  font-size: 12px!important;
}
.table td, .table th {
    font-size: 13px;
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
                            <div class="portlet light bordered" id="item-list-product" >
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
                                          <a href="#long1" data-toggle="modal" class="btn btn-circle red btn-outline">Comment</a>

                                          <!-- Long Modals -->

                                          <div id="long1" class="modal fade modal-scroll" tabindex="-1" data-replace="true" style="display: none;">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                          <h4 class="modal-title">Comment</h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        {!! $objs->comment_1 !!}
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <!-- Long Modals -->



                                          <a href="{{url('/add_item-'.$objs->id.'-1')}}" style="margin-left:8px;" class="btn btn-circle btn-icon-only blue">
                                                            <i class="fa fa-plus" style="line-height: 17px;"></i>
                                                        </a>
                                          <div class="table-scrollable table-scrollable-borderless">
                                        <table class="table table-hover table-light">
                                            <thead>
                                                <tr class="uppercase">
                                                    <th> # </th>
                                                    <th>&nbsp&nbsp&nbsp&nbsp&nbsp Date &nbsp&nbsp&nbsp&nbsp&nbsp </th>
                                                    <th> Trough(CO) </th>
                                                    <th> Dose(mg/day) </th>
                                                    <th> CO/D </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @if($message_1 != NULL)
                                                @foreach($message_1 as $item_1)
                                              <tr {{$i++}}>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">{{$i}}</a>
                                                </td>
                                                <td class="small-date"> {{$item_1->set_date}} </td>
                                                <td> {{$item_1->trough}} </td>
                                                <td> {{$item_1->dose_1}} </td>
                                                <td> {{number_format($item_1->c0, 2, '.', '')}} </td>
                                                <td>
                                                  <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle" style="width:84px">
                                                        <a class="btn btn-outline green btn-sm" data-toggle="modal" href="#edit-{{$item_1->id}}">Edit</a>
                                                        <a class="btn btn-outline red btn-sm" style="border-radius: 0 25px 25px 0 !important" data-toggle="modal" href="#del-{{$item_1->id}}">Del</a>





                                                        <div class="modal fade" id="del-{{$item_1->id}}" tabindex="-1" role="del-{{$item_1->id}}" aria-hidden="true" >
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                        <h4 class="modal-title">Delete item?</h4>
                                                                    </div>
                                                                    <div class="modal-body"> 

                                                                    You want Delete item ?

                                                                    </div>
                                                                    <div class="modal-footer">

                                                                      <form  method="POST" action="{{ url('patient_item_del') }}">
                                                
                                                                        {{ csrf_field() }}
                                                                          <input type="hidden" name="item_id" class="form-control" value="{{$item_1->id}}" readonly/>
                                                                          <input type="hidden" name="cat_id" class="form-control" value="{{$objs->id}}" readonly/>
                                                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn red-haze">Delete</button>
                                                                      </form>

                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>



                                                        <div class="modal fade" id="edit-{{$item_1->id}}" style="text-align: left;" tabindex="-1" role="edit-{{$item_1->id}}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                        <h4 class="modal-title">Change Value</h4>
                                                                    </div>
                                                                    <div class="modal-body"> 


                                                <form  method="POST" action="{{ url('patient_item_edit') }}">
                                                
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label class="control-label">Date</label>
                                               

                                                  <div class="input-group">
                                                      <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </span>
                                                      <input type="text" readonly data-plugin-datepicker name="set_date" value="{{$item_1->set_date}}" class="form-control datepicker" required="">
                                                    </div>

                                                  </div>
                                                 
                                                    <input type="hidden" name="item_id" class="form-control" value="{{$item_1->id}}" readonly/>
                                                    <input type="hidden" name="cat_id" class="form-control" value="{{$objs->id}}" readonly/>



                                                  <div class="form-group{{ $errors->has('trough') ? ' has-error' : '' }}">
                                                      <label class="control-label">Trough(CO)</label>
                                                      <input type="number" step="0.01" name="trough" class="form-control" value="{{$item_1->trough}}"/>

                                                          </div>

                                                  <div class="form-group{{ $errors->has('dose_1') ? ' has-error' : '' }}">
                                                      <label class="control-label">Dose(mg/day)</label>
                                                      <input type="number" step="0.01" name="dose_1" class="form-control" value="{{$item_1->dose_1}}"/>

                                                          </div>
                                                          
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn green">Save changes</button>
                                                                    </div>


                                                                 </form>   


                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>


                                                    </div>
                                                  </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                          @endif

                                        </tbody>

                                      </table>
                                      {{ $message_1->links() }}

                                      <div class="table-scrollable table-scrollable-borderless">
                                              <table class="table table-hover table-light">

                                                  <tbody><tr>

                                                      <td>
                                                          <a href="javascript:;" class="primary-link">Mean</a>
                                                      </td>

                                                      <td>
                                                          <span class="bold theme-font">{{number_format($mean_value1, 2, '.', '')}}</span>
                                                      </td>
                                                  </tr>
                                                  <tr>

                                                      <td>
                                                          <a href="javascript:;" class="primary-link">S.D.</a>
                                                      </td>

                                                      <td>
                                                          <span class="bold theme-font">{{number_format($sd->total_sales, 2, '.', '')}}</span>
                                                      </td>
                                                  </tr>
                                                  <tr>

                                                      <td>
                                                          <a href="javascript:;" class="primary-link">CV%</a>
                                                      </td>

                                                      <td>
                                                          <span class="bold theme-font">
                                                            @if($mean_value1 == 0 || $sd->total_sales ==0)
                                                            0.00%
                                                            @else
                                                            {{@number_format($sd->total_sales/$mean_value1, 2, '.', '')*100}}%
                                                            @endif


                                                          </span>
                                                      </td>
                                                  </tr>


                                              </tbody></table>
                                          </div>


                                    </div>

                                          </div>
                                        <div class="tab-pane" id="tab_1_2">
                                          <a href="#long2" data-toggle="modal" class="btn btn-circle red btn-outline">Comment</a>

                                          <!-- Long Modals -->

                                          <div id="long2" class="modal fade modal-scroll" tabindex="-1" data-replace="true" style="display: none;">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                          <h4 class="modal-title">Comment</h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        {!! $objs->comment_2 !!}
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <!-- Long Modals -->


                                          <a href="{{url('/add_item-'.$objs->id.'-2')}}" style="margin-left:8px;" class="btn btn-circle btn-icon-only blue">
                                                            <i class="fa fa-plus" style="line-height: 17px;"></i>
                                                        </a>

                                          <div class="table-scrollable table-scrollable-borderless">
                                        <table class="table table-hover table-light">
                                            <thead>
                                              <tr class="uppercase">
                                                  <th> # </th>
                                                  <th>&nbsp&nbsp&nbsp&nbsp&nbsp Date &nbsp&nbsp&nbsp&nbsp&nbsp </th>
                                                  <th> Trough(CO) </th>
                                                  <th> Dose(mg/day) </th>
                                                  <th> CO/D </th>
                                                  <th>  </th>
                                              </tr>
                                            </thead>
                                            <tbody>

                                              @if($message_2 != NULL)
                                                @foreach($message_2 as $item_2)
                                              <tr {{$j++}}>

                                                <td>
                                                    <a href="javascript:;" class="primary-link">{{$j}}</a>
                                                </td>
                                                <td class="small-date"> {{$item_2->set_date}} </td>
                                                <td> {{$item_2->trough}} </td>
                                                <td> {{$item_2->dose_1}} </td>
                                                <td> {{number_format($item_2->c0, 2, '.', '')}} </td>
                                                <td>
                                                  <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle" style="width:84px">
                                                        









                                                        <a class="btn btn-outline green btn-sm" data-toggle="modal" href="#edit-{{$item_2->id}}">Edit</a>
                                                        <a class="btn btn-outline red btn-sm" style="border-radius: 0 25px 25px 0 !important" data-toggle="modal" href="#del-{{$item_2->id}}">Del</a>








                                                        <div class="modal fade" id="del-{{$item_2->id}}" tabindex="-1" role="del-{{$item_2->id}}" aria-hidden="true" >
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                        <h4 class="modal-title">Delete item?</h4>
                                                                    </div>
                                                                    <div class="modal-body"> 

                                                                    You want Delete item ?

                                                                    </div>
                                                                    <div class="modal-footer">

                                                                      <form  method="POST" action="{{ url('patient_item_del') }}">
                                                
                                                                        {{ csrf_field() }}
                                                                          <input type="hidden" name="item_id" class="form-control" value="{{$item_2->id}}" readonly/>
                                                                          <input type="hidden" name="cat_id" class="form-control" value="{{$objs->id}}" readonly/>
                                                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn red-haze">Delete</button>
                                                                      </form>

                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>







                                                        <div class="modal fade" id="edit-{{$item_2->id}}" style="text-align: left;" tabindex="-1" role="edit-{{$item_2->id}}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                        <h4 class="modal-title">Change Value</h4>
                                                                    </div>
                                                                    <div class="modal-body"> 


                                                <form  method="POST" action="{{ url('patient_item_edit') }}">
                                                
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label class="control-label">Date</label>
                                               

                                                  <div class="input-group">
                                                      <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </span>
                                                      <input type="text" readonly data-plugin-datepicker name="set_date" value="{{$item_2->set_date}}" class="form-control datepicker" required="">
                                                    </div>

                                                  </div>
                                                 
                                                    <input type="hidden" name="item_id" class="form-control" value="{{$item_2->id}}" readonly/>
                                                    <input type="hidden" name="cat_id" class="form-control" value="{{$objs->id}}" readonly/>



                                                  <div class="form-group{{ $errors->has('trough') ? ' has-error' : '' }}">
                                                      <label class="control-label">Trough(CO)</label>
                                                      <input type="number" step="0.01" name="trough" class="form-control" value="{{$item_2->trough}}"/>

                                                          </div>

                                                  <div class="form-group{{ $errors->has('dose_1') ? ' has-error' : '' }}">
                                                      <label class="control-label">Dose(mg/day)</label>
                                                      <input type="number" step="0.01" name="dose_1" class="form-control" value="{{$item_2->dose_1}}"/>

                                                          </div>
                                                          
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn green">Save changes</button>
                                                                    </div>

                                                                    </form>
                                                                    


                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>










                                                    </div>
                                                  </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                          @endif

                                        </tbody>
                                      </table>
                                      {{ $message_2->links() }}


                                      <div class="table-scrollable table-scrollable-borderless">
                                              <table class="table table-hover table-light">

                                                  <tbody><tr>

                                                      <td>
                                                          <a href="javascript:;" class="primary-link">Mean</a>
                                                      </td>

                                                      <td>
                                                          <span class="bold theme-font">{{number_format($mean_value2, 2, '.', '')}}</span>
                                                      </td>
                                                  </tr>
                                                  <tr>

                                                      <td>
                                                          <a href="javascript:;" class="primary-link">S.D.</a>
                                                      </td>

                                                      <td>
                                                          <span class="bold theme-font">{{number_format($sd2->total_sales, 2, '.', '')}}</span>
                                                      </td>
                                                  </tr>
                                                  <tr>

                                                      <td>
                                                          <a href="javascript:;" class="primary-link">CV%</a>
                                                      </td>

                                                      <td>
                                                          <span class="bold theme-font">

                                                            @if($mean_value2 == 0 || $sd->total_sales ==0)
                                                            0.00%
                                                            @else
                                                            {{@number_format($sd2->total_sales/$mean_value2, 2, '.', '')}}%
                                                            @endif


                                                            </span>
                                                      </td>
                                                  </tr>


                                              </tbody></table>
                                          </div>

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
<script src="{{url('assets/date/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

<script type="text/javascript">
      //  var data = [[1, 130], [2, 40], [3, 80], [4, 160], [5, 159], [6, 370], [7, 330], [8, 350], [9, 370], [10, 400], [11, 330], [12, 350]];
      // var data2 = [[1, 100], [2, 140], [3, 180], [4, 60], [5, 59]];

      //  var dataset = [{label: "TAC-BID",data: [[1, 130], [2, 40], [3, 80], [4, 160], [5, 159], [6, 370], [7, 330], [8, 350], [9, 370], [10, 400], [11, 330], [12, 350]]} ];

        var dataset2 = [{label:"TAC-BID",data: [
          @if($c_1 != null)
            @foreach($c_1 as $chart_1)
              [{{$chart_1[0]}}],
            @endforeach
          @endif
        ]}, {label:"TAC-OD",data: [
          @if($c_2 != null)
            @foreach($c_2 as $chart_2)
              [{{$chart_2[0]}}],
            @endforeach
          @endif
        ]}
      ];





      var plot = $.plot("#flot-placeholder", dataset2, {

        series: {
            lines: { show: true },
            points: {
                radius: 3,
                show: true
            }
        }


      });



    </script>

    <script>
$.fn.datepicker.defaults.format = "dd-mm-yyyy";
$('.datepicker').datepicker({
});
</script>

@if ($message = Session::get('success_item'))
<script type="text/javascript">
  swal("Success!", "Add new value to process now!", "success");
</script>
@endif


@if ($message = Session::get('success_item_edit'))
<script type="text/javascript">
  swal("Success!", "Edit value to process Success!", "success");
</script>
@endif

@if ($message = Session::get('success_item_del'))
<script type="text/javascript">
  swal("Success Delete!", "Delete your value Success!", "success");
</script>
@endif



@stop('scripts')
