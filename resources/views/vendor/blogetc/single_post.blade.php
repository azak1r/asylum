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


    {{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

    <div class='container'>
    <div class='row'>
        <div class='col-sm-12 col-md-12 col-lg-12'>

            @include("blogetc::partials.show_errors")
            @include("blogetc::partials.full_post_details")


            @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
                <div class="" id='maincommentscontainer'>
                    <h2 class='text-center' id='blogetccomments'>Comments</h2>
                    @include("blogetc::partials.show_comments")
                </div>
            @else
                {{--Comments are disabled--}}
            @endif


        </div>
    </div>
    </div>

@endsection