@extends('layout')


@section('title', 'New Assignment')

@section('content')

	<h1 class="title is-3">Create New Assignment for </h1>



	<div class="box">
		<form method="POST" action="/students/{{request()->student_id}}/assignments">
			{{csrf_field()}}


			<input type="hidden" name="student_id" value="{{request()->student_id}}">
			<input type="hidden" name="complete" value="0">
			<label for="title" class="label">Title</label>
			<input type="text" name="title" class="input {{$errors->has('title') ? 'is-danger' : ''}}" value="{{old('title')}}" required>
			<label for="description" class="label">Description</label>
			<textarea  name="description"class="textarea {{$errors->has('description') ? 'is-danger' : ''}}" rows="3" cols="50" required>{{old('description')}}</textarea>
			<label for="status_code" class="label">Status</label>
			<input type="number" name="status_code" value="1" class="input {{$errors->has('status_code') ? 'is-danger' : ''}}" required>
			<label for="due_date" class="label">Due Date</label>
			<input type="date" name="due_date" value="{{old('due_date')}}" class="input {{$errors->has('due_date') ? 'is-danger' : ''}}" required>
			<label for="score" class="label">Score</label>
			<input type="decimal" name="score" class="input {{$errors->has('score') ? 'is-danger' : ''}}" required>

			<button class="button" type="submit">Save</button>
		</form>
	</div>

	@include('utils.errors')

@endsection