jQuery(document).ready(function( $ ) {
	
	// $ Works! You can test it with next line if you like
	// console.log($);
	$(".search-btn").on('click', function(){
event.preventDefault();
		$(".search-field").slideToggle('slow');


	});
	
});

