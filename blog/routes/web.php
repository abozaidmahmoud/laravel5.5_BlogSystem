<?php

//User routes

Route::group(['namespace'=>'User'],function(){

	Route::get('Blog','HomeController@index');
	Route::get('post/{post}','PostController@post')->name('post');
});


//Admin routes
Route::group(['namespace'=>'Admin'],function(){
   	Route::get('admin/home','HomeController@home');
   	//user routes
   	Route::resource('admin/user','UserController');
   	//post routes
	Route::resource('admin/post','PostController');
	//tag routes
	Route::resource('admin/tag','TagController');
	//cateogery routes
	Route::resource('admin/cateogery','CateogeryController');	

	//member routes
   	



});

Route::resource('member','Admin\MemberController');
Route::get('user/register','Admin\MemberController@register');
Route::get('user/login','Admin\MemberController@login');
Route::get('user/logout','Admin\MemberController@logout');
Route::get('user/home','Admin\MemberController@checkadmin');
Route::get('user/createpost','Admin\MemberController@createpost');
Route::put('user/insertpost','Admin\MemberController@insertpost'); 
Route::get('user/deletepost/{id}','Admin\MemberController@deletepost');

Route::get('admin/member/show','Admin\UserController@index');