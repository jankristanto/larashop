@extends('layouts.main')
@section('content')
	<div id="admin">

		<h1>Showing {{ $category->name }}</h1>
			<h2>{{ $category->name }}</h2>
			<p>
				<strong>ID:</strong> {{ $category->id }}<br>
				<strong>Name:</strong> {{ $category->name }}
			</p>
		</div>
	</div><!-- end admin -->

@stop