<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchStaff extends Model
{
    //
    public function getPhotoAttribute($value) 
    { return (is_null($value)) ? '/proPic/default.png' : '/assets/img/faculty/' . $value; }
}
