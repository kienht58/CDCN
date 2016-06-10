@extends('layout.layout')

@section('head.title')
{{$category->name}}
@stop

@section('body.content')
	<div class="container" id="games-content">
	<div class="col-md-offset-7">
		<div class=row id="row-content">
			<span >
			ORDER BY:
			<select class="btn">
			  <option>TITLE</option>
			  <option>POPULAR</option>
			  <option>TIME</option>
			  <option>RATING</option>
			</select>
	        </span>
	        </span>
	        <!--Success buttons with dropdown menu-->
	        <span style ="margin:10px;">
	        VIEW:
			<select class="btn">
			  <option>AS LIST</option>
			  <option><a href="games-grid.html"></a>AS GRID</option>
			</select>
	        </span>
		</div>
	</div>

	<!-- FILTER -->
	<div>
		<table class="table table-bordered">
			<th class="col-md-3">
			 	<div class="input-group">
			    	<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
			    <input type="text" class="form-control" placeholder="Search">  
			    </div>
			</th>
			<th class="col-md-1" id="row-content">
				<center>
				    <select class="btn">
				    	<option selected="">System</option>
					    <option>Window</option>
					    <option>Mac</option>
					    <option>Linux</option>
				    </select>
				</center>
			</th>
			<th class="col-md-1" id="row-content">
				<center>
				    <select class="btn">
				    	<option selected="">Feartures</option>
					    <option>Window</option>
					    <option>Mac</option>
					    <option>Linux</option>
				    </select>
				</center>
			</th>
			<th class="col-md-1" id="row-content">
				<center>
				    <select class="btn">
				    	<option selected="">Company</option>
					    <option>Window</option>
					    <option>Mac</option>
					    <option>Linux</option>
				    </select>
				</center>
			</th>
			<th class="col-md-1" id="row-content">
				<center>
				    <select class="btn">
				    	<option selected="">Size</option>
					    <option>Window</option>
					    <option>Mac</option>
					    <option>Linux</option>
				    </select>
				</center
			</th>
		</table>
	</div>
	<!-- Present -->

	<div style="margin-top:50px;">
		<table class="table table-hover">
			@foreach($games as $game)
			<tr onclick='document.location = "{{route('post.show', [$category->id, $game->id])}}";'>
				<td class="col-md-1" >
					<img src="https://images-4.gog.com/f3ae682a33b03abad3b78078b35052255722611a1b0e3ffa76bb8e864c7d6105_196.jpg"/>
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
					<button type="button" class="btn btn-default navbar-btn">1.23 GB</button>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
@stop