<!doctype html>
@extends('layout')
@section('content')
 
 
  <div class="lefty well"   "> 
  <h3>Post View</h3>
    @yield('body')
  </div>
  <div class="righty well">
  	This is the sidebar
  	<br>
  	<br>
  	 <h3>Recent Post<h3>
  	 	......
  	 <h3>Recent Comment<h3>
  	 	......
  </div>
 
  


 

 
@stop

 