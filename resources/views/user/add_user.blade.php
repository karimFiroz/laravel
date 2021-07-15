@extends('backend.master')
@section('main_content')



<a href="{{route('user_create')}}">Create New User</a>
<div class="container">



	<form class="form-horizontal"action="{{route('user_store')}}"method="post" data-parsley-validate>


    @if($errors->any())

    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    
@endif

		@csrf
  

   <div class="form-group">
    <label for="exampleInputAdmin_id">Admin_id</label>
    <input type="text" name="admin_id" class="form-control" id="exampleInputAdmin_id" aria-describedby="emailHelp" placeholder="Enter Admin_id"requird>
  </div>


  <div class="form-group">
    <label for="exampleInputGroup_id">Group_id</label>
    <input type="text" name="group_id" class="form-control" id="exampleInputGroup_id" aria-describedby="emailHelp" placeholder="Enter Group_id"requird>
  </div>
  <div class="form-group">
    <label for="exampleInputGroup_id">Group</label>
    <input type="text" name="group" class="form-control" id="exampleInputGroup_id" aria-describedby="emailHelp" placeholder="Enter Group_id"requird>
  </div>
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name"requird>
  </div>


   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"requird>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password"requird>
  </div>


  <div class="form-group">
    <label for="exampleInputPhone">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter Phone number"requird>
  </div>


  <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" placeholder="Enter Your Address"requird>
  </div>



  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



@endsection