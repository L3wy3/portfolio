<<<<<<< HEAD
@extends ('layouts.master')

@section ('content')

  <h1>Create a posts</h1>
  <p>bad english</p>

=======
@extends ('layouts.test')

@section ('content')
  <h1>Create a post</h1>
  <hr>
  <form method='POST' action='/blog'>
    {{ csrf_field() }}
    <div class="form-group">
      <label='title'>Title</label>
      <input type='text' class='form-control' id='title' name='title'>
    </div>
    <div class="form-group">
      <label='body'>Body</label>
      <textarea name="body" id='body' class='form-control' rows="8" cols="80"></textarea>
    </div>
      <div class="form-group">
    <button type="submit" name="button btn-primary">Publish</button>
  </div>
  </form>
  @if (count($errors))
  <div class='alert alert-danger'>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
>>>>>>> 2143ba06f1d493ead94ad48002ac6e5daf5a15b6
@endsection
