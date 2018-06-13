<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
@include('layouts.nav')
<div id="top" class="banner-outer homepage">
  <h1 class="d-flex align-items-center justify-content-center" style="height:100vh; z-index: 1; position: relative;">Laurence's<br>Portfolio</h1>
  <!-- <div style="background-image: url('/img/parralax/background.jpg');position:absolute; top:0; position:absolute;"> -->
</div>
</div>
<div class='container' style='position:fixed'>
		<div id='container' style='display:none;'></div>
		<script src="./build/three.js"></script>
		<script src="js/renderers/Projector.js"></script>
		<script src="js/renderers/CanvasRenderer.js"></script>
		<script src="js/libs/stats.min.js"></script>
		<script src="obj/Bird.js"></script>
		<script src="js/birds.js"></script>
  </div>

<style>
canvas{position: fixed;top:0;}
html{overflow-y:hidden;}
</style>
    </body>
</html>
