<h2>Leave a Reply</h2>
    <form class="comment-form" method='post' action='{{route("blogetc.comments.add_new_comment", $post->slug)}}'>
        @csrf
        <div class="comment-cont clearfix">
            @if(config("blogetc.comments.save_user_id_if_logged_in", true) == false || !\Auth::check())
            <label id="author_name_label" for="author_name">Your Name </label>
            <div class="youplay-input">
                <input type="text" name="author_name" id="author_name" required placeholder="Your Name *" value="{{old("author_name")}}">
            </div>
                @if(config("blogetc.comments.ask_for_author_email"))
                <label id="author_email_label" for="author_email">Your Email
                        <small>(won't be displayed publicly)</small>
                    </label>
                <div class="youplay-input">
                    <input type='email' name='author_email' id="author_email" placeholder="Your Email *" required value="{{old("author_email")}}">
                </div>
                @endif
            @endif
            <label id="comment_label" for="comment">Your Comment </label>
            <div class="youplay-textarea">
                <textarea name='comment' required id="comment" rows="5" placeholder="Your Comment...">{{old("comment")}}</textarea>
            </div>

            @if($captcha)
                {{--Captcha is enabled. Load the type class, and then include the view as defined in the captcha class --}}
                @include($captcha->view())
            @endif
            
            <button type='submit' class="btn btn-default pull-right">Submit</button>
        </div>
    </form>
    