@extends('layout')

@section('title', 'Create New Student')
@section('content')

	<h1>Create New Student</h1>

	<form method="POST" action="/students">
		{{ csrf_field() }}

		<div>
			<input type="text" class="input {{ $errors->has('first_name') ? 'is-danger' : '' }}" name="first_name" placeholder="First Name" value="{{old('first_name')}}" required>
		</div>

		<div>
			<input type="text" name="last_name" placeholder="Last Name" value="{{old('last_name')}}" required>
		</div>

		<div>
			<input type=number" name="age" value="{{old('age')}}" required>
		</div>

		@if ($errors->any())
			<div class="notification is-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<div>
			<button type="submit">Save Student</button>
		</div>



	</form>

@endsection