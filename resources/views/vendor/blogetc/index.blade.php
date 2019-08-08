@extends('layouts.main')
@section('title', 'Blog')
@section("content")

<div class="youplay-banner banner-top youplay-banner-parallax small">
        
    <div class="image" data-speed="0.4">
        <img src="assets/images/dark/banner-blog-bg.jpg" alt="" class="jarallax-img">
    </div>

    <div class="info">
        <div>
            <div class="container">
                    <h1 class="h1">Blog</h1>
            </div>
        </div>
    </div>
</div>

<div class="container youplay-news">
    <div class="col-md-9">
        @foreach ($posts as $post)
            @include("blogetc::partials.index_loop")
        @endforeach
    </div>
</div>

@endsection