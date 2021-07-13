
@extends('layouts.frontend_master')
@section('title','Home Page')
@section('main_content')
<div align="center">

        <a href="{{route('set-session')}}">Set-Session</a><br /><br />
        <a href="{{route('get-session')}}">Get-Session</a><br /><br />
        <a href="{{route('forget-session')}}">Forget-Session</a><br /><br />
        <a href="{{route('get-session')}}">Get-Session</a><br /><br />
        <a href="{{route('delete-session')}}">Delete-Session</a><br /><br />
        <a href="{{route('all-session')}}">All-Session[If no found session first click Set-Session]</a><br /><br />
        <a href="{{route('flash-message')}}">Temporary message set</a><br /><br />
        <a href="{{route('show-message')}}">View temporary message</a>
     
</div>


@endsection