<div class="blog-post">
  <a href='/blog/{{ $post->id}}'> <h2 class="blog-post-title">{{ $post->title }}</h2></a>
  <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a></p>
  <p>{{ $post->body}}</p>
</div><!-- /.blog-post -->
