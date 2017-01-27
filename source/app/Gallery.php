<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table="gallery";
    public function getFileNameAttribute($value) 
    { return (is_null($value)) ? null : '/proPic/' . $value; }
}
