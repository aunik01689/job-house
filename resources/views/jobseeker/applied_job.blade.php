@extends('jobseeker_layout')
@section('jobseeker_content')

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{asset('frontend/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">

      <section id="job_list">

<div class="wrapper bgded overlay" style="background-image:url('images/design/backgrounds/02.jpg');">
     
      <div id="comments">
        <h2 class="center">Applied Job</h2>
        @if(Session::get('message'))
      <h3>{{Session::get('message')}}</h3>
      @endif
        <ul>


        <div class="col-md-6">
        <table class="tabble table bordered">
          
          <th>Company Name</th>
          <th>Position</th>
          <th>Descriptions</th>
          <th>Salary</th>
          <th>Date</th>
         @foreach($applied_job as $key) 
         <?php $job_post=Db::table('jobpost')->where('jobpost_id',$key->job_post_id)->first();
          $company_name=Db::table('company')->where('id',$key->job_post_id)->first();
         ?>
          <tr>
          <td style="color: black;">{{$company_name->company_name}}</td>
          <td style="color: black;">{{$job_post->jobpost_title}}</td>
          <td style="color: black;">{{$job_post->jobpost_description}}</td>
          <td style="color: black;">{{$job_post->jobpost_salary}}</td>
          <td style="color: black;">{{$key->applied_date}}</td>
           <tr>

           @endforeach
        </table>

        </div>
        </ul>
        
      </div>
      </div>
@endsection