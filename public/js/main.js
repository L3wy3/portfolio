$(window).scroll(function(){
  console.log("mooo");
    var top_of_element = $("#para-box-6").offset().top;
    var bottom_of_element = $("#para-box-6").offset().top + $("#para-box-6").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    var top_of_screen = $(window).scrollTop();

    if((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
       $('#para-box-1').css(" -webkit-filter", "blur(1px)");
       $('#para-box-1').css("filter", "blur(1px)");
       $('#para-box-2').css(" -webkit-filter", "blur(1px)");
       $('#para-box-2').css("filter", "blur(1px)");

    }
    else {
        // The element is not visible, do something else
    }
});
