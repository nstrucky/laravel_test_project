@extends('layout')


@section('title', 'All Assignments')

@section('content')

	<h1 class="title is-3">All Assignments</h1>


	@foreach($assignments as $assignment) 

		<ul>
			<?php $id = $assignment->id ?>
			<li><a href="/assignments/{{$id}}">{{ $assignment->description }}</a></li>
		</ul>


	@endforeach


@endsection