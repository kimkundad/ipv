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
       if($request['comment'] == 1){

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
       $obj->set_date = $request['set_date'];
       $obj->save();

       return redirect(url('patient/'.$request['cat_id']))->with('success_item','เพิ่มข้อมูลสำเร็จสำเร็จ');


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
      $objs = patient::find($id);

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
