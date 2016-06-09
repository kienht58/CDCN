@extends('layout.layout')

@section('title')
<title>{{$category->name}}</title>
@stop

@section('content')
	<div class="row">
	echo($game);
	@foreach($games as $game)
		<div class="col-md-4">
			<a href="#">Game {{$game->name}}</a>
		</div>
	@endforeach
	</div>
@stop