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
window.addEventListener("scroll", function(event){
  var top = this.pageYOffset;
  var layers = document.getElementsByClassName("parallax");
  var layer, speed, yPos;
  for (var i = 0; i < layers.length; i++) {
    layer = layers[i];
    speed = layer.getAttribute('data-speed');
    var yPos = -(top * speed / 1000);
    layer.setAttribute('style', 'transform: translate3d(0px, ' + yPos + 'px, 0px)');

  }
});

Holder.addTheme('thumb', {
  bg: '#55595c',
  fg: '#eceeef',
  text: 'Thumbnail'
});
document.querySelectorAll('a[href^="#top"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});
