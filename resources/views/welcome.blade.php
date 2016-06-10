@extends('layout.layout')

@section('head.title')
Link Never Die
@stop

@section('body.content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{asset('upload/lol.jpg')}}" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Link Never Die</h1>
              <p>World for Gamers!!!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{asset('upload/lol2.jpg')}}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Link Never Die</h1>
              <p>Get your relaxing from here!!!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('upload/lol3.jpg')}}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Game is our life!!</h1>
              <p>Free and Play</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
      	@foreach($popular_games as $popular_game)
        <div class="col-lg-4">
          <img class="img-circle" src="{{asset('upload/game/'.$popular_game->name.'/'.$popular_game->path)}}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{$popular_game->name}}</h2>
          <p>{{substr($popular_game->description, 0, strpos($popular_game->description, ' ', 50))}}...</p>
          <p><a class="btn btn-default" href="{{route('post.show', [$popular_game->category, $popular_game->id])}}" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        @endforeach
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Most downloaded game.</h2>
          <a href="{{route('post.show', [$most_downloaded_game->category, $most_downloaded_game->id])}}">{{$most_downloaded_game->name}}</a>
          <p class="lead">{{substr($most_downloaded_game->description, 0, strpos($most_downloaded_game->description, ' ', 100))}}...</p>
        </div>
        <div class="col-md-5">
          <a href="{{route('post.show', [$most_downloaded_game->category, $most_downloaded_game->id])}}"><img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="{{asset('upload/game/'.$most_downloaded_game->name.'/'.$most_downloaded_game->path)}}"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Newest game.</h2>
          <a href="{{route('post.show', [$recent_game->category, $recent_game->id])}}">{{$recent_game->name}}</a>
          <p class="lead">{{substr($recent_game->description, 0, strpos($recent_game->description, ' ', 100))}}...</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <a href="{{route('post.show', [$recent_game->category, $recent_game->id])}}"><img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="{{asset('upload/game/'.$recent_game->name.'/'.$recent_game->path)}}"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Incomming...</h2>
          <a href="{{route('post.show', [$future->category, $future->id])}}">{{$future->name}}</a>
          <p class="lead">{{substr($future->description, 0, strpos($future->description, ' ', 100))}}...</p>
        </div>
        <div class="col-md-5">
          <a href="{{route('post.show', [$future->category, $future->id])}}"><img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="{{asset('upload/game/'.$future->name.'/'.$future->path)}}"></a>
        </div>
      </div>
		
	  <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->
    </div>
@stop