@extends('layouts.main')
@section('content')
	<h1>Showing {{ $category->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $category->name }}</h2>
		<p>
			<strong>ID:</strong> {{ $category->id }}<br>
			<strong>Name:</strong> {{ $category->name }}
		</p>
	</div>

@stop