@extends('jobseeker_layout')
@section('jobseeker_content')
<table class="table table-striped table-dark">
    <tbody>
    
   <tr>
      <th scope="row">JobSeeker Name</th>
        
      <td>{{$jobseeker->jobseeker_name}}</td>
      
     
    </tr>
     <tr>
      <th scope="row">Email</th>
        
      <td>{{$jobseeker->jobseeker_email}}</td>
   
     
    </tr>

     <tr>
      <th scope="row">JobSeeker Password</th>
        
      <td>{{$jobseeker->jobseeker_password}}</td>
          
    </tr>
     <tr>
      <th scope="row">JobSeeker Phone</th>
        
      <td>{{$jobseeker->jobseeker_phone}}</td>
     
    </tr>
      <td class="text-center"><button type="button" class="btn btn-warning"><a href="{{url('edit-jobseeker'.'/'.Session::get('jobseeker_id'))}}">Edit Profile</a></button></td>
    </tr>
    

  </tbody>
</table>
@endsection

