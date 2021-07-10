<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid_message extends Model
{
    //
    protected $fillable=['crop_id','crop_name','f_username','cust_username','email','name','bid_price','message'];
}
