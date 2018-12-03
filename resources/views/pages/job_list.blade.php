@extends('layout')
@section('content')

<link href="{{asset('frontend/joblist.css')}}" rel="stylesheet" type="text/css" media="all">






<h2 class="center">Job Notices</h2>

 @foreach($jobposts as $jobpost)
        <section id="job_list">

<div class="wrapper bgded overlay" style="background-image:url('images/design/backgrounds/02.jpg');">
     
      <div id="comments">
        
        @if(Session::get('message'))
      <h3>{{Session::get('message')}}</h3>
      @endif
        <ul>
      

                    <li>
               <article>
               <header>
               <address>
               By <a href="{{URL::to('/viewjob').'/'.$jobpost->company_id}}">{{$jobpost->company_name}}</a>
               </address>
               
               </header>
               <div class="comcont">
               <p style="color:black;">{{$jobpost->jobpost_title}}</p>
               </div>
               <div class="comcont">
               <p style="color:black;">{{$jobpost->jobpost_description}}</p>
               </div>
               <div class="comcont">
               <p style="color: black;">Salary:{{$jobpost->jobpost_salary}}</p>
               </div>
               </article>

               @if(Session::get('id')!=null)
          <footer><a href="{{URL::to('/#latest_job')}}">Details! &raquo;</a></footer>
               @elseif(Session::get('jobseeker_id')==null)
         <footer><a href="{{URL::to('/jobseeker-login')}}">login to view! &raquo;</a></footer>
            @else 

          
        

                
          
          <a href="{{URL::to('viewdetails/').'/'.$jobpost->jobpost_id}}">View Detals! &raquo;</a>
    

         @endif
               

          </li>
          
                  </ul>
        
      </div>
      </div>
      
   @endforeach
   {{ $jobposts->links() }}

 @endsection
   


    



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>





  


