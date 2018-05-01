@include('layouts.head')
<body>
@include('layouts.nav')
<div class="banner-outer {{ $pagetitle }}-page">
@include('layouts.banner')
</div>
<div class="container">
  <div class="col-sm-6" style="background-color:blue; height:600px;">
    <form class="" action="index.html" method="post">
      formy form
      <div class="form-control">
        <label for=""></label>
        <input type="text" name="" value="">
      </div>
    </form>
    </div>
    <div class="col-sm-6">
      blah blah blah
    </div>
</div>
@include('layouts.footer')
