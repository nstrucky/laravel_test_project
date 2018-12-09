@extends('layout')

<?php
	$first_name = $student->first_name;
	$last_name = $student->last_name;
	$age = $student->age;
	$name = $first_name.' '.$last_name;
	$id = $student->id;
 ?>

@section('title', $first_name.' '.$last_name)

@section('content')

	<h1>{{$name}}</h1>

	<div>
		Age: {{$age}} years old		
	</div>

	<form method="GET" action="/students/{{$id}}/edit">
		{{csrf_field()}}

		<button type="submit">Edit</button>
	</form>


@endsection