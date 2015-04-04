@extends('layouts/default')

@section('content')
	
	<h1>Post a status</h1>

	{{ Form::open() }}

		<!-- Status form input -->
		<div class="form-group">
			{{ Form::label('body', 'Status:') }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::submit('Post Status', ['btn btn-primary']) }}
		</div>

	{{ Form::close() }}

@stop