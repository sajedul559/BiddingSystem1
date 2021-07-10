<?php

namespace App\Http\Controllers;

use App\Bid_message;
use App\pay_confirm_message;
use App\user_register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class buyerController extends Controller
{
    //

    public function cust_profile($c_username){
         $bids_crop=Bid_message::where('cust_username',$c_username)->distinct()->get(['crop_id']);
         return view('buyer.customer_profile',compact('bids_crop'));
     }

    public function c_message(){
        $pay_confirms=pay_confirm_message::where('cust_username',Session::get('c_username'))->get();
        return view('buyer.c_message',compact('pay_confirms'));
    }


    public function c_settings(){

        $user=user_register::where('username',Session::get('c_username'))->first();

        return view('buyer.c_settings',compact('user'));
    }

    

public function farm_profile($f_username){
        $crops=Bid_message::where('f_username',$f_username)->distinct()->get(['crop_id']);
         return view ('buyer.farm_profile',compact('crops'));
    }
}
