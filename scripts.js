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


// gallery
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};
// bind filter button click
$('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});



