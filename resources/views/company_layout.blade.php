<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
	<title>Company Dashboard</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/favicon.ico">
		
		
		
		
</head>

<body>
			<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{URL::to('/')}}"><span>Job House</span></a>
								
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> {{Session::get('company_name')}}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href= "{{URL::to('/company-logout')}}"><i class="halflings-icon off" ></i> Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
								
			</div>
		</div>
	</div>
		
		<div class="container-fluid-full">
		<div class="row-fluid">
				
						<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">

						<li><a href="{{URL::to('/company-profile-setting')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Profile Settings</span></a></li>	

						<li><a href="{{URL::to('/company-message')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
						<li><a href="{{URL::to('/post-job-notice')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> Post Job Notice</span></a></li>
						<li><a href="{{URL::to('/posted-job')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Posted Jobs</span></a></li>

	
						
					</ul>
				</div>
			</div>
					
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
					<div id="content" class="span10">
			
			
			@yield('company_content')		
       

	</div>	
			
		</div>
		</div>		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	

	

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
	    <script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{asset('backend/js/modernizr.js')}}"></script>
		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>	
		<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('backend/js/excanvas.js')}}"></script>
	    <script src="{{asset('backend/js/jquery.flot.js')}}"></script>
	    <script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
	    <script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
	    <script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>
		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>
		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>
		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>
		<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('backend/js/counter.js')}}"></script>
		<script src="{{asset('backend/js/retina.js')}}"></script>
		<script src="{{asset('backend/js/custom.js')}}"></script>
	
</body>
</html>
