$(document).ready(function() {

  //menu sidr


  $('#nav-toggle').sidr({
    displace: false,
    source: ".main-nav",
    name: 'sidr-main',
  });
  $("#sidr-id-close-btn").click(function() {
    // console.log("ICI");
    $.sidr('close', 'sidr-main');
  });

  $('.sidr-class-has-sub > a').click(function(e) {
    console.log("LA");
    e.preventDefault();
    $(this).next().slideToggle();
  });


  //slider


  $(".owl-carousel").owlCarousel({
    items: 1,
    nav: true,
    dots: false,
  });

});
