@extends('layouts.master')

@section('title')
<title>Sign Up with us Today!</title>
@stop

@section('content')
<div>
	<h1>Sign Up Form</h1>
	{{ Form::open(['action'=> 'RegistrationController@signUp', 'method' => 'POST']) }}

		{{ Form::text('full_name', null, [ 'placeholder' => 'Name', 'required']) }}
		<br>
		{{ Form::text('username', null, [ 'placeholder' => 'Username', 'required']) }}
		<br>
		{{ Form::email('email', null, [ 'placeholder' => 'Email', 'required']) }}
		<br>
		{{ Form::password('password' , [ 'placeholder' => 'Password', 'required']) }}
		<br>
		{{ Form::password('repassword' , [ 'placeholder' => 'Re Type Password', 'required']) }}
		<br>

		{{ Form:: submit('Sign Up') }}

	{{ Form::close() }}

</div>
@stop
