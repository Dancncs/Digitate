jQuery(document).ready(function($) {
  if($('.home-slide-container').length > 1) {
		$('.home-slide').owlCarousel({
			singleItem: true,
			navigation: false,
			autoPlay: 12000,
			pagination: true,
			addClassActive: true,
		});
  }

  $('.popup-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
});