@extends('posts/post-master')
@section('content1')
 

<div cclass="well">
    <h4 align="center" class="well">My Current Posts</h4>
</div>

<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr class="info">
					<th>Title</th>
					<th>Description</th>
					<th>Date Created</th>
					<th>Preview</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $p)
				<tr class="success">
					<td>{{ $p->title }}</td>
					<td>{{ substr($p->body, 0, 20). '...'}}</td>
					<td><span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($p->created_at))->diffForHumans() }}</span></td>
				

					<td>{{ link_to_route('posts.show', 'Preview', array($p->id), array('class' => 'glyphicon glyphicon-search btn   btn-info')) }}</td>
					<td>{{ link_to_route('posts.edit', 'Edit', array($p->id), array('class' => 'bglyphicon glyphicon-pencil btn   btn-warning')) }}</td>
					<td>
						{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $p->id))) }} <button class='btn   btn-danger' type='submit'>
                        <i class='glyphicon glyphicon-trash'></i> Delete</button>
						 

					</td>
						
				</tr>
				@endforeach

				</div>	
			</tbody>
        
		</table>
    {{ $posts->links() }}

@stop