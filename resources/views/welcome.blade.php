@extends('layout.layout')

@section('title')
<title>Link Never Die</title>
@stop

@section('list-categories')
@foreach($categories as $category)
    <li role="presentation"><a role="menuitem" href="{{ route('categories.show', $category->id) }}">{{$category->name}}</a></li>
@endforeach
@stop