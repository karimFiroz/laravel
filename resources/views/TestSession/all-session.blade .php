@extends('layouts.frontend_master')
@section('title','Posts Page')
@section('main_content')
<center>
	<a href="{{url('/')}}">HOME</a>
	
<h1>{{Destroy all-session!!}}</h1>
{{$data}}
</center>
@endsection