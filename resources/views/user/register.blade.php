@extends('layouts.frontend_master')
@section('title','Add user')
@section('main_content')


	   
	
	<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/frontend')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="{{asset('public/frontend')}}/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/frontend')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">User Registration!</h1>
                                    </div>
          <form class="user" method="post" action="{{route('users')}}">
           @csrf
				

<!--    @if($errors->any())

    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
      </ul>
    </div>
    
@endif -->
				
                            			<div class="form-group">
                     					<input type="text"name="name" value="{{old('name')}}" class="form-control form-control-user"
                                                id="exampleName" aria-describedby="nameHelp"
                                                placeholder="Enter name...">
      									</div>
       			@error('name')
      			<div class="alert alert-danger">{{$message}}</div>
      			@enderror
 										<div class="form-group">
                             			<input type="email"name="email"value="{{old('email')}}" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                             			</div>
    
 		@error('email')
     	<div class="alert alert-danger">{{$message}}</div>
      	@enderror
                                        <div class="form-group">
                                            <input type="password"name=password class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>

 		@error('password')
     	<div class="alert alert-danger">{{$message}}</div>
      	@enderror
                                      <div class="form-group">
                                            <input type="submit" value="Submit" class="form-control form-control-user"
                                                id="exampleInputSubmit" placeholder="Submit">
                                        </div>
                                    </form>
                                    <hr>
                                   
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/frontend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public/frontend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/frontend')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/frontend')}}/js/sb-admin-2.min.js"></script>

</body>

</html>
@endsection