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
        'phone','webpage','about_me','interests',
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

    public function qualifications(){
        return $this->hasMany('App\Qualification','user_id','id');
    }
    public function professional_experiences(){
        return $this->hasMany('App\ProfessionalExperience','user_id','id');
    }
    public function administrative_positions(){
        return $this->hasMany('App\AdministrativePosition','user_id','id');
    }
}
