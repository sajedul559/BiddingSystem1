<?php

namespace App\Http\Controllers;

use App\admin_register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class adminLoginController extends Controller
{
    //

   public function a_login(){
        return view('admin.login');
    }

public function admin_login_check(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|exists:admin_registers,email',
        ]);

        if($result = admin_register::where('email', $request->email)->first()){

        if ($result->condition == "verified") {
           if (Hash::check($request->password, $result->password)) {
                Session::put('a_username', $result['username']);
                return redirect('/admin/home')->with('a_login', 'Login successfully');
            } else {
                return redirect('/admin/login')->with('login_error', 'password not match');
            }
        } else {
            return redirect('/admin/login')->with('login_error', 'please verify your email');

        }
    }else{
            return redirect('/login')->with('login_error', 'please SignUp ');
        }
    }


    public function admin_signup(){
        return view('admin.signup');
    }

    public function admin_registerSave(Request $request)
    {
        $this->validate($request, [
            'username' => 'alpha_num|min:3|unique:admin_registers,username',
            'email' => 'email|unique:admin_registers,email',
                'mobile'=>['regex: /^((01|8801)[3456789])(\d{8})$/'],
                'password'=>[
                    'string',
                    'min:5',             // must be at least 5 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                ],
                'password_confirm'=>'same:password'
            ]);

        $regis = new admin_register();
        $regis->username = $request->username;
        $regis->email = $request->email;
        $regis->mobile = $request->mobile;
        $regis->dob = $request->dob;
        $regis->division = $request->division;
        $regis->address = $request->address;
        $regis->gender = $request->gender;
        $regis->password = Hash::make( $request->password);
        $regis->profile_pic = "null";
        $regis->condition = "unverified";
        $regis->save();

        $data = $regis->toArray();
        Mail::send('admin.verification_mail', ['val' => $data], function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('verification_mail');
        });

        return redirect('/admin/login')->with('msg', 'Registration successfully, please verify your account');
    }


    public function admin_account_verify($username)
    {

        $farm = admin_register::where('username', $username)->first();
        $farm->condition = "verified";
        $farm->save();
        return redirect('/admin/login')->with('msg', 'verify successfully');

    }





    public function admin_pw_change_link(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|exists:admin_registers,email',
        ]);

        $data = $request->toArray();
        Mail::send('admin.pw_change_mail', ['val' => $data], function ($message) use ($data){
                    $message->to($data['email']);
                    $message->subject('pw_change_mail');
                });
        return redirect('/admin/login')->with('msg', 'we send mail for change password');

    }


    public function admin_pw_change($email){
        return view('admin.admin_pw_change',compact('email'));
    }


    public function admin_pass_change_save(Request $request,$email)
    {

        $this->validate($request, [
            'password' => [
                'string',
                'min:5',             // must be at least 5 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            'password_confirm' => 'same:password'
        ]);
            $pw_change = admin_register::where('email', $email)->first();
            $pw_change->password = Hash::make( $request->password);
            $pw_change->save();
          
            return redirect('/admin/login')->with('msg', 'password change successfully ,Now Login');
    }
    

           public function adminregisterUpdate(Request $request){
             $this->validate($request,[
         
                'mobile'=>['regex: /^((01|8801)[3456789])(\d{8})$/'],
            ]);


                if ($request->profile_image!=null) {
                $profileImage = $request->file('profile_image');
                if ($profileImage) {
                    $imageName = time().'.'.$profileImage->getClientOriginalName();
                    $directory = 'public/profile_images/';
                    $imageUrl = $directory . $imageName;
                    $profileImage->move($directory, $imageName);

                }
            }
            
            $regis=admin_register::where('id',$request->id)->first();
            $regis->mobile = $request->mobile;
            $regis->dob = $request->dob;
            $regis->division = $request->division;
            $regis->address = $request->address;
            $regis->gender = $request->gender;
            if ($request->profile_image!=null) {
                $regis->profile_pic = $imageUrl;
            }
            
            $regis->save();
            return redirect('/admin/settings')->with('msg','update Successfully');
        }
}

