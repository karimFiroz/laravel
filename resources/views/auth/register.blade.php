@extends('layouts.frontend_master')
@section('title','Register Page')
@section('main_content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>







                  <form class="user"action="{{url('register_store')}}"method="post">
                            	@csrf

    @if($errors->any())

    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
      </ul>
    </div>
    
@endif 
                            	Name:
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name"value="{{old('name')}}"class="form-control form-control-user" id="exampleName"
                                            placeholder="Name">
                                    </div>
                                   
                                </div>



                                Email:
                                <div class="form-group">
                                    <input type="email"name="email" value="{{old('email')}}"class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>


                                Password:
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password"name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                   
                                </div>


                                Submit:
  										<div class="col-sm-6">
                                        <input type="submit"value="Register Me" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Register Me">
                                    </div> 


                                <a href="{{asset('public/frontend')}}/login.html" class="btn btn-primary btn-user btn-block">
                                 
                                <hr>
                                <a href="{{asset('public/frontend')}}/index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="{{asset('public/frontend')}}/index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>






                            <hr>
                          <!--   <div class="text-center">
                                <a class="small" href="{{asset('public/frontend')}}/forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{asset('public/frontend')}}/login.html">Already have an account? Login!</a>
                            </div> -->
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