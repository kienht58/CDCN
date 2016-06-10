@extends('layout.layout')

@section('head.title')
{{$game->name}}
@stop

@section('body.content')
<!-- CONTENT -->
<div class="container">
  <div style="margin-top:50px;">
      <div class="title-wrapper">
        <div style="padding-left: 100px;padding-top: 100px;position: relative;">
            <span style="font-family: 'Bangers';font-size: 50px;">
                {{$game->name}}
            </span>
            <div>
                <span style="padding-left: 10px;margin-right: 10px;">
                    @for ($i = 0; $i < $averageRate; $i++)
                    <span class="glyphicon glyphicon-star"></span>
                    @endfor
                    @for ($i = $averageRate; $i < 5; $i++)
                    <span class="glyphicon glyphicon-star-empty"></span>
                    @endfor
                </span>|
                <span style="margin-left: 10px;font-family:'Bangers';margin-right: 10px;">
                    Windows
                </span>|
                <span style="margin-left: 10px; font-family:'Bangers'">
                    English and more
                </span>
            </div>
            <div>
                <!-- 2 columns -->
                <div style="margin-top:20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-7">
                                <span style="font-family: 'Bangers';padding-left: 10px;"> MEDIA GALLERY </span>
                                <div id="myCarousel" class="carousel slide" style="margin-top:30px;">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                    @foreach($photos as $photo)
                                    @if ($photo->isAvatar)
                                        <div class="item active">
                                    @else
                                        <div class="item">
                                    @endif
                                        <img src="{{asset('upload/game/'.$game->name.'/'.$photo->path)}}" width="652" height="338"/>
                                    </div>
                                    @endforeach
                                </div>

                              <!-- Carousel nav -->
                              <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                              <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                          </div>
                          <div style="margin-top: 30px;">
                            <span style="text-align: center; font-family: 'Bangers';font-size: 40px;color: white; text-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;">
                                <center>
                                    Description
                                </center>
                            </span>
                            <hr>
                            <span style=" font-family:'Open Sans'; font-size: 15px;">
                                {{$game->description}}
                            </span>
                            <hr>
                        </div>
                        <div style="margin-top: 30px">
                            <span style="text-align: center; font-family: 'Bangers';font-size: 40px;color: white; text-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;">
                                <center>
                                    Feedback
                                </center>
                            </span>

                            <!-- <div class="form-group">
                                {!! Form::label('Review', 'Review', [ 'class' => 'control-label' ]) !!}
                                <input id="rating" class="rating-loading" value="2" data-size="xs" name="rating">
                                {!! Form::text('content', '', ['id' => 'reviewContent', 'class' => 'form-control', 'required']) !!}
                            </div> -->

                            <div class="tab-content" style="font-family: 'Open Sans';">
                                <div id="home" class="tab-pane fade in active">
                                    <table class="table" id="tableReview">
                                        @if (!Auth::guest())
                                        <tr style="position: relative;">
                                            <td style="position: relative;">
                                                <div style="padding-top: 10px;">
                                                    <div style="padding: 10px;position:relative;">
                                                        <blockquote>
                                                            {!! Form::open([ 'route' => ['post.storeReview', $category_id, $game->id, $post_id], 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'review' ]) !!}
                                                            <div class="form-group">
                                                                <input type="hidden" name="post_id" id="post_id" value="{{$post_id}}">
                                                                {!! Form::label('Review', 'Review', [ 'class' => 'control-label' ]) !!}
                                                                <input id="rating" class="rating-loading" value="2" data-size="xs" name="rating">
                                                                {!! Form::text('content', '', ['id' => 'reviewContent', 'class' => 'form-control', 'required']) !!}
                                                            </div>
                                                            {!! Form::submit('Thêm', ['id' => 'submit', 'class' => 'btn btn-primary pull-right' ])!!}
                                                            {!! Form::close() !!}
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif
                                        @foreach($reviews as $review)
                                        <tr style="position: relative;">
                                            <td style="position: relative;">
                                                <div style="padding-top: 10px;">
                                                    <div style="padding: 10px;position:relative;">
                                                        <blockquote>
                                                            {{$review->content}}
                                                            <footer>
                                                                <span><img style="border-radius: 50%; width:32px; height:32px;" src="{{URL::asset('upload/avatar/'.$review->avatar)}}" /> </span>
                                                                <span style="font-family:'Bangers';margin-left: 5px;"> {{$review->username}} </span>
                                                                <span style="margin-left: 10px;">
                                                                    @for($i = 0; $i < $review->rating; $i++)
                                                                    <span class="glyphicon glyphicon-star"></span>
                                                                    @endfor
                                                                    @for($i = 0; $i < 5 - $review->rating; $i++)
                                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                                    @endfor
                                                                </span>
                                                            </footer>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <span style="font-family: 'Bangers';padding-left: 10px;"> DOWNLOAD ITEM </span>
                        <div>
                            <div style="margin-top: 30px;width: 400px;height: 135px; position: relative;padding: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                                <span style="font-family:'Bangers';font-size:40px;"> {{$game->size}} GB </span>
                                @if (!Auth::guest())
                                <span style="font-family:'Bangers';position: absolute;right: 5px;top: 18px;"><a href="{{$game->downloadLink}}"><button class="btn btn-success" style="width:204px;height: 40px;font-size:20px">Download</button></a></span>
                                @else
                                <span style="font-family:'Bangers';position: absolute;right: 5px;top: 18px;"><a href="{{url('/login')}}"><button class="btn btn-success" style="width:204px;height: 40px;font-size:20px">Login to download</button></a></span>
                                @endif
                                <hr style="margin:0px;padding: 0px;">
                                <div style="position: absolute;bottom:10px;">
                                    <ul>
                                        <li><span style="font-family: 'Bangers'"> Please read the instruction carefully </span></li>
                                        <li><span style="font-family: 'Bangers'"> Do not copy post without adding source </span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div style=" margin-top: 30px; padding-left: 10px;font-family: 'Bangers'">
                            SIMILAR GAME
                            
                            <div>
                                @foreach($related_games as $related)
                                <div style="margin-top:11px;width: 400px;height:60px;position: relative; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                    <span>
                                        <img src="https://images-1.gog.com/37d4a208d1f5bb0e163da540ac894ba46a7d566ede31aaaefc74bbcd46ebd190_100.jpg" width="100px" height="60px">
                                    </span>
                                    <span style="position: absolute;top:10px; margin-left: 10px;">
                                        {{$related->name}}
                                    </span>
                                    <span style="position: absolute;bottom:10px; margin-left: 10px;">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                    </span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <table class="table" style="font-family: 'Open Sans', sans-serif;">
                                <tr>
                                    <td>
                                        GENRE
                                    </td>
                                    <td>
                                        Role-playing - Adventure - Fantasy
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        WORK ON
                                    </td>
                                    <td>
                                        Windows (7, 8, 10)
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        LANGUAGES
                                    </td>
                                    <td>
                                        Audio and text: Português do Brasil, Deutsch, English, français, 日本語, polski, русский. Text only: العربية, 中文, český, español, Español (AL), magyar, italiano, 한국어
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        FEATURE
                                    </td>
                                    <td>
                                        single-player - achievements - controller support
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        RELEASE
                                    </td>
                                    <td>
                                        May 19, 2015
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        COMPANY
                                    </td>
                                    <td>
                                        CD PROJEKT RED / CD PROJEKT RED
                                    </td>
                                </tr>                               
                            </table>
                        </div>
                        <div style="margin-top: 20px;">
                            <hr>
                            <span style="font-family: 'Bangers'">
                                <center>
                                    Minimum system requirements - Windows: 
                                </center>
                            </span>
                            <div style="font-family: 'Open Sans';margin-top: 10px;">
                                {{$game->minimumRequirement}}
                            </div>
                            
                            <span style="font-family: 'Bangers';">
                                <center>
                                    Recommended system requirements - Windows: 
                                </center>
                            </span>
                            <div style="font-family: 'Open Sans';margin-top: 10px;">
                                {{$game->recommendRequirement}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('body.script')
<script type="text/javascript">
    $('#rating').rating({
        step: 1,
        starCaptions: {1: 'Very Poor', 2: 'Poor', 3: 'Ok', 4: 'Good', 5: 'Very Good'},
        starCaptionClasses: {1: 'text-danger', 2: 'text-warning', 3: 'text-info', 4: 'text-primary', 5: 'text-success'}
    });
</script>
@stop