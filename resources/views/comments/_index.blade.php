<div class="pt-5 mt-5">
    <h3 class="mb-5">{{ count($comments) }} Comments</h3>
    <ul class="comment-list">
        @foreach($comments as $comment)
            <li class="comment">
                <div class="comment-body">
                <h3>{{ $comment->pseudo }}</h3>
                <div class="meta mb-3">
                    {{ $comment->created_at->format('M d, Y \a\t h:m') }}
                </div>
                <p>{{ $comment->content }}</p>
                </div>
            </li>
        @endforeach
      

    </ul>
    <!-- END comment-list -->

    <div class="comment-form-wrap pt-5">
      <h3 class="mb-5">Leave a comment</h3>
      <form action="#" class="p-5 bg-light" method="post">
        <div class="form-group">
          <label for="name">Name *</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <input type="hidden" name="postId" value="4" />
          <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
        </div>

      </form>
    </div>
  </div>