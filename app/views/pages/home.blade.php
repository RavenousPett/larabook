@extends('layouts.default')

@section('content')

	<div class="jumbotron">
        <h1>Welcome to Larabook!</h1>
        <p>Welcome to the premier place to talk about Laravel with other developers, why don't you sign up to see what all the fuss is about?</p>
        
        <!-- If not logged in -->
        @if(!$currentUser)
        <p>
        	{{ link_to_route('register_path', 'Sign Up!', null, ['class' => 'btn btn-lg btn-primary']) }}
        </p>
        @endif

    </div>

@stop