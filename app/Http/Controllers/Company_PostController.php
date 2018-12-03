<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class Company_PostController extends Controller
{
    public function post(Request $request)
    {
       $result=DB::insert("insert into jobpost(jobpost_title,jobpost_description,jobpost_salary,company_id) value(?,?,?,?)",[$request->input('jobpost_title'),$request->input('jobpost_description'),$request->input('jobpost_salary'),Session::get('id')]);

        if($result){
          
	         Session::put('message','Post Successful!');
	          return Redirect::to('/post-job-notice');

    }

      else{
	         Session::put('message','Something went Wrong!');
	         return Redirect::to('/post-job-notice');
	         	    }

}


public function posted_job()
    {
        $company_id=Session::get('id');

        $data=DB::table('jobpost')->where('company_id', $company_id)->paginate(3);

        //return View::make("company/posted_job")->with('data',$data);
        return view('company.posted_job',compact('data'));
    }

}