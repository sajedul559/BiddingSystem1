<?php

namespace App\Http\Controllers;

use DB;
use App\Bid_message;
use App\crop_import;
use App\farmer_register;
use App\pay_confirm_message;
use App\pay_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BidController extends Controller
{
    //

    public function Bid_model($id){
        $crop=crop_import::find($id);
        $owners =Bid_message::where('crop_id', $crop->id)->max('bid_price');
        return view('buyer.Bid_model',compact('crop'),compact('owners'));
    }

    public function bid_msg_save(Request $request)
    {
        $this->validate($request,[
        ]);
        if($request->message==null){
            $request->message="null";
        }

        $result = new Bid_message();
        $result->crop_id = $request->crop_id;
        $result->crop_name = $request->crop_name;
        $result->f_username = $request->f_username;
        $result->cust_username = $request->cust_username;
        $result->name = $request->name;
        $result->bid_price = $request->bid_price;
        $result->message = $request->message;
        $result->save();

        $farm=farmer_register::where('username',$request->f_username)->first();

        $data=$result->toArray();

         $data2=$farm->toArray();

        Mail::send('farmer.Bid_notification',['val'=>$data],function($message) use ($data2){
            $message->to($data2['email']);
            $message->subject('Bid_notification');
        });

        return redirect('/')->with('msg','your bid send successfully');

    }


public function bid_msg_saved(Request $request)
    {
        $this->validate($request,[
        ]);
        if($request->message==null){
            $request->message="null";
        }

        $result = new Bid_message();
        $result->crop_id = $request->crop_id;
        $result->crop_name = $request->crop_name;
        $result->f_username = $request->f_username;
        $result->cust_username = $request->cust_username;
        $result->name = $request->name;
        $result->bid_price = $request->bid_price;
        $result->message = $request->message;
        $result->save();

        $farm=farmer_register::where('username',$request->f_username)->first();

        $data=$result->toArray();

         $data2=$farm->toArray();

        Mail::send('farmer.Bid_notification',['val'=>$data],function($message) use ($data2){
            $message->to($data2['email']);
            $message->subject('Bid_notification');
        });
         return redirect()->route('crop_details',['id'=>$request->crop_id])->with('msg','your bid send successfully');;
    }


    public function bid_delete($id ,$crop_id){

         $bid_delete=Bid_message::find($id);
         $bid_delete->delete();
       
         $crop=crop_import::where('id',$crop_id)->first();
         $bids_msg=Bid_message::where('crop_id',$crop_id)->get();

        // return view('home.crop_details',['crop'=>$crop,'bids_msg'=>$bids_msg])->with('msg','bid deleted successfully');
        return redirect()->back()->with('msg','bid deleted successfully');
    }

    

    public function pay_confirm_message(Request $request)
    {
        $this->validate($request,[
            'account_id'=>['regex: /^((01|8801)[3456789])(\d{8})$/'],
        ]);
        if($request->message==null){
            $request->message="null";
        }

        $pay_info = new pay_confirm_message();
        $pay_info->crop_id = $request->crop_id;
        $pay_info->f_username = $request->f_username;
        $pay_info->crop_name = $request->crop_name;
        $pay_info->cust_username = $request->cust_username;
        $pay_info->account_type = $request->account_type;
        $pay_info->account_id = $request->account_id;
        $pay_info->confirm_price = $request->confirm_price;
        $pay_info->message = $request->message;
        $pay_info->save();
        return redirect()->back()->with('msg','your confirm message send successfully');

    }
}
