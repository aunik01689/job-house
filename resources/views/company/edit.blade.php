@extends('company_layout')
@section('company_content')


<table class="table table-striped table-dark">
    <tbody>



     <form action="{{URL::to('/company-profile-update')}}" method="post">
      {{ csrf_field() }}




    <tr>
      <th scope="row">Company Name</th>
        
      <td><input  name="compnay_name" value="{{$company->company_name}}" /></td>
      
     
    </tr>
     <tr>
      <th scope="row">Company Email</th>
        
      <td><input  name="compnay_email" value="{{$company->company_email}}" /></td>
   
     
    </tr>

     <tr>
      <th scope="row">Company Password</th>
        
      <td><input  name="compnay_password" value="{{$company->company_password}}" /></td>
          
    </tr>
     <tr>
      <th scope="row">Company Phone</th>
        
      <td><input  name="compnay_phone" value="{{$company->company_phone}}" /></td>
     
    </tr>

    <td><button type="submit" class="btn btn-warning">Update</button></td>

     </form>
  </tbody>
</table>

@endsection

