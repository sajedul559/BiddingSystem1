<?php

namespace App\Http\Controllers;

use App\Bid_message;
use App\contact_message;
use App\crop_import;
use App\farmer_register;
use App\news_info;
use App\pay_confirm_message;
use App\user_register;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class homeController extends Controller
{
    //
    public function index(){

        $date=new Carbon();

        $allCrops=crop_import::all();
        foreach ($allCrops as $Crops) {
            $olddate=$Crops->last_date_bidding;
            if($date->greaterThan($olddate)){
                $Crops->condition="old";
                $Crops->save();
            }
        }

        $crops= crop_import::where('Action',"Published")->where('status',1)->orderBy('created_at', 'desc')->paginate(13);
        return view('home.index',compact('crops'));
    }

    public function about(){
        return view('home.about_us');
    }

    public function services(){
  
        return view('home.services');
    }

public function contact(){
        return view('home.contact');
    }

public function gallery(){
        return view('home.gallery');
    }
    
 public function news_info(){
        $newses=news_info::all();
        return view('home.news_info',compact('newses'));
    }


    public function Categories($crop_type){
        $crops=crop_import::where('crop_type',$crop_type)
        ->where('Action',"Published")
        ->where('status',1)
        ->get();
        return view('home.categories',compact('crops'));
    }

     public function Session_Categories($crop_type, $crop_session){

    if($crop_session=="1"){
        $crops=crop_import::where('crop_type',$crop_type)->where('crop_session',$crop_session)
        ->where('Action',"Published")
        ->where('status',1)
        ->get();
    }elseif ($crop_session=="2"){
          $crops=crop_import::where('crop_type',$crop_type)->where('crop_session',$crop_session)
        ->where('Action',"Published")
        ->where('status',1)
        ->get();
    }
    else{
           $crops=crop_import::where('crop_type',$crop_type)->where('crop_session',$crop_session)
        ->where('Action',"Published")
        ->where('status',1)
        ->get();
    }
        return view('home.categories',compact('crops'));
    }



    public function crop_details($id){
         $crop=crop_import::find($id);
         $bids_msg=Bid_message::where('crop_id',$id)->get();
         return view('home.crop_details',['crop'=>$crop,'bids_msg'=>$bids_msg]);
    }

    
    public function search(Request $request){
        $search_tx1= $request->search;

        $search=crop_import::orderBy('id','desc')      
            // ->where('crop_name','Like','%'.$search_tx1.'%')
            // ->orwhere('crop_type','Like','%'.$search_tx1.'%')
             
            // ->orwhere('bid_rate','Like','%'.$search_tx1.'%')
            ->where('crop_name','Like',"%$search_tx1%")->where('Action',"Published")->where('status',1)
            ->orwhere('crop_type','Like',"%$search_tx1%")->where('Action',"Published")->where('status',1)
            ->orwhere('crop_location','Like','%'.$search_tx1.'%')->where('Action',"Published")->where('status',1)
            ->get();
            return view('home.search', ['s' => $search]);
    }

}
