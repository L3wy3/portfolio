@include('layouts.head')
<body>
@include('layouts.nav')
@include('layouts.banner')
<div id='project-div' class="project-div">
  <div class='container'>
    <h2 style="text-align:center; margin:50px;">Here is a selection of projects I've either done soley or been the main developer of over the last few years, you can sort them by various tags</h2>
    <div class="row">
      @foreach($projects as $project)
      <div class="col-md-6 col-lg-4">
        @include('work.project')
      </div>
      @endforeach
    </div>
    </div>
</div>

@include('layouts.footer')
