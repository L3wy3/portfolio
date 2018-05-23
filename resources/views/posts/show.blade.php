@extends ('layouts.blogpost')
@include ('layouts.banner')
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

@endsection
