@extends('layout')
	
@section('title', 'Students')

@section('content')

	<h1>Students</h1>
	<div>
		<ul>
			@foreach($students as $student)
				<?php  
					$first_name = $student->first_name;
					$last_name = $student->last_name;
					$studentId = $student->id;
				?>
				<p>
					<a href="/students/{{$studentId}}">{{ $first_name.' '.$last_name}}</a>
				</p>


			@endforeach
		</ul>
		<a href="/students/create">Add Student</a>
	</div>


@endsection