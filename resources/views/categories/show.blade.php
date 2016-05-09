@extends('layout.layout')

@section('title')
<title>{{$category->name}}</title>
@stop

@section('content')
	<div class="row">
	@foreach($posts as $post)
		<div class="col-md-4">
			<a href="{{route('post.show', [$category->id, $post->id])}}">post {{$post->id}}</a>
		</div>
	@endforeach
	</div>
@stop