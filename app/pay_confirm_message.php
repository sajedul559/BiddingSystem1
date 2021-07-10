<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pay_confirm_message extends Model
{
    //
   protected $fillable=['crop_id','f_username','crop_name','cust_username','account_type','account_id','confirm_price','message'];
}
