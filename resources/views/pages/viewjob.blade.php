
@extends('layout')
@section('content')

        <section id="job_list">

<div class="wrapper bgded overlay" style="background-image:url('images/design/backgrounds/02.jpg');">
     
      <div id="comments">
        <h2 class="center">Job Notices</h2>
        @if(Session::get('message'))
      <h3>{{Session::get('message')}}</h3>
      @endif
        <ul>
      

            @foreach($jobpost as $jobposts)
         <li>
               <article>
               <header>
               <address>
               By <a href="{{URL::to('/viewjob').'/'.$jobposts->company_id}}">{{$jobposts->company_name}}</a>
               </address>
               </header>
               <div class="comcont">
               <p>{{$jobposts->jobpost_title}}</p>
               </div>
               <div class="comcont">
               <p>{{$jobposts->jobpost_description}}</p>
               </div>
               <div class="comcont">
               <p>Salary:{{$jobposts->jobpost_salary}}</p>
               </div>
               </article>

               @if(Session::get('id')!=null)
          <footer><a href="{{URL::to('/#latest_job')}}">Details! &raquo;</a></footer>
               @elseif(Session::get('jobseeker_id')==null)
         <footer><a href="{{URL::to('/jobseeker-login')}}">login to Apply! &raquo;</a></footer>
            @else  
      
           <footer><a href="{{URL::to('viewdetails/').'/'.$jobposts->jobpost_id}}">Apply Now! &raquo;</a></footer>
         @endif
               

          </li>
          @endforeach
                </ul>
        
      </div>
      </div>
      
      @endsection
      

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
