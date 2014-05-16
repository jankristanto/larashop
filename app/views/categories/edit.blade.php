@extends('layouts.main')
@section('content')

	<h1>Edit {{$category->name}}</h1><hr>

	@if($errors->has())
	<div id="form-errors">
		<p>The following errors have occurred:</p>

		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div><!-- end form-errors -->
	@endif

	{{ Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>
	{{ Form::submit('Edit the Category!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop