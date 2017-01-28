<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','proPic',
        'specialization','department','designation',
        'phone','webpage','about_me','interests','cv',
        'gmail','twitter','facebook','linkedin','skype',
        'alternate_phone','fax',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','proPic',
    ];
    public function getProPicAttribute($value) 
    { return (is_null($value)) ? '/proPic/default.png' : '/proPic/' . $value; }
    
    public function getCvAttribute($value) 
    { return (is_null($value)) ? null : '/cv/' . $value; }
    
    public function qualifications(){
        return $this->hasMany('App\Qualification','user_id','id');
    }
    public function professional_experiences(){
        return $this->hasMany('App\ProfessionalExperience','user_id','id');
    }
    public function administrative_positions(){
        return $this->hasMany('App\AdministrativePosition','user_id','id');
    }
    public function gallery(){
        return $this->hasMany('App\Gallery','user_id','id');
    }
    public function students(){
        return $this->hasMany('App\FacultyStudent','faculty_id','id');   
    }
    public function conferences(){
        return $this->hasMany('App\Conference','user_id','id');   
    }
    public function courses(){
        return $this->hasMany('App\Course','user_id','id');   
    }
    public function publications(){
        return $this->hasMany('App\Publication','user_id','id');   
    }
    public function projects(){
        return $this->hasMany('App\Project','user_id','id');   
    }
}
