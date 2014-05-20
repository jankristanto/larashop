@extends('layouts.main')
@section('content')
	<h1>Create new product</h1>
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
	{{ Form::open(array('url'=>'products')) }}
		<div class="form-group">
            {{ Form::label('category_id', 'Category') }}
            {{ Form::select('category_id', $categories,null,array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name',Input::old('name'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::textarea('description',Input::old('description'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', null, array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Create Product', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@stop
