<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.head')
    <body>
@include('layouts.nav')
<h1>Laurence's<br>Portfolio</h1>
<div id="para-box-1" class='parallax' data-speed='1'>
	<div class='container' style='position:fixed'>
		<div id='container' style='display:none;'></div>
		<script src="./build/three.js"></script>
		<script src="js/renderers/Projector.js"></script>
		<script src="js/renderers/CanvasRenderer.js"></script>
		<script src="js/libs/stats.min.js"></script>
		<script src="obj/Bird.js"></script>
		<script src="js/birds.js"></script>
  </div>
</div>
<div id="para-box-2" class="parallax" data-speed="5"></div>
<!-- <div id="para-box-3" class="parallax" data-speed="20"></div> -->
<div style='height:200vh'></div>
<div id="para-box-4" class="parralax">
<div style='background-color:blue'>
	<div class='container' style='background-color:green;height:75vw;'>
		ergwr
	</div>
</div>
</div>
<div id="para-box-5" class="parralax">
<div style='background-color:blue'>
	<div class='container' style='background-color:red;height:75vw;'>
		ergwryxr
	</div>
</div>
</div>
<div id="para-box-6" class="parralax">
	<img src="./img/robin.png" style="postition:absolute; top:0;s">
</div>
<div  id="para-box-7" style='background-color:#efefef'>
	<div class='text-block-div'>
            <p class="text-block" >'Welcome to my site, I've kept it simple for now but plan to expand on it, I got my current job based partly on a physical computing/IOT set-up i had in my attic, so hopefully I'll set that back up soon, please check out some previous sites i've built below or play with the sparrows above, if you didn't notice at first they respond to the cursor.'</p>
	</div>
</div>
@include('layouts.footer')
    </body>
</html>
