@extends('layout')
@section('content')
<div>
<h1 class="text-center my-2 py-2"> List Of Restaurants</h1>
@if(Session::get('status'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
 {{(Session::get('status'))}}  
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
 
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Restaurant Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th>Action</th>
    </tr>
 @foreach($data as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->address}}</td>
      <td>
      	<a href="delete/{{$row->id}}"><i class="fa fa-trash"></i></a>
      		<a href="edit/{{$row->id}}"><i class="fa fa-edit"></i></a>
      </td>
    </tr>
    
  @endforeach
</table>

</div>

@endsection