<!doctype html>
@extends('layout')
@section('content')
 <div class="row-fluid"  style="height: 550px ; no-repeat;background-image:url('{{ asset('img/wood4.jpg') }}');border-radius: 40px;position:relative">
     <div class="col-md-3">    
         <h2    class=" primary"> <font color="#6289F2">My </font> <font color="#ED5A46">Post</font></h2>
     </dvi>
 </div>
<div class="col-md-10  col-md-offset-2 ">

</div>

<div>
     <div class="col-md-2">
         <ul class="nav nav-list well">
         @if(Auth::user())
             <li class="nav-header"><font color="#ED5A46">Dear </font>{{ucwords(Auth::user()->username)}}</li>
             <li>{{HTML::link('posts/create','Add Post')}}</li>
             <li>{{HTML::link('manage','User Manage')}}</li>
             <li>{{HTML::link('logout','Logout')}}</li>  
         @else
         <li>{{HTML::link('login','Login')}}</li>
         <li>{{HTML::link('register','Register')}}</li>
         @endif
         </ul>

     </dvi>
    
</div>
<div class="col-md-10">
        @yield('content1')
</div>
@stop