var lastScrollTop = 0;
$(window).scroll(function(event){
    var st = $(this).scrollTop();
    if(st > lastScrollTop){
    $(".nav-hider").addClass("hide");
      console.log("hide");
    }
    else{
      $(".nav-hider").removeClass("hide");
      console.log("show");
    }
    lastScrollTop = st;
});
$( ".carousel-control-prev" ).click(function() {
  $(".nav-hider").addClass("hide");
});
$( ".carousel-control-next" ).click(function() {
  $(".nav-hider").addClass("hide");
});
