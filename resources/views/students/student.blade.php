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

	<link rel="stylesheet" type="text/css" href="/css/tables.css">
	<script type="text/javascript" src="/js/my_functions.js"></script>

	<h1 class="title is-3">{{$name}}</h1>

	<div style="margin: 20px">
		<div style="display: flex; justify-content: all;">
			<h1 class="title is-5" style="padding: 5px;">Assignments</h1>
			
			<form method="GET" action="/assignments/create">
				<input type="hidden" name="student_id" value="{{ $id }}">
				<button type="submit" class="button">New Assignment</button>
			</form>
			{{-- <a href="/assignments/create" class="button is-dark">New Assignment</a> --}}
		</div>

		<div class="box">

			<div>
				<select id="searchOption">
					<option value="1">Assignment Name</option>
					<option value="3">Score</option>
				</select>
			</div>
			<div>
				<input class="input" type="text" name="searchbox" id="searchbox" placeholder="Enter Search Criteria" 
				onkeyup="searchTableData('searchOption', 'assignments', 'searchbox')">
			</div>

			<div style="overflow-x: auto;">
			<table class="table fixed_header is-bordered" id="assignments" >
				<thead>
					<tr>
						<th>Complete</th>
						<th>Assignment</th>
						<th>Status</th>
						<th>Score</th>
						<th>Due Date</th>

					</tr>				
				</thead>
				
				<tbody>
						


				@foreach($assignments as $assignment)

					<?php
					 	$due_date = $assignment->due_date; 
					 	$today = date("Y-m-d");
					 	$past_due = $due_date <= $today;
					 	$completed = $assignment->complete == 1;
					?>

				<tr class="{{$past_due && !$completed ? 'past-due' : ''}}">
					<td>
						<form method="POST" action="/assignments/{{$assignment->id}}">
							{{ csrf_field() }}
							{{ method_field('PATCH') }}

							<?php $checkcheck = $assignment->complete == 1 ? 'checked' : ''; ?>
								<input type="checkbox" name="complete" onChange="this.form.submit()" {{$checkcheck}}>
												
						</form>
					</td>
					<td>
						<a class="{{$checkcheck ? 'completed' : ''}}" href="/assignments/{{$assignment->id}}">{{$assignment->title}}</a> 					</td>
					<td>
						{{$assignment->status_code}}
					</td>	
					<td>
						{{$assignment->score}}
					</td>
					<td>
						{{date_format(new  DateTime($due_date), 'm/d/Y')}}
					</td>
				</tr>
				@endforeach
				</tbody>
			
			</table>
			</div>


		</div>
	</div>

	<form method="GET" action="/students/{{$id}}/edit">
		{{csrf_field()}}

		<button type="submit">Edit</button>
	</form>


@endsection


