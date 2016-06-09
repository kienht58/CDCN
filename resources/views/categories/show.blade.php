@extends('layout.layout')

@section('head.title')
{{$category->name}}
@stop

@section('body.content')
	<div class="row">
	@foreach($games as $game)
		<div class="col-md-4">
			<a href="{{ route('post.show', [$category->id, $game->id]) }}">{{$game->name}}</a>
		</div>
	@endforeach
	</div>
@stop