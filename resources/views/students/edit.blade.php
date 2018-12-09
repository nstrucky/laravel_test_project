@extends('layout')

@section('title', 'Edit Student')

@section('content')

	<?php 
		$id = $student->id;
		$first_name = $student->first_name;
		$last_name = $student->last_name;
		$age = $student->age;

	?>

	<h1>Edit {{$first_name.' '.$last_name}}</h1>
	<div>
		<form method="POST" action="/students/{{$id}}">
			{{method_field('PATCH')}}
			{{csrf_field()}}

			<div>
				<input type="string" name="first_name" value="{{$first_name}}" placeholder="First Name" required>
			</div>
			<div>
				<input type="text" name="last_name" value="{{$last_name}}" placeholder="Last Name" required>
			</div>
			<div>
				<input type="number" name="age" value="{{$age}}" placeholder="Age" required>
			</div>
			
			<div>
				<button type="submit">Update Student</button>				
			</div>

		</form>
	</div>

	<div>
		<form method="POST" action="/students/{{$id}}">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}

			<button type="submit">Delete</button>
		</form>
	</div>
@endsection