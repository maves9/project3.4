$( document ).ready(function() {

	$('.browse__explorer').children('h3').click( function() {
		$(this).siblings('ul').slideToggle(200);
	});

});


function showLess() {
	//gem explorer
	$('.browse__explorer h3').siblings('ul').slideUp(200);
};
function showMore() {
	//gem explorer
	$('.browse__explorer h3').siblings('ul').slideDown(200);
};

$(window).resize(function() {
	if ($(window).width() < 1024) {
	//call function
	showLess();
}
	else {
		showMore();
	}
});