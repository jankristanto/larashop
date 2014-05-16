@extends('layouts.main')
@section('content')
<div id="admin">
	<h2>Create New Category</h2><hr>

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
	<p>
		{{ Form::label('name') }}
		{{ Form::text('name') }}
	</p>
	{{ Form::submit('Update Category', array('class'=>'secondary-cart-btn')) }}
	{{ Form::close() }}	
</div>

@stop