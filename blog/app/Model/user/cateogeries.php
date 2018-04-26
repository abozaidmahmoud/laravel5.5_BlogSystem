<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class cateogeries extends Model
{
    
    public function posts(){
    	return $this->belongsToMany('App\Model\user\post','cateogery_posts');
    }
}
