<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class User_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $data['method'] = "put";
       return view('user_profile',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'position' => 'required',
        'sex' => 'required'
      ]);

      $package = User::find($id);
       $package->name = $request['name'];
       $package->email = $request['email'];
       $package->position = $request['phone'];
       $package->phone = $request['position'];
       $package->sex = $request['sex'];
       $package->save();

     return redirect(url('user_profile'))->with('success_user','แก้ไขบทความสำเร็จแล้วค่ะ');


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
