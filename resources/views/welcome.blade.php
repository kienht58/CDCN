@extends('layout.layout')
@section('body.content')
	<div class="content">
		<div class="container">
			<div class="feature">
				<div class="banner">
					<div class="w3-btn-floating-large w3-red" id="floating"><i><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></div>
					<center>
						<span style="font-size:30px;color:white;">
							<marquee behavior="scroll" direction="left">Chào mừng bạn đến với Cánh cụt SHOP <img src="assets/css/penguin_banner.png">
							</marquee>
						</span>
						<span>
						</span>
					</center>
				</div>
				<div class="row">
					<div class="col-md-9">
						<div class="slide">
							<div class="container">
								<div class="row">
									<div class="col-md-9">
										<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-example-generic" data-slide-to="1"></li>
												<li data-target="#carousel-example-generic" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner">
												<div class="item active">
													<a href="{{route('post.show', [$popular_games[0]->category, $popular_games[0]->id])}}">
														<img src="{{asset('upload/game/'.$popular_games[0]->id.'/'.$popular_games[0]->image)}}" alt="First slide" style="width: 1200px; height: 358px">
														<div class="carousel-caption">
															<h3>{{$popular_games[0]->name}}</h3>
															<p>{{substr($popular_games[0]->description, 0, strpos($popular_games[0]->description, ' ', 50))}}...</p>
														</div>
													</a>
												</div>
												<div class="item">
													<a href="{{route('post.show', [$most_downloaded_games[0]->category, $most_downloaded_games[0]->id])}}">
														<img src="{{asset('upload/game/'.$most_downloaded_games[0]->id.'/'.$most_downloaded_games[0]->image)}}" alt="Second slide" style="width: 1200px; height: 358px">
														<div class="carousel-caption">
															<h3>{{$most_downloaded_games[0]->name}}</h3>
															<p>{{substr($most_downloaded_games[0]->description, 0, strpos($most_downloaded_games[0]->description, ' ', 50))}}...</p>
														</div>
													</a>
												</div>
												<div class="item">
													<a href="{{route('post.show', [$discount_games[0]->category, $discount_games[0]->id])}}">
														<img src="{{asset('upload/game/'.$discount_games[0]->id.'/'.$discount_games[0]->image)}}" alt="Third slide" style="width: 1200px; height: 358px">
														<div class="carousel-caption">
															<h3>{{$discount_games[0]->name}}</h3>
															<p>{{substr($discount_games[0]->description, 0, strpos($discount_games[0]->description, ' ', 50))}}...</p>
														</div>
													</a>
												</div>
											</div>
											<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
											<i class="fa fa-chevron-left" aria-hidden="true"></i></a><a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
										</div>
									</div>
								</div>
							</div>
							<div id="push">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="steam-checkout">
							<div class="steam-description">
								<span>Game khác từ Steam</span>
							</div>
						    <div class="button-cover">
								<button class="button" style="vertical-align:middle"><span>Báo giá</span></button>
							</div>
						</div>
						<div class="origin-checkout">
							<div class="origin-description">
								<span>Game khác từ Origin</span>
							</div>
							<div  class="button-cover">
								<button class="button" style="vertical-align:middle"><span>Báo giá</span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hot">
			<span>
			<div class="wrapper">
				<div class="clip-text clip-text_one">GAME TRONG SHOP</div>
			</div>
			<div style="margin:10px;">
			</div>
			<marquee behavior="scroll" direction="left" style="background-color:white; margin-bottom:20px;">
				{{$list_game}}
			</marquee>
			<div class="container">
				<ul class="nav nav-pills text-bold">
					<li class="active"><a data-toggle="pill" href="#home" style="border-radius:0">Nổi bật</a></li>
					<li><a data-toggle="pill" href="#menu1" style="border-radius:0">Bán chạy</a></li>
					<li><a data-toggle="pill" href="#menu2" style="border-radius:0">Mới</a></li>
					<li><a data-toggle="pill" href="#menu3" style="border-radius:0">Đang khuyến mãi</a></li>
				</ul>
				<hr></hr>
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<div class="module">
							<div class="flex-container">
								@foreach($popular_games as $game)
									<div class="flex-item">
										<div class="item-image">
											<img src="{{asset('upload/game/'.$game->id.'/'.$game->image)}}" style="width:230px; height:87px">
										</div>
										<div>
											<span class="price">${{$game->priceOnSteam}}</span>
										</div>
									</div>
								@endforeach
							</div>
							<div class="more">
								<center>
									<a href="#"><button class="button" style="vertical-align:middle"><span>Xem thêm</span></button></a>
								</center>
							</div>
						</div>
					</div>
					<div id="menu1" class="tab-pane fade">
						<div class="module">
							<div class="flex-container">
								@foreach($most_downloaded_games as $game)
									<div class="flex-item">
										<div class="item-image">
											<img src="{{asset('upload/game/'.$game->id.'/'.$game->image)}}" style="width:230px; height:87px">
										</div>
										<div>
											<span class="label label-danger attribute">HOT</span>
											<span class="price">${{$game->priceOnSteam}}</span>
										</div>
									</div>
								@endforeach
							</div>
							<div class="more">
								<center>
									<button class="button" style="vertical-align:middle"><span>Xem thêm</span></button>
								</center>
							</div>
						</div>
					</div>
					<div id="menu2" class="tab-pane fade">
						<div class="module">
							<div class="flex-container">
								@foreach($recent_games as $game)
									<div class="flex-item">
										<div class="item-image">
											<img src="{{asset('upload/game/'.$game->id.'/'.$game->image)}}" style="width:230px; height:87px">
										</div>
										<div>
											<span class="label label-warning attribute">NEW</span>
											<span class="price">${{$game->priceOnSteam}}</span>
										</div>
									</div>
								@endforeach
							</div>
							<div class="more">
								<center>
									<button class="button" style="vertical-align:middle"><span>Xem thêm</span></button>
								</center>
							</div>
						</div>
					</div>
					<div id="menu3" class="tab-pane fade">
						<div class="module">
							<div class="flex-container">
								@foreach($discount_games as $game)
									<div class="flex-item">
										<div class="item-image">
											<img src="{{asset('upload/game/'.$game->id.'/'.$game->image)}}" style="width:230px; height:87px">
										</div>
										<div>
											<span class="label label-success attribute">SALE</span>
											<span class="price">${{$game->priceOnSteam}}</span>
										</div>
									</div>
								@endforeach
							</div>
							<div class="more">
								<center>
									<button class="button" style="vertical-align:middle"><span>Xem thêm</span></button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
