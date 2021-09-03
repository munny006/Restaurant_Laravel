@extends('layout')
@section('content')
<div class="col-sm-6">
<h1 class="text-center my-2 py-2"> Add New Restaurant </h1>
<form action="add" method="POST">
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
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter address">
   </div>
<button type="submit" class="btn btn-info"> Submit </button>
</form>


</div>

@endsection