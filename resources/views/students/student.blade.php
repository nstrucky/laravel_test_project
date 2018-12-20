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

	<h1 class="title is-3">{{$name}}</h1>

	<div>
		Age: {{$age}} years old		
	</div>

	<div style="margin: 20px">
		<div style="display: flex; justify-content: all;">
			<h1 class="title is-5" style="padding: 5px;">Assignments</h1>
			
			<form method="GET" action="/assignments/create">
				<input type="hidden" name="student_id" value="{{ $id }}">
				<button type="submit" class="button is-dark">New Assignment</button>
			</form>
			{{-- <a href="/assignments/create" class="button is-dark">New Assignment</a> --}}
		</div>

			@foreach($assignments as $assignment)

				<div>
					<form method="POST" action="/assignments/{{$assignment->id}}">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}

						<?php $checkcheck = $assignment->complete == 1 ? 'checked' : ''; ?>

						<label class="checkbox {{$checkcheck ? 'completed' : ''}}" for="complete">
							<input type="checkbox" name="complete" onChange="this.form.submit()" {{$checkcheck}}>
		
							<a href="/assignments/{{$assignment->id}}">{{$assignment->description}}</a>
						</label>
						
					</form>

				</div>

			@endforeach

	</div>

	<form method="GET" action="/students/{{$id}}/edit">
		{{csrf_field()}}

		<button type="submit">Edit</button>
	</form>


@endsection