<!DOCTYPE html>

<html>
<head>
<title>Job House</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link href="{{asset('frontend/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">






</head>



<nav class="navbar navbar-default navbar-fixed-top">  
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="{{URL::to('/')}}">Job House</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
          <li><a href="{{URL::to('/#latest_job')}}">Latest Jobs</a></li>
          <li><a href="{{URL::to('/job-list')}}">Job List</a></li>
          <?php
          $job_id=Session::get('jobseeker_id');
          $company_id=Session::get('id');

          if(($job_id==null)&&($company_id==null)){
          ?>
          <li><a class="drop" href="#">Login</a>
                             
                <ul>
                  <li><a href="{{URL::to('/jobseeker-login')}}">Job Seeker</a></li>
                  <li><a href="{{URL::to('/company-login')}}">Company</a></li>
                </ul>
           </li>

           <li><a href="#contact">Contact Us</a></li>

            

          <?php } else if ($job_id!=null){ ?>

              <li><a href="#contact">Contact Us</a></li>
              
              <li><a class="drop" href="#">{{Session::get('jobseeker_name')}}</a>
                             
                <ul>
                <li><a href="jobseeker-profile-setting"><i class="halflings-icon user"></i> Profile</a></li>
                 <li><a href= "{{URL::to('/jobseeker-logout')}}"><i class="halflings-icon off" ></i> Logout</a></li>
                  
                </ul>
           </li>
          <?php } else if($company_id!=null){ ?>

            <li><a href="#contact">Contact Us</a></li>

              <li><a class="drop" href="#">{{Session::get('company_name')}}</a>
                             
                <ul>
                <li><a href="{{URL::to('/company-profile-setting')}}""><i class="halflings-icon user"></i> Profile</a></li>
                 <li><a href= "{{URL::to('/company-logout')}}"><i class="halflings-icon off" ></i> Logout</a></li>
                  
                </ul>
           </li>


          
            <?php } ?>
          

        </ul>
      </nav>
    </header>
  </div>
  </nav>
    
<div class="wrapper row4">
  @yield('content')
</div>




<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="index.html">Job House</a></p>
    
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>





<script src="{{asset('frontend/layout/scripts/jquery.min.js')}}"></script>
<script src="{{asset('frontend/layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{asset('frontend/layout/scripts/jquery.mobilemenu.js')}}"></script>
<script src="{{asset('frontend/layout/scripts/jquery.flexslider-min.js')}}"></script>
</body>
</html>