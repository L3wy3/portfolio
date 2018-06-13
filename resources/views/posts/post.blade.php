<div class="blog-post">
  <div style="background-image:url('{{ $post->img }}'); background-size:cover;" class=" @if($i != 1) padding-post-right @else padding-post-left @endif">
    <div class="blog-container @if($i == 1)blog-container-even @else blog-container-odd @endif    ">
      <a href='/blog/{{ $post->id}}'> <h2 class="blog-post-title">{{ $post->title }}</h2></a>
      <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by Laurence</p>
    </div>
  </div>
  <p class="padding-20-0">{{  str_limit($post->body, 250) }} <a href='/blog/{{ $post->id}}'>Read more</a></p>
</div>
