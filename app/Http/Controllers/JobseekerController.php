<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class JobseekerController extends Controller
{
     public function index()
    {
    	return view('pages.jobseeker_login');
    }

     public function profile_setting()
    {
      
      $jobseeker = DB::table('jobseeker')->where('jobseeker_id',Session::get('jobseeker_id'))->first();
      return view('jobseeker.profile_setting',compact('jobseeker'));
     
    }



    public function applied()
    {



    }


    public function viewjob($company_id){
      

         if($company_id>=1){

           $viewjob=DB::table('jobpost')->leftJoin('company','company.id','=','jobpost.company_id')
           ->where('id',$company_id)

           ->get();
         }
          return view('pages.viewjob',compact('data'))->with('jobpost',$viewjob);      

    }



   public function viewdetails($jobpost_id)
   {
         if($jobpost_id>=1){
      
           $viewjobdetails=DB::table('jobpost')->leftJoin('company','company.id','=','jobpost.company_id')
           ->where('jobpost_id',$jobpost_id)

           ->get();
         }
          return view('pages.viewjobdetails',compact('data'))->with('jobpost',$viewjobdetails);      

    }

    

     public function Resume()
    {
      return view('jobseeker.resume');
    }

    

     public function Resume_create()
    {
      return view('jobseeker.resume');
    }



     public function applied_job()
    {
      $jobseeker_id=Session::get('jobseeker_id');

        $data=DB::table('application')->leftJoin('jobpost', 'jobpost.jobpost_id', '=', 'application.jobpost_id')->leftJoin('company', 'company.id', '=', 'jobpost.company_id')->where('jobseeker_id', $jobseeker_id)->paginate(3);



        //$applied_job=DB::table('applied_job')->get();

          $applied_job =DB::table('applied_job')->where('job_seeker_id',$jobseeker_id)->get();
         
         

       
       // return View::make("company/posted_job")->with('data',$data);
         return view('jobseeker.applied_job',compact('data'))->with('applied_job',$applied_job);

    }


 
     



       


     public function logout()
    {
      Session::flush();
      return view('pages.jobseeker_login');
    }

     




        public function signup(Request $request)
    {
    	// print_r($request->input());
    	 $result=DB::insert("insert into jobseeker(jobseeker_name,jobseeker_email,jobseeker_password,jobseeker_phone,jobseeker_jobtype,jobseeker_cv,jobseeker_image) value(?,?,?,?,?,?,?)",[$request->input('jobseeker_name'),$request->input('jobseeker_email'),$request->input('jobseeker_password'),$request->input('jobseeker_phone'),$request->input('job_type'),$request->input('jobseeker_cv'),$request->input('jobseeker_image')]);


	    	 if($result){
	         Session::put('message','Registered Successfully!');
	          return Redirect::to('/jobseeker-login');
	    }
	    else{
	         Session::put('message','Email or Password Invalid');
	         return Redirect::to('/jobseeker-login');
	         	    }

    	
    }

       public function profile(Request $request)
    {

     
    	 $jobseeker_email=$request->email;

          $jobseeker_password=$request->password;

           $lresult=DB::table('jobseeker')
                  ->where('jobseeker_email',$jobseeker_email)
                  ->where('jobseeker_password',$jobseeker_password)
                  ->first();


                  if ($lresult) {
                    Session::put('jobseeker_name',$lresult->jobseeker_name);
                    Session::put('jobseeker_email',$lresult->jobseeker_email);
                    Session::put('jobseeker_password',$lresult->jobseeker_password);
                    Session::put('jobseeker_phone',$lresult->jobseeker_phone);
                    Session::put('jobseeker_id',$lresult->jobseeker_id);
                    
                   return Redirect::to('/');

                     //return var_dump($lresult);
                  }
                  else
                  {

                    Session::put('message','Email or Password Invalid');
                    return Redirect::to('/jobseeker-login');
                  }
    }

    public function editjobseeker($jobseeker_id){
      $jobseeker=DB::table('jobseeker')->where('jobseeker_id',$jobseeker_id)->first();
          return view('jobseeker.edit')->with('jobseeker',$jobseeker);
    }

    public function profile_update(Request $request)
    {
      DB::table('jobseeker')->where('jobseeker_id',Session::get('jobseeker_id'))->update([
        'jobseeker_name'=>$request->jobseeker_name,
        'jobseeker_email'=>$request->jobseeker_email,
        'jobseeker_password'=>$request->jobseeker_password,
        'jobseeker_phone'=>$request->jobseeker_phone

        ]);
            return Redirect::to('/jobseeker-profile-setting');;

    }

    public function ApplyJobPost($job_id,$seeker_id){
    $check=DB::table('applied_job')->where('job_post_id',$job_id)->where('job_seeker_id',$seeker_id)->count();

    if($check>=1){
      return Redirect::to('/applied-job')->with('message',"You have applied already");
    }
    else


     DB::table('applied_job')->insert([
      'job_post_id'=>$job_id,
      'job_seeker_id'=>$seeker_id,
      ]);
   $job_post_id=DB::table('jobpost')->where('jobpost_id',$job_id)->first();
      $company_email=DB::table('company')->where('id',$job_post_id->company_id)->first();
      $company_email=$company_email->company_email;
      $name= Session::get('jobseeker_name');

 
      Mail::to($company_email)->send(new SendMailable($name));



     return Redirect::to('/applied-job')->with('message',"You have applied Successfully");
    }

  
}
