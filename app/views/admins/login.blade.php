@extends('admins/master')
@section('content1')

		<div align="center" class="well">
  
			<legend>Pease Login</legned>
			{{Form::open(array('url'=>'login'))}}
			@if($errors->any())
			<div class="alert aler error">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{implode('',$errors->all('<li class="error">:message</li>'))}}
			</div>
			@endif

			<div class="form-horizontal" style="padding:5px;">
			    {{Form::text('email','',array('placeholder'=>'Username'))}}<br>
			    {{Form::password('password',array('placeholder'=>'Password'))}}<br>
			    {{Form::submit('Login',array('class'=>'btn btn-success'))}} 
			    {{HTML::link('register','Register',array('class'=>'btn btn-primary'))}} 
			    {{Form::close()}}
		    </div>
		</div>		
@stop