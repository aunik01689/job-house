@extends('jobseeker_layout')
@section('jobseeker_content')

<table class="table table-striped table-dark">
    <tbody>



     <form action="{{URL::to('/jobseeker-profile-update')}}" method="post">
      {{ csrf_field() }}




    <tr>
      <th scope="row">Jobseeker Name</th>
        
      <td><input  name="jobseeker_name" value="{{$jobseeker->jobseeker_name}}" /></td>
      
     
    </tr>
     <tr>
      <th scope="row">JobSeeker Email</th>
        
      <td><input  name="jobseeker_email" value="{{$jobseeker->jobseeker_email}}" /></td>
   
     
    </tr>

     <tr>
      <th scope="row">JobSeeker Password</th>
        
      <td><input  name="jobseeker_password" value="{{$jobseeker->jobseeker_password}}" /></td>
          
    </tr>
     <tr>
      <th scope="row">JobSeeker Phone</th>
        
      <td><input  name="jobseeker_phone" value="{{$jobseeker->jobseeker_phone}}" /></td>
     
    </tr>

    <td><button type="submit" class="btn btn-warning">Update</button></td>

     </form>
  </tbody>
</table>

@endsection