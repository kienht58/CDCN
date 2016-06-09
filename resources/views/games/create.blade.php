@extends('layout.layout')

@section('head.title')
Create new game
@endsection

@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!!Form::open([
				'route'   => 'game.store',
				'method'  => 'POST',
				'class'   => 'form-horizontal',
				'enctype' => 'multipart/form-data'
			])
			!!}
			<div class="form-group">
				{!! Form::label('name', 'Name', [ 'class' => 'control-label' ]) !!}
				{!! Form::text('name', '', [ 'class' => 'form-control', 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('description', 'Description', [ 'class' => 'control-label' ]) !!}
				{!! Form::textarea('description', '', [ 'class' => 'form-control', 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('minimumRequirement', 'Minimum Requirement', [ 'class' => 'control-label' ]) !!}
				{!! Form::textarea('minimumRequirement', '', [ 'class' => 'form-control', 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('recommendRequirement', 'Recommend Requirement', [ 'class' => 'control-label' ]) !!}
				{!! Form::textarea('recommendRequirement', '', [ 'class' => 'form-control', 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('genre', 'Genre', [ 'class' => 'control-label' ]) !!}
				{!! Form::text('genre', '', [ 'class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('releaseTime', 'Release Time', [ 'class' => 'control-label' ]) !!}
				{!! Form::date('releaseTime', '', [ 'class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('downloadLink', 'Link download', [ 'class' => 'control-label' ]) !!}
				{!! Form::text('downloadLink', '', [ 'class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Create', [ 'class' => 'btn btn-primary pull-right' ])!!}
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>
@stop