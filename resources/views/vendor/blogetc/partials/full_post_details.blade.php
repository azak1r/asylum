<p>
        {!! $post->post_body_output() !!}
</p>
</div>

<hr>

<div class="tags">
        <i class="fa fa-tags"></i> 
        @foreach($post->categories as $category)
        <a href="{{$category->url()}}">{{$category->category_name}}</a> 
    @endforeach
</div>

<!-- Post Meta -->
<div class="meta">
    <div class="item">
        <i class="fa fa-user meta-icon"></i>
    Author <a href="#">{{$post->author->name}}</a>
    </div>
    <div class="item">
        <i class="fa fa-calendar meta-icon"></i>
        Published <a href="#">{{$post->posted_at->diffForHumans()}}</a>
    </div>
    <div class="item">
        <i class="fa fa-eye meta-icon"></i>
        Views WIP
    </div>
    <div class="item">
        <a href="#"><i class="fa fa-heart"></i> WIP</a>
    </div>
</div>
    <!-- /Post Meta -->

<div class="btn-group social-list social-likes" data-counters="no">
    <span class="btn btn-default facebook" title="Share link on Facebook"></span>
    <span class="btn btn-default twitter" title="Share link on Twitter"></span>
</div>
