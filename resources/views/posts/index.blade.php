@include('layouts.banner')
@extends('layouts.test')
@section('content')
<?php $i=0;?>
@foreach ($posts as $post)
@include ('posts.post')
<?php $i++;?>
@endforeach
<div class="text-center">
  {!! $posts->links(); !!}
</div>
@endsection
