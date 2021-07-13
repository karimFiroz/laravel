@extends('layouts.frontend_master')
@section('title','Posts Page')
@section('main_content')
<center>
	<a href="{{url('/')}}">HOME</a>
	
<h1>{{Temporary Message Set!!}}</h1>
{{$data}}
</center>
@endsection