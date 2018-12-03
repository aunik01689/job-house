@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link href="{{asset('frontend/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">

    <link href="{{asset('frontend/layout/styles/main.css')}}" rel="stylesheet">
    <style type="text/css">
    .btn-file {
    position: relative;
    overflow: hidden;
}
    .btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

    #img-upload{
    width: 100%;
}


    </style>



<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript">
	$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});

</script>
	          
</head>
<body>
	
		
<div class="wrapper bgded overlay" style="background-image:url('frontend/images/design/backgrounds/01.jpg');">	
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
					<p class="alert-danger">
					<?php
					$messege = Session::get('message');
					if ($messege) {
						echo $messege;
						Session::put('message',null);
					}
					
					?>
					</p>

						<h2 class="alert alert-info">Login with Company Id</h2>
						<form action="{{URL::to('/company-profile')}}" method="post">
						{{ csrf_field() }}

							<input name="email" type="email" placeholder="Email Address" />
							<input name="password" type="password" placeholder="Password" />
							<button type="submit" class="btn btn-default">Login</button>
							<div class="clearfix"></div>
								<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
						</form>
					</div>
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>

				<div class="col-sm-4">
					<div class="signup-form">

					<p class="alert-danger">
					<?php
					$messege = Session::get('message');
					if ($messege) {
						echo $messege;
						Session::put('message',null);
					}
					
					?>
					</p>
					<h2 class="alert alert-success">New Signup for Company!</h2>
						<form action="{{URL::to('/company-signup')}}" method="post">
						{{ csrf_field() }}

							<input type="text" name="company_name" required="" placeholder="Name"/>
							<input type="email" name="company_email" required="" placeholder="Email Address"/>
							<input type="password" name="company_password" required="" placeholder="Password"/>
							<input type="number" name="company_phone" placeholder="Phone Number"/>


							 <label>Logo</label>
				        <div class="input-group">
				            
				                <span class="btn btn-default btn-file">
				                    Browse… <input name="company_image" required="" type="file" id="imgInp">
				                </span>
				                  <input type="text" class="form-control" readonly>
				        </div>
				        <img id='img-upload'/>


              <div class="form-control">
				<div class="main-row">
						<label class="header">Type of Company<span>*</span></label>
							<select name="company_type">
								<option name="company_type" value="none" selected="" disabled="" > select category</option>
								
								<option name="company_type" required="" value="it">IT</option>
								<option name="company_type" required="" value="marketing">Marketing&Sales</option>
								<option name="company_type" required="" value="accounting"> Accounting&Finance</option>
								<option name="company_type" required="" value="multinational">Multinational</option>
								<option name="company_type" required="" value="firm">Firm</option>
							</select>
							<i></i>
						
					</div>
					</div>

				    
				       
				    				

					<div class="container1" style="margin-top: 2em;">
					  <button type="submit" class="btn btn-default">Signup</button>
					</div>
					<div class="clearfix"></div>


					
					</form>
					</div>
				</div>
			</div>
		</div>
	</section> 
</body>
</html>


@endsection


