<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news_info extends Model
{
    //
    protected $fillable=['username','news_name','news_description','long_description','news_image'];
}
