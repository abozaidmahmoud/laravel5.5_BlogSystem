<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;


class HomeController extends Controller
{
    public function index(){

    	$post=post::where('status',1)->get();
    	return view('user/blog',compact('post'));
    }
}
