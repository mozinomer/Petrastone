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
})

$('.sliderInnergallery').slick({
	slidesToShow: 3,
	slidesToScroll: 2,
	arrows: true,
	dots: false,
	autoPlay: false,
	infinite: false,
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