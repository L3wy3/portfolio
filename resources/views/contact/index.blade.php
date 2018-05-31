@include('layouts.head')
<body>
@include('layouts.nav')
@include('layouts.banner')
<div class="container">
  <div class="col-sm-6" style="background-color:blue; height:600px;">
    {!! Form::open(['route' -> 'contact.store'] !!)}
      <div class="form-group">
        {!! Form::label('name', 'Your Name') !!}
        {!! Form::text('name' , null. ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('email', 'E-mail Address') !!}
        {!! Form::text('name' , null. ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::textarea('msg' , null. ['class' => 'form-control']) !!}
      </div>
      {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
      {!! Form::close() !!}
    </div>
    <div class="col-sm-6">
      blah blah blah
    </div>
</div>
@include('layouts.footer')
