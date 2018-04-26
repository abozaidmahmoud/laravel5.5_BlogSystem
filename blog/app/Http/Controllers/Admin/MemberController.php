<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\member;
use App\Model\user\post;
use App\Model\admin\admin;
use App\Model\user\tag;
use App\Model\user\cateogeries;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function register(){
         return view ('admin/member/member');
        }

    public function login(){
        return view('user/login');
    }

    public function logout(){
        request()->session()->flush();
        return redirect(url('Blog'));
    }
    public function checkadmin(Request $request){
        //form validation
      $this->validate($request,([
            'username'=>'required',
            'password'=>'required'
      ]));

        $username=$request->username;
        $password=md5($request->password);
        $user=admin::all();
        $member=member::all();
        foreach($user as $user){
            if($user->name==$username && $user->password==$password){
                $groubid=admin::where('name',$username)->value('groubid');
                $request->session()->put('username',$username);
                $request->session()->put('groubid',$groubid);
                return redirect(url('admin/home'));
              }
            }

        foreach($member as $member){
            if($member->username==$username && $user->password==$password){
                $request->session()->put('username',$username);
               $post=post::all();
                return view('user/userhome',compact('post'));
              }
            }
             
                $request->session()->flash('login_error','Invalid Username or Password');
                return redirect('user/login');
    }

    public function index()
    {
      $users=member::all();
      //return view('admin/member/show',compact('users'));
       $post=post::all();
        return view('user/userhome',compact('post'));

    }

   //return post form 
    public function create()
    {

       


    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate($request,[
            'username'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|unique:members',
            'password'=>'required',
        ]);

        $user=new member();
        //hash password
        $pass=md5($request->password);
        $user->username=$request->username;
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=$pass;
        $user->save();
        return  redirect(url('member'));

     }

      public function createpost()
    {
        
       $tags=tag::all();
       $cateogeries=cateogeries::all();

       return view('admin/member/createpost',compact('tags','cateogeries'));
     }

    public function insertpost(Request $request)
    {

        $data=$this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);
       
        $post=new post();
        $post->title=$request->title;
        $post->subtitle=$request->subtitle;
        $post->slug=$request->slug;
        $post->body=$request->body;
        $post->status=$request->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->cateogeries()->sync($request->cateogeries);
        $post=post::all();
        return redirect(url('Blog'));
      
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=member::where('id',$id)->first();
        return view('admin/member/edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$this->validate($request,[
            'username'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);
        $user=member::find($id);
        //hash password
        $pass=md5($request->password);
        $user->username=$request->username;
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=$pass;
        $user->save();
        return redirect(url('member'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        member::find($id)->delete();
        return redirect(route('member.index'));
    }

     public function deletepost($id)
    {
        post::find($id)->delete();
        return redirect(url('Blog'));
    }
}
