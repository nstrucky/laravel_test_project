@extends('layout')


@section('title', 'Home')


@section('content')
	<h1>{{ $foo }} Home Page!</h1>


	<ul>
<!-- Commenting out PHP method	
		<?php foreach ($tasks as $task) : ?>	
			<li><?= $task; ?></li>
		<?php endforeach; ?>
		 -->

		@foreach($tasks as $task)
			<li>{{ $task }}</li>
		@endforeach
		
	</ul>


@endsection