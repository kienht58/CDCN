@extends('layout.layout')

@section('head.title')
{{$category->name}}
@stop

@section('body.content')
	<div class="container" id="games-content">
	<div style="margin-top:10px;">
		<table class="table table-hover">
			@foreach($games as $game)
			<tr onclick='document.location = "{{route('post.show', [$category->id, $game->id])}}";'>
				<td class="col-md-1" >
					<img class="img-responsive" src="{{asset('upload/game/'.$game->name.'/'.$game->path)}}" style="height:70px; width:100px;">
				</td>
				<td id="row-content">
					{{$game->name}}
				</td>
				<td id="row-content">
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star-empty"></span>
				</td>
					
				<td id="row-content">
					<i class="fa fa-windows" aria-hidden="true"></i>
					<i class="fa fa-apple" aria-hidden="true"></i>
					<i class="fa fa-linux" aria-hidden="true"></i>
				</td>
				<td id="row-content">
					<button type="button" class="btn btn-default navbar-btn">{{$game->size}} GB</button>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
@stop