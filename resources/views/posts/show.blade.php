@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mgh0">
        <div class="col-md-4">
            <div class="bgc-lbrown pdv15 text-center mgb30">
                <span class="fc-gold fs30 mgb20">ARCHIVE FOR POSTS</span>
                <ul class="list-unstyled text-left">
                    <li class="fs25 pd15 fc-gold pdl30">2013</li>
                    <li class="fs25 pd15 fc-gold pdl30">2014</li>
                    <li class="fs25 pd15 fc-gold pdl30">2015</li>
                    <li class="fs25 pd15 fc-gold pdl30 bgc-white">2016</li>
                </ul>                
            </div>
            <div class="bgc-lbrown pdv15">
                <span class="fc-gold fs30 mgb20 pdh5">The Angelite VOICE</span>
                @foreach($comments as $comment)
                    <div class="bdb-black mgb20 pd15">
                        <p>{{ $comment->comment_message }}</p>
                        <span>Comment by: {{ $comment->comment_name }} of {{ $comment->comment_dept }}, {{ date_format($comment->created_at, 'F d, Y') }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-8 mgh0">
            <span class="dp-bl fc-black fs40 wwrap">{{ $post->post_title }}</span>
            <span class="dp-bl fc-black mgv50">Posted by: {{ $post->post_user }} | {{ date_format($post->created_at, 'F d, Y') }}</span>
            <img src="{{ asset('img/uploads/' . $post->post_img) }}" class="img-responsive dp-bl mgv50 center-block">
            <p class="wwrap fc-black bdb-black pdb15 text-justify">{{ $post->post_body }}</p>
            <div class="row bgc-lbrown mgh0 pd15">
                <span class="fc-gold fs30">LEAVE A COMMENT/FEEDBACK</span>
                <form method="post" action="{{ route('post.comment',$post->id) }}">
                    {{ csrf_field() }}
                    <div class="col-md-6 pdl0">
                        <input type="text" name="comment_name" placeholder="Name" class="form-control db-bl mgb5">
                        <input type="text" name="comment_email" placeholder="Email" class="form-control db-bl mgb5">
                        <input type="text" name="comment_dept" placeholder="College Department" class="form-control db-bl mgb5">
                    </div>
                    <div class="col-md-6 pdr0">
                        <textarea name="comment_message" class="form-control mgb5" rows="5" placeholder="Message"></textarea>
                        <button type="submit" class="btn btn-success pull-right">Send</button>
                    </div>
                </form>
            </div>
        </div>        
    </div>
</div>
@if(Auth::user())
<div class="button-container">
    <form action="{{ route('posts.destroy',$post->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('delete') }}
        <div class="btn-group">
            <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">Edit</a>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>
</div>
@endif
@stop