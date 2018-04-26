<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\cateogeries;

class CateogeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cateogeries=cateogeries::all();
      return view('admin/cateogery/show',compact('cateogeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/cateogery/cateogery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //form validation
        
        $this->validate($request,[
            'name'=>'required',
            'slug'=>'required',
        ]);
        $cateogery=new cateogeries();
        $cateogery->name=$request->name;
        $cateogery->slug=$request->slug;
        $cateogery->save();
        return redirect(route('cateogery.index'));
        
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
        $cateogery=cateogeries::where('id',$id)->first();
        return view('admin.cateogery.edit',compact('cateogery'));
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
             //form validation
        $this->validate($request,[
            'name'=>'required',
            'slug'=>'required',
        ]);
        $cateogery=cateogeries::find($id);
        $cateogery->name=$request->name;
        $cateogery->slug=$request->slug;
        $cateogery->save();
        return redirect(route('cateogery.index'));
      

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cateogeries::find($id)->delete();
        return redirect()->back();
    }
}
