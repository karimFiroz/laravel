@extends('layouts.frontend_master')
@section('title','Edit Page')
@section('main_content')



<a href="{{route('user_create')}}">Create New User</a>
<div class="container">



	<form class="form-horizontal" action="{{route('user_update', $user->id )}}" method="post">
		@csrf

<div class="form-group">
    <label for="exampleInputAdmin_id">Admin_id</label>
    <input type="text" class="form-control" id="admin_id" name="admin_id" aria-describedby="nameHelp" placeholder="Enter your Admin_id" value="{{$user->admin_id}}">
  </div>


<div class="form-group">
    <label for="exampleInputGroup_id">Group_id</label>
    <input type="text" class="form-control" id="group_id" name="group_id" aria-describedby="nameHelp" placeholder="Enter your Group_id" value="{{$user->group_id}}">
  </div>

 <label for="exampleInputGroup_id">Group</label>
    <input type="text" class="form-control" id="group_id" name="group" aria-describedby="nameHelp" placeholder="Enter your Group_id" value="{{$user->group}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter your" value="{{$user->name}}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$user->email}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="{{$user->password}}">
  </div>


<div class="form-group">
    <label for="exampleInputPhone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="nameHelp" placeholder="Enter your Phone" value="{{$user->phone}}">
  </div>

<div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input type="text" class="form-control" id="address" name="address" aria-describedby="nameHelp" placeholder="Enter your Address" value="{{$user->address}}">
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



@endsection