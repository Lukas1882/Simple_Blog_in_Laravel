@extends('posts/post-master')

@section('content1')
<div cclass="well">
    <h4 align="center" class="well"><font color="#F02C08">New Post</font></h4>
</div>
<div >
	{{ Form::open(array('route' => 'posts.store')) }}
	@if($errors->any())
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</div>
	@endif


	<div class="control-group col-md-12 success">
		<div class=" col-md-1 ">
			<font color="#6289F2">{{ Form::label('title', 'Title:') }}</font>
		</div>
		<div align="left" class="col-md-4  col-md-offset-1 ">
	        {{ Form::text('title', '', array('class' => 'form-control', 'placeholder' => 'Please insert your title here...')) }}
		</div>
		<div align="left" class="col-md-7  col-md-offset-5 ">
		</div>
		<div class=" col-md-1 ">
			<font color="#6289F2">{{ Form::label('m_desc', 'Description:') }}</font>
		</div>
		<div align="left" class="col-md-9  col-md-offset-1 ">
	        {{ Form::text('desc', '', array('class' => 'form-control', 'placeholder' => 'Option post description..')) }}
		</div>
		<div class="col-md-2 col-md-offset-10 "></div>

	    <div  class="col-md-1" >
		
			<font color="#6289F2">{{ Form::label('keyw', 'Keywords:') }}</font>
		</div>
		<div  class="col-md-9  col-md-offset-1 " >
	        {{ Form::text('keyw', '', array('class' => 'form-control', 'placeholder' => 'Seperated by commas (music,book,blog )')) }}	
     	</div>
     	<div class="col-md-2  col-md-offset-10 ">
		</div>
     	
	
	
	
	
		<div align="left" class="col-md-1">
		<font color="#6289F2">{{ Form::label('body', 'Post Body:') }}</font>
	    </div>
	    <div  class="col-md-9  col-md-offset-1">
		{{ Form::textarea('body', '', array('class' => 'ckeditor')) }}
	    </div>
	    <br>
	    <div align="left" class="col-md-1 col-md-offset-2">
		{{ Form::submit('Create Post', array('class' => 'btn btn-success')) }}
	    </div>
	     <div align="left" class="col-md-8  col-md-offset-1 ">
			{{ link_to_route('posts.index', 'Cancel', null, array('class' => 'btn btn-warning'))}}
			{{ Form::close() }}
	   </div>
	</div>
	 
</div>

 


@stop