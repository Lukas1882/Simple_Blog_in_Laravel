@extends('admins/master')
@section('content1')

		<div class="well">
  
			<legend>Pease Register</legned>
			{{Form::open(array('url'=>'register'))}}
			@if($errors->any())
			<div class="alert aler error">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{implode('',$errors->all('<li class="error">:message</li>'))}}
			</div>
			@endif

			<div >
				{{Form::text('username','',array('placeholder'=>'Username'))}}<br>
			    {{Form::text('email','',array('placeholder'=>'Email'))}}<br>
			    {{Form::password('password',array('placeholder'=>'Password'))}}<br>
			    {{Form::submit('Register',array('class'=>'btn btn-success'))}} 
			    {{HTML::link('/','Cancel',array('class'=>'btn btn-danger'))}} 
			    {{Form::close()}}
		    </div>
		</div>		
@stop