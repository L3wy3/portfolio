@include('layouts.head')
<body>
<div class="container">
<header class="blog-header py-3">
<div class="row flex-nowrap justify-content-between align-items-center">

</div>
@include('layouts.nav')
</header>



      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-8 px-0">
          <h2 class="display-4 font-italic">Welcome to my blog</h2>
          <p class="lead my-3">Here is where I have documented the process of building this site from Server set up to polishing off the front end</p>
        </div>
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">

          </h3>
          @yield('content')
        </div><!-- /.blog-main -->
  @include ('layouts.sidebar')
      </div><!-- /.row -->
    </main><!-- /.container -->
@include ('layouts.footer')
