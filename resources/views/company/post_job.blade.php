@extends('company_layout')
@section('company_content')
<?php
					$messege = Session::get('message');
					if ($messege) {
						echo $messege;
						Session::put('message',null);
					}
?>
<form method="POST" action="{{URL::to('/add-post')}}">
{{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Job Title</label>
      <input name="jobpost_title" type="text" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Description</label>
      <textarea name="jobpost_description" type="text" class="form-control" id="inputPassword4" placeholder="Description"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Salary</label>
    <input name="jobpost_salary" type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
       
  <button type="submit" class="btn btn-primary">Post iT!</button>
</form>

@endsection