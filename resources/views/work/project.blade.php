<div class="project-hide transparent">
@if($project->link)
	<a href='{{ $project->link }}'>
@endif
<style media="screen">
	.lang-block img{width:30px;}
</style>
<div class="">
  <div style="background-image:url('img/{{ $project->img }}');" class="">
    <div >
    <div  class=""style="background-color:white; margin-top:300px;">
			<span class="name">{{ $project->company }}</span>
	    <p class="card-text-title">{{$project->title}}</p>
              <div class="on-off-div">
	      	<div class="lang-block">
		  <p class="card-text">HTML</p>
	          @if($project->html == 1)
                    <img src="img/green-{!! 'on' !!}.png">
                    <img src="img/red-{!! 'off' !!}.png">
                  @else
                    <img src="img/green-{!! 'off' !!}.png">
                    <img src="img/red-{!! 'on' !!}.png">
                  @endif
		</div>
		<div class="lang-block">
	      	  <p class="card-text">CSS</p>
	          @if($project->css == 1)
                    <img src="img/green-{!! 'on' !!}.png">
                    <img src="img/red-{!! 'off' !!}.png">
                  @else
                    <img src="img/green-{!! 'off' !!}.png">
                    <img src="img/red-{!! 'on' !!}.png">
                  @endif
		</div>
		<div class="lang-block">
	      	  <p class="card-text">Javascript</p>
	          @if($project->javasrcipt == 1)
                    <img src="img/green-{!! 'on' !!}.png">
                    <img src="img/red-{!! 'off' !!}.png">
                  @else
                    <img src="img/green-{!! 'off' !!}.png">
                    <img src="img/red-{!! 'on' !!}.png">
                  @endif
		</div>
		<div class="lang-block">
	      	  <p class="card-text">PHP</p>
	          @if($project->php == 1)
                    <img src="img/green-{!! 'on' !!}.png">
                    <img src="img/red-{!! 'off' !!}.png">
                  @else
                    <img src="img/green-{!! 'off' !!}.png">
                    <img src="img/red-{!! 'on' !!}.png">
                 @endif
		</div>
              </div>
              <p class="card-date">@php echo date('F, Y ',strtotime($project->year)); @endphp</p><br>
	      <p class="desc-text">{{ $project->descr}}</p>
	            </div>
            </div>
					</div>
            </div>
</a>
            </div>
