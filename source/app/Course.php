<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function course_category(){
        $category="";
        if($this->ug){
            $category.="UG/";
        }
        if($this->pg){
            $category.="PG/";
        }
        if($this->phd){
            $category.="PhD";
        }
        return $category;
    }
}
