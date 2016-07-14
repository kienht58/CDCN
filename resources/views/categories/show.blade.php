@extends('layout.layout')
@section('body.content')
<div class="content">
</div>
<mid>
	<div class="content list-banner">
		<center>
			<h1 class="hit-the-floor" >GAME LIST</h1>
		</center>
	</div>
	<div class="w3-btn-floating-large w3-red" id="floating"><i><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></div>
	<div class="content">
		<div class="container">
			<div class="main">
				<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
					</div>
					<ul>
						@foreach($games as $game)
							<li>
								<a class="cbp-vm-image" href="#">
									<img src="{{asset('upload/game/'.$game->id.'/'.$game->image)}}">
									@if($game->popularity == 'hot')
										<div class="linh label label-danger">HOT</div>
									@endif

									<h3 class="cbp-vm-title">{{$game->name}}</h3>
									<div class="cbp-vm-price">${{$game->priceOnSteam}}</div>
									<div class="cbp-vm-details">
										<a class="btn btn-success add-to-cart" href="#">Thêm vào giỏ</a>
										<a class="btn btn-primary add-to-cart" style="	margin-left:10px;" href="#">Xem thông tin</a>
										{!! Form::open([
									            'route' => ['game.delete', $game->id],
									            'method' => 'DELETE',
											    'style' =>'display: inline'
								            ])
										!!}
											<button class="btn btn-danger">Delete</button>
										{!! Form::close() !!}
									</div>
								</a>
							</li>
						@endforeach
					</ul>
				</div>
				<center>
					<ul class="pagination flat">
						<li class="active flat"><a href="#">1</a></li>
						<li class="flat"><a href="#">2</a></li>
						<li class="flat"><a href="#">3</a></li>
						<li class="flat"><a href="#">4</a></li>
						<li class="flat"><a href="#">5</a></li>
					</ul>
				</center>
			</div><!-- /main -->
		</div><!-- /container -->
	</div>
@stop
