@include('layouts.banner')
@extends('layouts.test')
@section('content')
@foreach ($posts as $post)
@include ('posts.post')
@endforeach
<div class="text-center">
  {!! $posts->links(); !!}
</div>
@endsection
