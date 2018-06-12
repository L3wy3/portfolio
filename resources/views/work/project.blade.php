<div class="project-hide transparent">
@if($project->link)
<a target='_blank' href='{{ $project->link }}'>
@endif
<style media="screen">
.lang-block img{width:30px;}
</style>
<p class="card-text-title">{{$project->title}}</p>
<p class="card-text-title" style="margin:5px 0;">{{ $project->company }}</p>
<div class="">
	<img src='{{ $project->img }}' class="" style="width:100%; border:1px solid black; border-radius:10px;">
</div>
<div >
<div  class="">
<p class="card-date">{{$project->year }}</p><br>
<p class="desc-text">{{ $project->desc}}</p>
</div>
</div>
</div>
@if($project->link)
</a>
@endif
