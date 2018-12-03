@extends('layout')
@section('content')

<body id="top">
<div class="bgded overlay" style="background-image:url('frontend/images/design/backgrounds/01.jpg');"> 
 <div id="pageintro" class="hoc clear"> 
    <div class="flexslider basicslider">
      <ul class="slides">

        <li>
            <h1 class="heading">Jobs are all around</h1>

        <div class="row">
             
              <div class="col-lg-6">
                <div class="input-group">
                <form class="form-control" action="{{URL::to('/search')}}" method="POST" role="search">
             {{ csrf_field() }}
                  <input type="text" name="q" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn" >
                    <button class="btn btn-default" type="submit">Go!</button>
                  </span>
                  </form>

                </div>
               </div>
              </div>
            

            <footer>
            <p id="search" class="heading">Search for Your Job</p>
            <li><a class="btn" href="{{URL::to('/jobseeker-login')}}">Sign Up Here!</a></li>
            </footer>


         

        </li>
        <li>

         <div class="row">

              <div class="col-lg-6">
                <div class="input-group">
                    <form class="form-control" action="{{URL::to('/search')}}" method="POST" role="search">
             {{ csrf_field() }}
                  <input type="text" name="q" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn" >
                    <button class="btn btn-default" type="submit">Go!</button>
                  </span>
                  </form>

                </div>
               </div>
            </div>
          
            <p class="heading">Dream comes true</p>
            <h2 class="heading">Build Your career</h2>

            

            <footer>
              <ul class="nospace inline pushright">
                <li><a class="btn" href="{{URL::to('/#latest_job')}}">Latest Jobs</a></li>
              </ul>
            </footer>
          </article>
        </li>
        <li>
          <article>
            <p class="heading">Say No! to Unemployment</p>
            <h2 class="heading">Develop Your Skill</h2>
            <p>Find the best oppurtunaties</p>

            <div class="row">

              <div class="col-lg-6">
                <div class="input-group">
                   <form class="form-control" action="{{URL::to('/search')}}" method="POST" role="search">
             {{ csrf_field() }}
                  <input type="text" name="q" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn" >
                    <button class="btn btn-default" type="submit">Go!</button>
                  </span>
                  </form>

                </div>
               </div>
            </div>

          </article>
        </li>
      </ul>
    </div>
    
  </div>
  
</div>


<section class="hoc container clear" id="latest_job"> 
    
    <div class="center btmspace-80">
      <h2 class="heading nospace">Latest jobs</h2>
      @if(Session::get('message'))
      <h3>{{Session::get('message')}}</h3>
      @endif

          </div>
    <ul class="row">

    @foreach($jobposts as $jobpost)
      <li class="col-sm-4">
        <article><a href="{{URL::to('/viewjob').'/'.$jobpost->company_id}}"><i class="fa fa-hand-o-right"><h6 class="heading">{{$jobpost->company_name}}</h6></i></a>
          <p>{{$jobpost->jobpost_title}}&hellip;</p>
          <p>{{$jobpost->jobpost_description}}&hellip;</p>
          <p>{{$jobpost->jobpost_salary}}&hellip;</p>

          @if(Session::get('id')!=null)
          <footer><a href="{{URL::to('/#latest_job')}}">Details! &raquo;</a></footer>



         @elseif(Session::get('jobseeker_id')==null)
         <footer><a href="{{URL::to('/jobseeker-login')}}">login to Apply! &raquo;</a></footer>
         @else  
           
           <footer><a href="{{URL::to('viewdetails/').'/'.$jobpost->jobpost_id}}">Apply Now! &raquo;</a></footer>

         @endif
        </article>
      </li>
    @endforeach

   

    </ul>
    
    <div class="clear"></div>
  </section>
</div>


<section id="services">
<div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <div class="center btmspace-80">
      <h2 class="heading nospace">Our Services</h2>
      
    </div>
    <ul class="nospace group">
      <li class="one_half first btmspace-30">
        <article class="group">
          <div class="fa fa-bullhorn" style="font-size:48px;color:#FF5723"></div>
          <div class="one_half">
            <h3 class="heading font-x1">Recruitment Notice</h3>
            <p>Company or Organization who alreary have their trade lisence can post the recruitment notice.&hellip;</p>

        @if(Session::get('id')!=null)
            <footer><a href="{{URL::to('/post-job-notice')}}">Post a Notice &raquo;</a></footer>
          
         @else  
          <footer><a href="{{URL::to('/#services')}}">Details! &raquo;</a></footer>   
        @endif
          </div>
        </article>
      </li>
      <li class="one_half btmspace-30">
        <article class="group">
        <div class="fa fa-registered" style="font-size:48px;color:#FF5723"></div>
          
          <div class="one_half">
            <h3 class="heading font-x1">Search your job</h3>
            <p>Job seeker who r seaching for best job then it is the best place&hellip;</p>
            <footer><a href="{{URL::to('/jobseeker-login')}}">Sign In Here &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_half first btmspace-30">
        <article class="group">
          <div class="fa fa-comments" style="font-size:48px;color:#FF5723"></div>
          <div class="one_half">
            <h3 class="heading font-x1">Complains & Comments</h3>
            <p>If you are troubling any kinds of problem with this system then let us know.To get better usage give your feedback please.&hellip;</p>
            <footer><a href="#" target="_top">Send Email &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_half btmspace-30">
        <article class="group">
          <div class="fa fa-newspaper-o" style="font-size:48px;color:#FF5723"></div>
          <div class="one_half">
            <h3 class="heading font-x1">Advertisement</h3>
            <p>To give advertisemet through our website then feel free to contact us&hellip;</p>
            <footer><a href="#contact">Contact Us &raquo;</a></footer>
          </div>
        </article>
      </li>
    </ul>
    
    
    <div class="clear"></div>
  </main>
</div>
</div>
</section>

<section id="contact">
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    
    <div class="one_third first">
      <h6 class="heading">Services</h6>
      <p>We promises to ensure the best services.Start your desire career from here.</p>
      <p class="btmspace-15">Thank you for be with us.Stay connected with us</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-skype"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Office Location</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          lake-circus, kolabagan, Dhaka, 1207
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +8801689857471</li>
        <li><i class="fa fa-whatsapp"></i> +8801792095970</li>
        <li><i class="fa fa-envelope-o"></i> jobhouse@jobhouse.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Testimonials</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">H.M Maruf Ahmed</a></h2>
            <p>Php Developer</p>
            <time class="font-xs block btmspace-10" datetime="2018-05-06">Sunday, 6<sup>th</sup> Aug 2018</time>
            <p class="nospace">Your guys are doing great.I hope you will be blust&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Fahim Foysal</a></h2>
            <p>ASP.Net Developer</p>

            <time class="font-xs block btmspace-10" datetime="2018-05-27">Sunday, 5<sup>th</sup> Sep 2018</time>
            <p class="nospace">Very much user friendly and obdient.Best wishes.&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
    
  </footer>
</div>

<div class="wrapper quicklinks">
  <nav class="hoc clear"> 
    
    <ul class="nospace">
      <li><a href="{{URL::to('/')}}"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="#latest_job">Latest Jobs</a></li>
      <li><a href="{{URL::to('/job-list')}}">Job List</a></li>
      <li><a href="#services">Services</a></li>
    </ul>
   
  </nav>
</div>
</section>




@endsection