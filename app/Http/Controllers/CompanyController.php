<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class CompanyController extends Controller
{
    public function index()
    {
    	return view('pages.company_login');
    }


//->leftJoin('jobpost', 'jobpost.jobpost_id', '=', 'application.jobpost_id')->leftJoin('company', 'company.id', '=', 'jobpost.company_id')

    public function message()
    {
        $company_id=Session::get('id');

        $data=DB::table('jobpost')->join('application', 'application.jobpost_id', '=', 'jobpost.jobpost_id')->join('jobseeker', 'jobseeker.jobseeker_id', '=', 'application.jobseeker_id')->where('company_id', $company_id)->paginate(3);
      return view('company.message',compact('data'));
    }


    public function apply_job($job_post_id)
    {
      $jobseeker_id = Session::get('jobseeker_id');

      //echo $job_post_id;
      if($jobseeker_id!=null){
       $application=DB::insert("insert into application(jobpost_id,jobseeker_id) value(?,?)",[$job_post_id,$jobseeker_id]);

      }
      else{
        return Response::json(['error' => 'Error msg'], 404); // Status code here
      }//return view('pages.job_list');
    }

    public function logout()
    {
      Session::flush();
      return view('pages.company_login');
    }

     public function add_post(Request $request)
    {     
          $company_id=Session::get('id');

        
         $result=DB::insert("insert into jobpost(company_id,jobpost_title,jobpost_description,jobpost_salary) value(?,?,?,?)",[$company_id,$request->input('jobpost_title'),$request->input('jobpost_description'),$request->input('jobpost_salary')]);

          Session::put('Successfully Posted.');
                    return Redirect::to('/post-job-notice');


      // return view('pages.company_login');
    }




     public function profile_setting()
    {
            $company = DB::table('company')->where('id',Session::get('id'))->first();
            return view('company.company_profile_setting',compact('company'));
    }


    public function post_job()
    {
            return view('company.post_job');

    }


    public function signup(Request $request)
    {
    	// print_r($request->input());
    	 $result=DB::insert("insert into company(company_name,company_email,company_password,company_phone,company_type,company_image) value(?,?,?,?,?,?)",[$request->input('company_name'),$request->input('company_email'),$request->input('company_password'),$request->input('company_phone'),$request->input('company_type'),$request->input('company_image')]);


	    	 if($result){
	         Session::put('message','Registered Successfully!');
	          return Redirect::to('/company-login');
	    }
	    else{
	         Session::put('message','Email or Password Invalid');
	         return Redirect::to('/company-login');
	         	    }

    	
    }
    public function profile(Request $request)
    {

     
    	 $company_email=$request->email;

          $company_password=$request->password;

           $lresult=DB::table('company')
                  ->where('company_email',$company_email)
                  ->where('company_password',$company_password)
                  ->first();


                  if ($lresult) {

                    Session::put('company_name',$lresult->company_name);
                    Session::put('company_email',$lresult->company_email);
                    Session::put('company_password',$lresult->company_password);
                    Session::put('company_phone',$lresult->company_phone);
                    Session::put('id',$lresult->id);

                    return Redirect::to('/company-profile-setting');

                     // return var_dump($lresult);
                  }
                  else
                  {

                    Session::put('message','Email or Password Invalid');
                    return Redirect::to('/company-login');
                  }
    }


    public function editCompany($id){
      $company=DB::table('company')->where('id',$id)->first();
          return view('company.edit')->with('company',$company);
    }


    public function profile_update(Request $request)
    {
      DB::table('company')->where('id',Session::get('id'))->update([
        'company_name'=>$request->compnay_name,
        'company_email'=>$request->compnay_email,
        'company_password'=>$request->compnay_password,
        'company_phone'=>$request->compnay_phone

        ]);
            return Redirect::to('/company-profile-setting');;

    }

}
