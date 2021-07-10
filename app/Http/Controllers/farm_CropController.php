<?php

namespace App\Http\Controllers;

use App\crop_import;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class farm_CropController extends Controller
{
    //

     public function crop_import(){
        return view('farmer.crop_import');
    }

      public function add_product_db(Request $request){

        $this->validate($request,[
            'crop_name'=>'string'
        ]);

        $addProducts = new crop_import();
        
        $productImage = $request->file('crop_image');
        if ($productImage) {

            $currentTimeinSeconds = time();  
  
            // converts the time in seconds to current date  
           // $currentDate = date('Y-m-d', $currentTimeinSeconds); 

            $imageName =  $currentTimeinSeconds.'.'.$productImage->getClientOriginalName();
            $directory = 'public/crop_images/';
            $imageUrl = $directory.$imageName;
            
            $productImage->move($directory, $imageName);
        }
        
        $productImage2 = $request->file('crop_image2');
        if ($productImage2) {
            $currentTimeinSeconds = time(); 
            $imageName = $currentTimeinSeconds.'.'.$productImage2->getClientOriginalName();
            $directory = 'public/crop_images/';
            $imageUrl2 = $directory.$imageName;
            $productImage2->move($directory, $imageName);
        }

        $addProducts->username = $request->username;
        $addProducts->crop_name = $request->crop_name;
        $addProducts->crop_session = $request->crop_session;
        $addProducts->crop_type = $request->crop_type;
        $addProducts->crop_quantity = $request->crop_quantity;
        $addProducts->crop_location = $request->crop_location;
        $addProducts->bid_rate = $request->bid_rate;
        $addProducts->crop_description = $request->crop_description;
        $addProducts->last_date_bidding = $request->last_date_bidding;
        $addProducts->crop_image = $imageUrl;
        $addProducts->crop_image2 = $imageUrl2;
        $addProducts->status =1;
        $addProducts->condition ="New";
        $addProducts->Action ="Unpublished";
        $addProducts->save();

        return redirect('/crop/import')->with('msg', 'Save Products Info Successfully');
    }


    public function crop_manage(){
        $crops=crop_import::where('username',Session::get('f_username'))->where('Action','!=',"deleted")->paginate(9);
        return view('farmer.manage_crops',compact('crops'));
    }

    public function edit_crop($id){
        $crop=crop_import::find($id);
        return view('farmer.edit_crop',compact('crop'));
    }


    public function update_product_db(Request $request){

        $this->validate($request,[
            'crop_name'=>'string'
        ]);

        $id=$request->id;
        $addProducts=crop_import::find($id);

        if($request->crop_image!=null) {
            $productImage = $request->file('crop_image');
            if ($productImage) {
                $currentTimeinSeconds = time(); 
                $imageName = $currentTimeinSeconds.'.'.$productImage->getClientOriginalName();
                $directory = 'public/crop_images/';
                $imageUrl = $directory . $imageName;
                $productImage->move($directory, $imageName);

            }
        }
        if($request->crop_image2!=null) {
            $productImage2 = $request->file('crop_image2');
            if ($productImage2) {
                $currentTimeinSeconds = time(); 
                $imageName = $currentTimeinSeconds.'.'.$productImage2->getClientOriginalName();
                $directory = 'public/crop_images/';
                $imageUrl2 = $directory . $imageName;
                $productImage2->move($directory, $imageName);

            }
        }

        $addProducts->username = $request->username;
        $addProducts->crop_name = $request->crop_name;
        $addProducts->crop_session = $request->crop_session;
        $addProducts->crop_type = $request->crop_type;
        $addProducts->crop_quantity = $request->crop_quantity;
        $addProducts->crop_location = $request->crop_location;
        $addProducts->bid_rate = $request->bid_rate;
        $addProducts->crop_description = $request->crop_description;
        $addProducts->last_date_bidding = $request->last_date_bidding;
        if($request->crop_image!=null) {
            $addProducts->crop_image = $imageUrl;
        }
        if($request->crop_image2!=null) {
            $addProducts->crop_image2 = $imageUrl2;
        }
        $addProducts->condition ="New";
        $addProducts->Action ="Unpublished";
        $addProducts->save();

        return redirect('/crop/manage')->with('msg', 'update Products Info Successfully');
    }


    public function condition_crop($id){

        $crop=crop_import::find($id);

        if( $crop->status=="1"){
        $crop->status="0";
        $crop->save();
        return redirect('/crop/manage')->with('msg','Crop Deactive successfully');
        }


        else{
        $crop->status="1";
        $crop->save();
        return redirect('/crop/manage')->with('msg','Crop active successfully');
        }      
}


    public function delete_crop($id){
        $crop=crop_import::find($id);
        $crop->Action="deleted";
        $crop->save();
        return redirect('/crop/manage')->with('msg','delete crop successfully');
    }

}
