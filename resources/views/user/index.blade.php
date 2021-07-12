@extends('layouts.frontend_master')
@section('title','Users Page')
@section('main_content')
 	
 			<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="{{asset('public/frontend')}}/https://datatables.net">official DataTables documentation</a>.</p>
 					<div class="card shadow mb-4">
                     
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>SN</th>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SN</th>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@php
                                    	$i=0;
                                    	@endphp
                                    	@foreach($users as $user)
                                    	@php
                                    	$i++;
                                    	@endphp
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->password}}</td>
                                            
                                            <td>
                               <a href="#" class="btn btn-info btn-sm">Edit</a>
                               <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            	
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>

   @endsection