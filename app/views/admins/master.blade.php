<!doctype html>
@extends('layout')
@section('content')

 <div  style="height: 500px; no-repeat;background-image:url('{{ asset('img/wood4.jpg') }}');border-radius: 30px;position:relative" >
     <div class="col-md-12">    
         <h2><font color="#55A7F0"> &nbsp;&nbsp; My Account</font></h2>
     </dvi>
 </div>

 <div>
     <div align="center" class="col-md-2">
         <ul class="nav nav-list well">
         @if(Auth::user())
             <li class="nav-header">{{ucwords(Auth::user()->username)}}</li>
             <li>{{HTML::link('post','Add Post')}}</li>
             <li>{{HTML::link('users','View Users')}}</li>
             <li>{{HTML::link('logout','Logout')}}</li>  
         @else
         <li>{{HTML::link('login','Login')}}</li>
         <li>{{HTML::link('register','Register')}}</li>
         @endif
         </ul>

     </dvi>
    
</div>
<div class="col-md-3">
        @yield('content1')
</div>

<!-- <img src="http://placehold.it/500/300" id="screenshot" /> -->

@stop