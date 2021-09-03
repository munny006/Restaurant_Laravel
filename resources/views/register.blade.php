@extends('layout')
@section('content')
<div class="col-sm-6">
<h1 class="text-center my-2 py-2"> User Registration Page  </h1>
<form action="register" method="POST">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name">
   </div>
   <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
   </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password">
   </div>
   <div class="form-group">
    <label>Contact</label>
    <input type="tel" name="contact" class="form-control" placeholder="Enter contact">
   </div>
   
<button type="submit" class="btn btn-warning"> Register </button>
</form>


</div>

@endsection
