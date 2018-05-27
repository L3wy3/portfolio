<div class="blog-post">
  <div style="background-image:url('{{ $post->image }}'); background-size:contain; padding: 350px 150px 0 0;">
    <div style="max-width:450px;" class=" @if($i == 1)blog-container-even @else blog-container-odd @endif    ">
      <a href='/blog/{{ $post->id}}'> <h2 class="blog-post-title">{{ $post->title }}</h2></a>
      <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a></p>
    </div>
  </div>
  <p>{{ $post->body}}</p>
  <?php echo $post->id;?>
</div><!-- /.blog-post -->
