@include('layouts.head')
<body>
@include('layouts.nav')
@include('layouts.banner')
<div class="container">
  <div class="row">
    <div class="col-md-6 order-md-2">
      <p style="font-size:2em;">If you've been impressed with my site and wish to offer me oodles of money to build a site for you please don't hesitate to get in touch</p>
    </div>
    <div class="col-md-6 order-md-1">
      <form class="" action="index.html" method="post">
        formy form
        <div class="form-control">
          <label for="">Name</label>
          <input type="text" name="" value="">
        </div>
        <div class="form-control">
          <label for="">E-mail</label>
          <input type="email" name="" value="">
        </div>
        <div class="form-control">
          <label for="">Message</label>
          <textarea type="text" name="" value=""></textarea>
        </div>
        <button type="button" name="button"></button>
      </form>
      </div>
    </div>
</div>
@include('layouts.footer')
