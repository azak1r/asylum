@extends('layouts.main')
@section('title', $post->gen_seo_title())
@section("content")

<div class="youplay-banner banner-top youplay-banner-parallax small">
    <div class="image" data-speed="0.4">
        <img src="{{ URL::asset('images/blog/' . $post->image_large) }}" alt="" class="jarallax-img">
    </div>
    
    <div class="info">
        <div>
            <div class="container">
                <h1 class="h1">{{$post->title}}</h1>
            </div>
        </div>
    </div>
</div>
@include("blogetc::partials.show_errors")

<div class="container youplay-news youplay-post">
    <div class="col-md-9">
        <article class="news-one">
            <div class="description">
                <div class="img angled-img pull-left">
                    <img src="{{ URL::asset('images/blog/' . $post->image_medium) }}" alt="">
                </div>
                
                
                @include("blogetc::partials.full_post_details")
                
        </article>
        @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
        <div class="comments-block">
                <h2>Comments <small>({{$comments->count()}})</small></h2>
                @include("blogetc::partials.show_comments")
        </div>
        @else
                {{--Comments are disabled--}}
        @endif
    </div>
</div>
@endsection