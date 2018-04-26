<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\cateogeries;
use App\Model\user\member;
use App\Model\user\post;


 class HomeController extends Controller
{
    public function home(){
    	return view('admin/home');
    }

     public function count($model){
    	echo $model::count();
    }
}
