@extends('posts/post-master')

@section('content1')
<div class="col-md-12">
	{{ Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) }}
	@if($errors->any())
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</div>
	@endif
	<div class="control-group">
	<font color=red>{{ Form::label('title', 'Title') }}</font>
	{{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'placeholder' => 'Please insert your postt title here...')) }}
	</div>

	<div class="control-group">
	<font color=red>{{ Form::label('body', 'Body') }}</font>
	{{ Form::textarea('body', Input::old('body'), array('class' => 'ckeditor')) }}	
	</div>
	<div class="control-group">
	<font color=red>{{ Form::label('m_desc', 'Meta Description') }}</font>
	{{ Form::text('m_desc', Input::old('m_desc'), array('class' => 'form-control', 'placeholder' => 'Optional Description')) }}
	</div>
	
	<div class="control-group">
	{{ Form::label('m_keyw', 'Keywords') }}
	{{ Form::text('m_keyw', Input::old('m_keyw'), array('class' => 'form-control', 'placeholder' => 'Keywords')) }}
	</div>
	
	{{ Form::submit('Update', array('class' => 'btn btn-success')) }}
	{{ link_to_route('posts.index', 'Cancel', null, array('class' => 'btn btn-warning')) }}
	{{Form::close() }}
	
</div>

 


@stop