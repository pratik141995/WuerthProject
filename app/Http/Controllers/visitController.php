<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitor;
class visitController extends Controller
{
    
    public function index(){
    	$visitor=visitor::paginate(5);
    	return view('index',compact('visitor'));
    }

    public function add_visitor_data(){
    	return view('manage_data');
    }


    public function save_data(Request $request){
	   $request->validate([
	   	'visitor_name'=>'required',
	   	'company'=>'required',
	   	'email'=>'required',
	   	'visit_date'=>'required',
	   	'meeting_room'=>'required',
       ]);
       for ($i=0; $i < count($request->visitor_name); $i++) { 
           $visitor_name=$request->visitor_name[$i];
           $company=$request->company[$i];
           $email=$request->email[$i];
           $purpose_visit=$request->purpose_visit;
           $cc_email=$request->cc_email;
           $end_time=$request->end_time;
           $meeting_room=$request->meeting_room;
            visitor::create(['visitor_name'=>$visitor_name,'company'=>$company,'email'=>$email,'purpose_visit'=>$purpose_visit,'cc_email'=>$cc_email,'end_time'=>$end_time,'meeting_room'=>$meeting_room]);
       }
       return redirect('/')->with('success','Data Saved Successfully!');
    }

    

    
}
