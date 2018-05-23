<div class="project-hide transparent">
		@if($project->link)
		<a href='{{ $project->link }}'>
		@endif
			<div>
				<div>
					<div>
						<div class="" style='height:50%;background-image:url(/img/{{ $project->img }}); height:500px;';>
							<div style="background-color:rgba(0,0,0,0.75)">
								<p class="card-text-title" style="color:white; font-weight:500; padding:20px;	font-size:1.2em;">{{$project->title}}</p>
								<p class="card-date">@php echo date('F, Y ',strtotime($project->year)); @endphp</p><br>
								<span class="name">{{ $project->company }}</span>
							</div>
						</div>
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
						<p class="desc-text">{{ $project->descr}}</p>
					</div>
				</div>
			</div>
		@if($project->link)
		</a>
		@endif
</div>
