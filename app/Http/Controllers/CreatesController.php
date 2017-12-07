<?php

namespace Test_Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Test_Laravel\Employee;
class CreatesController extends Controller
{
    

    public function create(){
    	$data = array(
    		'title'=>'This is create',
    		'employee'=>$employee = Employee::all()
    		);
   	    return view('pages.create')->with($data);
    }

}
