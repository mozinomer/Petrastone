$('.sliderS').slick({
	slidesToShow: 1,
	slideToScroll: 1,
	arrows: true,
	dots: false,
	autoPlay: false,
	infinite: false,
})
$('.productcontainerslider').slick({
	slidesToShow: 4,
	slideToScroll: 1,
	arrows: false,
	dots: false,
	autoPlay: false,
	infinite: false,
	responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,	
        dots: true
      }
    },
  ]
})

$('.sliderInnergallery').slick({
	slidesToShow: 3,
	slidesToScroll: 2,
	arrows: true,
	dots: false,
	autoPlay: false,
	infinite: false,
	responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,	
      }
    },
  ]
})
$('.slidertestominalContent').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	dots: false,
	asNavFor: '.authortestimonials'
});
$('.authortestimonials').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	asNavFor: '.slidertestominalContent',
	dots: false,
	arrows: true,
	centerMode: false,
});

if($(window).width() < 767) {
	$('.innermenu h6').click(function(e) {
		console.log('asd')
		
	});
	$('.cardsSections .row').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false
	});
	$('.ctas .row').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false
	});
	
}