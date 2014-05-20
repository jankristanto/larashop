@extends('layouts.main')

@section('content')
<div class="row">
	<h1>All the Products</h1>
	<!-- will be used to show any messages -->
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($products as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->name }}</td>
				<!-- we will also add show, edit, and delete buttons -->
				<td>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop