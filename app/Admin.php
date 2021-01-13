<?php

namespace TechObserversBlog;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
     protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 
    ];
    // public function getPasswordAttribute(){
    // 	return parse_str($this->password);
    // }
    public function setPasswordAttribute($value){
    	$this->attributes['password'] = bcrypt($value);
    }
}
