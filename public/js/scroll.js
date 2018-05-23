var lastScrollTop = 0;
$(window).scroll(function(event){
    var st = $(this).scrollTop();
    if(st > lastScrollTop){
    $(".nav-hider").addClass("hide");
    }
    else{
      $(".nav-hider").removeClass("hide");
    }
    lastScrollTop = st;
});
