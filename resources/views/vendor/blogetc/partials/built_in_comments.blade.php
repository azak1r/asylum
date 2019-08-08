<ul class="comments-list">
    @forelse($comments as $comment)
    <li>
        <article>
            <div class="comment-avatar pull-left">
                <img src="https://via.placeholder.com/90.png/09f/fff" alt="">
            </div>
            <div class="comment-cont clearfix">
                <a class="comment-author h4" href="#">{{$comment->author()}}</a>
                <div class="date">
                    <i class="fa fa-calendar"></i> {{$comment->created_at->diffForHumans()}}
                    <a href="#" class="pull-right"><i class="fa fa-reply"></i> Reply <strong>(Coming Soon&trade;)</strong></a>
                </div>
                <div class="comment-text">
                        {!! nl2br(e($comment->comment))!!}
                </div>
            </div>
        </article>
    </li>

    @empty
        <li>No Comment ;( Why don't you be the first?</li>
    @endforelse

    @if(count($comments)> config("blogetc.comments.max_num_of_comments_to_show",500) - 1)
        <p><em>Only the first {{config("blogetc.comments.max_num_of_comments_to_show",500)}} comments are
                shown.</em>
        </p>
    @endif
</ul>




