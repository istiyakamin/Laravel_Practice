<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    
    	public function passport()
    	{
    		return $this->hasOne('App\passport');
    	}
    	
    	public function mobileNumber(){
    		return $this->hasMany('App\mobile');
    	}
    
}
