@extends('layout')
@section('content')
<div class="col-sm-6">
<h1 class="text-center my-2 py-2"> User Login Page  </h1>
<form action="login" method="POST">
  @csrf
  
   <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
   </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password">
   </div>
  
   
<button type="submit" class="btn btn-dark"> Login </button>
</form>


</div>

@endsection
