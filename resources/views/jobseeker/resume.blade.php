@extends('jobseeker_layout')
@section('jobseeker_content')
<html>
<head>
    <title>Create Resume</title>
    <style type="text/css">
        #BODY {
            background-color: dimgray;
        }
        div {
            font-size: 20px;
            font-family: "Garamond";
            padding: 1px;
            position: relative;
        }
        p {
            font-size: 40px;
            text-align: center;
            font-family: "Avenir";
        }
        
        #tags {
            font-size: 25px;
            text-align: center;
            font-family: "Avenir";
        }
        #ALL {
            background-color: silver;
            padding: 5px;
        }
        #BUTTON {
            font-size: 20px;
            font-family: "Hannotate SC";
            background-color: lightgreen;
        }
        input {
            font-size: 20px;
            font-family: "Hannotate SC";
        }
        
        #expand{
            width: 530px;
            height: 100px;
        }
    </style>
</head>
<body id="BODY">
				<?php
					$messege = Session::get('message');
					if ($messege) {
						echo $messege;
						Session::put('message',null);
					}
					
					?>

    <form action="{{URL::to('/Resume-create')}}" method="post">
	{{ csrf_field() }}
        <p> Create Your Resume </p>
        <div id="ALL">
            <hr>
            <p id="tags">* Personal Info *</p>
            <hr>
            
            <div>
                <label>Full Name : </label>
                <input type="text" name="fullname" autofocus required>
            </div>
            <div>
                <label>Email : </label>
                <input type="text" name="email" required>
            </div>      
            <div>   
                <label>Mobile No :</label>
                <input type="number" name="mobile" required>
            </div>
            <div>
                <label>Address :</label>
                <input type="text" name="address" required>
            </div>


              <hr>
            <p id="tags">* University Info *</p>
            <hr>
            
            <div>
                <label>University Name :</label>
                <input type="text" name="collegename" required>
            </div>
                        
            <div>
                <label>CGPA : </label>
                <input type="number" name="cgpa" required>
            </div>
            
            <div>
                <label>Field of Study :</label>
                <input type="text" name="group" required>
            </div>
                 
            <div>
                <label>Passing Year</label>
                <input type="text" name="duration" required placeholder="ex. 2013-2017">
            </div>


            <hr>
            <p id="tags">* College Info *</p>
            <hr>
            
            <div>
                <label>College Name :</label>
                <input type="text" name="collegename" required>
            </div>
                        
            <div>
                <label>GPA : </label>
                <input type="number" name="cgpa" required>
            </div>
            
            <div>
                <label>Group :</label>
                <input type="text" name="group" required>
            </div>
                 
            <div>
                <label>Session</label>
                <input type="text" name="duration" required placeholder="ex. 2013-2017">
            </div>


            <hr>
            <p id="tags">* High School Info *</p>
            <hr>
            
            <div>
                <label>School Name :</label>
                <input type="text" name="collegename" required>
            </div>
                        
            <div>
                <label>GPA: </label>
                <input type="number" name="cgpa" required>
            </div>
            
            <div>
                <label>Group:</label>
                <input type="text" name="group" required>
            </div>
                 
            <div>
                <label>Session</label>
                <input type="text" name="duration" required placeholder="ex. 2013-2017">
            </div>
            
            <hr>
            <p id="tags">* Enter your 3 Best Projects / Technical Experience *</p>
            <hr>
            
            <h2> Project I Details</h2>
            
            <div>
                <label>Project Title : </label>
                <input type="text" name="ptitle1" required>
            </div>
            
            <div>
                <label>Duration : </label>
                <input type="text" name="duration1" required>
            </div>
            
            <div>
                <label>Description : </label> <br>
                <textarea type="text" name="description1" size="50" id="expand" placeholder="Describe your project here"></textarea>
            </div>
            
            <hr>
            
            <h2> Project II Details </h2>
            
            <div>
                <label>Project Title : </label>
                <input type="text" name="ptitle2" required>
            </div>
            
            <div>
                <label>Duration : </label>
                <input type="text" name="duration2" required>
            </div>
            
            <div>
                <label>Description : </label> <br>
                <textarea type="text" name="description2" size="50" id="expand" placeholder="Describe your project here"></textarea>
            </div>
            
            <hr>
            
            <h2> Project III Details </h2>
            
            <div>
                <label>Project Title : </label>
                <input type="text" name="ptitle3" required>
            </div>
            
            <div>
                <label>Duration : </label>
                <input type="text" name="duration3" required>
            </div>
            
            <div>
                <label>Description : </label> <br>
                <textarea type="text" name="description3" size="50" id="expand" placeholder="Decsribe your project here"></textarea>
            </div>
            
            <hr>
            <p id="tags">* ENTER YOUR 3 BEST ADDITIONAL EXPERIENCE OR AWARDS/Acheivement *</p>
            <hr>
            
            <div>
                <label>Award1 : </label> <br>
                <input type="text" name="award1" required>
            </div>

            <div>
                <label>Award2 : </label> <br>
                <input type="text" name="award2" required>
            </div>

            <div>
                <label>Award3 : </label> <br>
                <input type="text" name="award3" required>
            </div>
            
            <hr>
            <p id="tags">* WORK EXPERIENCE *</p>
            <hr>

            <div>
                <label>Company Name: </label>
                <input type="text" name="cname1">
                <label>Duration: </label> 
                <input type="text" name="c_duration1"> <br>
                <label>Description: </label> <br>
                <textarea type="text" name="c_description1" size="50" id="expand" placeholder="Decsribe your experience here"></textarea>
            </div>

            <hr>
            <p id="tags">* LANGUAGE AND TECHNOLOGIES *</p>
            <hr>

            <div>
                <label>Enter Languages: </label>  
                <input type="text" name="languages" placeholder="ex. C++, C, python ..."> <br>
                <label>Technologies and Libraries: </label> 
                <input type="text" name="techno" placeholder="ex. pygame, eclipse, Xcode ..."> <br>
                <label>Operation Systems: </label> 
                <input type="text" name="oper" placeholder="ex. Macintosh, Linux-Cent OS ... "> <br>
            </div>


            <div >
                <button type="submit" name="BUTTON">Gererate Resume</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                
            </div>
        </div>
    </form>
</body>
</html>
@endsection
