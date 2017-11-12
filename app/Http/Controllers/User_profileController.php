<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;

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

    public function admin_credential_rules(array $data)
    {
      $messages = [
        'current-password.required' => 'Please enter current password',
        'password.required' => 'Please enter password',
      ];

      $validator = Validator::make($data, [
        'current-password' => 'required',
        'password' => 'required|same:password',
        'password_confirmation' => 'required|same:password',
      ], $messages);

      return $validator;
    }



    public function update_pic(Request $request)
    {
      $this->validate($request, [
        'image' => 'required'
      ]);

      $image = $request->file('image');
      $id = $request['id'];

       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $img = Image::make($image->getRealPath());
        //$img->crop(300, 300, 0, 0);
        $img->resize(300, 300, function ($constraint) {
        $constraint->aspectRatio();
      })->crop(200, 200, 25, 0)->save('assets/avatar/image/'.$input['imagename']);

      $package = User::find($id);
       $package->avatar = $input['imagename'];
       $package->save();

       return redirect(url('user_profile'))->with('success_user_pic','แก้ไขบทความสำเร็จแล้วค่ะ');

    }



    public function update_pass(Request $request)
    {

      if(Auth::Check())
        {
          $request_data = $request->All();
          $validator = $this->admin_credential_rules($request_data);
          if($validator->fails())
          {
            return redirect(url('user_profile'))->with('error_pass','แก้ไขบทความสำเร็จแล้วค่ะ');
          //  return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
          }
          else
          {
            $current_password = Auth::User()->password;
            if(Hash::check($request_data['current-password'], $current_password))
            {
              $user_id = Auth::User()->id;
              $obj_user = User::find($user_id);
              $obj_user->password = Hash::make($request_data['password']);;
              $obj_user->save();
              //return "ok";
              return redirect(url('user_profile'))->with('success_pass','แก้ไขบทความสำเร็จแล้วค่ะ');
            }
            else
            {
              //$error = array('current-password' => 'Please enter correct current password');
              return redirect(url('user_profile'))->with('error_correct_pass','แก้ไขบทความสำเร็จแล้วค่ะ');
              //return response()->json(array('error' => $error), 400);
            }
          }
        }
        else
        {
          return redirect(url('user_profile'))->with('error_pass');
        }






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
