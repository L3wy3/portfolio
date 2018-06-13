@extends ('layouts.blogpost')
@include ('layouts.banner')
@section ('content')
  <h3>{{ $post->title }}</h3>
  <div class='row'>
    <div class="col-sm-6">
      {{ $post->body }}
    </div>
    <div class="col-sm-6 post-inner">
      <img src='{{ $post->img }}'>
    </div>
  </div>
  <hr>

@endsection
