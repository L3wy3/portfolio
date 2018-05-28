@extends ('layouts.test')

@section ('content')
  <h1>{{ $post->title }}</h1>
  <div class='row'>
    <div class="col-sm-6">
      {{ $post->body }}
    </div>
    <div class="col-sm-6">
      <img style='width:100%; height:120px; background-color:grey;display:inline-block;'>
    </div>
  </div>
  <hr>
<div class='comments'>
  <ul class='list-group'>
  @foreach ($post->comments as $comment)
    <li class="list-group-item">
      <strong>
        @if($comment->created_at)
        {{ $comment->created_at->diffForHumans() }};<br>
        @endif
      </strong>
      {{ $comment->body }}
    </li>
  </ul>
<hr>
@endforeach
</div>
<div class='card'>
  <div class='card-block'>
    <form class="" action="/blog/{{ $post->id }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <textarea name="body" placeholder="Your comment here" class="form-control" rows="8" cols="80" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class='btn btn-primary' name="button">Add Comment</button>
      </div>
    </form>
  </div>
</div>
@endsection
