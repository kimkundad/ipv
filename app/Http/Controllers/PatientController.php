<?php

namespace App\Http\Controllers;

use Auth;
use App\patient;
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