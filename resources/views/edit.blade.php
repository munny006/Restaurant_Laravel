@extends('layout')
@section('content')
<div class="col-sm-6">
<h1 class="text-center my-2 py-2"> Edit Restaurant </h1>
<form action="/edit" method="POST">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{$data->name}}">
   </div>
   <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email"value="{{$data->email}}">
   </div>
   <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter address"value="{{$data->address}}">
   </div>
<button type="submit" class="btn btn-info"> Update </button>
</form>


</div>

@endsection