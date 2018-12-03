<link href="{{asset('frontend/linearicons.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('frontend/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('frontend/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('frontend/magnific-popup.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('frontend/nice-select.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('frontend/animate.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('frontend/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('frontend/main.css')}}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="{{asset('frontend/joblist.css')}}" rel="stylesheet" type="text/css" media="all">

<body>

			  
<div id="wrapper" class="active">  
    <!-- Sidebar -->
            <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="{{URL::to('/')}}">Job House</a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
          <li><a href="{{URL::to('/')}}">Home<span class="fa fa-link" aria-hidden="true"></span></a></li>
           <ul class="sidebar-nav" id="sidebar">
                <li><a href="{{URL::to('/#latest_job')}}">Latest Jobs<span class="fa fa-link" aria-hidden="true"></span></a></li>
                <li><a href="{{URL::to('/job-list')}}">Job List<span class="fa fa-link" aria-hidden="true"></span></a></li>
           </ul>
          <li><a href="jobseeker-profile-setting">Profile<span class="halflings-icon user" aria-hidden="true"></span></a></li>
        </ul>
      </div>
				
			<!-- Start post Area -->
					<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<div class="single-post d-flex flex-row">
								<div class="thumb">
								@foreach($jobpost as $jobposts)

										@if(Session::get('message'))
									      <h3>{{Session::get('message')}}</h3>
									      @endif
				
									
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
										

											<a href="#"><h4>{{$jobposts->company_name}}</h4></a>
											<h5>{{$jobposts->jobpost_title}}</h5>					
										</div>
										
									</div>

									<p>
								<h5><strong style="color: 	#20B2AA;">Job	Description:</strong> 	{{$jobposts->jobpost_description}} </h5>
									</p>
									<h5>Company Type: {{$jobposts->company_type}}</h5>
								<h6><i class="fa fa-envelope"></i> {{$jobposts->company_email}}</h6>	
									<p class="address"><span class="fa fa-money"></span> {{$jobposts->jobpost_salary}}k</p>
								<button class="btn btn-default btn-block">	<a href="{{URL::to('apply_job/').'/'.$jobposts->id.'/'.Session::get('jobseeker_id')}}" >Apply</a></button>
								</div>
							</div>	
							
							<div class="single-post job-experience">
								<h4 class="single-title">Requirements</h4>
								<ul>
									<li>
										<img src="img/pages/list.jpg" alt="">
										<span></span>
									</li>
									<li>
										<img src="img/pages/list.jpg" alt="">
										<span></span>
									</li>
																																			
								</ul>
							</div>
							
							<div class="single-post job-experience">
								<h4 class="single-title">Responsibilities</h4>
								<ul>
									<li>
										<img src="img/pages/list.jpg" alt="">
										<span></span>
									</li>
									
								</ul>
							</div>	


						</div>	
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="#"><p>New York</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Park Montana</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Atlanta</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Arizona</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Florida</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Rocky Beach</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="#"><p>Chicago</p><span>17</span></a></li>
								</ul>
							</div>
							</div>


					</div>

				</div>


			
 @endforeach
</body>
<script type="text/javascript">
	

	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>





			