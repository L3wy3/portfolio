@include('layouts.head')
<body>
@include('layouts.nav')
@include('layouts.banner')
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 padding-15">
      <h2>Sport</h2>
      <p>Over the years I've tried my hand at a few sports with varying degrees of success, from abysmal all the way up to bad</p>
    </div>
    <div class="col-xs-12 col-md-6">
        <div id="sport" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#sport" data-slide-to="0" class="active"></li>
              <li data-target="#sport" data-slide-to="1"></li>
              <li data-target="#sport" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/redwoods.jpg" alt="Redwood trees,Oregon">
                <div class="carousel-caption">
                   <h3>Redwoods, Oregon</h3>
                   <p>We found some really big trees</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/redwoods.jpg" alt="Redwood trees,Oregon">
                <div class="carousel-caption">
                   <h3>Redwoods, Oregon</h3>
                   <p>We found some really big trees</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/redwoods.jpg" alt="Redwood trees,Oregon">
                <div class="carousel-caption">
                   <h3>Redwoods, Oregon</h3>
                   <p>We found some really big trees</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#sport" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#sport" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <br>
    <div class="col-xs-12 col-md-6 order-md-4 padding-15">
      <h2>Making</h2>
      <p>I've always had a passion for building things and that </p>
    </div>
    <div class="col-xs-12 col-md-6 order-md-3">
      <div id="making" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#making" data-slide-to="0" class="active"></li>
            <li data-target="#making" data-slide-to="1"></li>
            <li data-target="#making" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/redwoods.jpg" alt="Redwood trees,Oregon">
              <div class="carousel-caption">
                 <h3>Redwoods, Oregon</h3>
                 <p>We found some really big trees</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/redwoods.jpg" alt="Redwood trees,Oregon">
              <div class="carousel-caption">
                 <h3>Redwoods, Oregon</h3>
                 <p>We found some really big trees</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/redwoods.jpg" alt="Redwood trees,Oregon">
              <div class="carousel-caption">
                 <h3>Redwoods, Oregon</h3>
                 <p>We found some really big trees</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#making" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#making" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 order-md-5 padding-15">
      <h2>Travelling</h2>
      <p>Okey that sounds terribly pretencious but my friends have invited me to tag along on some amazing trips over the last couple of years, I took loads of photos and I needed a third block to round this page out</p>
    </div>
    <div class="col-xs-12 col-md-6 order-md-6">
      <div id="travel" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#travel" data-slide-to="0" class="active"></li>
            <li data-target="#travel" data-slide-to="1"></li>
            <li data-target="#travel" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/japanese-garden-portland.jpg" alt="Japanese Garden, Portland,Oregon">
              <div class="carousel-caption">
                 <h3>Portland, Oregon</h3>
                 <p>Japanese Garden</p>
               </div>
            </div>
            <div class="carousel-item">
              <img src="img/Oregon-coast.jpg" alt="Pacific Coast,Oregon">
              <div class="carousel-caption">
                 <h3>Pacific, Oregon</h3>
                 <p>Unspecific part of the Pacific Coast</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/redwoods.jpg" alt="Redwood trees,Oregon">
              <div class="carousel-caption">
                 <h3>Redwoods, Oregon</h3>
                 <p>We found some really big trees</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#travel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#travel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
      </div>
    </div>
  </div>
</div>
<style media="screen">
  .carousel-caption{background-color:rgba(0,0,0,0.5); border-radius:5px;}
  .col-md-6{padding:0;}
  .carousel-inner{border-radius:5px;}
</style>
@include('layouts.footer')
