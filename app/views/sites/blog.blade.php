@extends('sites/master')
@section('body')


@foreach($posts as $p)
<div class="row">
<div class="col-md-9">
<table class="table  table-bordered table-striped">
			    
				<tr class="info" >
					<th colspan="3"><h4>{{ HTML::link('blog/'.$p->slug, $p->title) }}</h4></th>
				</tr>
				<tr class="success">
					<th>
					</th>
					<th>
						<p class="lead"><font size="3px">by<font color="#F02C08" font-family="Georgia, Times,Times New Roman,serif", Arial, sans-serif;> {{ ucwords( $p->user->username ) }}</font></font></p>
					</th>
	                <th>
						 <p><span class="glyphicon glyphicon-time"></span> Posted {{ Carbon::createFromTimeStamp(strtotime($p->created_at))->formatLocalized('%A %d %B %Y')}}</p>
					</th>
				</tr>
</table>
</div>
</div>					
	
@endforeach

{{ $posts->links() }}

@stop

