<?php

namespace Test_Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Test_Laravel\Employee;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = array(
            'title'=>'This is home',
            'employee'=>$employee = Employee::orderBy('id','desc')->get()
            );
        return view('posts.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=> 'required',
            'position'=> 'required'
            ]);

     // Create Post

        $emp = new Employee;
        $emp->firstname = $request->input('firstname');
        $emp->lastname = $request->input('lastname');
        $emp->position = $request->input('position');

        $emp->save();

        return redirect('/create')->with('success','Employee Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'title'=>'This is home',
            'employee'=>$employee = Employee::find($id)
            );
        return view('posts.post')->with($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'title'=>'Edit Employee',
            'employee'=>$employee = Employee::find($id)
            );
        return view('posts.edit')->with($data);

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
        
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=> 'required',
            'position'=> 'required'
            ]);


        $emp = Employee::find($id);
        $emp->firstname = $request->input('firstname');
        $emp->lastname = $request->input('lastname');
        $emp->position = $request->input('position');

        $emp->save();

        return redirect('/')->with('success','Employee Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        'HALA noh '.$id;
    }
}
