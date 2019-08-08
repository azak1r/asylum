{{--Used on the index page (so shows a small summary--}}
{{--See the guide on webdevetc.com for how to copy these files to your /resources/views/ directory--}}
{{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

<div class="row vertical-gutter">
    <div class="col-md-4">
        <a href="blog-post-1.html" class="angled-img">
            <div class="img">
                <?=$post->image_tag("medium", true, ''); ?>
            </div>
            <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9.1 out of 10"><span>9.1</span></div>
        </a>
    </div>
    
    <div class='text-center'>
    <?=$post->image_tag("medium", true, ''); ?>
        </div>
    <div style='padding:10px;'>
    <h3 class=''><a href='{{$post->url()}}'>{{$post->title}}</a></h3>
    <h5 class=''>{{$post->subtitle}}</h5>

    <p>{!! $post->generate_introduction(400) !!}</p>

    <div class='text-center'>
        <a href="{{$post->url()}}" class="btn btn-primary">View Post</a>
    </div>
        </div>
</div>
