<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\farmer_register;
use App\user_register;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use validator;

class RegisterLoginCheckController extends Controller
{
    //

public function login(){
    return view('home.login');
}

    public function login_check(Request $request)
    {
        if ($request->register_as == "farmer") {

            if($result = farmer_register::where('email', $request->email)->first()){

              if($result->condition=="verified") {
          
               if (Hash::check($request->password, $result->password)) {

                if($result->action=="active"){
                    Session::put('f_username', $result['username']);
                    return redirect('/farmer/home/page')->with('f_login', 'Login successfully');
                    
                }else {
                    return redirect('/login')->with('login_error', 'your account are disabled plesae contact with admin');
                    }

                } else {
                    return redirect('/login')->with('login_error', 'email or password not match');
                }
         }
           else{
               return redirect('/login')->with('login_error', 'please verify your email');
           }

        }else{
            return redirect('/login')->with('login_error', 'please SignUp ');
        }
    }


        else {

          if($result = user_register::where('email', $request->email)->first()){

            if($result->condition=="verified") {

               if (Hash::check($request->password, $result->password)) {

                if($result->action=="active"){
                   Session::put('c_username', $result['username']);
                   return redirect('/')->with('c_login', 'Login successfully');
                   
                   } else {
                    return redirect('/login')->with('login_error', 'your account are disabled plesae contact with admin');
                    }
               } else {
                   return redirect('/login')->with('login_error', 'email or password not match');
               }
          }else{
              return redirect('/login')->with('login_error', 'please verify your email');
          }

      }else{
            return redirect('/login')->with('login_error', 'please SignUp ');
        }
    }

}



  public function signup(){

    return view('home.signup');

}

  public function registerSave(Request $request){

        if($request->register_as=="farmer") {

            $this->validate($request,[
                'username'=>'alpha_num|min:3|unique:farmer_registers,username',
                'email'=>'email|unique:farmer_registers,email',
                'mobile'=>['regex: /^((01|8801)[3456789])(\d{8})$/'],
                'zip_code'=>'max:5|string',
                'password'=>[
                    'string',
                    'min:5',             // must be at least 5 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                ],
                'password_confirm'=>'same:password'
            ]);

            $regis = new farmer_register();
            $regis->register_as = $request->register_as;
            $regis->username = $request->username;
            $regis->email = $request->email;
            $regis->mobile = $request->mobile;
            $regis->dob = $request->dob;
            $regis->division = $request->division;
            $regis->address = $request->address;
            $regis->zip_code = $request->zip_code;
            $regis->gender = $request->gender;
            $regis->password = Hash::make( $request->password);
            // $regis->password_confirm = Hash::make($request->password_confirm);
            $regis->profile_pic ="null";
            $regis->action ="active";
            $regis->condition ="unverified";
            $regis->NID_1 ="empty";
            $regis->NID_2 ="empty";
            $regis->save();

        $data=$regis->toArray();
        Mail::send('verification_mail',['val'=>$data],function($message) use ($data){
            $message->to($data['email']);
            $message->subject('verification_mail');
        });

            return redirect('/signup')->with('reg_success','Registration successfully,we send mail please verify');
        }else{

             $this->validate($request,[
                'username'=>'alpha_num|min:3|unique:user_registers,username',
                'email'=>'email|unique:user_registers,email',
                'mobile'=>['regex: /^((01|8801)[3456789])(\d{8})$/'],
                'zip_code'=>'max:5|string',
                'password'=>[
                    'string',
                    'min:5',             // must be at least 5 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                ],
                'password_confirm'=>'same:password'
            ]);

            $regis = new user_register();
            $regis->register_as = $request->register_as;
            $regis->username = $request->username;
            $regis->email = $request->email;
            $regis->mobile = $request->mobile;
            $regis->dob = $request->dob;
            $regis->division = $request->division;
            $regis->address = $request->address;
            $regis->zip_code = $request->zip_code;
            $regis->gender = $request->gender;
            $regis->password = Hash::make( $request->password);
            // $regis->password_confirm = Hash::make($request->password_confirm);
            $regis->profile_pic ="null";
            $regis->action ="active";
            $regis->condition ="unverified";
            $regis->NID_1 ="empty";
            $regis->NID_2 ="empty";
            $regis->save();

        $data=$regis->toArray();
        Mail::send('verification_mail',['val'=>$data],function($message) use ($data){
            $message->to($data['email']);
            $message->subject('verification_mail');
        });
        
             return redirect('/signup')->with('reg_success','Registration successfully,we send mail please verify');
}
}


    public function account_verify($username,$uses_as){
//        return $username;
        if($uses_as=="farmer"){
            $farm=farmer_register::where('username',$username)->first();
            $farm->condition="verified";
            $farm->save();
            return redirect('/login')->with('reg_success','verify successfully');
        }else{
            $farm=user_register::where('username',$username)->first();
            $farm->condition="verified";
            $farm->save();
            return redirect('/login')->with('reg_success','verify successfully');
        }
    }


    public function pw_change_link(Request $request){
        if($request->register_as=="farmer" ) {
                  $this->validate($request, [
                      'email' => 'required|exists:farmer_registers,email',
                  ]);
        }
        else {
              $this->validate($request, [
                      'email' => 'required|exists:user_registers,email',
                  ]);
        }

        $data=$request->toArray();

        Mail::send('home.pw_change_mail',['val'=>$data],function($message) use ($data){
            $message->to($data['email']);
            $message->subject('pw_change_mail');
        });
        return redirect('/login')->with('reg_success','we send mail for change password');
    }


    public function pw_change($uses,$email){
        return view('home.pw_change',compact('uses','email'));
    }


    public function pass_change_save(Request $request, $uses_as,$email){

        $this->validate($request, [
            'password'=>[
                'string',
                'min:5',             // must be at least 5 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            'password_confirm'=>'same:password'
        ]);
        if($uses_as=="farmer") {
            $farm=farmer_register::where('email',$email)->first();
            $farm->password = Hash::make( $request->password);
            $farm->save();
            return redirect('/login')->with('reg_success','password change successfully ,Now Login');
        }else{
            $user=user_register::where('email',$email)->first();
            $user->password = Hash::make( $request->password);
            $user->save();
            return redirect('/login')->with('reg_success','password change successfully ,Now Login');
        }

    }


        public function farmerRegisterUpdate(Request $request){
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
            
            $regis=farmer_register::where('id',$request->id)->first();
            $regis->mobile = $request->mobile;
            $regis->dob = $request->dob;
            $regis->division = $request->division;
            $regis->address = $request->address;
            $regis->zip_code = $request->zip_code;
            $regis->gender = $request->gender;
            if ($request->profile_image!=null) {
                $regis->profile_pic = $imageUrl;
            }
            
            $regis->save();
            return redirect('/farmer')->with('msg','update Successfully');
        }


         public function customerRegisterUpdate(Request $request){
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
            
            $regis=user_register::where('id',$request->id)->first();
            $regis->mobile = $request->mobile;
            $regis->dob = $request->dob;
            $regis->division = $request->division;
            $regis->address = $request->address;
            $regis->zip_code = $request->zip_code;
            $regis->gender = $request->gender;
            if ($request->profile_image!=null) {
                $regis->profile_pic = $imageUrl;
            }
            
            $regis->save();
            return redirect('/customer')->with('msg','update Successfully');
        }

}
