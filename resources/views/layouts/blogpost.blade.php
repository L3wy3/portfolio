@include('layouts.head')
<body>
<div class="container">
<header class="blog-header py-3">
<div class="row flex-nowrap justify-content-between align-items-center">

</div>
@include('layouts.nav')
</header>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">

          </h3>
          @yield('content')
          @if($previous)
            <a class="btn btn-outline-primary" href="{{ URL::to( 'blog/' . $previous->id ) }}">Previous</a>
          @else
            <a class="btn btn-outline-primary disabled" href="#">Previous</a>
          @endif
          @if($next)
            <a class="btn btn-outline-primary" href="{{ URL::to( 'blog/' . $next->id ) }}">Next</a>
          @else
            <a class="btn btn-outline-primary disabled" href="#">Next</a>
          @endif
        </div><!-- /.blog-main -->
  @include ('layouts.sidebar')
      </div><!-- /.row -->
    </main><!-- /.container -->
@include ('layouts.footer')
