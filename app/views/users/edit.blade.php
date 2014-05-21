@extends('layouts.main')
@section('content')

	<h1>Edit {{$user->username}}</h1><hr>

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

	{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
    <div class="form-group">
        {{ Form::label('email') }}
        {{ Form::text('email',Input::old('email'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('username') }}
        {{ Form::textarea('username',Input::old('username'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password') }}
        {{ Form::password('password', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('status') }}
        {{ Form::text('status', null, array('class' => 'form-control')) }}
    </div>

	{{ Form::submit('Edit the User!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop