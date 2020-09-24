new WOW().init();

$(".js-modal-btn").modalVideo();

// $('.homeslider1').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: false,
//   dots: true
// });

$('.back-to-top a').click(function() {
	$("html, body").animate({ scrollTop: 0 }, "slow");
	return false;
});

$(window).scroll(function() {
  if ($("header").offset().top > 50) {
    $(".back-to-top").addClass("active");
      } else {
        $(".back-to-top").removeClass("active");
      }
});

// Splitting Text
Splitting();