@extends ('layouts.test')

@section('content')
  <div class="col-sm-8">
    <h1>Register</h1>
    <form class="" action="/register" method="post">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="formcontrol" name="name" id="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="formcontrol" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="formcontrol" name="password" id="password" required>
        </div>
        <div class="form-group">
          <label for="password_confirmation">Password Confirmation:</label>
          <input type="password" class="formcontrol" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary" name="button">Register</button>
        @include ('layouts.errors')
  </div>
@endsection
