@extends ('layouts.test')

@section ('content')
  <div class="col-md-8">
    <h1>Sign in</h1>
    <form class="" action="/login" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary"></button>
      </div>
      @include('layouts.errors')
    </form>
  </div>
@endsection
