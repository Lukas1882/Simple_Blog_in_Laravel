@extends('manager/manager-master')
@section('content1')
<div cclass="well">
	<h4>hello {{ucwords(Auth::user()->username)}}, this is your personal home page.</h4>
</div>



@stop