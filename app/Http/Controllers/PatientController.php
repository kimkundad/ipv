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

       $obj = new patientitem();
       $obj->cat_id = $request['cat_id'];
       $obj->trough = $request['trough'];
       $obj->dose_1 = $request['dose_1'];
       $obj->c0 = ($request['trough']/$request['dose_1']);
       $obj->set_date = $request['set_date'];
       $obj->item1 = $request['set_comment'];
       $obj->save();

       return redirect(url('patient/'.$request['cat_id'].'#item-list-product'))->with('success_item','เพิ่มข้อมูลสำเร็จสำเร็จ');


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
        $mean_value1 = ($c0_sum/$arr_count);
      }else{
        $mean_value1 = 0;
      }




      $c0_sum2 = DB::table('patientitems')
      ->where('cat_id', $id)
      ->where('item1', 2)
      ->sum('c0');
      //$arr_count
      if($arr_count != 0){
        $mean_value2 = ($c0_sum2/$arr_count);
      }else{
        $mean_value2 = 0;
      }



      //dd($arr_count); ->select('department', DB::raw('SUM(price) as total_sales'))
      $sd = DB::table('patientitems')
      ->select(DB::raw('STDDEV(patientitems.c0) as total_sales'))
      ->where('cat_id', $id)
      ->where('item1', 1)
      ->first();

      $sd2 = DB::table('patientitems')
      ->select(DB::raw('STDDEV(patientitems.c0) as total_sales'))
      ->where('cat_id', $id)
      ->where('item1', 2)
      ->first();

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
