<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/">Home</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
  <div>
<li class="nav-item">
<a class="nav-link" href="/blog">Blog</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/contact">Contact</a>
</li>
</div>
<div class="float:right;">
@if (Auth::check())
<li class="nav-item">
<a class="nav-link" href="/blog">{{ Auth::user()->name }}</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/logout">Log out</a>
</li>
@else
<li class="nav-item">
<a class="nav-link" href="/login">Log in</a>
</li>
</div>
@endif
</ul>
</div>
</nav>
