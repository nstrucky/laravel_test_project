@extends('layout')


@section('title', 'Contacts')

@section('content')

	<h1 class="title is-3">Contacts Page... {{$foobar}}</h1>


	<ul>

		@foreach ($numbers as $number) 
			<li>{{ $number }}</li>
		@endforeach

	</ul>



@endsection