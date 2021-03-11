@extends('layouts.app')
	@section('title', 'this is post')
	@section('contents')
	<div class="bodysection">
		<?php 
			print_r($posts[0]->title);
		?>
	</div>
	@stop