@extends('layouts.main')
@section('content')
	<h1>Create new user</h1>
    @if($errors->has())
        <div id="form-errors">
            <p>The following errors has ocurred</p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
	{{ Form::open(array('url'=>'users')) }}
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email',Input::old('email'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('username') }}
            {{ Form::text('username',Input::old('username'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::password('password', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', null, array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Create Product', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@stop
