@extends('layout')


@section('title', 'New Assignment')

@section('content')

	<h1 class="title is-3">Create New Assignment for </h1>



	<form method="POST" action="/assignments">
		{{csrf_field()}}

		<input type="hidden" name="student_id" value="{{request()->student_id}}">
		<input type="hidden" name="complete" value="0">
		<input type="number" name="status_code" value="1" class="input {{$errors->has('status_code') ? 'is-danger' : ''}}" required>
		<input type="date" name="due_date" value="{{old('due_date')}}" class="input {{$errors->has('due_date') ? 'is-danger' : ''}}" required>
		<input type="number" name="score" value="0.5" class="input {{$errors->has('score') ? 'is-danger' : ''}}" required>
		<input type="text" name="description" class="input {{$errors->has('description') ? 'is-danger' : ''}}" value="{{old('description')}}" required>


		<button class="button" type="submit">Save</button>
	</form>

	@if($errors->any()) 
		<div class="notification is-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>

		</div>
	@endif

@endsection