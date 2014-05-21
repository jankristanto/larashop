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
					{{ Form::open(array('url' => 'products/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Product', array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}
					<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
					<a class="btn btn-small btn-success" href="{{ URL::to('products/' . $value->id) }}">Show this Nerd</a>

					<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
					<a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->id . '/edit') }}">Edit this Nerd</a>

				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop