@extends('layout.layout')

@section('head.title')
<title>{{$category->name}}</title>
@stop

@section('body.content')
	<div class="row">
	@foreach($games as $game)
		<div class="col-md-4">
			<a href="#">{{$game->name}}</a>
		</div>
	@endforeach
	</div>
@stop