@include('layouts.head')
<body>
@include('layouts.nav')
@include('layouts.banner')
<div id='project-div' class="project-div">
  <div class='container'>
    <div class="row">
      @foreach($projects as $project)
      <div class="col-sm-4">
        @include('work.project')
      </div>
      @endforeach
    </div>
    </div>
</div>

@include('layouts.footer')
