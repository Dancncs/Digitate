jQuery(document).ready(function($) {
	$('.search-navi').click(function(e) {
		e.preventDefault();
		$('#search-input').toggleClass('open-search');
	});
});