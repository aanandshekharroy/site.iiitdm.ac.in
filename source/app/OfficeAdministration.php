<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeAdministration extends Model
{
    //
    public function getPhotoAttribute($value) 
    { return (is_null($value)) ? '/proPic/default.png' : '/assets/img/office_administration/' . $value; }
}
