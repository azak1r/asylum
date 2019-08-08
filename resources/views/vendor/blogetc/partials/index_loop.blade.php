{{--Used on the index page (so shows a small summary--}}
{{--See the guide on webdevetc.com for how to copy these files to your /resources/views/ directory--}}
{{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

<div class="row vertical-gutter">
    <div class="col-md-4">
        <a href="{{$post->url()}}" class="angled-img">
            <div class="img">
                <img src="{{ URL::asset('images/blog/' . $post->image_large) }}">
            </div>
        </a>
    </div>
    <div class="col-md-8">
        <div class="clearfix">
            <h3 class="h2 pull-left m-0"><a href="blog-post-1.html">{{$post->title}}</a></h3>
            <span class="date pull-right"><i class="far fa-calendar-alt"></i> {{$post->posted_at->diffForHumans()}}</span>
        </div>
        <div class="tags">
                <i class="fa fa-tags"></i> 
                @foreach($post->categories as $category)
                <a href="{{$category->url()}}">{{$category->category_name}}</a> 
            @endforeach
        </div>
        <div class="description">
            <p>
                    {!! $post->generate_introduction(400) !!}
            </p>
        </div>
        <a href="{{$post->url()}}" class="btn read-more pull-left">Read More</a>
    </div>
</div>
