@extends('company_layout')
@section('company_content')


<table class="table table-striped table-dark">
    <tbody>
    
   <tr>
      <th scope="row">Company Name</th>
        
      <td>{{$company->company_name}}</td>
      
     
    </tr>
     <tr>
      <th scope="row">Email</th>
        
      <td>{{$company->company_email}}</td>
   
     
    </tr>

     <tr>
      <th scope="row">Company Password</th>
        
      <td>{{$company->company_password}}</td>
          
    </tr>
     <tr>
      <th scope="row">Company Phone</th>
        
      <td>{{$company->company_phone}}</td>
     
    </tr>
      <td class="text-center"><button type="button" class="btn btn-warning"><a href="{{url('edit-company'.'/'.Session::get('id'))}}">Edit Profile</a></button></td>
    </tr>
    

  </tbody>
</table>

@endsection