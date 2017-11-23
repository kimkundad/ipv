@extends('layouts.template-main')

@section('stylesheet')
<link href="{{url('assets/global/css/components.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/morris/morris.css')}}" rel="stylesheet" type="text/css">
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
.mt-comment{
  border-bottom: 1px solid #eef1f5;
}
.alert {
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.portlet.light {
    padding: 15px 20px 10px;
    background-color: #fff;
}
a:hover { text-decoration: none}
.alert, .thumbnail {
    margin-bottom: 0px;
}
.portlet.light .portlet-body {
    padding-top: 0px;
}
.portlet-body{
  color:#999;
}
.portlet>.portlet-title>.actions .btn-icon-only.btn-default.fullscreen:before {
    content: "\f065";
}
.mt-comments .mt-comment .mt-comment-body .mt-comment-text {

    font-size: 13px;
}
.breadcrumb {
    padding: 0 0 1px;
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
        <!--    <div class="page-title">
                            <h1><i class="icon-book-open font-green-haze theme-font"></i> Patient list

                            </h1>
                        </div> -->
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>

                <a href="{{url('patient')}}" class="btn btn-sm default "><i class="icon-arrow-left" style="font-size:16px;"></i> Patient</a>

            </li>

        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->




        <br>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">


          <div class="col-md-12">
              <div class="portlet light bordered">


                <div class="portlet-title">
                                  <div class="caption">
                                      <span class="caption-subject bold uppercase font-dark">Report all Patient</span>

                                  </div>
                                  <div class="actions">

                                      <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="" title=""> </a>
                                  </div>
                              </div>

                  <div class="portlet-body">


                    <form  method="POST" action="{{ url('search_case') }}">
                        {{ csrf_field() }}

                          <div class="form-group">
                              <label class="control-label">List Patient case</label>
                              <select class="form-control" name="start_list" aria-required="true" aria-invalid="false" aria-describedby="select-error">
                                <option value="">Select..Start case</option>
                                @if(isset($objs))
                                        @foreach($objs as $obj)
                                                          <option value="{{$obj->id}}">{{$obj->patient_code}}</option>
                                        @endforeach
                               @endif
                                                      </select>

                                  </div>

                          <div class="form-group">
                              <label class="control-label">To case</label>
                              <select class="form-control" name="end_list" aria-required="true" aria-invalid="false" aria-describedby="select-error" onchange="this.form.submit()">
                                                        <option value="">Select..End case</option>
                                                        @if(isset($objs))
                                                                @foreach($objs as $obj)
                                                                                  <option value="{{$obj->id}}">{{$obj->patient_code}}</option>
                                                                @endforeach
                                                       @endif
                                                    </select>

                                  </div>

                      </form>
                      <br>




                  </div>


              </div>
          </div>






          <div class="col-md-8">
            <div class="portlet light bordered">


              <div class="portlet-title">
                                <div class="caption">
                                    <span class="caption-subject bold uppercase font-dark">all Patient</span>

                                </div>
                                <div class="actions">

                                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="" title=""> </a>
                                </div>
                            </div>

                <div class="portlet-body">

                  <div class="portlet light portlet-fit bordered">

                      <div class="portlet-body">
                          <div id="flot-placeholder" class="chart"> </div>
                      </div>
                  </div>


                  </div>

          </div>
          </div>







          <div class="col-md-8">
            <div class="portlet light bordered">




                <div class="portlet-body">

                  <div class="portlet light portlet-fit bordered">

                      <div class="portlet-body">
                        <div class="chart chart-md" id="morrisBar"></div>
                        <script type="text/javascript">

                          var morrisBarData =
                          [
                            @if(isset($chart))
                              @foreach($chart as $chart_1)

                              {
                                y: '{{ $chart_1['y'] }}',
                                a: {{ $chart_1['a'] }},
                                b: {{ $chart_1['b'] }},
                              },

                              @endforeach
                            @endif
                      /*    {
                            y: '2004',
                            a: 10,
                            b: 30
                          }, {
                            y: '2005',
                            a: 100,
                            b: 25
                          }, {
                            y: '2006',
                            a: 60,
                            b: 25
                          }, {
                            y: '2007',
                            a: 75,
                            b: 35
                          }, {
                            y: '2008',
                            a: 90,
                            b: 20
                          }, {
                            y: '2009',
                            a: 75,
                            b: 15
                          }, {
                            y: '2010',
                            a: 50,
                            b: 10
                          }, {
                            y: '2011',
                            a: 75,
                            b: 25
                          }, {
                            y: '2012',
                            a: 30,
                            b: 10
                          }, {
                            y: '2017',
                            a: 75,
                            b: 5
                          }, {
                            y: '2017',
                            a: 60,
                            b: 8
                          } */
                        ];

                          // See: js/examples/examples.charts.js for more settings.

                        </script>
                      </div>
                  </div>


                  </div>

          </div>
          </div>




          <div class="col-md-4">

            <div class="portlet light bordered">



                <div class="portlet-body">

                  <div class="table-scrollable table-scrollable-borderless">
                                        <table class="table table-hover table-light">
                                            <thead>
                                                <tr class="uppercase">
                                                    <th > # </th>
                                                    <th> TAC-BID </th>
                                                    <th> TAC-OD </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                              @if(isset($objs_sum))
                                                      @foreach($objs_sum as $obj)
                                              <tr>

                                                <td> {{$obj['label']}} </td>
                                                <td> {{$obj['data1']}} %</td>
                                                <td> {{$obj['data2']}} %</td>

                                            </tr>

                                            @endforeach
                                                    @endif

                                        </tbody></table>
                                    </div>

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

<script src="{{url('assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/date/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/raphael/raphael.js')}}"></script>
  <script src="{{url('assets/morris/morris.js')}}"></script>
<script type="text/javascript">
      //  var data = [[1, 130], [2, 40], [3, 80], [4, 160], [5, 159], [6, 370], [7, 330], [8, 350], [9, 370], [10, 400], [11, 330], [12, 350]];
      // var data2 = [{data:[[1,5.5],[2,5.3],[3,13.7],[4,4.2],[5,6.1]]}];

        $(document).ready(function(){
            $.ajax({
                url: '{{url('api/get_chart')}}', // getchart.php
                dataType: 'JSON',
                type: 'GET',
               // dataType: 'jsonp',
                data: {
                	sid: "{{$sid}}",
                  eid: "{{$eid}}"
                      },
                success: function(response) {
                  console.log(response);
                  //alert("5555");
var dataset2 = [{label: "TAC-BID",data: [[1, 130], [2, 40], [3, 80], [4, 160], [5, 159], [6, 370], [7, 330], [8, 350], [9, 370], [10, 400], [11, 330], [12, 350]]} ];

      var plot = $.plot("#flot-placeholder", response, {

        series: {
            lines: { show: true },
            points: {
                radius: 3,
                show: true
            }
        }


      });


    }
  });

});

if( $('#morrisBar').get(0) ) {
		Morris.Bar({
			resize: true,
			element: 'morrisBar',
			data: morrisBarData,
			xkey: 'y',
			ykeys: ['a', 'b'],
			labels: ['TAC-BID', 'TAC-OD'],
			hideHover: true,
			barColors: ['#0088cc', '#2baab1']
		});
	}

    </script>





@if ($message = Session::get('success_user'))
<script type="text/javascript">
  swal("Success!", "You edit profile Success!", "success");
</script>
@endif


@stop('scripts')
