@extends('layout.layout')

@section('title')
<title>{{$game->name}}</title>
@stop

@section('content')
	<div class="row">
	<ul>
		<li>{{$game->description}}</li>
		<li>{{$game->minimumRequirement}}</li>
		<li>{{$game->recommendRequirement}}</li>
		<li>{{$game->genre}}</li>
		<li>{{$game->releaseTime}}</li>
	</ul>
    <h3>Reviews</h3>
    <ul>
    @foreach($reviews as $review)
        <li id="dit">{{$review->content}}</li>
    @endforeach
    </ul>
    {!! Form::open([
                        'route' => ['posts.storeReview', $category_id, $post->id],
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                    ])
    !!}
            <div class="form-group">
                {!! Form::label('Review', 'Review', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('reviewContent', '', ['id' => 'reviewContent', 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Thêm', ['id' => 'submit', 'class' => 'btn btn-primary pull-right' ])!!}
            </div>
    {!! Form::close() !!}
    
    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('[name="_token"]').val() }
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#submit').click(function(e){
                e.preventDefault();   
                var formData = {
                    reviewContent: $('#reviewContent').val(),
                }  
                $.ajax({
                    async: true,
                    url: window.location.href,
                    type: "POST",
                    dataType: 'json',
                    data: formData,
                    success: function(response){
                        $('#dit').append(response);
                    }, error: function(response){
                        console.log("cai dit nhau suong ghe");
                    }
                }); 
            });
        });
    </script>
@stop