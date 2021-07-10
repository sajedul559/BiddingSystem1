<?php

namespace App\Http\Controllers;
use App\crop_import;
use App\wishlist;
use App\pay_order;
use App\Bid_message;
use App\farmer_register;
use App\pay_confirm_message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class wishlistController extends Controller
{
    //
   public function wishlist_db($id){
	  $crop=crop_import::find($id);

	  $wishlist = new wishlist();
	  $wishlist->crop_id=$crop->id;
	  $wishlist->f_username=$crop->username;
	  $wishlist->c_username=Session::get('c_username');
	  $wishlist->save();
	  return redirect('/')->with('msg','wishlist added successfully');
    }


	public function wishlist($c_username){
		   $wishlists=wishlist::where('c_username',$c_username)->get();
		   return view('buyer.wishlist',compact('wishlists'));
    }

    public function wishlist_remove($id){
		   $wishlist=wishlist::find($id);
		   $wishlist->delete();
		   return redirect()->back()->with('msg','wishList remove successfully');
    }

}
