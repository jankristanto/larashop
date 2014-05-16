@extends('layouts.main')
@section('content')
<h1>Create New Category</h1><hr>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url'=>'categories')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the Category!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop