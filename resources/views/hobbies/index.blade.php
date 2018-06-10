@include('layouts.head')
<body>
@include('layouts.nav')
@include('layouts.banner')
<div class="container">
  <div class="row hobbies-page">
    <div class="col-xs-12 col-md-6 padding-20-10">
      <h2>Sport</h2>
      <p class="text-black padding-20">
        Over the years I've tried my hand at a few sports with varying degrees of success, from abysmal all the way up to average.<br>
        I spent 5 years living in Aberyswyth and spent a lot of that time playing football/socialising with my team "The Lions".<br>
        very original I know, we somehow still manage to get a dozen or so of us together for a game or tournament or two each year.<br><br>
        I also got to compete in the annual Rugby 7's tournament held in Aberystwyth, The frustrating thing is that I really enjoyed playing Rugby and now wish I'd taken it up from a younger age, and I'm from Northampton so I have no excuses for not doing so.</p>
    </div>
    <div class="col-xs-12 col-md-6 padding-20-10">
        <div id="sport" class="carousel slide carousel-fade" data-ride="carousel" data-interval="15000">
            <ul class="carousel-indicators">
              <li data-target="#sport" data-slide-to="0" class="active"></li>
              <li data-target="#sport" data-slide-to="1"></li>
              <li data-target="#sport" data-slide-to="2"></li>
              <li data-target="#sport" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/7s2015.jpg" alt="">
                <div class="carousel-caption">
                   <h3>Rugby 7s, Aberystwyth</h3>
                   <p>There's an annual 7's tournament held in Aberystwyth, we hope to win a game one year</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/lions2015.jpg" alt="">
                <div class="carousel-caption">
                   <h3>Old Boys, Liverpool</h3>
                   <p>My Uni football team has a habit of organsing Old Boys games in random locations</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/7s2016.jpg" alt="">
                <div class="carousel-caption">
                   <h3>7's again</h3>
                   <p>Almost caught that</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/lions2014.jpg" alt="">
                <div class="carousel-caption">
                   <h3>Digs League, Aberystwyth</h3>
                   <p>I think this was the cup semi final.. we lost</p>
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
    <div class="col-xs-12 col-md-6 order-md-4  padding-20-10">
      <h2>Making</h2>
      <p class="text-black padding-20">
        I've always had a passion for building things and that has led me to spending far too much time and money on this pursuit, I'm quite proud of my first real attempt at a carpentery project,<br>
        the workbench was built to carry some serious tools that need minimal vibrations and I was surprised how sturdy it is.<br><br>
        Which is fortuanate as a Milling machine and a Lathe are not the lind of toys... serious machines that you want wobbling around<br>
        With these tools I made a little robot that I at one point had in my attic, they could be controlled over the internet along with a webcam and the lights to the attic,<br>
        This was back before I had a good understanding of Ajax so when I get round to setting it all back up again it should be a lot more enjoyable, I'll also get my 'hacked' K-9 and Sir Killalot remote control toys involved<br>
        That might be a while however as my main project at the moment is making a physical manifestation of an Alexa like IoT assistant, there are quite a few open source versions out there and I like the idea of having a Jeeves like valet around the house.
      </p>
    </div>
    <div class="col-xs-12 col-md-6 order-md-3 padding-20-10">
      <div id="making" class="carousel slide carousel-fade" data-ride="carousel"  data-interval="15000">
          <ul class="carousel-indicators">
            <li data-target="#making" data-slide-to="0" class="active"></li>
            <li data-target="#making" data-slide-to="1"></li>
            <li data-target="#making" data-slide-to="2"></li>
            <li data-target="#making" data-slide-to="3"></li>
            <li data-target="#making" data-slide-to="4"></li>
            <li data-target="#making" data-slide-to="5"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/workbench.jpg" alt="Workbench">
              <div class="carousel-caption">
                 <h3>Workbench</h3>
                 <p>I needed a sturdy workbench, so whacked this together over a few weekends.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/lathe.jpg" alt="Lathe">
              <div class="carousel-caption">
                 <h3>Lathe</h3>
                 <p>Easily my most dangerous machine, the trick is maintaining total fear of it</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/mill.jpg" alt="Milling machine">
              <div class="carousel-caption">
                 <h3>Mill</h3>
                 <p>I've had to do a lot of tinkering to make this useable, I plan on making it a CNC at some point</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/bots.jpg" alt="Football robots">
              <div class="carousel-caption">
                 <h3>Football bots</h3>
                 <p>These run on Raspberry Pi's, I blame them for getting me into using Linux OS's</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/attic.jpg" alt="K-9 and Sir Killalot">
              <div class="carousel-caption">
                 <h3>House robots</h3>
                 <p>I turned K-9 into a project at Uni for my Space Robotics module, he can map his location</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/andriod.jpg" alt="Andriod">
              <div class="carousel-caption">
                 <h3>Jeffrey</h3>
                 <p>I plan on giving him an arm so he can mix drinks</p>
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
    <div class="col-xs-12 col-md-6 order-md-5 padding-20-10">
      <h2>Travelling</h2>
      <p class="text-black padding-20">
        Okey that sounds terribly pgot retencious but my friends have invited me to tag along on some amazing trips over the last couple of years, I took loads of photos and I needed a third block to round this page out.<br><br>
        I've been down the West Coast of the U.S.A from Seatlle to L.A via a road trip, which as you could probably imagine is the experience of a life time,<br>
        I've visited my Cat in Greece where my mum has decided to retire early,<br><br>
        Been on quick trips to Latvia and the Netherlands<br>
        And last but not least the exotic city of Glasgow, I was talked into joining a team to appear on the BBC show 'Eggheads' and it's filmed in Glasgow, perhaps November wasn't the best time of year to go.
      </p>
    </div>
    <div class="col-xs-12 col-md-6 order-md-6 padding-20-10">
      <div id="travel" class="carousel slide carousel-fade" data-ride="carousel"  data-interval="15000">
          <ul class="carousel-indicators">
            <li data-target="#travel" data-slide-to="0" class="active"></li>
            <li data-target="#travel" data-slide-to="1"></li>
            <li data-target="#travel" data-slide-to="2"></li>
            <li data-target="#travel" data-slide-to="3"></li>
            <li data-target="#travel" data-slide-to="4"></li>
            <li data-target="#travel" data-slide-to="5"></li>
            <li data-target="#travel" data-slide-to="6"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/japanese-garden-portland.jpg" alt="Japanese Garden, Portland,Oregon">
              <div class="carousel-caption">
                 <h3>Portland, Oregon</h3>
                 <p>Japanese Gardens</p>
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
            <div class="carousel-item">
              <img src="img/riga.jpg" alt="Redwood trees,Oregon">
              <div class="carousel-caption">
                 <h3>Riga, Latvia</h3>
                 <p>Apparently this is a landmark</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/glasgow.jpg" alt="Redwood trees,Oregon">
              <div class="carousel-caption">
                 <h3>Glasgow, Scotland</h3>
                 <p>This is where they film Eggheads, it rained for 72 hours</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/amsterdam.jpg" alt="Redwood trees,Oregon">
              <div class="carousel-caption">
                 <h3>Amsterdam, The Netherlands</h3>
                 <p>Very differant to Milton Keynes</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Zakynthos.jpg" alt="Redwood trees,Oregon">
              <div class="carousel-caption">
                 <h3>Zakynthos, Greece</h3>
                 <p>Went to visit my Cat, he isn't always this grumpy he just had a tooth out</p>
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
  .carousel-inner{border-radius:5px;}
</style>
@include('layouts.footer')
