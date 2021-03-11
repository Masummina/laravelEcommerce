@extends('Layouts.App')
@section('title', 'register')

@section('contents')
	<div class="main">
		<h2>Login User</h2>
		<form action="register" method="post">
			<input type="text" name="name" placeholder="Enter name">
			<input type="email" name="email">
			<input type="password" name="password">
			<input type="submit" name="submit">
		</form>
	</div>
@endsection
