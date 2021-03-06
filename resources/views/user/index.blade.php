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
                                            <th>admin_id</th>
                                            <th>group_id</th>
                                            <th>group</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>phone</th>
                                            <th>address</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>SN</th>
                                            <th>id</th>
                                            <th>admin_id</th>
                                            <th>group_id</th>
                                            <th>group</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>phone</th>
                                            <th>address</th>
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
                                        <td>{{$user->admin_id}}</td>
                                        <td>{{$user->group_id}}</td>
                                        <td>{{$user->group}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->password}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>
                               <a href="{{route('user_edit', $user->id)}}" class="btn btn-success btn-sm">Edit</a>
         <form class="form-inline"onclick="return confirm('Are you sure delete? ')" action="{{route('user_delete',$user->id)}}" method="post">
        {{ csrf_field() }}
        <input type="submit" class="btn btn-danger btn-sm" value="Delete"/></form>
                                            	
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