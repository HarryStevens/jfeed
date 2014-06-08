/**
 * @author Harry Stevens
 */

//Smooth transitions down page upon nav link click
function goToByScroll(id) {
	$('html,body').animate({
		scrollTop : $(id).offset().top
	}, 'slow');
}


$(document).ready(function() {
	$('.navbar a').click(function() {
		goToByScroll($(this).attr('href'));
		return false;
	});
}); 