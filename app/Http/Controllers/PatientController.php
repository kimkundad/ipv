<?php

namespace App\Http\Controllers;

use Auth;
use App\patient;
use App\patientitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $objs = DB::table('patients')
            ->where('user_id', Auth::user()->id)
            ->orderBy('id', 'desc')
            ->get();

      $data['objs'] = $objs;
      return view('patient_list', $data);
    }

    public function add_patient(){

      $package = DB::table('patients')
        ->where('user_id', Auth::user()->id)
        ->count();
      $package += 1;
      date_default_timezone_set("Asia/Bangkok");
      $data['set_date'] = date("d-m-Y H:i:s");
      $data['set_num'] = $package;
      $data['method'] = "post";
      return view('add_patient',$data);
    }


    public function report_item(){

      $objs = DB::table('patients')
            ->where('user_id', Auth::user()->id)
            ->orderBy('id', 'asc')
            ->get();

      $data['objs'] = $objs;
      return view('report_item', $data);


    }

    function sd_square8($x, $mean) {
      //dd($mean);
       return pow($x - $mean,2);

    //  dd($mean);
     }

    public function sd_square2(){
      return "55555";
    }

    // Function to calculate standard deviation (uses sd_square) $this->sd($sd)
    public function sd($array) {


        // square root of sum of squares devided by N-1
        return sqrt(array_sum(array_map($this->sd_square8($array, array_fill(0,count($array), (array_sum($array) / count($array)) ) )  ) ) / (count($array)-1) );


      //  return $this->sd_square();
    }

    public function standard_deviation($sample){
      //dd($sample);
      if($sample != 0 && $sample != null){

        if(is_array($sample)){
      		$mean = array_sum($sample) / count($sample);
      		foreach($sample as $key => $num) $devs[$key] = pow($num - $mean, 2);
      		return sqrt(array_sum($devs) / (count($devs) - 1));
      	}

      }else{
        return 0;
      }



    }

    public function get_chart(Request $request){

  //  var dataset = [{label: "TAC-BID",data: [[1, 130], [2, 40], [3, 80], [4, 160], [5, 159], [6, 370], [7, 330], [8, 350], [9, 370], [10, 400], [11, 330], [12, 350]]} ];

    /*  $dataSet1 = array();
      $dataSet1['label'] = 'Customer 1';
      $dataSet1['data'] = array(array(1,1),array(2,2));
      $dataSet2['label'] = 'Customer 2';
      $dataSet2['data'] = array(array(3,3),array(4,5)); */
      $this->sd_square2();

      $sid = $request['sid'];
      $eid = $request['eid'];

      $bee_main = DB::table('patients')
      ->select(
          'patients.id',
          'patients.patient_code'
          )
      ->where('id','>=',$sid)
      ->where('id','<=',$eid)
      ->where('user_id', Auth::user()->id)
      ->get();

      $j = 0;
      $someArray = [];
      $save = [];
      foreach ($bee_main as $bee_mains) {




  ///////////////////////////////////////////////////////////////////////
      $arr_count = DB::table('patientitems')
      ->select(
          'patientitems.trough'
          )
      ->where('cat_id', $bee_mains->id)
      ->where('item1', 1)
      ->orderBy('id', 'desc')
      ->count();

        $arr_count2 = DB::table('patientitems')
        ->select(
            'patientitems.trough'
            )
        ->where('cat_id', $bee_mains->id)
        ->where('item1', 2)
        ->orderBy('id', 'desc')
        ->count();


        $c0_sum = DB::table('patientitems')
        ->where('cat_id', $bee_mains->id)
        ->where('item1', 1)
        ->sum('c0');
        //$arr_count
        if($arr_count != 0){
          $mean_value1 = @($c0_sum/$arr_count);
        }else{
          $mean_value1 = 0;
        }

        $c0_sum2 = DB::table('patientitems')
        ->where('cat_id', $bee_mains->id)
        ->where('item1', 2)
        ->sum('c0');
        //$arr_count
        if($arr_count != 0){
          $mean_value2 = @($c0_sum2/$arr_count2);
        }else{
          $mean_value2 = 0;
        }

        $sd = [];
        $sd2 = [];
        $sd_11 = DB::table('patientitems')
          ->select('patientitems.c0')
          ->where('cat_id', $bee_mains->id)
          ->where('item1', 1)
          ->get();

          foreach ($sd_11 as $obj_sd) {
              $sd[] = $obj_sd->c0;
          }

        $sd_22 = DB::table('patientitems')
        ->select('patientitems.c0')
        ->where('cat_id', $bee_mains->id)
        ->where('item1', 2)
        ->get();

        foreach ($sd_22 as $obj_sd) {
            $sd2[] = $obj_sd->c0;
        }

        //dd($sd_11);
        /////////////////////////////////////////////////////////////////////// number_format(sd($sd)/$mean_value1, 2, '.', '')*100 $this->sd()


  //  var data = [[1, 130], [2, 40], [3, 80], [4, 160], [5, 159], [6, 370], [7, 330], [8, 350], [9, 370], [10, 400], [11, 330], [12, 350]];

          $arr = DB::table('patientitems')
          ->select(
              'patientitems.*'
              )
          ->where('cat_id', $bee_mains->id)
          ->where('item1', 1)
          ->orderBy('id', 'desc')
          ->get();

          $bee_mains->label = $bee_mains->patient_code;






            $j++;
            //$save[$j] = @number_format($this->sd($sd)/$mean_value1, 2, '.', '')*100;
            $save[$j] = $mean_value1;



          array_push($someArray, [
                "label" => $bee_mains->label,
                "data" => [[1, @number_format($this->standard_deviation($sd)/$mean_value1, 2, '.', '')*100], [2, @number_format($this->standard_deviation($sd2)/$mean_value2, 2, '.', '')*100]]
            ]);


            //@number_format($this->standard_deviation($sd)/$mean_value1, 2, '.', '')*100


          $flots = $someArray;




    }
  //dd($this->standard_deviation($sd));
return json_encode($flots);



    }


    public function search_case(Request $request)
    {

      $this->validate($request, [
         'start_list' => 'required',
         'end_list' => 'required'
     ]);



      $objs = DB::table('patients')
            ->where('user_id', Auth::user()->id)
            ->orderBy('id', 'asc')
            ->get();



      $data['objs'] = $objs;
      $data['sid'] = $request['start_list'];
      $data['eid'] = $request['end_list'];


      return view('total_report', $data);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request, [
         'hospital_code' => 'required',
         'sex' => 'required',
         'age' => 'required'
     ]);

      $obj = new patient();
      $obj->user_id = Auth::user()->id;
      $obj->patient_code = $request['patient_code'];
      $obj->hospital_code = $request['hospital_code'];
      $obj->sex = $request['sex'];
      $obj->age = $request['age'];
      $obj->save();
      $the_id = $obj->id;

      return redirect(url('patient/'.$the_id));

    }

    //patientitem

    public function patient_item(Request $request)
    {
      $this->validate($request, [
         'set_comment' => 'required',
         'cat_id' => 'required',
         'set_date' => 'required',
         'trough' => 'required',
         'dose_1' => 'required'
     ]);

       $id = $request['cat_id'];
       if($request['set_comment'] == 1){

         $package = patient::find($id);
         $package->comment_1 = $request['comment'];
         $package->save();

       }else{

         $package = patient::find($id);
         $package->comment_2 = $request['comment'];
         $package->save();

       }

       if($request['trough'] == 0){
        $trough_value = 1;
       }else{
        $trough_value = $request['trough'];
       }

       if($request['dose_1'] == 0){
        $dose_1_value = 1;
       }else{
        $dose_1_value = $request['dose_1'];
       }



       $obj = new patientitem();
       $obj->cat_id = $request['cat_id'];
       $obj->trough = $request['trough'];
       $obj->dose_1 = $request['dose_1'];
       $obj->c0 = ($trough_value/$dose_1_value);
       $obj->set_date = $request['set_date'];
       $obj->item1 = $request['set_comment'];
       $obj->save();

       return redirect(url('patient/'.$request['cat_id'].'#item-list-product'))->with('success_item','เพิ่มข้อมูลสำเร็จสำเร็จ');


    }



    public function patient_item_edit(Request $request)
    {

      $this->validate($request, [
         'item_id' => 'required',
         'trough' => 'required',
         'dose_1' => 'required'
     ]);

      if($request['trough'] == 0){
        $trough_value = 1;
       }else{
        $trough_value = $request['trough'];
       }

       if($request['dose_1'] == 0){
        $dose_1_value = 1;
       }else{
        $dose_1_value = $request['dose_1'];
       }

     $id = $request['item_id'];

     $package = patientitem::find($id);
     $package->trough = $request['trough'];
     $package->dose_1 = $request['dose_1'];
     $package->c0 = ($trough_value/$dose_1_value);
     $package->set_date = $request['set_date'];
     $package->save();

     return redirect(url('patient/'.$request['cat_id'].'#item-list-product'))->with('success_item_edit','เพิ่มข้อมูลสำเร็จสำเร็จ');

    }

    public function patient_item_del(Request $request)
    {
      $id = $request['item_id'];

      $obj = patientitem::find($id);
      $obj->delete();

      return redirect(url('patient/'.$request['cat_id'].'#item-list-product'))->with('success_item_del','เพิ่มข้อมูลสำเร็จสำเร็จ');
    }




    public function add_item($id = 0, $sub_id = 0){

      $objs = patient::find($id);
      date_default_timezone_set("Asia/Bangkok");
      $data['set_date'] = date("d-m-Y");
      $data['objs'] = $objs;
      $data['method'] = "post";
      $data['num_product'] = $sub_id;
      return view('add_item', $data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


      $arr_count = DB::table('patientitems')
      ->select(
          'patientitems.trough'
          )
      ->where('cat_id', $id)
      ->where('item1', 1)
      ->orderBy('id', 'desc')
      ->count();

      $arr = DB::table('patientitems')
      ->select(
          'patientitems.trough'
          )
      ->where('cat_id', $id)
      ->where('item1', 1)
      ->orderBy('id', 'desc')
      ->get();


      $optionsRes = [];
      $s = 0;

      if($arr_count != 0){
      // dd($arr2_count);
        foreach ($arr as $obj_1) {
            $s++;
            $optionsRes[] = [$s.','.$obj_1->trough];
            $obj_1->data = $optionsRes;
        }

      }else{
        //$obj2[] = array();
        $obj_1->data[] = null;
      }



      $arr_count2 = DB::table('patientitems')
      ->select(
          'patientitems.trough'
          )
      ->where('cat_id', $id)
      ->where('item1', 2)
      ->orderBy('id', 'desc')
      ->count();

      $arr2 = DB::table('patientitems')
      ->select(
          'patientitems.trough'
          )
      ->where('cat_id', $id)
      ->where('item1', 2)
      ->orderBy('id', 'desc')
      ->get();


      $optionsRes2 = [];
      $z = 0;

      if($arr_count2 != 0){
      // dd($arr2_count);
        foreach ($arr2 as $obj_2) {
            $z++;
            $optionsRes2[] = [$z.','.$obj_2->trough];
            $obj_2->data = $optionsRes2;
        }

      }else{
        //$obj2[] = array();
        $obj_2->data[] = null;
      }





      //dd($obj2->data);




      $message_1 = DB::table('patientitems')
      ->where('cat_id', $id)
      ->where('item1', 1)
      ->orderBy('id', 'desc')
      ->paginate(15);



      $message_2 = DB::table('patientitems')
      ->select(
          'patientitems.*'
          )
      ->where('cat_id', $id)
      ->where('item1', 2)
      ->orderBy('id', 'desc')
      ->paginate(15);


      $c0_sum = DB::table('patientitems')
      ->where('cat_id', $id)
      ->where('item1', 1)
      ->sum('c0');
      //$arr_count
      if($arr_count != 0){
        $mean_value1 = @($c0_sum/$arr_count);
      }else{
        $mean_value1 = 0;
      }




      $c0_sum2 = DB::table('patientitems')
      ->where('cat_id', $id)
      ->where('item1', 2)
      ->sum('c0');
      //$arr_count
      if($arr_count != 0){
        $mean_value2 = @($c0_sum2/$arr_count2);
      }else{
        $mean_value2 = 0;
      }

     // dd($arr_count2);



      //dd($arr_count); ->select('department', DB::raw('SUM(price) as total_sales'))
    /*  $sd = DB::table('patientitems')
      ->select(DB::raw('STDDEV(patientitems.c0) as total_sales'))
      ->where('cat_id', $id)
      ->where('item1', 1)
      ->first(); */
      $sd = [];
      $sd2 = [];
      $sd_11 = DB::table('patientitems')
        ->select('patientitems.c0')
        ->where('cat_id', $id)
        ->where('item1', 1)
        ->get();

        foreach ($sd_11 as $obj_sd) {
            $sd[] = $obj_sd->c0;
        }

      $sd_22 = DB::table('patientitems')
      ->select('patientitems.c0')
      ->where('cat_id', $id)
      ->where('item1', 2)
      ->get();

      foreach ($sd_22 as $obj_sd) {
          $sd2[] = $obj_sd->c0;
      }

    //  dd($sd);
      //  dd($sd->total_sales);



      $i = 0;
      $j = 0;

      $objs = patient::find($id);

      $data['i'] = $i;
      $data['j'] = $j;
      //dd($obj_1->data);
      $data['c_1'] = $obj_1->data;
      $data['c_2'] = $obj_2->data;
      $data['sd'] = $sd;
      $data['sd2'] = $sd2;
      $data['mean_value2'] = $mean_value2;
      $data['mean_value1'] = $mean_value1;

      $data['message_1'] = $message_1;
      $data['message_2'] = $message_2;
      $data['objs'] = $objs;
      return view('patient_detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
