<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
   public function tags(){	

   		return $this->belongsToMany('App\Model\user\tag','post_tags')->withTimestamps();
   }

   public function cateogeries(){

   		return $this->belongsToMany('App\Model\user\cateogeries','cateogery_posts')->withTimestamps();
   }

   public function getRouteKeyName(){
   	return 'slug';
   }


}
