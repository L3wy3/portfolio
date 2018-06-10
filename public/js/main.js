// $(window).scroll(function(){
//   console.log("mooo");
//     var top_of_element = $("#para-box-6").offset().top;
//     var bottom_of_element = $("#para-box-6").offset().top + $("#para-box-6").outerHeight();
//     var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
//     var top_of_screen = $(window).scrollTop();
//
//     if((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
//        $('#para-box-1').css(" -webkit-filter", "blur(1px)");
//        $('#para-box-1').css("filter", "blur(1px)");
//        $('#para-box-2').css(" -webkit-filter", "blur(1px)");
//        $('#para-box-2').css("filter", "blur(1px)");
//
//     }
//     else {
//         // The element is not visible, do something else
//     } style="height:100vh; z-index: 1; position: relative;"
// });
// window.addEventListener("scroll", function(event){
//   var top = this.pageYOffset;
//   var layers = document.getElementsByClassName("parallax");
//   var layer, speed, yPos;
//   for (var i = 0; i < layers.length; i++) {
//     layer = layers[i];
//     speed = layer.getAttribute('data-speed');
//     var yPos = -(top * speed / 1000);
//     layer.setAttribute('style', 'transform: translate3d(0px, ' + yPos + 'px, 0px)');
//
//   }
// });
//
// Holder.addTheme('thumb', {
//   bg: '#55595c',
//   fg: '#eceeef',
//   text: 'Thumbnail'
// });
// document.querySelectorAll('a[href^="#top"]').forEach(anchor => {
//   anchor.addEventListener('click', function (e) {
//       e.preventDefault();
//
//       document.querySelector(this.getAttribute('href')).scrollIntoView({
//           behavior: 'smooth'
//       });
//   });
// });

function castParallax() {

	var opThresh = 350;
	var opFactor = 750;

/*
	$(window).scroll(function(){
		var windowScroll = $(window).scrollTop();

		$('.keyart_layer.parallax').each(function(){
			var $layer = $(this);
			var yPos = -(windowScroll * $layer.data('speed') / 100);
			$layer.css({
				"transform" : "translate3d(0px, " + yPos + "px, 0px)"
			});

		});


		var backgroundOpacity = (windowScroll > opThresh ? (windowScroll - opThresh) / opFactor : 0);
		$('#keyart-scrim').css('opacity', backgroundOpacity);
	});

*/
	window.addEventListener("scroll", function(event){

		var top = this.pageYOffset;

		var layers = document.getElementsByClassName("parallax");
		var layer, speed, yPos;
		for (var i = 0; i < layers.length; i++) {
			layer = layers[i];
			speed = layer.getAttribute('data-speed');
			var yPos = -(top * speed / 100);
			layer.setAttribute('style', 'transform: translate3d(0px, ' + yPos + 'px, 0px)');

		}
	});


}

function dispelParallax() {
	$("#nonparallax").css('display','block');
	$("#parallax").css('display','none');
}

function castSmoothScroll() {
	$.srSmoothscroll({
		step: 80,
		speed: 300,
		ease: 'linear'
	});
}



function startSite() {

	var platform = navigator.platform.toLowerCase();
	var userAgent = navigator.userAgent.toLowerCase();

	if ( platform.indexOf('ipad') != -1  ||  platform.indexOf('iphone') != -1 )
	{
		dispelParallax();
	}

	else if (platform.indexOf('win32') != -1 || platform.indexOf('linux') != -1)
	{
		castParallax();
		if ($.browser.webkit)
		{
			//castSmoothScroll();
		}
	}

	else
	{
		castParallax();
	}

}

document.body.onload = startSite();
