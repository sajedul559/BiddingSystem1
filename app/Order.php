<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable=['f_username','c_username','crop_id','name','email','phone','bid_price','amount','address','division','zip','status','transaction_id','currency'];
}
