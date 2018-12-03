<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{

    //latest job order by desc





    public function index()
    {
       $companies = DB::table('company')->get()->toArray();
        $jobposts = DB::table('jobpost')
            ->leftJoin('company', 'jobpost.company_id', '=', 'company.id')->orderBy('id', 'desc')
            ->get();
    	return view('pages.home_content',compact('jobposts'));
    }


    
    public function company_login()
    {
    	return view('pages.company_login');
    }

    //joblist show

    public function job_list()
    {
        $companies = DB::table('company')->get()->toArray();
        $jobposts = DB::table('jobpost')
            ->leftJoin('company', 'jobpost.company_id', '=', 'company.id')
            ->paginate(3);

            


    	return view('pages.job_list',compact('jobposts'),compact('companies'));
    }



//search job

    public function search()
    {
        $q = input::get('q');
        if($q !=""){
            $search = DB::table('jobpost')
            ->leftJoin('company', 'jobpost.company_id', '=', 'company.id')
            ->where('company_name','LIKE','%'.$q.'%')
            ->orWhere('jobpost_title','LIKE','%'.$q.'%')
            ->orWhere('jobpost_description','LIKE','%'.$q.'%')
            ->orWhere('jobpost_salary','LIKE','%'.$q.'%')
            ->get();

            if(count($search)>0)
            return view('pages.search')->withDetails($search)->withQuery($q);

        }

        return view('pages.search')->withMessage("No Data Found!");
        
    }
     


}
