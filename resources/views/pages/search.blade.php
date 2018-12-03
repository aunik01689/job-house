

@extends('layout')
@section('content')

        <section id="job_list">

<div class="wrapper bgded overlay" style="background-image:url('images/design/backgrounds/02.jpg');">
     
      <div id="comments">
        <h2 class="center">Job Notices</h2>
        <ul>
@if(isset($details))

@foreach($details as $search)
 <li>
               <article>
               <header>
               <address>
               By <a href="#">{{$search->company_name}}</a>
               </address>
               </header>
               <div class="comcont">
               <p>{{$search->jobpost_title}}</p>
               </div>
               <div class="comcont">
               <p>{{$search->jobpost_description}}</p>
               </div>
               <div class="comcont">
               <p>Salary:{{$search->jobpost_salary}}</p>
               </div>
               </article>
               <footer><a href="#">Apply Now! &raquo;</a></footer>

          </li>
   @endforeach

@endif

 @endsection
