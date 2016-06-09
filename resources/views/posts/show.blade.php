@extends('layout.layout')

@section('head.title')
{{$game->name}}
@stop

@section('body.content')
<div class="container">
    <div class="row">
        <ul>
            <li>{{$game->description}}</li>
            <li>{{$game->minimumRequirement}}</li>
            <li>{{$game->recommendRequirement}}</li>
            <li>{{$game->category}}</li>
            <li>{{$game->releaseTime}}</li>
            <li>{{$game->downloadLink}}</li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <h3>Reviews</h3>
        <ul id="list-review">
            @foreach($reviews as $review)
            <li>{{$review->content}}</li>
            @endforeach
        </ul>
        {!! Form::open([
            'route'  => ['post.storeReview', $category_id, $game->id],
            'method' => 'POST',
            'class'  => 'form-horizontal',
            'id'     => 'review'
        ])
        !!}
        <input type="hidden" name="post_id" id="post_id" value="{{$game->id}}">

        <div class="form-group">
            {!! Form::label('Review', 'Review', [ 'class' => 'control-label' ]) !!}
            {!! Form::text('content', '', ['id' => 'reviewContent', 'class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Thêm', ['id' => 'submit', 'class' => 'btn btn-primary pull-right' ])!!}
        </div>
        {!! Form::close() !!}
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#review').on('submit', function(e) {
            e.preventDefault();   
            var reviewContent = $('#reviewContent').val();  
            var token = '{{ csrf_token()}}';
            var post_id = $('#post_id').val();
            $.ajax({
                type: "POST",
                url: window.location.href,
                data: {content: reviewContent, _token: token, post_id: post_id},
                success: function(response){
                    console.log("Done");
                    $('#list-review').append("<li>" + response.content + "</li>");
                    $('#reviewContent').val('');
                }, 
                error: function(response){
                    console.log("Error");
                }
            }); 
        });
    });
</script>
@stop