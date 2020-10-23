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
$('.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	asNavFor: '.slider-for',
	dots: true,
	centerMode: true,
	focusOnSelect: true
});