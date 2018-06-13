@include('layouts.head')
<body>
@include('layouts.nav')
@include('layouts.banner')
<div id='project-div' class="project-div">
  <div class='container'>
    <h2 style="text-align:center; margin:50px 0;">Here is a selection of projects I've either done solely or been the main developer of over the last few years, you can sort them by various tags</h2>
    <div class="row" style="display:flex; margin:50px 0;">
      <div class="col-sm-4">
        <p>Agencies</p>
        <a href="?agency=WeAreBigMedia" class="work-tag">We Are Big Media</a>
        <a href="?agency=tfa" class="work-tag">TFA</a>
      </div>
      <div class="col-sm-4">
        <p>Year</p>
        <a href="?year=2015" class="work-tag">2015</a>
        <a href="?year=2017" class="work-tag">2017</a>
        <a href="?year=2018" class="work-tag">2018</a>
      </div>
      <div class="col-sm-4">
        <p>Misc</p>
        <a href="?tag=framework" class="work-tag">Back-end</a>
        <a href="?tag=front-end" class="work-tag">Front-end</a>
      </div>
    </div>
    <div class="row">
      <?php  if(isset($agency)){ ?>
      @foreach($projects as $project)
      <?php if($agency == $project->company ){ ?>
      <div class="col-md-6 col-lg-4 work-div">
        @include('work.project')
      </div>
    <?php } ?>
      @endforeach
    <?php }
    if(isset($tag)){ ?>
    @foreach($projects as $project)
    <?php if($tag == 'framework' && $project->framework == 1){ ?>
    <div class="col-md-6 col-lg-4 work-div">
      @include('work.project')
    </div>
  <?php } ?>
  <?php if($tag == 'front-end' && $project->html+$project->css+$project->javasrcipt > 0){ ?>
  <div class="col-md-6 col-lg-4 work-div">
    @include('work.project')
  </div>
<?php } ?>
    @endforeach
  <?php }
   if(isset($year)){ ?>
  @foreach($projects as $project)
  <?php if($year == $project->year ){ ?>
  <div class="col-md-6 col-lg-4 work-div">
    @include('work.project')
  </div>
<?php } ?>
  @endforeach
<?php }


    else if(!isset($agency) && !isset($tag) && !isset($year)) {
      ?>
      @foreach($projects as $project)
        <div class="col-md-6 col-lg-4 work-div">
          @include('work.project')
        </div>
      @endforeach
      <?php  }?>
    </div>
    </div>
</div>

@include('layouts.footer')
